<div class="main-content ml-2">
	<div class="section">
		<div class="section-header">
			<h1>Tambah Type Cake</h1>
		</div>
	</div>

	<form method="post" action="<?php echo base_url('admin/data_type/tambah_type_aksi')?>">
		
		<div class="form-group">
			<label>Kode Type</label>
			<input type="text" name="kode_type" class="form-control">
			<?php echo form_error('kode_type' , '<div class="text-small text-danger">','</div>')?>


		</div>

		<div class="form-group">
			<label>Nama Type</label>
			<input type="text" name="nama_type" class="form-control">
			<?php echo form_error('nama_type' , '<div class="text-small text-danger">','</div>')?>


		</div>

			<button type="submit" class="btn btn-primary">Simpan</button>
			<button type="reset" class="btn btn-danger">Reset</button>


	</form>


</div>

