<div class="main-content">
	<section class="section">
		<div class="section-header">
		<h1>Laporan Penjualan</h1>
	</div>
	</section>

	<form method="POST" action="<?php echo base_url('admin/laporan_penjualan')?>">
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
		<a class="btn btn-sm btn-success" target="_blank" href="<?php echo base_url().'admin/laporan_penjualan/print_laporan_penjualan/?dari='.set_value('dari').'&sampai='.set_value('sampai')?>"><i class="  fas fa-print"></i> print</a>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered table-striped">

         <tr> 
        <th>Id</th>
       
        <th>Tgl Penjualan</th>
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
        <td><?php echo $no++?></td>
       
        <td><?php echo date ('d/m/Y', strtotime($pj->tgl_masuk));?></td>
        <td><?php echo $pj->menu?></td>
        
        <td><?php echo $pj->stok?></td>
        <td><?php echo $pj->sisa?></td>
        <td><?php echo $pj->terjual?></td>
        <td ><?php echo number_format($pj->harga,0,',','.')?></td>
        <td ><?php echo number_format($pj->total,0,',','.')?></td>
        </tr>
        <?php endforeach;?>


<tr>
    	<td colspan="7" align="right" style="font-weight: bold; color: red"><b> TOTAL<td>Rp.<?php echo number_format($total) ?></b></td>
 	</tr>
		</table>


	
	
		</div>
</div>

