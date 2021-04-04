<?php 

	class Pengaduan extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('Model_pengaduan');
		}

		function index() {
			$data['konten']=$this->Model_pengaduan->getData();
			$this->load->view('data_pengaduan',$data);
		}

		function tambah() {
			$data['nik']=$this->Model_pengaduan->getMasyarakat();
			$this->load->view('tambah_pengaduan', $data);
		}

		function simpan(){
			$tgl_pengaduan=$this->input->post('tgl_pengaduan');
			$nik=$this->input->post('nik');
			$isi_laporan=$this->input->post('isi_laporan');
			$foto=$this->input->post('foto');
			$status=$this->input->post('status');
			$data=array(
				'tgl_pengaduan'=>$tgl_pengaduan,
				'nik'=>$nik,
				'isi_laporan'=>$isi_laporan,
				'foto'=>$foto,
				'status'=>$status,
			);

			$this->Model_pengaduan->simpanData($data);
			redirect('pengaduan');
		}

		function edit() {
			$id_pengaduan=$this->uri->segment(3);
			$data['nik']=$this->Model_pengaduan->getMasyarakat();
			$data['konten']=$this->Model_pengaduan->cariData($id_pengaduan);
			$this->load->view('edit_pengaduan',$data);
		}

		function ubah() {
			$id_pengaduan=$this->input->post('id_pengaduan');
			$tgl_pengaduan=$this->input->post('tgl_pengaduan');
			$nik=$this->input->post('nik');
			$isi_laporan=$this->input->post('isi_laporan');
			$foto=$this->input->post('foto');
			$status=$this->input->post('status');
			$data=array(
				'tgl_pengaduan'=>$tgl_pengaduan,
				'nik'=>$nik,
				'isi_laporan'=>$isi_laporan,
				'foto'=>$foto,
				'status'=>$status,
			);

			$this->Model_pengaduan->ubahData($data,$id_pengaduan);
			redirect('pengaduan');
		}

		function hapus() {
			$id_pengaduan=$this->uri->segment(3);
			$this->Model_pengaduan->hapusData($id_pengaduan);
			redirect('pengaduan');
		}
		
	}

?>