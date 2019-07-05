<?php
class Reviewmodel extends CI_Model {

        public function viewreviews($id)
        {
                $this->load->database();
                $query = $this->db->get_where('reviewtable', array('id' => $id));
                return $query->result_array();
        }

      
}