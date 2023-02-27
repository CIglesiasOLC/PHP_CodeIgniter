<?php
class Motorcycles_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_motorcycles(){
        $result = $this->db->get("motorcycles");
        return $result->result_array();
    }

    public function add($data){
        return $this->db->insert("motorcycles", $data);
    }
}