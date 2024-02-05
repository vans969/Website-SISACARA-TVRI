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
        <?php foreach ($susunan as $su) : ?>
            <form method="POST" action="<?php echo base_url('admin/data_susunan/update_data_aksi') ?>">

                <div class="form-group">
                    <label>ID Acara</label>
                    <input type="text" name="id_acara" class="form-control" value="<?php echo $su->id_acara ?>">
                    <?php echo form_error('id_acara', '<div class="text-small text-danger"> </div>') ?>
                </div>

                <div class="form-group">
                    <label>ID Program</label>
                    <input type="text" name="id_program" class="form-control" value="<?php echo $su->id_program ?>">
                    <?php echo form_error('id_program', '<div class="text-small text-danger"> </div>') ?>
                </div>

                <div class="form-group">
                    <label>Tanggal Siaran</label>
                    <input type="date" name="tanggal_siaran" class="form-control" value="<?php echo $su->tanggal_siaran ?>">
                    <?php echo form_error('tanggal_siaran', '<div class="text-small text-danger"> </div>') ?>
                </div>

                <div class="form-group">
                    <label>Waktu Siaran</label>
                    <input type="time" name="waktu_siaran" class="form-control" value="<?php echo $su->waktu_siaran ?>">
                    <?php echo form_error('waktu_siaran', '<div class="text-small text-danger"> </div>') ?>
                </div>

                <div class="form-group">
                    <label>Nama Acara</label>
                    <input type="text" name="nama_acara" class="form-control" value="<?php echo $su->nama_acara ?>">
                    <?php echo form_error('nama_acara', '<div class="text-small text-danger"> </div>') ?>
                </div>

                <div class="form-group">
                    <label>Sifat Siaran</label>
                    <select name="sifat_siaran" class="form-control" value="<?php echo $su->sifat_siaran ?>">
                        <option value="">--Pilih Sifat Siaran--</option>
                        <option value="Tunda">Tunda</option>
                        <option value="Live">Live</option>
                    </select>
                    <?php echo form_error('sifat_siaran', '<div class="text-small text-danger"> </div>') ?>
                </div>

                <div class="form-group">
                    <label>Durasi</label>
                    <input type="text" name="durasi" class="form-control" value="<?php echo $su->durasi ?>">
                    <?php echo form_error('durasi', '<div class="text-small text-danger"> </div>') ?>
                </div>

                <div class="form-group">
                    <label>Jenis Program</label>
                    <select name="jenis_program" class="form-control" value="<?php echo $su->jenis_program ?>">
                        <option value="">--JENIS PROGRAM--</option>
                        <option value="Berita">Berita</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Olahraga">Olahraga</option>
                        <option value="Hiburan">Hiburan</option>
                        <option value="Promo">promo</option>
                    </select>
                    <?php echo form_error('sifat_siaran', '<div class="text-small text-danger"> </div>') ?>
                </div>

                <div class="form-group">
                    <label>Simbol Usia</label>
                    <select name="simbol_usia" class="form-control" value="<?php echo $su->simbol_usia ?>">
                        <option value="">--JENIS PROGRAM--</option>
                        <option value="SU2+">SU2+</option>
                        <option value="R13+">R13+</option>
                        <option value="D18+">D18+</option>
                    </select>
                    <?php echo form_error('simbol_usia', '<div class="text-small text-danger"> </div>') ?>
                </div>


                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="<?php echo base_url('admin/data_susunan') ?>" class="btn btn-warning">Kembali</a>

            </form>
        <?php endforeach; ?>
    </div>
</div>