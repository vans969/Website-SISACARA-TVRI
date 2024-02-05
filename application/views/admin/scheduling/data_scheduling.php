<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card mb-6">
        <div class="card-header bg-primary text-white">
            Filter Data Scheduling Program Acara
        </div>
        <div class="card-body">
            <form class="form-inline">
                <div class="form-group mb-2">
                    <label for="staticEmail2">Tanggal Siaran</label>
                    <input type="date" name="tanggal" class="form-control ml-3">
                </div>

                <?php

                if ((isset($_GET['tanggal']) && $_GET['tanggal'] != '')) {
                    $tanggal = $_GET['tanggal'];
                    $bulantahun = $tanggal;
                } else {
                    $tanggal = date('d');
                    $bulantahun = $tanggal;
                }
                ?>

                <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fas fa-eye"></i> Tampilkan Data</button>

                <?php if (count($susunan) > 0) { ?>
                    <a href="<?php echo base_url('admin/data_scheduling/cetak_scheduling?tanggal=' . $tanggal) ?>" class="btn btn-success mb-2 ml-3"><i class="fas fa-print"></i> Cetak Daftar Gaji</a>
                <?php } else { ?>
                    <button type="button" class="btn btn-success mb-2 ml-3" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-print"></i> Cetak Daftar Scheduling</button>
                <?php } ?>
            </form>
        </div>
    </div>
</div>
             <?php

                if ((isset($_GET['tanggal']) && $_GET['tanggal'] != '')) {
                    $tanggal = $_GET['tanggal'];
                    $bulantahun = $tanggal;
                } else {
                    $tanggal = date('d');
                    $bulantahun = $tanggal;
                }
                ?>

<div class="alert alert-info">
    Menampilkan Data Scheduling Acara Tanggal: <span class="font-weight-bold"><?php echo $tanggal ?></span></span>
</div>

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
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data gaji masih kosong, silahkan input absensi terlebih dahulu pada bulan dan tahun yang Anda pilih.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>