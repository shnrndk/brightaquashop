<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
        $this->load->helper('url');
		$this->load->view('commonwithoutparallax');
		$this->load->view('dashboard');
		$this->load->view('commonfooter');
	}

    public function addproduct(){
        $this->load->model('productsmodel');
        $this->load->view('addproduct');
        $this->load->helper('url');
	
	
		if(!isset($_POST['id'])){
			echo "";
		}else{
			$data = array(
				'Model_Number' => $this->input->post('Model_Number'),
				'Product_Name' => $this->input->post('Product_Name'),
				'Product_Price' =>$this->input->post('Product_Price'),
				'Product_Desc' => $this->input->post('Product_Desc'),
				'Product_Img' =>$this->input->post('Product_Img'), 
				'Quantity' => $this->input->post('Quantity'),
				'Status' => 1,
				'Brand'=> $this->input->post('Brand'),
			);
	
			$this->productsmodel->addproduct($data);
    }
    }

    public function productdatabaseview()
    {
        $this->load->helper('url');
		$this->load->model('productsmodel');
		$data['productdetails'] = $this->productsmodel->viewproducts();
		$this->load->view('productdatabaseview',$data);
    }
	
}
