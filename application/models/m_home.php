<?php 
class M_home extends CI_Model{
	function tampilAcara(){
		return $this->db->query("SELECT * FROM acara ORDER BY id_acara DESC");
	}

}

 ?>