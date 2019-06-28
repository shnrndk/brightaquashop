<?php
class usercartmodel extends CI_Model {


public function viewdetbyid($id)
{
        $this->load->database();
        $query = $this->db->get_where('producttable', array('id' => $id));
        return $query;
}

public function addprodcut($data)
{
        $this->load->database();
        $filleddata = array(
            'id' => $data['id'],
            'product_name' =>$data['product_name'],
            'product_price' => $data['product_price'],
            'product_desc' => $data['product_desc'],
            'product_img' => $data['product_img'],
            'quantity' => $data['quantity'], 
            'status' => $data['status'],
            'brand' => $data['brand']
        );
        $this->db->insert('producttable', $filleddata);
}

public function insertusertemp($dataforcart)
{
        $this->load->database();
        
        $id= $dataforcart['id'];
        $currentquantity = $this->db->query("SELECT quantity from usertemp WHERE id='$id'");
        print_r($currentquantity);
        /*
        if($currentquantity==0)
        {
                $filleddata = array(
                        'id' => $dataforcart['id'],
                        'product_name' =>$dataforcart['product_name'],
                        'product_price' => $dataforcart['product_price'],
                        'product_desc' => $dataforcart['product_desc'],
                        'product_img' => $dataforcart['product_img'],
                        'quantity' => 1, 
                        'status' => $dataforcart['status'],
                        'brand' => $dataforcart['brand'],
                        'customer_id' => $_SESSION['customer_id']
                    );
                    $this->db->insert('producttable', $filleddata);
        }else{
                $currentquantity=$currentquantity+1;
                $this->db->query("UPDATE usertemp SET quantity=$currentquantity WHERE id=$id");
        }
        $this->db->insert('producttable', $filleddata);
        */
}

}