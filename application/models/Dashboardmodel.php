<?php
class Dashboardmodel extends CI_Model {

        public function getgraphdata()
        {
                $this->load->database();
                return  $this->db->query('SELECT id, quantity FROM producttable')->result_array();
                //print_r($query);
                //return $query;
                
        }

        public function getcustomerdetails()
        {
                $this->load->database();
                return  $this->db->query('SELECT * FROM register WHERE customer_id!=1')->result_array();
                
        }

        public function getcarts()
        {
                $this->load->database();
                return $query = $this->db->get('usertemp')->result_array(); 
        }

}