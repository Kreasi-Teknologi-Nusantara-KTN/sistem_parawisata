<?php
class Pengelola extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login_in();
        $this->load->library('form_validation');
    }

    public function index()
    {
      $data = [
        'profile' =>  $this->db->get_where('user', ['id' => $this->session->userdata('id_pengelola')])->row_array()
    ];
        $this->load->view('pengelola/templates/header');
        $this->load->view('pengelola/templates/sidebar', $data);
        $this->load->view('pengelola/index');
        $this->load->view('pengelola/templates/footer');
    }

    public function inf_parawisata()
    {
        $data = [
            'judul' => 'Informasi Pariwisata',
            'info' => $this->ModelPengelola->ambil(),
            'profile' =>  $this->db->get_where('user', ['id' => $this->session->userdata('id_pengelola')])->row_array()
        ];
        $this->load->view('pengelola/templates/header', $data);
        $this->load->view('pengelola/templates/sidebar', $data);
        $this->load->view('pengelola/inf_parawisata', $data);
        $this->load->view('pengelola/templates/footer');
    }


    public function profile()
    {
        $data = [
            'profile' =>  $this->db->get_where('user', ['id' => $this->session->userdata('id_pengelola')])->row_array()
        ];

        $this->load->view('pengelola/templates/header');
        $this->load->view('pengelola/templates/sidebar', $data);
        $this->load->view('pengelola/profile', $data);
        $this->load->view('pengelola/templates/footer');
    }

    public function editProfile($id)
    {
        $id_user = ['id' => $id];
        
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $jenkel = $this->input->post('jenkel');
        $alamat = $this->input->post('alamat');
        $kontak = $this->input->post('kontak');
        
        $data = [
            'nama' => $nama,
            'email' => $email,
            'jenkel' => $jenkel,
            'alamat' => $alamat,
            'kontak' => $kontak,
            'password' => password_hash(
              $this->input->post('password'),
              PASSWORD_DEFAULT
          ),
        ];
        $this->ModelAkun->update('user', $data, $id_user);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil Ubah Profil!</div>');
        return redirect('Pengelola');
    }
}
