
<div class="container-fluid">
<div class="main-content">
<div class="section">
	<div class="section-header mb-3" >
		<h1>Data Cake (REQUEST)</h1>
	</div>
</div>

<div class="container-fluid">
<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_cake"><i class="fas fa-plus fa-sm"></i>Tambah Cake</button>


<table class="table table-striped table-responsive text-center">
	
	<br><br>
	<tr>
		<th>No</th>
		<th>Nama Cake</th>
		<th>Keterangan</th>
		<th>Kategori</th>
		<th>Harga</th>
		<th>Jumlah Pesan</th>
		<th colspan="3">Aksi</th>
</tr>
<?php 
$no=1;
foreach($cake as $c): ?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $c->nama_cake ?></td>
<td><?php echo $c->keterangan ?></td>
<td><?php echo $c->kategori ?></td>
<td><?php echo $c->harga_cake ?></td>
<td><?php echo $c->pesan_cake ?></td>
<td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
<td><a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/tb_master/update_master/'.$c->id_cake)?>"><i class="fa fa-edit"></i></a></td>
<td><?php echo anchor('admin/tb_master/hapus/'.$c->id_cake,'<div class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></div>')?></td>




<?php endforeach; ?>


	</tr>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_cake" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    <form action="<?php echo base_url().'admin/tb_master/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

    	<div class="form-group">
    		<label>Nama Cake</label>
    		<input type="text" name="nama_cake" class="form-control">
    	</div>

    	<div class="form-group">
    		<label>Keterangan</label>
    		<input type="text" name="keterangan" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Kategori</label>
    		<input type="text" name="kategori" class="form-control">
    	</div>

    	<div class="form-group">
    		<label>Harga</label>
    		<input type="text" name="harga_cake" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>pesan</label>
    		<input type="text" name="pesan_cake" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Gambar Produk</label><br>
    		<input type="file" name="gambar" class="form-control">
    	</div>

    	
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
  
</form>
</div>
</div>
</div>