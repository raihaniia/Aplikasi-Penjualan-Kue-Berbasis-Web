<div class="container mt-2  mb-5">
<div class="row">
<div class="col-md-8">
<div class="card" style="margin-top: 150px">
<div class="card-header alert alert-success">
	Pembayaran Anda
</div>
<div class="card-body">
	<table class="table">
		<?php foreach($transaksi as $tr) :?>
	

		<tr>

			<th>Nama Cake</th>
			<td>:</td>
			<td><?php echo $tr->nama_cake?></td>
		</tr>

			<tr>
			
			<th>Type Cake</th>
			<td>:</td>
			<td><?php echo $tr->kode_type?></td>
		</tr>


		<tr>
			<th>Tanggal Beli</th>
			<td>:</td>
			<td><?php echo date ('d-m-Y', strtotime($tr->tanggal_pesan));?></td>
		</tr>

			<tr>
			<th>Tanggal Ambil</th>
			<td>:</td>
			<td><?php echo date ('d-m-Y', strtotime($tr->tanggal_ambil));?></td>
		</tr>

			<tr>
			<th>Alamat</th>
			<td>:</td>
			<td><?php echo $tr->alamat_lengkap?></td>
		</tr>

			<tr>
			<th>Nomor Hp</th>
			<td>:</td>
			<td><?php echo $tr->nohp?></td>
		</tr>

			<tr>
			<th>Jumlah Pesanan</th>
			<td>:</td>
			<td><?php echo $tr->jml_pesan?> cake</td>
		</tr>

		<tr>
			<th>Pengiriman</th>
			<td>:</td>
			<td><?php echo $tr->pengiriman?></td>
		</tr>


			<tr>
			<th>Harga</th>
			<td>:</td>
			<td>Rp.<?php echo number_format($tr->harga,0,',','.') ?></td>
		</tr>


			<tr>
			<th>Status Pembayaran</th>
			<td>:</td>
			<td><?php if( $tr->status_pembayaran =='0'){ echo "Belum Lunas";
		}else{
			echo "Lunas";
		

			} ?>
				
			</td>
		</tr>

			<tr style="font-weight: bold; color: red">
				
			<td>Jumlah Pembayaran</td>
			<td>:</td>
			<td>Rp.<?php echo number_format($tr->jml_pesan*$tr->harga,0,',','.')?></td>
		</tr>

			
		
		<tr>
			<td></td>
			<td></td>
			<td> <a href="<?php echo base_url('pelanggan/transaksi/cetak_invoice/'.$tr->id_pesan)?>" class="btn btn-sm btn-secondary">Print Pembayaran</a> </td>
		</tr>


	<?php endforeach;?>
	</table>
</div>
</div>
</div>
<div class="col-md-4">
	<div class="card" style="margin-top: 150px">
	<div class="card-header alert alert-primary" >Upload Bukti Pembayaran</div>

	<div class="card-body"><p>Silahkan Melakukan Pembayaran Melalui Nomor Rekening di Bawah Ini : </p>

	<ul class="list-group list-group-flush">

  <li class="list-group-item">MANDIRI : 1480012121458 (An.Nilawati)</li>
  
 
</ul>

<?php
	if(empty($tr->bukti_pembayaran)){ ?>

		<button style="width: 100% " type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#exampleModal">Upload Bukti Pembayaran</button>


		<?php }elseif($tr->status_pembayaran =='0'){ ?>

			<button style="width: 100%" class="btn btn-sm btn-warning"><i class="fa fa-clock-o"></i>Menunggu Konfirmasi</button>
	
		<?php } elseif($tr->status_pembayaran =='1'){?>
		<button style="width: 100%" class="btn btn-sm btn-success"><i class="fa fa-check"></i>Pembayaran Selesai</button>

<?php }?>
	</div>
</div>
</div>
</div>
</div>

<!-- Modal upload bukti pembayaran-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
        <button type="button"   class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="<?php echo base_url('pelanggan/transaksi/pembayaran_aksi')?>" enctype= "multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
        	<label>Upload Bukti Pembayaran</label>
        	<input type="hidden" name="id_pesan" class="form-control" value="<?php echo $tr->id_pesan ?>">
        	<input type="file" name="bukti_pembayaran" class="form-control">

        </div>
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-success">Kirim</button>
      </div></form>
    </div>
  </div>
</div>