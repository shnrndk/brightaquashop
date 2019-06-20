<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
    
    public function index()
    {
        $this->load->view('cart');
    }
    public function add()
    {
        $id = $this->uri->segment(3);
        $this->load->model('productsmodel');
		$query=$this->productsmodel->viewdetbyid($id);
        $row = $query->row();

        $data = array(
            'id'      => $id,
            'qty'     => 1,
            'price'   => $row->product_price,
            'name'    => $row->product_name,
            'options' => array('product_desc' => $row->product_desc, 'product_img' => $row->product_img, 'brand' => $row->brand)
        );

        $dataforcart = array(
            'id' => $row->id,
            'product_name' => $row->product_name,
            'product_price' => $row->product_price,
            'product_desc' => $row->product_desc,
            'product_img' => $row->product_img,
            'quantity' => $row->quantity,
            'status' => 1,
            'brand' => $row->brand
        );
        print_r($row->quantity);

        if($row->quantity-1>0){
            $newquantity=$row->quantity-1;
        }else{
            echo "Sorry, This product is not available Right Now!";
        }

        $newquantityforcart = $row->quantity+1;

        //Updating the database
        $this->db->set('quantity',$newquantity);
        $this->db->where('id', $row->id);
        $this->db->update('producttable');
        //Updateing the cart database
        $query = $this->db->get_where('usertemp', array('id' => $id));
        $row1 = $query->row();
        //Checking the required ID is in the cart module .
        if($row1){
            $this->db->set('quantity',$newquantityforcart);
            $this->db->where('id', $row->id);
            $this->db->update('usertemp');
        }else{
            $this->db->insert('usertemp', $dataforcart);
        }


        $this->cart->insert($data);
        redirect(base_url('/products'),'refresh');

    }
/*
    public function update()
    {   
        $items = $this->cart->contents();
        $i=1;
        foreach($items as $item){
        
       
            
        $data = array(
                    'rowid'   => $item['rowid'],
                    'qty'     => $this->input->post("$i.'[qty]'")
        );
            $this->cart->update($data);
          $i++;
          /*echo $item['rowid'];
          echo '-';
          echo $item['qty'];
          echo' <br>';
        }

        redirect('cart','refresh');
    }
    */
    
    public function payment()
    {
        $carttotal['total'] = $this->cart->format_number($this->cart->total());
        
        $this->load->view('paymentgateway',$carttotal);
    }
}
