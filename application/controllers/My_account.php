<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_account extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Myaccount');										
		$this->load->library('form_validation');
	}

	public function index()
	{
		
        $this->load->view('common');

        $user = $this->Myaccount->getSingleUser();

        $data = array();
        $data['username'] = $user->username;
        $data['email'] = $user->email;
        $data['password'] = $user->password;

		$this->load->view('myaccount', $data);
		$this->load->view('commonfooter');

	}

	public function validation()
	{
		
		$this->form_validation->set_rules('username', 'Userame', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');	
		
		if($this->form_validation->run())
		{
            
			$username =$this->input->post('username');
			$email =$this->input->post('email');
			$password = $this->input->post('password');	
	
			$this->Myaccount->update($username, $email, $password);
			
		
			redirect('Home');
			
			
        }
        else{
            $this -> index();
        }
		//else{
    }		
        //}
        public function delete()
        {
            $this->Myaccount->delete_entry();
            redirect('Home');
        }
    
    
    

    
	//public function get_data(){
		
		

		//if(isset($_POST['username'])){
		//	$username = $_POST['username'];
		//	$email = $_POST['email'];
		//	$password = $_POST['password'];
		//	$tele_number = $_POST['tele_number'];
		//	$address = $_POST['address'];
			//if (
			//	$username != null && $email != null && $password != null 
			//	&& $username != " "  && $email != " " && $password != " " 
			//	&& $tele_number != " " && $address != " ") {

					//$this->Signup->add($username, $email, $password, $tele_number, $address);
					//redirect('Home');
			//} else {
			//	echo " Thia is a required field. ";
				
			//}
		//}
	//}
	
}
 
        
       