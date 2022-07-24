
<div class="container-fluid">
	<div class="main-content">
	<div class="section">
		<div class="section-header mb-3">
			<h1>NILA CAKE</h1>
		</div>
	</div>

<a href="<?php echo base_url('admin/data_cake/tambah_cake')?>" class="btn btn-primary mb-3">Tambah Data</a>

<?php echo $this->session->flashdata('pesan') ?>


<table class="table table-striped table-responsive table-bordered text-center">

	<tbody>
			<tr>
				
			
			<th>No</th>
			<th>Gambar</th>
		
			<th>Type Cake</th>
            
           
		
			
			<th>Status</th>
			<th colspan="3">Aksi</th>
			</tr>


	
		
		<?php 
		
		foreach ($cake as $mb ): ?>
			<tr>
		
		
			<td><?php echo  ++$start?></td>
			<td>
				<img width="100" src="<?php echo base_url(). 'assets/upload/'.$mb->gambar ?>">
			</td>
			<td><?php echo $mb->nama_cake?></td>
           
            
			<td><?php echo $mb->kode_type?></td>
			
		  
		   <td><?php
		   	if ($mb->status ==0) {
		   		echo "<span class='badge badge-warning'>tidak tersedia</span>";
		   	}else{

		   		echo "<span class='badge badge-success'> tersedia</span>";
		   	}
		   ?>
		 

		 
		  
<td><a href="<?php echo base_url('admin/data_cake/detail_cake/').$mb->id_cake?>"class= "btn btn-sm btn-info">Detail</a></td>
<td>		     <a href="<?php echo base_url('admin/data_cake/update_cake/').$mb->id_cake?>"class= "btn btn-sm btn-primary">Edit</a></td>
		   			<td><a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger"href="<?php echo base_url('admin/data_cake/delete_cake/'.$mb->id_cake)?>">Hapus</a></td>
		
			</tr>
		
		
    <?php endforeach; ?>

	</table>

    <?php 

        echo $this->pagination->create_links();

    ?>
</tbody>
</div>