<?php
class MotorcyclesAPI extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model("Motorcycles_model");
        $data['data'] = $this->Motorcycles_model->get_motorcycles();

        echo json_encode($data);
    }
}