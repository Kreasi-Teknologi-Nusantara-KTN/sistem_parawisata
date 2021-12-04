<?php
class Pengelola extends CI_Controller
{
    public function index()
    {
        $this->load->view('pengelola/templates/header');
        $this->load->view('pengelola/templates/sidebar');
        $this->load->view('pengelola/index');
        $this->load->view('pengelola/templates/footer');
    }

    public function inf_parawisata()
    {
        $this->load->view('pengelola/templates/header');
        $this->load->view('pengelola/templates/sidebar');
        $this->load->view('pengelola/parawisata');
        $this->load->view('pengelola/templates/footer');
    }

    public function data_inf()
    {
        $this->load->view('pengelola/templates/header');
        $this->load->view('pengelola/templates/sidebar');
        $this->load->view('pengelola/data_inf');
        $this->load->view('pengelola/templates/footer');
    }
}

?>
