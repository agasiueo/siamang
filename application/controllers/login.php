<?php 



class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if (empty($username) || empty($password)){
			echo "<script>alert('username atau password belum diisi')
			window.location='http://localhost/Siamang/login';</script>";
		}
		else{
			$where = array(
				'username' => $username,
				'password' => $password
				);
			$cek = $this->m_login->cek_login("user",$where)->num_rows();
			if($cek > 0){
				$row =$this->m_login->getData('user',$where)->row();
				$_SESSION['role'] = $row->role;
				$_SESSION['id_admin'] = $row->id_admin;
				$_SESSION['username'] = $username;
				$_SESSION['nama'] = $row->nama;
				redirect(base_url("home"));


			}else{
				echo "<script>alert('username atau password salah')
				window.location='http://localhost/Siamang/login';</script>";
			}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}