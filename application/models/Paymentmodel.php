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

    public function viewdata()
    {
        $this->load->database();
        $query = $this->db->get('paymenttable');
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
}

?>