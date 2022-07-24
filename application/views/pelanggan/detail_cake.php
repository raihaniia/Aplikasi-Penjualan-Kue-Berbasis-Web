<div class="container mt-7 mb-3 my-5">
<div class="card" style="margin-top: 200px">
<div class="card-body">
<?php foreach ($detail as $dt) :?>

<div class="row">
	<div class="col-md-6">
		
		<img style="width: 40%" src="<?php echo base_url('assets/upload/'.$dt->gambar)?>">
	</div>
	<div class="col-md-6 ">
		<table class="table">
		

			<tr>
				<td>Nama Cake  </td>
				<td><?php echo $dt->nama_cake ?></td>
			</tr>


			
			

			<tr>
				<td>Status  </td>
				<td>
					<?php if($dt->status == '1'){
						echo "Tersedia";
					}else{
						echo "Tidak Tersedia (Stok Sudah Habis)";
					} ?>
					
				</td>

			</tr>
				<tr>
				<td>Harga   </td>
				<td>Rp. <?php echo number_format($dt->harga,0,',','.') ?> </td>
			</tr>
			<tr>
	<td></td>
	
	<td>
	   <?php 
        if($dt->status =="1"){
            	
            echo anchor ('pelanggan/pesan/tambah_pesan/'.$dt->id_cake,'<span class ="btn btn-info ml-6">Lanjut Pesan</span>');
        }else{
                echo "<span class='btn btn-info ml-6'>Tidak Tersedia</span>";
            }
            
        
        ?>



        &nbsp;&nbsp;<a class="btn btn-info ml-6" href="<?php echo base_url('pelanggan/data_cake')?>">Kembali</a>



        


				</td>
			</tr>



		</table>
	</div>
</div>

<?php endforeach; ?>


</div>
</div>
</div>