<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->database('default');
		$this->load->model('Signup');										
		$this->load->library('form_validation');
	}

	public function index()
	{
		
		$this->load->view('common');
		$this->load->view('signup');
		$this->load->view('commonfooter');

	}

	public function validation()
	{
		
		$this->form_validation->set_rules('username', 'Userame', 'required',
							array(
								'required'      => 'You have not provided %s.'
							));
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[register.email]',
							array(
								'required'      => 'You have not provided %s.',
								'is_unique'     => 'This %s already exists.'
							));
		$this->form_validation->set_rules('password', 'Password', 'required',
							array(
								'required'      => 'You have not provided %s.'
							));
		
		
		if($this->form_validation->run())
		{
			
			$username =$this->input->post('username');
			$email =$this->input->post('email');
			$password = $this->input->post('password');	
	
			$this->Signup->insert($username, $email, $password);
			$this->load->model('Signin');
			$this->Signin->testLogin($email,$password);
			
			redirect('Home');
			
			
		}
		
		else{
			$this -> index();
		}
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
 
        
       