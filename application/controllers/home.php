<?php 

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_home');
	}

	function index(){
		$data['acara'] = $this->m_home->tampilAcara()->result();
		$this->load->view('v_home', $data);
	}

	

}