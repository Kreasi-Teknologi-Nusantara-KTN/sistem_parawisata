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

    /* -------------------------------------------------------------------------- */
    /*                         revisi fitur akun di hapus                         */
    /* -------------------------------------------------------------------------- */

    // Akun
    // public function akun()
    // {
    //     $data['peng'] = $this->ModelAkun->getakun();
    //     $this->load->view('admin/templates/header');
    //     $this->load->view('admin/templates/sidebar');
    //     $this->load->view('admin/akun', $data);
    //     $this->load->view('admin/templates/footer');
    // }
    // public function SaveAkun()
    // {
    //     $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    //     $this->form_validation->set_rules(
    //         'email',
    //         'Email',
    //         'trim|required|valid_email'
    //     );
    //     $this->form_validation->set_rules('jenkel', 'Jenkel', 'required');
    //     $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
    //     $this->form_validation->set_rules(
    //         'password1',
    //         'Password',
    //         'required|trim|matches[password2]|min_length[4]',
    //         [
    //             'matches' => 'password tidak sama',
    //             'min_lenght' => 'Password terlalu pendek',
    //         ]
    //     );
    //     $this->form_validation->set_rules(
    //         'password2',
    //         'Password',
    //         'required|trim|matches[password1]'
    //     );

    //     if ($this->form_validation->run() == false) {
    //         $data['peng'] = $this->ModelAkun->getakun();
    //         $this->load->view('admin/templates/header');
    //         $this->load->view('admin/templates/sidebar');
    //         $this->load->view('admin/akun', $data);
    //         $this->load->view('admin/templates/footer');
    //         $this->session->set_flashdata(
    //             'message',
    //             '<div class="alert alert-danger" role="alert">Gagal Menambahkan Akun User!</div>'
    //         );
    //     } else {
    //         $data = [
    //             'nama' => htmlspecialchars($this->input->post('nama')),
    //             'email' => htmlspecialchars($this->input->post('email')),
    //             'jenkel' => htmlspecialchars($this->input->post('jenkel')),
    //             'alamat' => htmlspecialchars($this->input->post('alamat')),
    //             'password' => password_hash(
    //                 $this->input->post('password1'),
    //                 PASSWORD_DEFAULT
    //             ),
    //             'role' => 3,
    //             'is_active' => 1,
    //             'date_created' => time(),
    //         ];
    //         $this->db->insert('user', $data);
    //         $this->session->set_flashdata(
    //             'message',
    //             '<div class="alert alert-success" role="alert">Berhasil Menambahkan Akun User</div>'
    //         );
    //         redirect('admin/akun');
    //     }
    // }

    // public function UpdateAkun($id)
    // {
    //     $id_akun = ['id' => $id];
    //     $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    //     $this->form_validation->set_rules(
    //         'email',
    //         'Email',
    //         'trim|required|valid_email'
    //     );
    //     $this->form_validation->set_rules('jenkel', 'Jenkel', 'required');
    //     $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
    //     $this->form_validation->set_rules(
    //         'password1',
    //         'Password',
    //         'required|trim|matches[password2]|min_length[4]',
    //         [
    //             'matches' => 'password tidak sama',
    //             'min_lenght' => 'Password terlalu pendek',
    //         ]
    //     );
    //     $this->form_validation->set_rules(
    //         'password2',
    //         'Password',
    //         'required|trim|matches[password1]'
    //     );

    //     if ($this->form_validation->run() == false) {
    //         $data['peng'] = $this->ModelAkun->getakun();
    //         $this->load->view('admin/templates/header');
    //         $this->load->view('admin/templates/sidebar');
    //         $this->load->view('admin/akun', $data);
    //         $this->load->view('admin/templates/footer');
    //         $this->session->set_flashdata(
    //             'message',
    //             '<div class="alert alert-danger" role="alert">Gagal Mengubah Akun User!</div>'
    //         );
    //     } else {
    //         $data = [
    //             'nama' => htmlspecialchars($this->input->post('nama')),
    //             'email' => htmlspecialchars($this->input->post('email')),
    //             'jenkel' => htmlspecialchars($this->input->post('jenkel')),
    //             'alamat' => htmlspecialchars($this->input->post('alamat')),
    //             'password' => password_hash(
    //                 $this->input->post('password1'),
    //                 PASSWORD_DEFAULT
    //             ),
    //             'role' => 3,
    //             'is_active' => 1,
    //             'date_created' => time(),
    //         ];
    //         $this->ModelAkun->update('user', $id_akun, $data);
    //         $this->session->set_flashdata(
    //             'message',
    //             '<div class="alert alert-success" role="alert">Berhasil Mengubah Akun User</div>'
    //         );
    //         redirect('admin/akun');
    //     }
    // }

    // public function hapusAkun($id)
    // {
    //     $where = array('id' => $id);
    //     $res = $this->ModelAkun->delete('user', $where);
    //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
    //     Berhasil Menghapus Data Akun
    //     </div>');
    //     redirect('admin/akun');
    // }

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
        $id_wisata = $this->input->post('id_wisata');
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
                    'id_wisata' => $id_wisata,
                    'nama_wisata' => $nama,
                    'lokasi' => $lokasi,
                    'fitur' => $fitur,
                    'informasi_wisata' => $informasi,

                ];
                $where = array('id_wisata' => $id);
                $res = $this->ModelPengelola->update('wisata', $data, $where);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Mengubah Data Wisata
        </div>');
                redirect('admin/wisata');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('admin/wisata');
            }
        }
    }

    public function hapusWisata($id)
    {
        $where = array('id_wisata' => $id);
        $res = $this->ModelPengajuan->delete('wisata', $where);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Berhasil Menghapus Data Wisata
        </div>');
        redirect('Admin/Wisata');
    }

    //pengunjung
    public function pengunjung()
    {

        $data['peng']     = $this->ModelPengunjung->getpengunjung();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pengunjung', $data);
        $this->load->view('admin/templates/footer');
    }

    public function SavePengunjung()
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
            $data['peng']     = $this->ModelPengunjung->getpengunjung();
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/pengunjung', $data);
            $this->load->view('admin/templates/footer');
            $this->session->set_flashdata(
              'message',
              '<div class="alert alert-danger" role="alert">Akun gagal ditambahkan!</div>'
          );
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'email' => htmlspecialchars($this->input->post('email')),
                'jenkel' => htmlspecialchars($this->input->post('jenkel')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'kontak' => htmlspecialchars($this->input->post('kontak')),
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'role' => 3,
                'is_active' => 0,
                'date_created' => time(),
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Akun berhasil ditambahakan</div>'
            );
            redirect('Admin/Pengunjung');
        }
    }

    public function verifikasi_pengunjung($id)
    {
        $id_user = $this->db->query("SELECT email FROM user WHERE is_active = 0 AND id = $id")->row_array();
        $email = implode($id_user);
        $this->ModelAkun->verifikasi_user($id, $email);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            User sudah menjadi pengunjung!</div>');
        redirect('Admin/pengunjung');
    }

    function edit_pengunjung($id)
    {
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


          $data['peng']     = $this->ModelPengunjung->getpengunjung();
          $this->load->view('admin/templates/header');
          $this->load->view('admin/templates/sidebar');
          $this->load->view('admin/pengunjung', $data);
          $this->load->view('admin/templates/footer');
          $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger" role="alert">Akun gagal diubah!</div>'
        );
        } else {
            $data = [
                'id' => htmlspecialchars($this->input->post('id')),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'email' => htmlspecialchars($this->input->post('email')),
                'jenkel' => htmlspecialchars($this->input->post('jenkel')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'kontak' => htmlspecialchars($this->input->post('kontak')),
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'role' => htmlspecialchars($this->input->post('role')),
                'is_active' => htmlspecialchars($this->input->post('is_active')),
                'date_created' => htmlspecialchars($this->input->post('date_created')),
            ];
            $where = array('id' => $id);
            $res = $this->ModelPengelola->update('user', $data, $where);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Akun berhasil diubah</div>'
            );
            redirect('Admin/Pengunjung');
        }
    }

    public function hapusPengunjung($id)
    {
        $where = array('id' => $id);
        $res = $this->ModelPengunjung->delete('user', $where);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Berhasil Menghapus Data Pengunjung
        </div>');
        redirect('Admin/Pengunjung');
    }

    // pengelola
    public function pengelola()
    {

        $data['peng']     = $this->ModelPengelola->getpengelola();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pengelola', $data);
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
            $data['peng']     = $this->ModelPengelola->getpengelola();
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/pengelola', $data);
            $this->load->view('admin/templates/footer');
            $this->session->set_flashdata(
              'message',
              '<div class="alert alert-danger" role="alert">Akun gagal ditambahkan!</div>'
          );
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'email' => htmlspecialchars($this->input->post('email')),
                'jenkel' => htmlspecialchars($this->input->post('jenkel')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'kontak' => htmlspecialchars($this->input->post('kontak')),
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'role' => 2,
                'is_active' => 0,
                'date_created' => time(),
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Akun berhasil ditambahkan</div>'
            );
            redirect('Admin/Pengelola');
        }
    }

    function edit($id)
    {
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


          $data['peng']     = $this->ModelPengelola->getpengelola();
          $this->load->view('admin/templates/header');
          $this->load->view('admin/templates/sidebar');
          $this->load->view('admin/pengelola', $data);
          $this->load->view('admin/templates/footer');
          $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger" role="alert">Akun gagal diubah!</div>'
        );
        } else {
            $data = [
                'id' => htmlspecialchars($this->input->post('id')),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'email' => htmlspecialchars($this->input->post('email')),
                'jenkel' => htmlspecialchars($this->input->post('jenkel')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'kontak' => htmlspecialchars($this->input->post('kontak')),
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'role' => htmlspecialchars($this->input->post('role')),
                'is_active' => htmlspecialchars($this->input->post('is_active')),
                'date_created' => htmlspecialchars($this->input->post('date_created')),
            ];
            $where = array('id' => $id);
            $res = $this->ModelPengelola->update('user', $data, $where);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Akun berhasil diubah</div>'
            );
            redirect('Admin/Pengelola');
        }
    }


    public function hapusPengelola($id)
    {
        $where = array('id' => $id);
        $res = $this->ModelPengelola->delete('user', $where);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Berhasil Menghapus Data Pengelola
        </div>');
        redirect('Admin/Pengelola');
    }
    public function verifikasi($id)
    {
        $id_user = $this->db->query("SELECT email FROM user WHERE is_active = 0 AND id = $id")->row_array();
        $email = implode($id_user);
        $this->ModelAkun->verifikasi_user($id, $email);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            User sudah menjadi pengelola!</div>');
        redirect('Admin/pengelola');
    }

    public function sendEmail($id)
    {
        $id_user = $this->db->query("SELECT email FROM user WHERE is_active = 0 AND id = $id")->row_array();
        $email = implode($id_user);
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'email',
            'smtp_pass' => 'pasword_email',
            'smtp_port' => '465',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];
        $this->load->library('email');
        $this->email->initialize($config);

        $this->email->from('inwananwar9b@gmail.com', 'Inwan Anwar Solihudin');
        $this->email->to($email);
        $this->email->subject('Notifikasi Hak Akses Pengelola');
        $this->email->message('Mohon maaf, akun anda belum dapat kami setujui untuk menjadi pengelola');

        if ($this->email->send()) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Menolak permintaan verifikasi!</div>');
            return redirect('Admin/pengelola');
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    // public function parawisata()
    // {
    //     $this->load->view('admin/templates/header');
    //     $this->load->view('admin/templates/sidebar');
    //     $this->load->view('admin/parawisata');
    //     $this->load->view('admin/templates/footer');
    // }

    public function profile()
    {
        $data = [
            'profile' =>  $this->db->get_where('user', ['id' => $this->session->userdata('id_pengelola')])->row_array()
        ];

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/profile', $data);
        $this->load->view('admin/templates/footer');
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
        return redirect('Admin');
    }
}
