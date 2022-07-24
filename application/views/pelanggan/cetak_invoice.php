<center><br><br><br>
	<tr><th align="center"><b>NILA CAKE</th></tr> 
    <tr><th align="center"><b><br>JL. Wijaya Kusuma 2 RT 47 NO 18 Kota Tarakan</th></tr> 
    <tr><th align="center"><b><br>Telp : 085346898811</th></tr> 
	<tr><th align="center"><b><br> ----------------------------------------------------------</th></tr> <br>
    
<?php foreach($transaksi as $tr) :?>
     <tr><th align="center">Tanggal : <?php echo date ('d-m-Y', strtotime($tr->tanggal_pesan));?> &emsp;<i class="fa fa-clock-o"></i> 
                   

<table align="center" style="width:45%"  >



	

	<tr>
			<td>Nama</td>
			<td>:</td>
			<td align="right"><?php echo $tr->nama?></td>
		</tr>
		

			<tr>
			<td>Menu</td>
			<td>:</td>
			<td align="right"><?php echo $tr->nama_cake?></td>
		</tr>

		

		

		

			<tr>
			<td>Tgl.Ambil</td>
			<td>:</td>
			<td align="right"><?php echo date ('d-m-Y', strtotime($tr->tanggal_ambil));?></td>
		</tr>

			<tr>
			<td>Alamat</td>
			<td >:</td>
			<td align="right"><?php echo $tr->alamat_lengkap?></td>
		</tr>

			<tr>
			<td>No hp</td>
			<td >:</td>
			<td align="right"><?php echo $tr->nohp?></td>
		</tr>

		

			<tr>
			<td>Pengiriman</td>
			<td>:</td>
			<td align="right"><?php echo $tr->pengiriman?></td>
		</tr>

        <tr>
			<td>Status Pembayaran</td>
			<td>:</td>
			<td align="right"><?php if( $tr->status_pembayaran =='0')               { echo "Belum Lunas";
		        }else{
			echo "Lunas";
		    } ?>
		<tr>

	
<tr>
    <td colspan="3" align="right" > 		<br><br>Jumlah :
		x <?php echo number_format($tr->jml_pesan)?></td>
 	</tr>
     <tr>
    <td colspan="3" align="right" > 		Harga :
		Rp.<?php echo number_format($tr->harga,0,',','.')?></td>
 	</tr>
		
			<tr>
    <td colspan="3" align="right" >Total :
		Rp.<?php echo number_format($tr->jml_pesan*$tr->harga,0,',','.')?></td>
 	</tr>
	

	<?php endforeach;?>

	<br>
</table>
<center>
   
	<tr><th align="center"><b><br> ----------------------------------------------------------</th></tr> 
    <tr><th align="center"><br>Terima Kasih Telah Berbelanja Di Toko Kami </th></tr><br>
     
	</center>

	<script type="text/javascript">
		window.print();

	</script>
