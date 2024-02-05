<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mx-auto" style="width: 35%">
        <div class="card-header bg-primary text-white text-center">
            FIlter Laporan Scheduling Acara
        </div>

        <form method="POST" action="<?php echo base_url('admin/laporan_scheduling/cetak_laporan_gaji') ?>">
            <div class="card-body">
                <div class="form-group row">
                    <label for="staticEmail2">Tanggal Siaran</label>
                    <input type="date" name="tanggal" class="form-control ml-3">
                    <div class="col-sm-9 mt-5">

                    </div>
                    <button style="width: 100%" type="submit" class="btn btn-primary"><i class="fas fa-print"></i>Cetak Scheduling</button>
                </div>
        </form>
    </div>
    <!-- /.container-fluid -->