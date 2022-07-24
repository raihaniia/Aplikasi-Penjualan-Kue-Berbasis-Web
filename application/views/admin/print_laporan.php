
 <h3 style="text-align: center" >LAPORAN TRANSAKSI PEMESANAN CAKE</h3>
<br><br>
<div>
	<tr>
		<td>Dari Tanggal</td>
		<td>:</td>
		<td><?php echo date('d-M-Y',strtotime($_GET['dari']));?></td>
	</tr><br>

	<tr>
		<td>Sampai Tanggal</td>
		<td>:</td>
		<td><?php echo date('d-M-Y',strtotime($_GET['sampai']));?></td>
	</tr>
</div>

	<table class="table table-bordered table-striped" style="text-align: center"   >
 <style>



    


     

    }

   
  </style>
   

	<tr>
		<th>No</th>
		<th>Pelanggan</th>
        <th>Tgl Pesan</th>
        <th>Tgl Ambil</th>
		<th>Nama Cake</th>
        
		<th>Type</th>
		<th>Alamat</th>
		<th>No.Hp</th>
		<th>Jml Pesan</th>
        <th>Pengiriman</th>
		<th>Harga</th>
	
		
        	<th>Total</th>
            
		
		
		</tr>
        <?php $harga=0;?>
		<?php $no=1;
		foreach ($laporan as $tr) :?>
        <?php $harga += $tr->harga*$tr->jml_pesan?>
        <br>
        

        <tr>
        
		<td><?php echo $no++?></td>
		<td  width="30px;"><?php echo $tr->nama?></td>
    <td><?php echo date ('d/m/Y', strtotime($tr->tanggal_pesan));?></td>
        <td><?php echo date ('d/m/Y', strtotime($tr->tanggal_ambil));?></td>
		<td><?php echo $tr->nama_cake?></td>
		<td><?php echo $tr->kode_type?></td>	
		<td><?php echo $tr->alamat_lengkap?></td>
			<td><?php echo $tr->nohp?></td>
			<td><?php echo $tr->jml_pesan ?></td>
	<td><?php echo $tr->pengiriman?></td>


	<td>Rp.<?php echo number_format($tr->harga,0,',','.')?></td>
	
	


	

    <td>Rp.<?php echo number_format($tr->jml_pesan*$tr->harga,0,',','.')?></td>

		<?php endforeach;?>
	        
		<tr>
    	<td style="font-weight: bold;">Grand Total<td colspan="13" align="right" >Rp.<?php echo number_format($harga) ?></b></td>
 	</tr>

		</table>


		<script type="text/javascript">window.print();
	</script>
    