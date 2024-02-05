<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/data_program/tambah_data') ?>"><i class="fas fa-plus"></i> Tambah Program</a>
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
                            <th class="text-center">ID Program</th>
                            <th class="text-center">Jenis Program</th>
                            <th class="text-center">Tanggal Pembuatan</th>
                            <th class="text-center">Tahun Pembuatan</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($program as $pr) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $pr->id_program ?></td>
                                <td class="text-center"><?php echo $pr->jenis_program ?></td>
                                <td class="text-center"><?php echo $pr->tanggal_pembuatan ?></td>
                                <td class="text-center"><?php echo $pr->tahun_pembuatan ?></td>

                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-info" href="<?php echo base_url('admin/data_program/update_data/' . $pr->id_program) ?>"><i class="fas fa-edit"></i></a>
                                        <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_program/delete_data/' . $pr->id_program) ?>"><i class="fas fa-trash"></i></a>
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