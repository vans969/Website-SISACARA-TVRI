<?php

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Login!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
				redirect('login');
		}
	}
	public function index() 
	{
		$pegawai = $this->db->query("SELECT * FROM data_pegawai");
		$admin = $this->db->query("SELECT * FROM data_pegawai WHERE jabatan = 'Admin'");
		$program = $this->db->query("SELECT * FROM program_acara");
		$acara = $this->db->query("SELECT * FROM data_acara");
		
		$data['title'] = "Dashboard";
		$data['pegawai'] = $pegawai->num_rows();
		$data['admin'] = $admin->num_rows();
		$data['program'] = $program->num_rows();
		$data['acara'] = $acara->num_rows();

		$this->load->view('template_admin/header',$data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template_admin/footer');
	}
}
