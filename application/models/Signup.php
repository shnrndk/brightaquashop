<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Model {
	public function insert($username, $email, $password)
	{
        $this->load->database('default');
        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
            
        );
        
        $this->db->insert('register', $data);
        
        
	}
	
}
