<?php
    class Myaccount extends CI_Model{

        public function getSingleUser(){

            $this->load->database('default');
            $this->db->select('username ,email,password');
            $this->db->where('customer_id', $_SESSION['customer_id']);
            $this->db->from('register');
            $results=$this->db->get()->result();
            return $results[0];
           // if(count($results)==1){
           //     return $results[0];
            //}
            //throw new Exception('Invalid Email!');
        }

        //public function delete_entry($Email){
          //  $this->load->database('default');
            //$this->db->where('Email', $Email);
           // $this->db->delete('users');
       // }

        public function update($username, $email, $password){
            $this->load->database('default');
            
            $data = array(
                'username' => $username,
                'password' => $password
               
            );
            print_r($username);
			print_r($password);
			print_r($email);
            
            $this->db->where('email', $email);
            $this->db->update('register', $data);
        }

        public function delete_entry(){
            $this->load->database('default');
            $this->db->where('costomer_id', $_SESSION['customer_id'] );
            $this->db->delete('register');
        }

    }
?>


