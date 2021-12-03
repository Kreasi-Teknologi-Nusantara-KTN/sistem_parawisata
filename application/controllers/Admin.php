<?php
class Admin extends CI_Controller{

    public function index(){
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/index');
        $this->load->view('admin/templates/footer');
    }

    public function akun(){
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/akun');
        $this->load->view('admin/templates/footer');
    }

    public function wisata(){
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/wisata');
        $this->load->view('admin/templates/footer');
    }

    public function pengelola(){
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pengelola');
        $this->load->view('admin/templates/footer');
    }

    public function s_parawisata(){
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/s_parawisata');
        $this->load->view('admin/templates/footer');
    }


}
?>