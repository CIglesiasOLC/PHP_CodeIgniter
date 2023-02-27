<?php
class Motorcycles extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data["title"] = "Motorcycle Listings";

        $this->load->model("Motorcycles_model");
        $data["motorcycles"] = $this->Motorcycles_model->get_motorcycles();

        $this->load->view("pages/motorcycles", $data);
    }

    public function add(){
        $data["title"] = "Add Motorcycle Record";

        $this->form_validation->set_rules("brand", "Brand", "required|callback_brand_check");
        $this->form_validation->set_rules("model", "Model", "required");
        $this->form_validation->set_rules("displacement", "Displacement", "required");

        if ($this->form_validation->run() == true){
            echo 'Success!';
        }
        else {
            $this->load->view("pages/motorcycle_add", $data);
        }
    }

    public function brand_check($brand){
        if($brand == "xyz"){
            $this->form_validation->set_message("brand_check", "This %s is banned and not honored.");
            return false;
        }else {
            return true;
        }
    }
}