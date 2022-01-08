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
        
        $na = $this->db->query("SELECT nama_wisata FROM wisata WHERE id_wisata =$id")->row_array();
       
       $nam = implode($na);
       $nama = substr($nam,0,5);
        
        $data = [
            'wisata' => $this->ModelPengajuan->join($id)->row_array(),
            'judul' => $jdl,
            'rekomendasi' => $this->ModelPengajuan->where2($nama,$id,'Sudah disetujui')
        ];
        
        $this->load->view('templates/header', $data);
        $this->load->view('destinationview', $data);
        $this->load->view('templates/footer');
    }

    public function recommended($id)
    {
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

    public function pengunjung()
    {
        $data = [
            'judul' => 'Destinasi',
            'wisata' => $this->ModelPengajuan->where('wisata', ['status' => 'Sudah disetujui'])->result_array()
        ];
        $this->load->view('templates/header1', $data);
        $this->load->view('pengunjung/destinationPengunjung', $data);
        $this->load->view('templates/footer');
    }

    public function destinasiPengunjung($id)
    {
        //poin rekomendasi
        $p = $this->db->query("SELECT point_rekomendasi FROM wisata WHERE id_wisata =$id")->row_array();
        $pn = implode($p);
        $new_poin = $pn + 1;
        $this->db->query("UPDATE wisata SET point_rekomendasi = $new_poin WHERE id_wisata = $id");
        //tampil wisata
        $judul = $this->db->query("SELECT nama_wisata FROM wisata WHERE id_wisata =$id")->row_array();
        $jdl = implode($judul);
       $na = $this->db->query("SELECT nama_wisata FROM wisata WHERE id_wisata =$id")->row_array();
       
       $nam = implode($na);
       $nama = substr($nam,0,5);
       
        $data = [
            'wisata' => $this->ModelPengajuan->join($id)->row_array(),
            'judul' => $jdl,
            'rekomendasi' => $this->ModelPengajuan->where2($nama,$id)
            
            
        ];
        // var_dump($jdl); die;
        
        $this->load->view('templates/header1', $data);
        $this->load->view('destinationview', $data);
        
        $this->load->view('templates/footer');
    }

    public function destinasi1($id)
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
        $this->load->view('templates/header1', $data);
        $this->load->view('destinationview', $data);
        $this->load->view('templates/footer');
    }

    public function recommended1($id)
    {
        $judul = $this->db->query("SELECT nama_wisata FROM wisata WHERE id_wisata =$id")->row_array();
        $jdl = implode($judul);
        $data = [
            'wisata' => $this->ModelPengajuan->join($id)->row_array(),
            'judul' => $jdl
        ];
        $this->load->view('templates/header1', $data);
        $this->load->view('destinationview', $data);
        $this->load->view('templates/footer');
    }
}
