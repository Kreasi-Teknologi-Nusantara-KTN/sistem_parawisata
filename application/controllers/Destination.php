<?php 

class Destination extends CI_Controller{

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('destination');
        $this->load->view('templates/footer');
    }

}

?>