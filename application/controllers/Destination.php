<?php

class Destination extends CI_Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Destinasi',
            'wisata' => $this->ModelPengajuan->where('wisata', ['status' => 'Sudah disetujui'])->result_array()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('destination', $data);
        $this->load->view('templates/footer');
    }

    public function destinasi()
    {
        $data = [
            'judul' => 'Destinasi A',
            'wisata' => $this->ModelPengajuan->where('wisata', ['status' => 'Sudah disetujui'])->result_array()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('destinationview', $data);
        $this->load->view('templates/footer');
    }
}
