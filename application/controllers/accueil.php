<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {
    
	public function index()
	{       
                $sess_array=$this->session->userdata('logged_in');
                $data = array();
                if($sess_array['username']!=NULL)
                {
                    $data['log_or_not']='<a href="'.  base_url() .'accueil/logout">Se déconnecter</a></li>';
                }
                else 
                {
                    $data['log_or_not']='Se connecter';
                }
                
                $data['url_base'] = base_url();
		$this->load->view('v_header', $data);
        $this->load->view('v_acceuil_section', $data);
        $this->load->view('v_footer');
                
	}
        public function login()
	{
                $this->load->model('user');
                $username = htmlspecialchars($_POST['login']);
                $password = htmlspecialchars($_POST['pass']);
                $result = $this->user->login($username, $password);
                
                if($result)
                    {
                        $sess_array = array();
                        foreach($result as $row)
                        {
                            $sess_array = array(
                            'id' => $row->IDuser,
                            'username' => $row->login
                        );
                            $this->session->set_userdata('logged_in', $sess_array);
                        }  
                    }
                else
                    {
                    }	
                redirect('', 'refresh');
	}
        
        public function logout()
        {
            $this->session->unset_userdata('logged_in');
            session_destroy();         
            redirect('', 'refresh');
        }
}
