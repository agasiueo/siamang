<?php 
class M_acara extends CI_Model{
	function tampilAcara($id){
		return $this->db->query("SELECT * FROM acara WHERE $id = id_acara");
	}

	function tambahAcara($data,$table){
		$this->db->insert($table,$data);
	} 
	
	function hapusAcara($id){
		return $this->db->query("DELETE FROM `acara` WHERE `id_acara`='$_GET[id_acara]'");
	}

	function editAcara($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}


 ?>