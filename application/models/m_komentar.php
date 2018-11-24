<?php 

class M_komentar extends CI_Model{ 

	function tambahKomentar($data,$table){
		$this->db->insert($table,$data);
	}

	function tampilKomentar($id){
		return $this->db->query("SELECT * FROM komentar WHERE $id = id_acara ORDER BY id_acara ASC");
	}

}

	?>