<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Home',
            'rekomendasi' => $this->db->query("SELECT MAX(point_rekomendasi), nama_wisata,lokasi, informasi_wisata, gambar FROM wisata GROUP BY nama_wisata ORDER BY point_rekomendasi DESC LIMIT 3 ")->result_array()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
}
