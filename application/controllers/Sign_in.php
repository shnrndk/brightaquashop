<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_in extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Signin');
		$this->load->library('form_validation');
		//$this->load->library('encrypt');

	}

	public function index()
	{
		$this->load->helper('form');
		//$this->load->view('common');
		$this->load->view('commonwithoutparallax');
		$this->load->view('signin');
		//$this->load->view('commonfooter');
	}

	public function validation(){
		$this->form_validation->set_rules('username', 'Userame', 'required',
							array(
								'required'      => 'You have not provided %s.'
							));
		
		$this->form_validation->set_rules('password', 'Password', 'required',
							array(
								'required'      => 'You have not provided %s.'
							));
		
		
		if($this->form_validation->run())
		{

			$id =$this->input->post('username');//id == email or username
			$password =$this->input->post('password');
			$result=$this->Signin->testLogin($id,$password);
			if($result == "")
			{
				redirect('Home');
			}
			else
			{
				
				$this->session->set_flashdata('error',$result);
				redirect('Sign_in');
			}

			//if($customer_id > 0){
				//$subject = " Please verify email for login";
				//$message = 
			
		}
		else{
			$this->index();
		}

	}
	
}
