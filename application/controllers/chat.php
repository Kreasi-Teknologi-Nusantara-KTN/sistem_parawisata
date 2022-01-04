<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller
{

	public function __construct()
	{
		ini_set('max_execution_time', 0);
		ini_set('memory_limit', '2048M');
		parent::__construct();
		$this->load->model('ChatModel');
	}


	public function index()
	{
		
			$no =  $this->uri->segment(2);
			$data['data'] = $this->ChatModel->getDataById($no);
			if ($data == null) {
				die("user tidak ada nih");
			} else {
				
				$this->load->view('Chat', $data);
			}
		
	}
  public function chatPengelola()
	{
		
			$no =  $this->uri->segment(3);
			$data['data'] = $this->ChatModel->getDataById($no);
			if ($data == null) {
				die("user tidak ada nih");
			} else {
				
				$this->load->view('pengelola/chatPengelola', $data);
			}
		
	}
	public function dua()
	{
		$this->load->view('dua');
	}
	public function loadChat()
	{
		$id = 	$this->input->post('id_pesan');
		$id_lawan = 	$this->input->post('id_lawan');
		$data = $this->ChatModel->getPesan($id, $id_lawan);

		echo json_encode(array(
			'data' => $data
		));

		# code...
	}
	public function KirimPesan()
	{
		$now = date("Y-m-d H:i:s");
		// var_dump($now);die;
		$pesan = $this->input->post('pesan');
		$id = $this->input->post('id_pesan');
    $id_user = $this->input->post('id_user');
		$id_lawan = $this->input->post('id_lawan');

		// $id =2;
		// $id_lawan =1;
		$in = array(
			'id_pesan' => $id,
      'id_user' => $id_user,
			'id_lawan' => $id_lawan,
			'isi' => $pesan,
			'waktu' => $now,
		);

		$this->ChatModel->TambahChatKeSatu($in);
		$log = array('status' => true);
		echo json_encode($log);
		return true;


		# code...
	}
	public function process_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = $this->ChatModel->getData($email,md5($password));
		// var_dump($data);die;
		if ($data == null) {
			$pesan = "Maaf, User Tidak Di temukan";
			$status = false;
		} else {
			$pesan = "selamat datang, " . $data->nama;
			$status = true;

			$array = array(
				'id' => $data->id,
				'nama' => $data->nama
			);

			$this->session->set_userdata($array);
		}
		$log = array(
			'status' => $status,
			'pesan' => $pesan,
		);

		echo json_encode($log);
		return true;

		# code...
	}
	public function login()
	{
		$this->load->view('login');

		# code...

  }
	public function menu()
	{
		
				$this->load->view('menu');
			
		
		# code...
	}

  public function menuPengelola()
	{
		
				$this->load->view('pengelola/menuPengelola');
			
		
		# code...
	}
	public function GetAllOrang()
	{
		$id = $this->input->post('id');
		$data = $this->ChatModel->GetAllOrangKecUser();

		echo json_encode(array(
			'data' => $data
		));

		# code...
	}
  public function GetAllPengunjung()
	{
		$id = $this->input->post('id');
		$data = $this->ChatModel->GetAllOrangPengunjung();

		echo json_encode(array(
			'data' => $data
		));

		# code...
	}
	public function logout()
	{ 

		$this->session->sess_destroy();
			$pesan="Berhasil Keluar";
			$status = true;
		

		echo json_encode(array(
			'pesan' => $pesan,
			'status' => $status
		));



		# code...
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function process_register()
	{
		$email = $this->input->post('email');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$password = $this->input->post('password');
		$data = $this->ChatModel->getDataOnly($email);
		if($data!=null){
			$pesan = "Data Sudah Pernah Ada!";
			$status = false;
		}else{
			$reg = array(
				'email' =>$email,
				'nama' =>$nama_lengkap,
				'password' => md5($password),
			 );
			 $this->ChatModel->Tambah('user',$reg);
			 $pesan = "User Berhasil Di tambah!, <br>
			 	Anda Akan Diarahkan Ke Halaman Login
			 ";
			 $status = true;
		}

		echo json_encode(array(
			'pesan' => $pesan,
			'status' => $status
		));
	}
}
        
    /* End of file  Chat.php */
