<?php
class Motorcycles_moded extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_motorcycles(){
        $result = $this->db->get("motorcycles");
        return $result->result_array();
    }
}