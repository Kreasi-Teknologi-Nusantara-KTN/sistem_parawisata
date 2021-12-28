<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Home',
            'rekomendasi' => $this->db->query("SELECT MAX(point_rekomendasi),id_wisata, nama_wisata,lokasi, informasi_wisata, gambar FROM wisata GROUP BY nama_wisata ORDER BY point_rekomendasi DESC LIMIT 3 ")->result_array()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
    public function pengunjung()
    {
        $data = [
            'judul' => 'Home',
            'rekomendasi' => $this->db->query("SELECT MAX(point_rekomendasi),id_wisata, nama_wisata,lokasi, informasi_wisata, gambar FROM wisata GROUP BY nama_wisata ORDER BY point_rekomendasi DESC LIMIT 3 ")->result_array()
        ];
        $this->load->view('templates/header1', $data);
        $this->load->view('pengajuan');
        $this->load->view('templates/footer');
    }

// profile
    public function profile()
    {
        $data = [
            'profile' =>  $this->db->get_where('user', ['id' => $this->session->userdata('id_pengelola')])->row_array()
        ];

        $this->load->view('templates/header2');
        
        $this->load->view('profile', $data);
        
    }

    public function editProfile($id)
    {
        $id_user = ['id' => $id];

        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $jenkel = $this->input->post('jenkel');
        $alamat = $this->input->post('alamat');

        $data = [
            'nama' => $nama,
            'email' => $email,
            'jenkel' => $jenkel,
            'alamat' => $alamat
        ];
        $this->ModelAkun->update('user', $data, $id_user);
        
        return redirect('Home/pengunjung');
    }

    public function chat()
    {
      // $data           = $this->ModelUser->getDetailById($this->session->id_user);
      $data = [
        'judul' => 'Home',
        'rekomendasi' => $this->db->query("SELECT MAX(point_rekomendasi),id_wisata, nama_wisata,lokasi, informasi_wisata, gambar FROM wisata GROUP BY nama_wisata ORDER BY point_rekomendasi DESC LIMIT 3 ")->result_array()
    ];
    $this->load->view('templates/header1', $data);
      $this->load->view('chat');
    }
  
}
