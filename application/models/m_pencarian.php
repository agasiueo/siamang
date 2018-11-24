<?php 
class M_pencarian extends CI_Model{

	function tampilGenre($cari){
		return $this->db->query("SELECT * FROM acara WHERE '$cari' = genre");
	}

	function tampilLokasi($cari){
		return $this->db->query("SELECT * FROM acara WHERE '$cari' = lokasi");
	}

	function tampilLimaTeratas(){
		return $this->db->query("SELECT * FROM acara ORDER BY rating DESC LIMIT 5");
	}
}

 ?>