<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login_in();
        $this->load->library(['encryption']);
        $this->load->library('form_validation');
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
// wisata
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

    public function addwisata()
    {
      $this->load->library('upload');
        $upload_gambar = $_FILES['gambar'];
        $nama = $this->input->post('nama');
        $lokasi = $this->input->post('lokasi');
        $fitur = $this->input->post('fitur');
        $informasi = $this->input->post('informasi');
        $status = $this->input->post('status');
        if ($upload_gambar) {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '2000';
            $config['upload_path'] = './assets/images';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('gambar')) {
                $gbr = $this->upload->data('file_name');
                $data = [
                    'gambar' => $gbr,
                    'nama_wisata' => $nama,
                    'lokasi' => $lokasi,
                    'fitur' => $fitur,
                    'informasi_wisata' => $informasi,
                    'status' => $status
                ];
                $this->ModelPengajuan->add('wisata', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Memasukan Data Wisata
        </div>');
                redirect('admin/wisata');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('admin/wisata');
            }
        }
    
    }

    public function editwisata($id)
    {
      $this->load->library('upload');
        $upload_gambar = $_FILES['gambar'];
        $nama = $this->input->post('nama');
        $lokasi = $this->input->post('lokasi');
        $fitur = $this->input->post('fitur');
        $informasi = $this->input->post('informasi');
        $status = $this->input->post('status');
        if ($upload_gambar) {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '2000';
            $config['upload_path'] = './assets/images';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('gambar')) {
                $gbr = $this->upload->data('file_name');
                $data = [
                    'gambar' => $gbr,
                    'nama_wisata' => $nama,
                    'lokasi' => $lokasi,
                    'fitur' => $fitur,
                    'informasi_wisata' => $informasi,
                    'status' => $status
                ];
                $where= array('id' => $id);
        $res = $this->ModelPengelola->update('user',$data,$where);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Memasukan Data Wisata
        </div>');
                redirect('admin/wisata');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('admin/wisata');
            }
        }
    
    }


// pengelola
    public function pengelola()
    {   
      
      $data['peng']     = $this->ModelPengelola->getpengelola();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pengelola',$data);
        $this->load->view('admin/templates/footer');
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
    
    function edit($id){
      $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'trim|required'
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
            'id' => htmlspecialchars($this->input->post('id')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'email' => htmlspecialchars($this->input->post('email')),
            'jenkel' => htmlspecialchars($this->input->post('jenkel')),
            'alamat' => htmlspecialchars($this->input->post('alamat')),
            'password' => password_hash(
                $this->input->post('password1'),
                PASSWORD_DEFAULT
            ),
            'role' => htmlspecialchars($this->input->post('role')),
            'is_active' => htmlspecialchars($this->input->post('is_active')),
            'date_created' => htmlspecialchars($this->input->post('date_created')),
        ];
        $where= array('id' => $id);
        $res = $this->ModelPengelola->update('user',$data,$where);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">Selamat Akun Anda Sudah Terdaftar, Silahkan Login</div>'
        );
        redirect('Admin/Pengelola');

        } 
    }

    public function hapusPengelola($id)
    {
      $where = array('id' => $id);
      $res = $this->ModelPengelola->delete('user', $where);
      redirect ('Admin/Pengelola');
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
