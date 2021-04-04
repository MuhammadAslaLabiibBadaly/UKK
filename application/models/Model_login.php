<?php 

class Model_login extends CI_Model {
	function __construct() {
		parent:: __construct();
	}

	function cekLogin($username,$password){
		$query="SELECT * FROM masyarakat WHERE username ='$username' AND password='$password'";
		$data=$this->db->query($query);
		if ($data->num_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}
}
?>