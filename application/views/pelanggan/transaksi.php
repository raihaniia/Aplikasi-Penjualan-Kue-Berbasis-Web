<div class="container">
<div class="card mx-auto" style="margin-top: 180px; witdh:80%">
<div class="card-header">
Data Transakasi Anda
</div>

<span class="mt-2 p-2"><?php echo $this->session->flashdata('pesan')?></span>

<div class="card-body">

<table class="table table-striped table-responsive table-bordered text-center">

<tr>
<th>No</th>
<th>Nama</th>

<th>Nama Cake</th>
<th>Type</th>

<th>Harga</th>

<th>Jumlah Pesan</th>
<th>Total Pembayaran</th>
<th>Action</th>
<th>Batal</th>
</tr>

<?php $no=1; foreach($transaksi as $tr) :?>
<tr>
<td><?php echo $no++?></td>
<td><?php echo $tr->nama?></td>

<td><?php echo $tr->nama_cake?></td>
<td><?php echo $tr->kode_type?></td>

<td>Rp.<?php echo number_format($tr->harga,0,',','.') ?></td>
<td><?php echo $tr->jml_pesan?></td>
<td style="font-weight: bold; color: red">Rp.<?php echo number_format($tr->jml_pesan*$tr->harga,0,',','.')?></td>
   

<td>
  <?php if($tr->status_pesan =="selesai"){?>
    <button class="btn btn-sm btn-danger">Pesan Selesai</button>
  <?php }else{?>
    <a href="<?php echo base_url('pelanggan/transaksi/pembayaran/'.$tr->id_pesan)?>" class="btn btn-sm btn-success">Cek Pembayaran</a>

  <?php } ?>
</td>
<td>
<?php 
if ($tr->status_pesan == 'Belum Selesai') {?>
<a onclick="return confirm('Yakin Batal?')" class="btn btn-sm btn-danger" href="<?php echo base_url('pelanggan/transaksi/batal_transaksi/'.$tr->id_pesan)?>">Batal</a>
<?php }else {?>
  <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
  Batal
</button>
<?php }?>

  
</td>
</tr>
<?php endforeach; ?>
</table>
</div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi Batal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maaf, transaksi ini sudah selesai, dan tidak bisa dibatalkan !
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-info" data-dismiss="modal">OK</button>
        
      </div>
    </div>
  </div>
</div>