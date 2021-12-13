<?php
class Pengelola extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login_in();
    }

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
        $this->load->view('pengelola/inf_parawisata');
        $this->load->view('pengelola/templates/footer');
    }

    public function chat()
    {
        $this->load->view('pengelola/templates/header');
        $this->load->view('pengelola/templates/sidebar');
        $this->load->view('pengelola/chat');
        $this->load->view('pengelola/templates/footer');
    }

    public function profile()
    {
        $this->load->view('pengelola/templates/header');
        $this->load->view('pengelola/templates/sidebar');
        $this->load->view('pengelola/profile');
        $this->load->view('pengelola/templates/footer');
    }
}

?>
