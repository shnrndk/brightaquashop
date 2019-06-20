<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('common');
		$this->load->view('index');
		$this->load->view('commonfooter');
	}
	public function contact()
	{
		$this->load->helper('url');
		$this->load->view('common');
		$this->load->view('contactUs');
		$this->load->view('commonfooter');
	}
	public function products()
	{
		$this->load->helper('url');
		$this->load->view('commonwithoutparallax');
		$this->load->model('productsmodel');
		$data['productdetails']=$this->productsmodel->viewproducts();
		$this->load->view('products',$data);
		
		/*
		$details['productdetails'] = array(
			'id' => $data[id],
			'product_name' => $data['product_name'],
			'product_price' => $data['product_price'],
			'product_desc' => $data['product_desc'],
			'product_img' => $data['product_img'],
			'quantity' => $data['quantity'],
			'status' => $data['status']
		);
		$this->load->view('products',$details);
		$this->load->view('commonfooter');*/
	}
	
}
