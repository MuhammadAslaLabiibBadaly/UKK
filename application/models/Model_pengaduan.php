<?php

class Model_pengaduan extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function getData() {
		$data=$this->db->get('pengaduan');
		return $data;
	}

	function getMasyarakat() {
		$data=$this->db->get('masyarakat');
		return $data;
	}

	function simpanData($data) {
		$this->db->insert('pengaduan',$data);
	}

	function cariData($id_pengaduan) {
		$data=$this->db->get_where('pengaduan',array('id_pengaduan' =>$id_pengaduan));
		return $data;
	}

	function ubahData($data,$id_pengaduan) {
		$this->db->where('id_pengaduan',$id_pengaduan);
		$this->db->update('pengaduan',$data);
	}

	function hapusData($id_pengaduan){
		$this->db->where('id_pengaduan',$id_pengaduan);
		$this->db->delete('pengaduan');
	}
}

?>