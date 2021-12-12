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
        $data['title'] = 'Login';
        $this->load->view('login/templates/header', $data);
        $this->load->view('login/login');
        $this->load->view('login/templates/footer');
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        // $this->form_validation->set_rules(
        //     'email',
        //     'Email',
        //     'required|trim|valid_email]'
        // );
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
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'jenkel' => $this->input->post('jenkel'),
                'alamat' => $this->input->post('alamat'),
                'password' => password_hash(
                    $this->input->post('password'),
                    PASSWORD_DEFAULT
                ),
                'role' => 3,
                'is_active' => 1,
                'date_created' => time(),
            ];
            $this->db->insert('user', $data);
            redirect('login');
        }
    }
}

?>
