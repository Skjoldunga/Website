<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class News extends CI_Controller {

        /** Page http://localhost:8000/CodeIgniter-3.0.6/index.php/news
         * Index Page for this controller.
         *
         * Maps to the following URL
         * 		http://example.com/index.php/welcome
         *	- or -
         * 		http://example.com/index.php/welcome/index
         *	- or -
         * Since this controller is set as the default controller in
         * config/routes.php, it's displayed at http://example.com/
         *
         * So any other public methods not prefixed with an underscore will
         * map to /index.php/welcome/<method_name>
         * @see https://codeigniter.com/user_guide/general/urls.html
         * 
         * @author Mickael Ruau
         * @date 25/05/2016
         * @version 0.1
         */
	public function index()
	{
            $data = NULL;
            $page = 'v_programmation';
            $this->load->view('templates/v_header', $data);
            $this->load->view($page, $data);
            $this->load->view('templates/v_footer', $data);
	}
        
        /** Page http://localhost:8000/CodeIgniter-3.0.6/index.php/news/test
         * 
         */
	public function test()
	{
            $data = NULL;
            $this->load->view('templates/v_header', $data);
            $this->load->view('v_test');
            $this->load->view('templates/v_footer', $data);
	}        
}