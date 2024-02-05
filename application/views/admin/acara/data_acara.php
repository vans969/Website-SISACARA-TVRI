<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
  </div>
  <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/data_acara/tambah_data') ?>"><i class="fas fa-plus"></i> Tambah Acara</a>
  <?php echo $this->session->flashdata('pesan') ?>
</div>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark">
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">ID Acara</th>
              <th class="text-center">ID Program</th>
              <th class="text-center">Nama Acara</th>
              <th class="text-center">Sifat Siaran</th>
              <th class="text-center">Jenis Program</th>
              <th class="text-center">Photo</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($acara as $a) : ?>
              <tr>
                <td class="text-center"><?php echo $no++ ?></td>
                <td class="text-center"><?php echo $a->id_acara ?></td>
                <td class="text-center"><?php echo $a->id_program ?></td>
                <td class="text-center"><?php echo $a->nama_acara ?></td>
                <td class="text-center"><?php echo $a->sifat_siaran ?></td>
                <td class="text-center"><?php echo $a->jenis_program ?></td>
                <td><img src="<?php echo base_url() . 'photo/' . $a->photo ?>" width="200px"></td>

                <td>
                  <center>
                    <a class="btn btn-sm btn-info" href="<?php echo base_url('admin/data_acara/update_data/' . $a->id_acara) ?>"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_acara/delete_data/' . $a->id_acara) ?>"><i class="fas fa-trash"></i></a>
                  </center>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>