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

        <?php foreach ($acara as $a) : ?>
            <form method="POST" action="<?php echo base_url('admin/data_acara/update_data_aksi') ?>" enctype="multipart/form-data">

                <div class="form-group">
                    <label>ID Acara</label>
                    <input type="number" name="id_acara" class="form-control" value="<?php echo $a->id_acara ?>">
                    <?php echo form_error('id_acara', '<div class="text-small text-danger"> </div>') ?>
                </div>

                <div class="form-group">
                    <label>ID Program</label>
                    <input type="text" name="id_program" class="form-control" value="<?php echo $a->id_program ?>">
                    <?php echo form_error('id_program', '<div class="text-small text-danger"> </div>') ?>
                </div>

                <div class="form-group">
                    <label>Nama Acara</label>
                    <input type="text" name="nama_acara" class="form-control" value="<?php echo $a->nama_acara ?>">
                    <?php echo form_error('nama_acara', '<div class="text-small text-danger"> </div>') ?>
                </div>

                <div class="form-group">
                    <label>Sifat Siaran</label>
                    <select name="sifat_siaran" class="form-control" value="<?php echo $a->sifat_siaran ?>">
                        <option value="<?php echo $a->sifat_siaran ?>"><?php echo $a->sifat_siaran ?></option>
                        <option value="Tunda">Tunda</option>
                        <option value="Live">Live</option>
                    </select>
                    <?php echo form_error('sifat_siaran', '<div class="text-small text-danger"> </div>') ?>
                </div>

                <div class="form-group">
                    <label>Jenis Program</label>
                    <select name="jenis_program" class="form-control" value="<?php echo $a->jenis_program ?>">
                        <option value="<?php echo $a->jenis_program ?>"><?php echo $a->jenis_program ?></option>
                        <option value="Berita">Berita</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Olahraga">Olahraga</option>
                        <option value="Hiburan">Hiburan</option>
                        <option value="Promo">promo</option>
                    </select>
                    <?php echo form_error('jenis_program', '<div class="text-small text-danger"> </div>') ?>
                </div>

                <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="photo" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="<?php echo base_url('admin/data_acara') ?>" class="btn btn-warning">Kembali</a>

            </form>
        <?php endforeach; ?>
    </div>
</div>