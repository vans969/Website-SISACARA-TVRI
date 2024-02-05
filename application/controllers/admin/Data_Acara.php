<?php

class Data_Acara extends CI_Controller
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
		$data['title'] = "Data Acara";
		$data['acara'] = $this->ModelPenggajian->get_data('data_acara')->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/acara/data_acara', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_data()
	{
		$data['title'] = "Tambah Data Acara";
		$data['acara'] = $this->ModelPenggajian->get_data('data_acara')->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/acara/tambah_dataAcara', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_data_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_data();
		} else {
			$id_acara		= $this->input->post('id_acara');
			$id_program	    = $this->input->post('id_program');
			$nama_acara		= $this->input->post('nama_acara');
			$sifat_siaran	= $this->input->post('sifat_siaran');
			$jenis_program	= $this->input->post('jenis_program');
			$photo			= $_FILES['photo']['name'];
			if ($photo = '') {
			} else {
				$config['upload_path'] 		= './photo';
				$config['allowed_types'] 	= 'jpg|jpeg|png|tiff';
				$config['max_size']			= 	2048;
				$config['file_name']		= 	'acara-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('photo')) {
					echo "Photo Gagal Diupload !";
				} else {
					$photo = $this->upload->data('file_name');
				}
			}

			$data = array(
				'id_acara' 		=> $id_acara,
				'id_program' 	=> $id_program,
				'nama_acara' 	=> $nama_acara,
				'sifat_siaran' 	=> $sifat_siaran,
				'jenis_program' => $jenis_program,
				'photo' 		=> $photo,
			);

			$this->ModelPenggajian->insert_data($data, 'data_acara');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/data_acara');
		}
	}

	public function update_data($id)
	{
		$where = array('id_acara' => $id);
		$data['title'] = "Update Data Acara";
		$data['acara'] = $this->db->query("SELECT * FROM data_acara WHERE id_acara='$id'")->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/acara/update_dataAcara', $data);
		$this->load->view('template_admin/footer');
	}

	public function update_data_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update_data();
		} else {
			$id_acara		= $this->input->post('id_acara');
			$id_program	    = $this->input->post('id_program');
			$nama_acara		= $this->input->post('nama_acara');
			$sifat_siaran	= $this->input->post('sifat_siaran');
			$jenis_program	= $this->input->post('jenis_program');
			$photo			= $_FILES['photo']['name'];
			if ($photo) {
				$config['upload_path'] 		= './photo';
				$config['allowed_types'] 	= 'jpg|jpeg|png|tiff';
				$config['max_size']			= 	2048;
				$config['file_name']		= 	'acara-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('photo')) {
					$photo = $this->upload->data('file_name');
					$this->db->set('photo', $photo);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				'id_acara' 		=> $id_acara,
				'id_program' 	=> $id_program,
				'nama_acara' 	=> $nama_acara,
				'sifat_siaran' 	=> $sifat_siaran,
				'jenis_program' => $jenis_program,
				'photo' 		=> $photo,
			);

			$where = array(
				'id_acara' => $id_acara

			);

			$this->ModelPenggajian->update_data('data_acara', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/data_acara');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_acara', 'ID Acara', 'required');
		$this->form_validation->set_rules('id_program', 'ID Program', 'required');
		$this->form_validation->set_rules('nama_acara', 'Nama Acara', 'required');
		$this->form_validation->set_rules('sifat_siaran', 'Sifat Siaran', 'required');
		$this->form_validation->set_rules('jenis_program', 'Jenis Program', 'required');
	}

	public function delete_data($id)
	{
		$where = array('id_acara' => $id);
		$this->ModelPenggajian->delete_data($where, 'data_acara');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('admin/data_acara');
	}
}
