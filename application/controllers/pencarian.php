<?php 

class Pencarian extends CI_Controller{

	function __construct(){
		parent::__construct();

		header('Last-Modified:' .gmdate('D, d M Y H:i:s'). 'GMT');
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0' ,false);
        header('Pragma: no-cache');
		
		$this->load->model('m_pencarian');
	}

	function pencarianGenre(){
		$genre=$this->input->post('genre');
		$data['acara'] = $this->m_pencarian->tampilGenre($genre)->result();
		$this->load->view('v_pencarian', $data);
	}

	function pencarianLokasi(){
		$lokasi=$this->input->post('lokasi');
		$data['acara'] = $this->m_pencarian->tampilLokasi($lokasi)->result();
		$this->load->view('v_pencarian', $data);
	}

	function limateratas(){
		$data['acara'] = $this->m_pencarian->tampilLimaTeratas()->result();
		$this->load->view('v_pencarian', $data);
	}
}

 ?>