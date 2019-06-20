<?php
class productsmodel extends CI_Model {

public function viewproducts()
{
        $this->load->database();
        $query = $this->db->get('producttable');
        return $query->result_array();
}

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

}