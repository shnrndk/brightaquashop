<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		
		//$this->load->library('encrypt')
	}

	public function index()
	{   
		$this->session->unset_userdata('customer_id');
		$this->cart->destroy();
        redirect("Home");
	}

}
