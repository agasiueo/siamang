<?php 
class Komentar extends CI_Controller{


	function __construct(){
		parent::__construct();
		$this->load->model('m_komentar');
	}

	function tambahKomentar(){
		$id_acara = $_GET['id_acara'];
		$komentar = $this->input->post('komentar');
		$data=array(
			'id_acara'=>$id_acara,
			'komentar'=>$komentar
			);
		$this->m_komentar->tambahKomentar($data,'komentar');
		/*$this->m_acara->notifikasi($data,'notifikasi');

		$id_komentar = $this->input->post('id_komentar');	
		$data=array(
			'id_acara'=>$id_acara,
			'id_komentar'=>$id_komentar
			);
		$this->m_acara->tambahNotifikasi($data,'notifikasi');*/
		redirect('acara?id_acara='.$id_acara);
	} 

}
	?>