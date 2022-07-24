<div class="main-content">
	<section class="section">
		<div class="section-header">
		<h1>Laporan Pemesanan</h1>
	</div>
	</section>

	<form method="POST" action="<?php echo base_url('admin/laporan')?>">
		<div class="form-group">
			<label>Dari Tanggal</label>
			<input type="date" name="dari" class="form-control">
			<?php echo form_error('dari', '<span class="text-small text-danger">','</span>')?>
		</div>

		<div class="form-group">
			<label>Sampai Tanggal</label>
			<input type="date" name="sampai" class="form-control">
			<?php echo form_error('sampai', '<span class="text-small text-danger">','</span>')?>
		</div>
		<button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i>Tampilkan Data</button>

		
	</form><hr>


	<div class="btn-group">
		<a class="btn btn-sm btn-success" target="_blank" href="<?php echo base_url().'admin/laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai')?>"><i class="  fas fa-print"></i> print</a>
	</div>
	<div class="table-responsive">
    
		<table class="table table-bordered table-striped">


		<tr>
		<th>No</th>
		<th>Pelanggan</th>
        	<th>Tanggal Pesan</th>
            	<th>Tanggal Ambil</th>
		<th>Nama Cake</th>
        
		<th>Type Cake</th>
		<th>Alamat</th>
		<th>Nomor Hp</th>
		<th>Jumlah Pesanan</th>
		<th>Harga</th>
		<th>Total Bayar</th>
		<th>Status Pengambilan Cake</th>
		<th>Status Pemesanan</th>
		<th>Status Pembayaran</th>
		
		
		</tr>

		<?php $harga=0;?>
		<?php $no=1;
		foreach ($laporan as $tr) :?>
		<?php $harga += $tr->harga*$tr->jml_pesan?>
        <br>
        

        <tr>
        
		<td><?php echo $no++?></td>
		<td><?php echo $tr->nama?></td>
    <td><?php echo date ('d/m/Y', strtotime($tr->tanggal_pesan));?></td>
        <td><?php echo date ('d/m/Y', strtotime($tr->tanggal_ambil));?></td>
		<td><?php echo $tr->nama_cake?></td>
		<td><?php echo $tr->kode_type?></td>	
		<td><?php echo $tr->alamat_lengkap?></td>
			<td><?php echo $tr->nohp?></td>
			<td><?php echo $tr->jml_pesan ?></td>




	
	<td ><?php echo number_format($tr->harga,0,',','.')?></td>
    	
	<td ><?php echo number_format($tr->harga*$tr->jml_pesan,0,',','.')?></td>
	<td>
	<?php echo $tr->status_pengambilan
	?></td>

	<td><?php echo $tr->status_pesan?></td>
		<td><?php if( $tr->status_pembayaran =='0'){ echo "Belum Lunas";
	}else{
		echo "Lunas";
	
		} ?>
			
	</tr>

		<?php endforeach;?>

		<tr>
    	<td style="font-weight: bold; color: red"><b> TOTAL<td colspan="10" align="right" >Rp.<?php echo number_format($harga) ?></b></td>
 	</tr>


		</table>


	
	
		</div>
</div>

