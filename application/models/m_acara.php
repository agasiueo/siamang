<?php 
class M_acara extends CI_Model{
	function tampilAcara($id){
		return $this->db->query("SELECT * FROM acara WHERE $id = id_acara");
	}

	function tambahAcara($data,$table){
		$this->db->insert($table,$data);
	} 
	
	

}


 ?>