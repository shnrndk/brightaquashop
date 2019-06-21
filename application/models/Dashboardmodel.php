<?php
class Dashboardmodel extends CI_Model {

public function getgraphdata()
{
        $this->load->database();
        return  $this->db->query('SELECT id, quantity FROM producttable')->result_array();
        //print_r($query);
        //return $query;
        
    
       
}

}