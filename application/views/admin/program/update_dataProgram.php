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
		<?php foreach ($program as $pr) : ?>
			<form method="POST" action="<?php echo base_url('admin/data_program/update_data_aksi') ?>">

				<div class="form-group">
					<label>ID Program</label>
					<input type="text" name="id_program" class="form-control" value="<?php echo $pr->id_program ?>">
					<?php echo form_error('id_program', '<div class="text-small text-danger"> </div>') ?>
				</div>

				<div class="form-group">
					<label>Jenis Program</label>
					<input type="text" name="jenis_program" class="form-control" value="<?php echo $pr->jenis_program ?>">
					<?php echo form_error('jenis_program', '<div class="text-small text-danger"> </div>') ?>
				</div>

				<div class="form-group">
					<label>Tanggal Pembuatan</label>
					<input type="date" name="tanggal_pembuatan" class="form-control" value="<?php echo $pr->tanggal_pembuatan ?>">
					<?php echo form_error('tanggal_pembuatan', '<div class="text-small text-danger"> </div>') ?>
				</div>

				<div class="form-group">
					<label>Tahun Pembuatan</label>
					<input type="number" name="tahun_pembuatan" class="form-control" value="<?php echo $pr->tahun_pembuatan ?>">
					<?php echo form_error('uang_makan', '<div class="text-small text-danger"> </div>') ?>
				</div>

				<button type="submit" class="btn btn-success">Simpan</button>
				<a href="<?php echo base_url('admin/data_program') ?>" class="btn btn-warning">Kembali</a>

			</form>
		<?php endforeach; ?>
	</div>
</div>