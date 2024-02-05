<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

</div>
<!-- /.container-fluid -->

<div class="card" style="width: 60% ; margin-bottom: 100px">
    <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/data_acara/tambah_data_aksi') ?>" enctype="multipart/form-data">

            <div class="form-group">
                <label>ID Acara</label>
                <input type="number" name="id_acara" class="form-control">
                <?php echo form_error('id_acara', '<div class="text-small text-danger"> </div>') ?>
            </div>

            <div class="form-group">
                <label>ID Program</label>
                <input type="text" name="id_program" class="form-control">
                <?php echo form_error('id_program', '<div class="text-small text-danger"> </div>') ?>
            </div>

            <div class="form-group">
                <label>Nama Acara</label>
                <input type="text" name="nama_acara" class="form-control">
                <?php echo form_error('nama_acara', '<div class="text-small text-danger"> </div>') ?>
            </div>

            <div class="form-group">
                <label>Sifat Siaran</label>
                <select name="sifat_siaran" class="form-control">
                    <option value="">--Pilih Sifat Siaran--</option>
                    <option value="Tunda">Tunda</option>
                    <option value="Live">Live</option>
                </select>
                <?php echo form_error('sifat_siaran', '<div class="text-small text-danger"> </div>') ?>
            </div>

            <div class="form-group">
                <label>Jenis Program</label>
                <select name="jenis_program" class="form-control">
                    <option value="">--JENIS PROGRAM--</option>
                    <option value="Berita">Berita</option>
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Olahraga">Olahraga</option>
                    <option value="Hiburan">Hiburan</option>
                    <option value="Promo">Promo</option>
                </select>
                <?php echo form_error('sifat_siaran', '<div class="text-small text-danger"> </div>') ?>
            </div>

            <div class="form-group">
                <label>Photo</label>
                <input type="file" name="photo" class="form-control">
            </div>


            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <a href="<?php echo base_url('admin/data_acara') ?>" class="btn btn-warning">Kembali</a>

        </form>
    </div>
</div>