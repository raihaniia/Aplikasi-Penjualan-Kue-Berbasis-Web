<div class="main-content ml-3">
	<section class="section">
		<div class="section-header">
			<h1>Data Pelanggan</h1>
		</div>
		</section>

		<form method="post" action="<?php echo base_url('admin/data_pelanggan/tambah_pelanggan_aksi')?>">

			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control">
				<?php echo form_error('nama', '<span class="text-small text-danger">','</span>')?>
			</div>

			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control">
				<?php echo form_error('username', '<span class="text-small text-danger">','</span>')?>
			</div>

			
			<div class="form-group">
				<label>Passwod</label>
				<input type="password" name="password" class="form-control">
				<?php echo form_error('password', '<span class="text-small text-danger">','</span>')?>
			</div>

	
			<div class="form-group">
				<label>Role id</label>
				<input type="password" name="role_id" class="form-control">
				<?php echo form_error('role_id', '<span class="text-small text-danger">','</span>')?>
			</div>

			<button type="submit" class="btn btn-sm btn-primary">Submit</button>

			<button type="reset" class="btn btn-sm btn-danger">Reset</button>
			
		</form>
	</div>