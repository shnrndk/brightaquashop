<?php
class Paymentmodel extends CI_Model {

    public function insertdata($data)
    {
        $this->load->database();

        //print_r($data);


        $filleddata = array(
            'Address1' => $data['Address1'],
            'Address2' =>$data['Address2'],
            'Totalpayment' => $data['Totalpayment'],
            'Postalid' => $data['Postalid']
        );
        $this->db->insert('paymenttable', $filleddata);
    }

    public function viewpayments()
    {
        $this->load->database();
        $query = $this->db->get('paymenttable');
        return $query->result_array();
    }

    public function vieworders()
    {
        $this->load->database();
        $query = $this->db->get('orders');
        return $query->result_array();
    }

    public function deleterecord($id)
    {   
        $this->load->database();
        return $this->db->delete('paymenttable', array('ID' => $id));  
    }

    public function updateformview($id)
    {
        $this->load->database();
        $query = $this->db->get_where('paymenttable', array('id' => $id));
        return $query->result_array();
    }

    public function update($data)
    {
        $this->load->database();
        return $this->db->replace('paymenttable', $data);
    }


    //Updating the orders table and reducing from the producttable

    public function updateproducttable()
    {
        $id = $_SESSION['customer_id'];
        $query=$this->db->query("SELECT * FROM usertemp WHERE customer_id=$id")->result_array();
        $orderquery = $this->db->query("SELECT MAX(orderid) as orderid FROM paymenttable")->result_array();
        
        foreach($orderquery as $key2 => $value2){
                $orderid=$value2['orderid'];
        }
        
        foreach ($query as $key => $value){
                    $productid = $value['id'];
                    $producttablequery = $this->db->query("SELECT quantity FROM producttable WHERE id='$productid'")->result_array();
                    /*
                    echo "<pre>";
                    print_r($producttablequery);
                    echo "</pre>";
                    */
                    foreach($producttablequery as $key1 => $value1){
                        $newquantity = $value1['quantity']-$value['quantity'];
                    }
                    
                    
                

                    //Updating the product table by reducing the purchased items from the orders.
                    
                    $this->db->set('quantity',$newquantity);
                    $this->db->where('id', $value['id']);
                    $this->db->update('producttable');
                    

                    //Preparing the data to insert the orders table
                    
                    $data = array(
                        'customer_id' => $id,
                        'orderid' => $orderid,
                        'id' => $value['id'],
                        'product_name' => $value['product_name'],
                        'product_price' => $value['product_price'],
                        'quantity' => $value['quantity'],
                        'isdelivered' => 0
                    );

                    //Inserting the data to the orders table

                    $this->db->insert('orders', $data);
           
        }
       
    }
}

