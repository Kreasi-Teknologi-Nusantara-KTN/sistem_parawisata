<?php
class Pengelola extends CI_Controller{

    public function index(){
        $this->load->view('pengelola/templates/header');
        $this->load->view('pengelola/templates/sidebar');
        $this->load->view('pengelola/index');
        $this->load->view('pengelola/templates/footer');
    }

}

?>