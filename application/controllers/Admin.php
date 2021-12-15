<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login_in();
        $this->load->library(['encryption']);
    }

    public function index()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/index');
        $this->load->view('admin/templates/footer');
    }

    public function akun()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/akun');
        $this->load->view('admin/templates/footer');
    }

    public function wisata()
    {
        $where = 'status';
        $data = [
            'pengajuan' => $this->ModelPengajuan->get('wisata'),
            'status' => $where
        ];
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/wisata', $data);
        $this->load->view('admin/templates/footer');
    }

    public function pengelola()
    {   
      
      $data['peng']     = $this->ModelPengelola->getpengelola();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pengelola',$data);
        $this->load->view('admin/templates/footer');
    }

    public function parawisata()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/parawisata');
        $this->load->view('admin/templates/footer');
    }

    public function profile()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/profile');
        $this->load->view('admin/templates/footer');
    }
}
