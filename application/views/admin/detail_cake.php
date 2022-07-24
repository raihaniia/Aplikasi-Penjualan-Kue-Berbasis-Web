<div class="main-content">
<section class="section">
<div class="section-header">
<h1>Detail Cake</h1>
</div>
</section>

<?php foreach ($detail as $dt) : ?>

<div class="card">
<div class="card-body">
	<div class="row">
		
		<div class="col-md-4">
			<img width= "200px" src="<?php echo base_url().'assets/upload/'.$dt->gambar ?>">
		</div>
		<div class="col-md-6">
			<table class="table">
				<tr>
					<td>Type cake</td>
					<td>
				<?php echo $dt->kode_type?></td>
						</td>
				</tr>
				<tr>


					<td>Nama cake</td>
					<td><?php echo $dt->nama_cake?></td>
				</tr>

		

				

				<tr>
					<td>Harga </td>
					<td>Rp. <?php echo number_format($dt->harga,0,',','.') ?></td>
				</tr>

		

				<td>Status</td>
				<td>
					<?php 
					if($dt->status =="0"){
						echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
					}else{
						echo "<span class='badge badge-info'> Tersedia</span>";
					}
					?>
					</td>
			</tr>

			

				


			</table>

			<a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_cake')?>">Kembali</a>


			<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_cake/update_cake/'.$dt->id_cake)?>">Update</a>
		</div>
			
	</div>
</div>
</div>
<?php endforeach; ?>
</div>