<?php
class Products extends CI_Controller{

    public function index(){
        $data["title"] = "Products";
        $data["products"] = array("Spaghetti", "Baked Mac", "Fettucine", "Lasagna");
        $this->load->view("products", $data);
    }
}