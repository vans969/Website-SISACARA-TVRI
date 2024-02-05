<?php

class Data_Program extends CI_Controller
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
        $data['title'] = "Data Program";
        $data['program'] = $this->ModelPenggajian->get_data('program_acara')->result();

        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/program/data_program', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_data()
    {
        $data['title'] = "Tambah Data program";

        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/program/tambah_dataProgam', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_data();
        } else {
            $id_program    = $this->input->post('id_program');
            $jenis_program        = $this->input->post('jenis_program');
            $tanggal_pembuatan    = $this->input->post('tanggal_pembuatan');
            $tahun_pembuatan        = $this->input->post('tahun_pembuatan');

            $data = array(
                'id_program'     => $id_program,
                'jenis_program'     => $jenis_program,
                'tanggal_pembuatan'     => $tanggal_pembuatan,
                'tahun_pembuatan'     => $tahun_pembuatan,
            );

            $this->ModelPenggajian->insert_data($data, 'program_acara');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('admin/data_program');
        }
    }

    public function update_data($id)
    {
        $where = array('id_program' => $id);
        $data['program'] = $this->db->query("SELECT * FROM program_acara WHERE id_program= '$id'")->result();
        $data['title'] = "Update Data Program";

        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/program/update_dataProgram', $data);
        $this->load->view('template_admin/footer');
    }

    public function update_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_data();
        } else {
            $id_program                = $this->input->post('id_program');
            $jenis_program      = $this->input->post('jenis_program');
            $tanggal_pembuatan        = $this->input->post('tanggal_pembuatan');
            $tahun_pembuatan    = $this->input->post('tahun_pembuatan');

            $data = array(
                'id_program'     => $id_program,
                'jenis_program'     => $jenis_program,
                'tanggal_pembuatan'     => $tanggal_pembuatan,
                'tahun_pembuatan'     => $tahun_pembuatan,
            );

            $where = array(
                'id_program' => $id_program
            );

            $this->ModelPenggajian->update_data('program_acara', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('admin/data_program');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_program', 'ID Program', 'required');
        $this->form_validation->set_rules('jenis_program', 'Jenis Program', 'required');
        $this->form_validation->set_rules('tanggal_pembuatan', 'Tanggal Pembuatan', 'required');
        $this->form_validation->set_rules('tahun_pembuatan', 'Tahun Pembuatan', 'required');
    }

    public function delete_data($id)
    {
        $where = array('id_program' => $id);
        $this->ModelPenggajian->delete_data($where, 'program_acara');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
        redirect('admin/data_program');
    }
}
