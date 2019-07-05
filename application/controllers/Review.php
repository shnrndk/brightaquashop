<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

	public function index($id)
	{   
		
	}

	public function viewreviews($id)
	{
		$this->load->helper('url');
		$this->load->model('Reviewmodel');
		$data['reviewdetails'] = $this->Reviewmodel->viewreviews($id);
		$this->load->view('commonwithoutparallax');
		$this->load->view('productreview',$data);
	}

}
