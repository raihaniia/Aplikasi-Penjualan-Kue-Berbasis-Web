<div class="main-content">
	<section class="section">
		<div class="section-header"><h1>Data Transaksi Pemesanan</h1>
</div>
</section>

<?php foreach($transaksi as $tr) :?>
<form method="POST" action="<?php echo base_url ('admin/transaksi/transaksi_selesai_aksi')?>">
<input type="hidden" name="id_pesan" value="<?php echo $tr->id_pesan?>">

<div class="form-group">
	<label>Tanggal 	Ambil Cake</label>
	<input type="date" name="tanggal_ambil" class="form-control" value="<?php echo $tr->tanggal_ambil?>">
</div>

<div class="form-group">
	<label>Status Pengambilan Cake</label>
	<select name="status_pengambilan" class="form-control">
		<option value="<?php echo $tr->status_pengambilan?>"><?php echo $tr->status_pengambilan?></option>

		<option value="Cake Sudah Diambil">Cake Sudah Diambil</option>
		<option value="Cake Belum Diambil">Cake Belum Diambil</option>
	</select>
</div>

<div class="form-group">
	<label>Status Pembelian Cake</label>
	<select name="status_pesan" class="form-control">
		<option value="<?php echo $tr->status_pesan?>"><?php echo $tr->status_pesan?></option>

		<option value="Selesai">Selesai</option>
		<option value="Belum Selesai">Belum Selesai</option>
	</select>
</div>

<button type="submit" class="btn btn-sm  btn-success">Save</button>
</form>
<?php endforeach; ?>
</div>