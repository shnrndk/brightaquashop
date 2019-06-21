<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paymentgateway extends CI_Controller {

	public function index()
	{
        $billamout=$this->cart->format_number($this->cart->total());
        $number = (float) filter_var($billamout, FILTER_SANITIZE_NUMBER_INT);
        $sum = $number/100;

		$total['sum']=$this->cart->format_number($this->cart->total());
	    $this->load->view('paymentgateway',$total);
		$this->load->model('Paymentmodel');
        
        
        
        if(!isset($_POST['Address1'])){
			echo "";
		}else{    
            $data = array(
                    'Address1' => $this->input->post('Address1'),
                    'Address2' => $this->input->post('Address2'),
                    'Totalpayment' =>$sum,
                    'Postalid' => $this->input->post('Postalid'),
                );
	
			$this->Paymentmodel->insertdata($data);
			//redirect(site_url('/cart/payment'),'refresh');
            };
		
	
	}

	
	public function view()
	{
		$this->load->helper('url');
		$this->load->view('style');
		$this->load->model('Paymentmodel');
		$data['paymentdetails'] = $this->Paymentmodel->viewdata();
		$this->load->view('viewdata',$data);
		
	}
	
	public function delete($id)
	{	
		$this->load->helper('url');
		$this->load->model('Paymentmodel');
		$isrun = $this->Paymentmodel->deleterecord($id);
		if($isrun){
			echo "$id is deleted successfully";
			redirect(site_url('Payementgateway/view/'));
		}
	}

	public function passtoupdateform($id)
	{
		$this->load->helper('url');
		$this->load->model('Paymentmodel');
		$data['paymentdetails'] = $this->Paymentmodel->updateformview($id);
		$this->load->view('style');
		$this->load->view('updateform',$data);

		if(!isset($_POST['id'])){
			
		}else{
		$details = array(
			'ID' => $this->input->post('id'),
			'First_Name' => $this->input->post('fname'),
			'Last_Name' => $this->input->post('lname'),
			'expmonth' => $this->input->post('expmonth'),
			'cvv' => $this->input->post('cvv'),
			'Payment_Method' =>$this->input->post('paymentmethod'), 
			'cardno' =>$this->input->post('cardno'));
			
			print_r($details);
			
			
			$result = $this->Paymentmodel->update($details);
			if($result){
				echo "Updated Successfully";
				redirect(site_url('Payementgateway/view/'));
			}else{
				echo "Error";
				redirect(site_url('Payementgateway/view/'));
			}
			
		}
			

	}
	}

