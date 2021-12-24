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


    public function destinasi($id)
    {
        //poin rekomendasi
        $p = $this->db->query("SELECT point_rekomendasi FROM wisata WHERE id_wisata =$id")->row_array();
        $pn = implode($p);
        $new_poin = $pn + 1;
        $this->db->query("UPDATE wisata SET point_rekomendasi = $new_poin WHERE id_wisata = $id");
        //tampil wisata
        $judul = $this->db->query("SELECT nama_wisata FROM wisata WHERE id_wisata =$id")->row_array();
        $jdl = implode($judul);
        $data = [
            'wisata' => $this->ModelPengajuan->join($id)->row_array(),
            'judul' => $jdl
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('destinationview', $data);
        $this->load->view('templates/footer');
    }
}
