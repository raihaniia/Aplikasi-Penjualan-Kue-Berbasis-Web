<div class="container-fluid">
	<div class="main-content">
	<div class="section">
		<div class="section-header ml-2">
<h1>Data Type Cake</h1>
</div>
</div>


<a href="<?php echo base_url('admin/data_type/tambah_type')?>" class="btn btn-primary mb-3 ml-2">Tambah Type</a>

<?php echo $this->session->flashdata('pesan')?>


<table class="table table-striped  table-bordered text-center">

<tr>
<th width="10px">No</th>
<th>Kode Type</th>
<th>Nama Type</th>
<th colspan="2" >Aksi</th>
</tr>



<?php 


foreach($type as $tp) :?>

<tr>
<td><?php echo ++$start?></td>
<td><?php echo $tp->kode_type?></td>
<td><?php echo $tp->nama_type?></td>


<td><a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_type/update_type/'.$tp->id_type)?>">edit</a></td>

			<td><a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger"href="<?php echo base_url('admin/data_type/delete_type/'.$tp->id_type)?>">Hapus</a></td>
		
			</tr>
		

<?php endforeach;?>

</table>

<?php 

echo $this->pagination->create_links();
 ?>

</div>

