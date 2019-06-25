<?php
class M_Laporan extends CI_Model{
	
	function show_barang(){
		$hasil=$this->db->query("SELECT * FROM tes");
		return $hasil;
	}
	
}