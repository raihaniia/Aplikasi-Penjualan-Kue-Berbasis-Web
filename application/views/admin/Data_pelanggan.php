<div class="main-content">
		<section class="section">
		<div class="section-header">
		<h1>Data Pelanggan</h1>
		</div>
		<div class="table-responsive">	

<a href="<?php echo base_url('admin/data_pelanggan/tambah_pelanggan')?>" class="btn btn-primary mb-3">Tambah pelanggan</a>

<?php echo $this->session->flashdata('pesan') ?>

<table class="table table-striped  table-bordered text-center">
		<tr>	
			
		<th>No</th>
		<th>Nama</th>
		<th>Username</th>
		<th>Password</th>
        <th>Role Id</th>
		<th colspan="2">Aksi</th>
	    </tr>
			

	
		<?php 
		$no=1;
		foreach ($pelanggan as $cs):	?>
			<tr>
			
			<td><?php echo $no++ ?></td>
			<td><?php echo $cs->nama ?></td>
			<td><?php echo $cs->username ?></td>
			<td><?php echo $cs->password ?></td>
            <td><?php echo $cs->role_id ?></td>
					
			

					<td><a href="<?php echo base_url('admin/data_pelanggan/update_pelanggan/').$cs->id_pelanggan?>" class="btn btn-sm btn-primary">edit</a></td>
	
				<td><a onclick="return confirm('Yakin Hapus?')" href="<?php echo base_url('admin/data_pelanggan/delete_pelanggan/').$cs->id_pelanggan?>" class="btn btn-sm btn-danger ">hapus</a></td>
	</tr>
		
    <?php endforeach; ?>
		
	</table>
</div>



