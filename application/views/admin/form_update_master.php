<div class="main-content ml-2">
	<div class="section">
		<div class="section-header">
			<h1>Update Data Cake (Request)</h1>
		</div>
	</div>

	<?php foreach ($cake as $c) : ?>
	<form method="post" action="<?php echo base_url('admin/tb_master/update_master_aksi')?>">
		
		<div class="form-group">
			<label>Nama Cake</label>
			<input type="hidden" name="id_cake" value="<?php echo $c->id_cake?>">
			<input type="text" name="nama_cake" class="form-control" value="<?php echo $c->nama_cake ?>"> 
			<?php echo form_error('nama_cake' , '<div class="text-small text-danger">','</div>')?>


		</div>

		<div class="form-group">
			<label>Keterangan</label>
			<input type="text" name="keterangan" class="form-control" value="<?php echo $c->keterangan?>">
			<?php echo form_error('keterangan' , '<div class="text-small text-danger">','</div>')?>


		</div>

		<div class="form-group">
			<label>kategori</label>
			<input type="text" name="kategori" class="form-control" value="<?php echo $c->kategori?>">
			<?php echo form_error('kategori' , '<div class="text-small text-danger">','</div>')?>


		</div>
			<div class="form-group">
			<label>harga_cake</label>
			<input type="text" name="harga_cake" class="form-control" value="<?php echo $c->harga_cake?>">
			<?php echo form_error('harga_cake' , '<div class="text-small text-danger">','</div>')?>


		</div>

			<div class="form-group">
			<label>pesan_cake</label>
			<input type="text" name="pesan_cake" class="form-control" value="<?php echo $c->pesan_cake?>">
			<?php echo form_error('pesan_cake' , '<div class="text-small text-danger">','</div>')?>


		</div>

			<button type="submit" class="btn btn-primary">Simpan</button>
			<button type="reset" class="btn btn-danger">Reset</button>


	</form>

<?php endforeach; ?>


</div>

