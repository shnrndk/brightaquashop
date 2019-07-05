<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
        $this->load->helper('url');
		$this->load->view('commonwithoutparallax');
		$this->load->view('dashboard');
		//$this->load->view('commonfooter');
	}

    public function addproduct(){
        $this->load->model('productsmodel');
        $this->load->view('addproduct');
        $this->load->helper('url');
	
	
		if(!isset($_POST['id'])){
			echo "";
		}else{
			$data = array(
				'id' => $this->input->post('id'),
				'product_name' => $this->input->post('product_name'),
				'product_price' =>$this->input->post('product_price'),
				'product_desc' => $this->input->post('product_desc'),
				'product_img' =>$this->input->post('product_img'), 
				'quantity' => $this->input->post('quantity'),
				'status' => 1,
				'brand'=> $this->input->post('brand'),
			);
	
			$this->productsmodel->addprodcut($data);
    }
    }

    public function productdatabaseview()
    {
        $this->load->helper('url');
		$this->load->model('productsmodel');
		$data['productdetails'] = $this->productsmodel->viewproducts();
		$this->load->view('productdatabaseview',$data);
    }
	
	public function viewproductgraph()
	{
		$this->load->model('Dashboardmodel');
		$graphstats['graphdata'] = $this->Dashboardmodel->getgraphdata();
		$this->load->view('commonwithoutparallax');
		$this->load->view('productquantitygraph',$graphstats);
		
	}

	public function viewsalesgraph()
	{
		$this->load->model('Dashboardmodel');
		$graphstats['graphdata'] = $this->Dashboardmodel->getgraphdata();
		$this->load->view('commonwithoutparallax');
		$this->load->view('productquantitygraph',$graphstats);
	}

	public function viewordersgraph()
	{
		$this->load->model('Paymentmodel');
		$data['paymentdetails'] = $this->Paymentmodel->viewpayments();
		$this->load->view('commonwithoutparallax');
		$this->load->view('viewsalesgraph',$data);
	}

	public function viewcustomers()
	{
		$this->load->model('Dashboardmodel');
		$data['customerdetails'] = $this->Dashboardmodel->getcustomerdetails();
		$this->load->view('customerdetails',$data);
	}
	
	public function viewcarts()
	{
		$this->load->model('Dashboardmodel');
		$data['cartdetails'] = $this->Dashboardmodel->getcarts();
		$this->load->view('cartdetails',$data);
	}

	public function delete($id)
	{	
		$this->load->helper('url');
		$this->load->model('productsmodel');
		$isrun = $this->productsmodel->deleterecord($id);
		if($isrun){
			echo "$id is deleted successfully";
			redirect(site_url('Dashboard/productdatabaseview/'));
		}
	}

	public function passtoupdateform($id)
	{
		$this->load->helper('url');
		$this->load->model('productsmodel');
		$data['productdetails'] = $this->productsmodel->updateformview($id);
		$this->load->view('updateform',$data);

		if(!isset($_POST['id'])){
			
		}else{
		$details = array(
				'id' => $this->input->post('id'),
				'product_name' => $this->input->post('product_name'),
				'product_price' =>$this->input->post('product_price'),
				'product_desc' => $this->input->post('product_desc'),
				'product_img' =>$this->input->post('product_img'), 
				'quantity' => $this->input->post('quantity'),
				'status' => 1,
				'brand'=> $this->input->post('brand'));
			print_r($details);
			
			$result = $this->productsmodel->update($details);
			if($result){
				echo "Updated Successfully";
				redirect(site_url('Dashboard/productdatabaseview/'));
			}else{
				echo "Error";
				redirect(site_url('Dashboard/productdatabaseview/'));
			}
			
		}
			

	}

	
	
}
