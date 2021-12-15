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

    public function SavePengelola()
    {
      $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'trim|required|valid_email'
        );
        $this->form_validation->set_rules('jenkel', 'Jenkel', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|matches[password2]|min_length[4]',
            [
                'matches' => 'password tidak sama',
                'min_lenght' => 'Password terlalu pendek',
            ]
        );
        $this->form_validation->set_rules(
            'password2',
            'Password',
            'required|trim|matches[password1]'
        );

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi';
            $this->load->view('login/templates/header', $data);
            $this->load->view('login/register');
            $this->load->view('login/templates/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'email' => htmlspecialchars($this->input->post('email')),
                'jenkel' => htmlspecialchars($this->input->post('jenkel')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'role' => 2,
                'is_active' => 1,
                'date_created' => time(),
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Selamat Akun Anda Sudah Terdaftar, Silahkan Login</div>'
            );
            redirect('Admin/Pengelola');
        } 
    }
    
    public function edit($id=null)
    {
      
		if(!isset($id)) show_404();
		$id = str_replace(['-','_','~'],['=','+','/'],$id);
		$id = $this->encryption->decrypt($id);

		$data = [
				 	'tampil'	=> $this->model->get_by($this->table, 'id', $id)->result()
				];

		$this->load->view('pengelola', $data);
    }
}

?>
