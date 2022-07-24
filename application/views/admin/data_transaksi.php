		<div class="main-content">
		<section class="section">
		<div class="section-header">
		<h1>Data Transaksi Pemesanan</h1>
		</div>
		<table rowspan="1" bgcolor="white" class="table table-bordered table-striped table-responsive">


		<tr>
		<th>No</th>
		<th>Pelanggan</th>
	
		<th>Nama cake</th>
		<th>Type</th>
	
		
		<th>Tgl.Pesan</th>
		<th>Tgl.Ambil</th>
		<th>Alamat </th>
		<th>No Hp </th>
		<th>Jumlah Pesanan</th>
		<th>Harga</th>
        <th>Total Pembayaran</th>
        <th>Pengiriman</th>
		<th>Status Ambil</th>
		<th>Status Pembelian</th>
		<th>Status Pembayaran</th>
		<th>Cek Pembayaran</th>
		<th>Action</th>
		</tr>

		<?php $no=1;
		foreach ($transaksi as $tr) :?>
		<tr>
		<td><?php echo $no++?></td>
		<td><?php echo $tr->nama?></td>
		<td><?php echo $tr->nama_cake?></td>
		<td><?php echo $tr->kode_type?></td>
		
		
		<td><?php echo date ('d/m/Y', strtotime($tr->tanggal_pesan));?></td>
		<td><?php echo date ('d/m/Y', strtotime($tr->tanggal_ambil));?></td>

		<td><?php echo $tr->alamat_lengkap?></td>

		<td><?php echo $tr->nohp?></td>

		<td><?php echo $tr->jml_pesan?></td>
		
		<td>Rp.<?php echo number_format($tr->harga,0,',','.')?></td>
		<td >Rp.<?php echo number_format($tr->jml_pesan*$tr->harga,0,',','.')?></td>
	<td><?php echo $tr->pengiriman?></td>

		


		<td>
		<?php echo $tr->status_pengambilan
		?></td>

		<td>
		<?php echo $tr->status_pesan?>
		</td>

	<td><?php if( $tr->status_pembayaran =='0'){ echo "Belum Lunas";
		}else{
			echo "Lunas";
		

			} ?>
				
			</td>
		</td>

		<td>
		<center>
		<?php 
		if(empty($tr->bukti_pembayaran)){?>

		<button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>

		<?php }else{ ?>
		<a class="btn btn-sm btn-primary"href="<?php echo base_url('admin/transaksi/pembayaran/'.$tr->id_pesan)?>"><i class="fas fa-check-circle"></i></a>
		<?php }?>
		</center>
		</td>

		<td>
		<?php
		if ($tr->status =="1"){
		echo "-";
		}else{?>
		<div class="row">
		<a class="btn btn-sm btn-success mr-2" href="<?php echo base_url('admin/transaksi/transaksi_selesai/'.$tr->id_pesan)?>">
			<i class='fas fa-check'></i></a>

	
		</div>

		
		


		<?php } ?>

		</td>


		</tr>
		<?php endforeach;?>


		</table>
		</div>
		</section>
		</div>