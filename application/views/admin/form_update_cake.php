<div class="main-content">
<section class="section">
<div class="section-header">
<h1>Update Data Cake</h1>
</div>

<div class="card">
<div class="card-body">
<?php foreach ($cake as $mb) : ?>


<form method="POST" action="<?php echo base_url('admin/data_cake/update_cake_aksi')?>" enctype="multipart/form-data">


<div class="row">
<div class="col-md-4">
	<div class="form-group">
		<label>Type cake</label>
		<input type="hidden" name="id_cake" value="<?php echo $mb->id_cake?>">
		<select name="kode_type" class="form-control"><option value="<?php echo $mb->kode_type?>"><?php echo $mb->kode_type?></option>
		<?php foreach($type as $tp): ?>
			<option value="<?php echo $tp->kode_type?>"><?php echo $tp->nama_type?></option>
		<?php endforeach;?>

		</select>

		<?php echo form_error('kode_type' , '<div class="text-small text-danger">','</div>')?>
	</div>	

	<div class="form-group">
		<label>Nama cake</label>
		<input type="text" name="nama_cake" class="form-control" value="<?php echo $mb->nama_cake?>">
		<?php echo form_error('nama_cake' , '<div class="text-small text-danger">','</div>')?>
	</div>



	</div>
	<div class="col-md-4">
<div class="form-group">

<div class="form-group">
		<label>Status</label>
		<select name="status" class="form-control">
			
			<option <?php if($mb->status == "1"){echo "selected= 'selected'";}
			echo $mb->status;  ?> value ="1">Tersedia</option>

			<option <?php if($mb->status == "0"){echo "selected= 'selected'";}
			echo $mb->status;  ?> value ="0">Tidak Tersedia</option>


		</select>

		<?php echo form_error('status' , '<div class="text-small text-danger">','</div>')?>
	</div>
		<label>Harga</label>
		<input type="text" name="harga" class="form-control" value="<?php echo $mb->harga?>">

		<?php echo form_error('harga' , '<div class="text-small text-danger">','</div>')?>
	</div>


	<div class="form-group">
		<label>Gambar</label>
		<input type="file" name="gambar" class="form-control">
	</div>



	<button type="submit" class="btn btn-primary mt-4">Simpan</button>
	<button type="reset" class="btn btn-danger mt-4">Reset</button>

		

</div>
</div>
</form>

<?php endforeach;?>
</div>
</div>
</section>
</div>