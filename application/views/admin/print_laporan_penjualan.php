<h3 style="text-align: center">LAPORAN PENJUALAN CAKE</h3>

<table>
	<tr>
		<td>Dari Tanggal</td>
		<td>:</td>
		<td><?php echo date('d-M-Y',strtotime($_GET['dari']));?></td>
	</tr>

	<tr>
		<td>Sampai Tanggal</td>
		<td>:</td>
		<td><?php echo date('d-M-Y',strtotime($_GET['sampai']));?></td>
	</tr>
</table>

<br><br>
	<table class="table table-bordered table-striped">

         <tr> 
        <th>Id</th>
       
    
        <th>Menu</th>
    
        <th>Stok</th>
        <th>Sisa</th>

        <th>Terjual</th>
         <th>Harga</th>
        <th>Total</th>   
        </tr>
<?php $total=0;?>
        <?php $no=1;
        foreach ($laporan_penjualan as $pj) :?>
<?php $total += $pj->total?>
        <tr>
        <td ><?php echo $no++?></td>
  
    
        <td><?php echo $pj->menu?></td>
        
        <td><?php echo $pj->stok?></td>
        <td><?php echo $pj->sisa?></td>
        <td><?php echo $pj->terjual?></td>
        <td ><?php echo number_format($pj->harga,0,',','.')?></td>
        <td><?php echo number_format($pj->total,0,',','.')?></td>
        </tr>
        <?php endforeach;?>


	<tr>
    	<td colspan="6" align="right" style="font-weight: bold; "><b> TOTAL<td>Rp.<?php echo number_format($total) ?></b></td>
 	</tr>
		</table>


		<script type="text/javascript">window.print();
	</script>