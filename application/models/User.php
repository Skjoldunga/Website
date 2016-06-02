<?php 

Class User extends CI_Model
{
 function login($username, $password)
 {
   $requete = "select * from users WHERE username='".$username."' and password='".MD5($password)."'";
   $result = $this->db->query($requete);
   
   if($result -> num_rows() == 1)
   {
     return $result->result();
   }
   else
   {
     return false;
   }
 }
}
