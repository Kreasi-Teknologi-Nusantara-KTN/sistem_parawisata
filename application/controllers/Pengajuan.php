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
                $this->db->insert('wisata', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil pengajuan! Mohon tunggu persetujuan Admin
        </div>');
                redirect('Home');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('Home');
            }
        }
    }
}
