		<div class="main-content">
		<section class="section">
		<div class="section-header">
		<h1>Transaksi Pembayaran</h1>
		</div>
		<div class="table-responsive">
			<a href="<?php echo base_url('admin/pembayaran/tambah_pembayaran')?>" class="btn btn-primary mb-3 ml-2">Tambah Data</a>

<?php echo $this->session->flashdata('pesan') ?>


		<table class="table table-bordered table-striped">


		<tr> 
		<th>Id</th>
		<th>No Resi</th>
		<th>Pengirim</th>
		<th>Rekening</th>
		<th>Bank</th>
		<th>Status Pembayaran</th>
		<th colspan="2">Action</th>
		
		
		</tr>

		<?php $no=1;
		foreach ($pembayaran as $p) :?>
		<tr>
		<td><?php echo $no++?></td>
		<td><?php echo $p->no_resi?></td>
		<td><?php echo $p->nama?></td>
		<td><?php echo $p->no_rek?></td>
		<td><?php echo $p->bank?></td>

	
			
			
			<td><?php if( $p->status_pembayaran =='Belum Lunas'){ echo "Belum Lunas";
		}else{
			echo "Lunas";
		

			} ?>
				
			</td>



			<td><a href="<?php echo base_url('admin/pembayaran/update_pembayaran/').$p->id_pembayaran?>"class= "btn btn-sm btn-primary">Edit</a></td>

		     <td><a href="<?php echo base_url('admin/pembayaran/delete_pembayaran/').$p->id_pembayaran?>" class= "btn btn-sm btn-danger">Hapus</a></td>



		</tr>
		<?php endforeach;?>
		</table>
		</div>
		</section>
		</div>

