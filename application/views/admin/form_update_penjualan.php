<div class="main-content ml-3">
	<section class="section">
		<div class="section-header">
			<h1>Update Penjualan</h1>
		</div>
		</section>

		<?php foreach ($penjualan as $pj) :?>
		<form method="post" action="<?php echo base_url('admin/penjualan/update_penjualan_aksi')?>">

			

			<div class="form-group">
				<label>Tgl Penjualan</label>
				<input type="hidden" name="id_menu" value="<?php echo $pj->id_menu?>">
				<input type="text" name="tgl_masuk" class="form-control" value="<?php echo $pj->tgl_masuk?>">
				<?php echo form_error('tgl_masuk', '<span class="text-small text-danger">','</span>')?>
			</div>



			<div class="form-group">
				<label>Menu</label>
				<input type="text" name="menu" class="form-control" value="<?php echo $pj->menu?>">
				<?php echo form_error('menu', '<span class="text-small text-danger">','</span>')?>
			</div>


			<div class="form-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $pj->harga?>">
				<?php echo form_error('harga', '<span class="text-small text-danger">','</span>')?>
			</div>

			<div class="form-group">
				<label>Stok</label>
				<input type="text" name="stok" class="form-control"value="<?php echo $pj->stok?>">
				<?php echo form_error('stok', '<span class="text-small text-danger">','</span>')?>
			</div>


			<div class="form-group">
				<label>Sisa</label>
				<input type="text" name="sisa" class="form-control" value="<?php echo $pj->sisa?>">
				<?php echo form_error('sisa', '<span class="text-small text-danger">','</span>')?>
			</div>

			<div class="form-group">
				<label>Terjual</label>
				<input type="text" name="terjual" class="form-control" value="<?php echo $pj->terjual?>">
				<?php echo form_error('terjual', '<span class="text-small text-danger">','</span>')?>
			</div>


			<div class="form-group">
				<label>Total</label>
				<input type="text" name="total" class="form-control" value="<?php echo $pj->total?>">
				<?php echo form_error('total', '<span class="text-small text-danger">','</span>')?>
			</div>

			
			<button type="submit" class="btn btn-sm btn-primary">Submit</button>

			<button type="reset" class="btn btn-sm btn-danger">Reset</button>
			
		</form>

	<?php endforeach;?>
	</div>

	