<?php

class Data_Scheduling extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hak_akses') != '2') {
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
        $data['title'] = "Data Scheduling Acara";

        if ((isset($_GET['tanggal']) && $_GET['tanggal'] != '')) {
            $tanggal = $_GET['tanggal'];
            $bulantahun = $tanggal;
        } else {
            $tanggal = date('d');
            $bulantahun = $tanggal;
        }

        $data['susunan'] = $this->db->query("SELECT * FROM data_susunan WHERE tanggal_siaran='$bulantahun' ORDER BY data_susunan.nama_acara")->result();

        $this->load->view('template_pegawai/header', $data);
        $this->load->view('template_pegawai/sidebar');
        $this->load->view('pegawai/scheduling/data_scheduling', $data);
        $this->load->view('template_pegawai/footer');
    }

    public function cetak_scheduling(){
        
        $data['title'] = "Cetak Scheduling Acara";

        if ((isset($_GET['tanggal']) && $_GET['tanggal'] != '')) {
            $tanggal = $_GET['tanggal'];
            $bulantahun = $tanggal;
        } else {
            $tanggal = date('d');
            $bulantahun = $tanggal;
        }

        $data['cetak_susunan'] = $this->db->query("SELECT * FROM data_susunan WHERE tanggal_siaran='$bulantahun' ORDER BY data_susunan.nama_acara")->result();

        $this->load->view('template_pegawai/header', $data);
        $this->load->view('pegawai/scheduling/cetak', $data);
        
        }
}
