<?php 


class Acara extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_acara');
	
	}

	function index(){
		$id_acara = $_GET['id_acara'];
		$data['acara'] = $this->m_acara->tampilAcara($id_acara)->result();
		
		$this->load->view('v_acara', $data);
	}

	function tambahAcara(){
		$nama_acara = $this->input->post('nama_acara');
		$gs = $this->input->post('gs');
		$genre = $this->input->post('genre');
		$lokasi = $this->input->post('lokasi');
		$harga = $this->input->post('harga');
		$tanggal = $this->input->post('tanggal');
		$deskripsi = $this->input->post('deskripsi');
		$rating = $this->input->post('rating');
		$gambar = $this->input->post('gambar');

		
		$data=array(
			'nama_acara'=>$nama_acara,
			'gs' => $gs,
			'genre' => $genre,
			'lokasi' => $lokasi,
			'harga' => $harga,
			'tanggal' => $tanggal,
			'deskripsi' => $deskripsi,
			'rating' => $rating,
			'gambar' => $gambar
		);
		$this->m_acara->tambahAcara($data,'acara');
		redirect('home');
	}

	function hapusAcara(){
		$id_acara = $_GET['id_acara'];
		$this->m_acara->hapusAcara($id_acara);
		redirect('home');
		
	}

	function editAcara(){
		$id_acara = $_GET['id_acara'];
		$nama_acara = $this->input->post('nama_acara');
		$gs = $this->input->post('gs');
		$genre = $this->input->post('genre');
		$lokasi = $this->input->post('lokasi');
		$harga = $this->input->post('harga');
		$tanggal = $this->input->post('tanggal');
		$deskripsi = $this->input->post('deskripsi');
		$rating = $this->input->post('rating');
		
		
		$data = array(
			'nama_acara' => $nama_acara,
			'gs' => $gs,
			'genre' => $genre,
			'lokasi' => $lokasi,
			'harga' => $harga,
			'tanggal' => $tanggal,
			'deskripsi' => $deskripsi,
			'rating' => $rating,
		
		);

		$where = array(
			'id_acara' => $id_acara
		);

		$this->m_acara->editAcara($where,$data,'acara');
		redirect('acara?id_acara='.$id_acara);
	}

}