<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Model {
	public function testLogin($id,$password)
	{
        $this->load->database('default'); 
        $this->db->where('email', $id);
        $this->db->or_where('username', $id);
        $this->db->where('password', $password);
        $query = $this->db->get('register');
        if($query->num_rows()>0){
            
            $this->session->set_userdata('customer_id',$query->result()[0]->customer_id);  
             //Initializing the customer's cart from his previous cart orders
                  

             $custid=$_SESSION['customer_id'];
             $query = $this->db->get_where('usertemp', array('customer_id' => $custid));
             $queryarray=$query->result_array();

             foreach($queryarray as $key => $value)
             {
                 $data = array(
                     'id'      => $value['id'],
                     'qty'     => $value['quantity'],
                     'price'   => $value['product_price'],
                     'name'    => $value['product_name'],
                     'options' => array('product_desc' => $value['product_desc'], 'product_img' => $value['product_img'], 'brand' => $value['brand'])
                 );
                 $this->cart->insert($data);
             }
        }
        else{
           
            return "Wrong username or password.";
        }

    }

/*
        $query = $this->db->get('register');

        if($query->num_rows() > 0)
        {
            foreach($query->result() as $row)
            {
                if($row->password == $password )
                {
                    $this->session->set_userdata('customer_id',$row->customer_id);
                    //Initializing the customer's cart from his previous cart orders
                  

                    $custid=$_SESSION['customer_id'];
                    $query = $this->db->get_where('usertemp', array('customer_id' => $custid));
                    $queryarray=$query->result_array();

                    foreach($queryarray as $key => $value)
                    {
                        $data = array(
                            'id'      => $value['id'],
                            'qty'     => $value['quantity'],
                            'price'   => $value['product_price'],
                            'name'    => $value['product_name'],
                            'options' => array('product_desc' => $value['product_desc'], 'product_img' => $value['product_img'], 'brand' => $value['brand'])
                        );
                        $this->cart->insert($data);
                    }












                }
                else
                {
                    return "Wrong Password";
                }
            }
        }
        else
        {
            return "Wrong Email Address or username";
        }
        
        
	}
	*/
}