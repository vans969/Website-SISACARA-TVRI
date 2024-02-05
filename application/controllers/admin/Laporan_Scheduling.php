<?php

class Laporan_Scheduling extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
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
        $data['title'] = "Laporan Scheduling Acara";

        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/scheduling/laporan_scheduling');
        $this->load->view('template_admin/footer');
    }

    public function cetak_laporan_gaji()
    {

        $data['title'] = "Data Scheduling Acara";

        if ((isset($_GET['tanggal']) && $_GET['tanggal'] != '')) {
            $tanggal = $_GET['tanggal'];
            $bulantahun = $tanggal;
        } else {
            $tanggal = date('d');
            $bulantahun = $tanggal;
        }

        $data['susunan'] = $this->db->query("SELECT * FROM data_susunan WHERE tanggal_siaran='$tanggal' ORDER BY data_susunan.nama_acara")->result();
        $this->load->view('template_admin/header', $data);
        $this->load->view('admin/scheduling/cetak_scheduling', $data);
    }
}
