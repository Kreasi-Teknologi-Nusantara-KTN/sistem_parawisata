<?php
class Pengajuan extends CI_Controller
{
    public function index()
    {
        $this->load->library('upload');
        $upload_gambar = $_FILES['gambar'];
        $nama = $this->input->post('nama');
        $lokasi = $this->input->post('lokasi');
        $fitur = $this->input->post('fitur');
        $informasi = $this->input->post('informasi');
        $ip = $this->input->post('ip');
        $maps = $this->input->post('maps');
        $status = $this->input->post('status');
        $id = $this->input->post('id_pengelola');
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
                    'link' => $ip,
                    'map' => $maps,
                    'status' => $status,
                    'id_pengelola' => $id
                ];
                $this->ModelPengajuan->add('wisata', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil pengajuan! Mohon tunggu persetujuan Admin
        </div>');
                redirect('Pengelola');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('Pengelola');
            }
        }
    }
    public function editInfo($id)
    {
        $nama = $this->input->post('nama');
        $lokasi = $this->input->post('lokasi');
        $fitur = $this->input->post('fitur');
        $ip = $this->input->post('ip');
        $maps = $this->input->post('maps');

        $data = [
            'nama_wisata' => $nama,
            'lokasi' => $lokasi,
            'fitur' => $fitur,
            'link' => $ip,
            'map' => $maps
        ];
        $where = array('id_wisata' => $id);
        $this->ModelPengelola->update('wisata', $data, $where);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil ubah data wisata</div>');
        redirect('pengelola/inf_parawisata');
    }
    public function update_foto($id)
    {
        $this->load->library('upload');
        $upload = $_FILES['gambar']['name'];
        if ($upload) {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '2000';
            $config['upload_path'] = './assets/images';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('gambar')) {
                $gbr = $this->upload->data('file_name');
                $foto = ['gambar' => $gbr];
                $where = array('id_wisata' => $id);
                $res = $this->ModelPengelola->update('wisata', $foto, $where);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil Mengubah Foto wisata
            </div>');
                redirect('pengelola/inf_parawisata');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            gagal Mengubah Foto wisata
            </div>');
                redirect('pengelola/inf_parawisata');
            }
        }
    }


    public function deleteInfo($id)
    {
        $where = array('id_wisata' => $id);
        $res = $this->ModelPengajuan->delete('wisata', $where);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Berhasil Menghapus Data Wisata
        </div>');
        redirect('Pengelola/inf_parawisata');
    }

    // public function dataPengajuan()
    // {
    //     $where = 'status';
    //     $data = [
    //         'pengajuan' => $this->ModelPengajuan->get('wisata'),
    //         'status' => $where
    //     ];
    //     $this->load->view('admin/templates/header');
    //     $this->load->view('admin/templates/sidebar');
    //     $this->load->view('admin/wisata', $data);
    //     $this->load->view('admin/templates/footer');
    // }

    public function verifikasi($id)
    {
        $status = $this->input->post('status');
        $this->ModelPengajuan->verifikasi($status, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Verifikasi berhasil!
        </div>');
        redirect('Admin/wisata');
    }
}
