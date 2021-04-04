<?php 

class Login extends CI_Controller{
	function __construct() {
		parent:: __construct();
		$this->load->Model('Model_login');
	}

	function index(){
		$this->load->view('login');
	}

	function cek(){
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));
		$cekdata=$this->Model_login->cekLogin($username,$password);
		if ($cekdata==TRUE) {
			$data = array('username'=>$username, 'logged_in'=>TRUE);
			$this->session->set_userdata($data);
			redirect('pengaduan');
		} else {
			redirect('login', 'refresh');
		}
	}

	function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('legged_in');
		redirect('login', 'refresh');
	}
}
?>