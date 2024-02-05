<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/data_susunan/tambah_data') ?>"><i class="fas fa-plus"></i> Tambah Acara</a>
    <?php echo $this->session->flashdata('pesan') ?>

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="180%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">ID Acara</th>
                                <th class="text-center">ID Program</th>
                                <th class="text-center">Tanggal Siaran</th>
                                <th class="text-center">Waktu Siaran</th>
                                <th class="text-center">Nama Acara</th>
                                <th class="text-center">Sifat Siaran</th>
                                <th class="text-center">Durasi</th>
                                <th class="text-center">Jenis Program</th>
                                <th class="text-center">Simbol Usia</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($susunan as $su) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center"><?php echo $su->id_acara ?></td>
                                    <td class="text-center"><?php echo $su->id_program ?></td>
                                    <td class="text-center"><?php echo $su->tanggal_siaran ?></td>
                                    <td class="text-center"><?php echo $su->waktu_siaran ?></td>
                                    <td class="text-center"><?php echo $su->nama_acara ?></td>
                                    <td class="text-center"><?php echo $su->sifat_siaran ?></td>
                                    <td class="text-center"><?php echo $su->durasi ?></td>
                                    <td class="text-center"><?php echo $su->jenis_program ?></td>
                                    <td class="text-center"><?php echo $su->simbol_usia ?></td>
                                    <td>
                                        <center>
                                            <a class="btn btn-sm btn-info" href="<?php echo base_url('admin/data_susunan/update_data/' . $su->id_acara) ?>"><i class="fas fa-edit"></i></a>
                                            <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_susunan/delete_data/' . $su->id_acara) ?>"><i class="fas fa-trash"></i></a>
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