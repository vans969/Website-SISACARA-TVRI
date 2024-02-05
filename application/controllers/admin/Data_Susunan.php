<?php

class Data_Susunan extends CI_Controller
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
        $data['title'] = "Data Scheduling Acara";
        $data['susunan'] = $this->ModelPenggajian->get_data('data_susunan')->result();

        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/susunan/data_susunan', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_data()
    {
        $data['title'] = "Tambah Acara";

        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/susunan/tambah_dataSusunan', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_data();
        } else {
            $id_acara        = $this->input->post('id_acara');
            $id_program    = $this->input->post('id_program');
            $tanggal_siaran        = $this->input->post('tanggal_siaran');
            $waktu_siaran    = $this->input->post('waktu_siaran');
            $nama_acara        = $this->input->post('nama_acara');
            $sifat_siaran        = $this->input->post('sifat_siaran');
            $durasi        = $this->input->post('durasi');
            $jenis_program        = $this->input->post('jenis_program');
            $simbol_usia        = $this->input->post('simbol_usia');

            $data = array(
                'id_acara'     => $id_acara,
                'id_program'     => $id_program,
                'tanggal_siaran'     => $tanggal_siaran,
                'waktu_siaran'     => $waktu_siaran,
                'nama_acara'     => $nama_acara,
                'sifat_siaran'     => $sifat_siaran,
                'durasi'     => $durasi,
                'jenis_program'     => $jenis_program,
                'simbol_usia'     => $simbol_usia,
            );

            $this->ModelPenggajian->insert_data($data, 'data_susunan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('admin/data_susunan');
        }
    }

    public function update_data($id)
    {
        $where = array('id_acara' => $id);
        $data['susunan'] = $this->db->query("SELECT * FROM data_susunan WHERE id_acara = '$id'")->result();
        $data['title'] = "Update Data Scheduling";

        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/susunan/update_dataSusunan', $data);
        $this->load->view('template_admin/footer');
    }

    public function update_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_data();
        } else {
            $id_acara        = $this->input->post('id_acara');
            $id_program    = $this->input->post('id_program');
            $tanggal_siaran        = $this->input->post('tanggal_siaran');
            $waktu_siaran    = $this->input->post('waktu_siaran');
            $nama_acara        = $this->input->post('nama_acara');
            $sifat_siaran        = $this->input->post('sifat_siaran');
            $durasi        = $this->input->post('durasi');
            $jenis_program        = $this->input->post('jenis_program');
            $simbol_usia        = $this->input->post('simbol_usia');

            $data = array(
                'id_acara'     => $id_acara,
                'id_program'     => $id_program,
                'tanggal_siaran'     => $tanggal_siaran,
                'waktu_siaran'     => $waktu_siaran,
                'nama_acara'     => $nama_acara,
                'sifat_siaran'     => $sifat_siaran,
                'durasi'     => $durasi,
                'jenis_program'     => $jenis_program,
                'simbol_usia'     => $simbol_usia,
            );

            $where = array(
                'id_acara' => $id_acara
            );

            $this->ModelPenggajian->update_data('data_susunan', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('admin/data_susunan');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_acara', 'ID Acara', 'required');
        $this->form_validation->set_rules('id_program', 'ID Program', 'required');
        $this->form_validation->set_rules('tanggal_siaran', 'Tanggal Siaran', 'required');
        $this->form_validation->set_rules('waktu_siaran', 'Waktu Siaran', 'required');
        $this->form_validation->set_rules('nama_acara', 'Nama Acara', 'required');
        $this->form_validation->set_rules('sifat_siaran', 'Sifat Siaran', 'required');
        $this->form_validation->set_rules('durasi', 'Durasi', 'required');
        $this->form_validation->set_rules('jenis_program', 'Jenis Program', 'required');
        $this->form_validation->set_rules('simbol_usia', 'Simbol Usia', 'required');
    }

    public function delete_data($id)
    {
        $where = array('id_acara' => $id);
        $this->ModelPenggajian->delete_data($where, 'data_susunan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
        redirect('admin/data_susunan');
    }
}
