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
            'Model_Number' => $data['Model_Number'],
            'Product_Name' =>$data['Poduct_Name'],
            'Product_Price' => $data['Product_Price'],
            'Poduct_Desc' => $data['Product_Desc'],
            'Product_Img' => $data['Product_Img'],
            'Quantity' => $data['Quantity'], 
            'Status' => $data['Status'],
            'Brand' => $data['Brand']
        );
        $this->db->insert('producttable', $filleddata);
}

}