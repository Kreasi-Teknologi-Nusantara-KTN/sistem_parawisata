<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules(
            'email',
            'Email',
            'trim|required|valid_email'
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|required'
        );
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $this->load->view('login/templates/header', $data);
            $this->load->view('login/login');
            $this->load->view('login/templates/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role' => $user['role'],
                        'id_pengelola' => $user['id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role'] == 1) {
                        redirect('Admin');
                    } elseif ($user['role'] == 2) {
                        redirect('Pengelola');
                    } else {
                        redirect('Home');
                    }
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger" role="alert">Password salah</div>'
                    );
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">Email Belum di aktivasi</div>'
                );
                redirect('login');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Emali Belum Terdaftar, Silahkan daftar terlebih dahulu</div>'
            );
            redirect('login');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'trim|required|valid_email'
        );
        $this->form_validation->set_rules('jenkel', 'Jenkel', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required|trim');
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
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'email' => htmlspecialchars($email),
                'jenkel' => htmlspecialchars($this->input->post('jenkel')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'kontak' => htmlspecialchars($this->input->post('kontak')),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role' => 2,
                'is_active' => 0,
                'date_created' => time(),
            ];
            $this->db->insert('user', $data);
            $token = base64_encode(random_bytes(32));
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Selamat Akun Anda Sudah Terdaftar, Silahkan Tunggu Verifikasi Admin</div>'
            );
            redirect('login');
        }
    }



    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">Berhasil Logout</div>'
        );
        redirect('login');
    }
}
