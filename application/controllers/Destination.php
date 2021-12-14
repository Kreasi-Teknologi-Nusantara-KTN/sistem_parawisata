<?php

class Destination extends CI_Controller
{
    public function index()
    {
        $data = ['judul' => 'Destinasi'];
        $this->load->view('templates/header', $data);
        $this->load->view('destination');
        $this->load->view('templates/footer');
    }
}

?>
