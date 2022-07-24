		<div class="main-content">
		<section class="section">
		<div class="section-header">
		<h1>Penjualan</h1>
		</div>
		<div class="table-responsive">
			<a href="<?php echo base_url('admin/penjualan/tambah_penjualan')?>" class="btn btn-primary mb-3 ml-2">Tambah Data</a>

<?php echo $this->session->flashdata('pesan') ?>


		<table class="table table-bordered table-striped">


		<tr> 
		<th>Id</th>
		<th>Tgl Penjualan</th>
		<th>Menu</th>
		<th>Harga</th>
		<th>Stok</th>
		<th>Sisa</th>

		<th>Terjual</th>
		<th>Total</th>
		<th colspan="3">Action</th>
		
		
		</tr>

		<?php 
		foreach ($penjualan as $pj) :?>
		<tr>
		<td><?php echo  ++$start?></td>
	
		<td><?php echo date ('d/m/Y', strtotime($pj->tgl_masuk));?></td>
		<td><?php echo $pj->menu?></td>
		<td><?php echo number_format($pj->harga,0,',','.') ?></td>
		<td><?php echo $pj->stok?></td>
		<td><?php echo $pj->sisa?></td>
		<td><?php echo $pj->terjual?></td>
		<td><?php echo number_format($pj->total,0,',','.') ?></td>
		
		

	
			
			
		



			<td><a href="<?php echo base_url('admin/penjualan/update_penjualan/').$pj->id_menu?>"class= "btn btn-sm btn-primary">Edit</a></td>

<td><a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger"href="<?php echo base_url('admin/penjualan/delete_penjualan/'.$pj->id_menu)?>">Hapus</a></td>
		
			</tr>

		</tr>
		<?php endforeach;?>

		</table>
<?php 

echo $this->pagination->create_links();
 ?>

		</div>
		</section>
		</div>


