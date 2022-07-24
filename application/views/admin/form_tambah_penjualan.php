<div class="main-content">
<section class="section">
<div class="section-header">
<h1>Data Penjualan</h1>
</div>

<div class="card">
<div class="card-body">

<form method="POST" action="<?php echo base_url('admin/penjualan/tambah_penjualan_aksi')?>" enctype="multipart/form-data">


<div class="row">
<div class="col-md-10">
<div class="form-group">
		


	
<div class="form-group">
	<label>Menu</label>
	<input type="text" name="menu" class="form-control">
	<?php echo form_error('menu' , '<div class="text-small text-danger">','</div>')?>
</div>



	
<div class="form-group">
	<label>Tgl.Penjualan</label>
	<input type="date" name="tgl_masuk" class="form-control">
	<?php echo form_error('tgl_masuk' , '<div class="text-small text-danger">','</div>')?>
</div>



<div class="form-group">
	<label>Harga</label>
	<input type="text" name="harga" class="form-control">
	<?php echo form_error('harga' , '<div class="text-small text-danger">','</div>')?>
</div>

<div class="form-group">
	<label>Stok</label>
	<input type="text" name="stok" class="form-control">
	<?php echo form_error('stok' , '<div class="text-small text-danger">','</div>')?>
</div>

<div class="form-group">
	<label>Sisa</label>
	<input type="text" name="sisa" class="form-control">

	<?php echo form_error('sisa' , '<div class="text-small text-danger">','</div>')?>
</div>

<div class="form-group">
	<label>Terjual</label>
	<input type="text" name="terjual" class="form-control">

	<?php echo form_error('terjual' , '<div class="text-small text-danger">','</div>')?>
</div>

<div class="form-group">
	<label>Total</label>
	<input type="text" name="total" class="form-control">

	<?php echo form_error('total' , '<div class="text-small text-danger">','</div>')?>
</div>



<button type="submit" class="btn btn-primary mt-4">Simpan</button>
<button type="reset" class="btn btn-danger mt-4">Reset</button>

</div>
</form>
</div>
</div>
</section>
</div>