<div class="container">
  <div class="card" style="margin-top: 200px; margin-bottom: 50px">
    <div class="card-header">
      Form Pemesanan Cake
    </div>
     <?php echo $this->session->flashdata('pesan')?>
    <div class="card-body">
      <?php foreach($detail as $dt) :?>
            
    <form method="POST" action="<?php echo base_url('pelanggan/pesan/tambah_pesan_aksi') ?>">

   

    
    <div class="form-group">
      <label>Harga Cake</label>
      <input type="hidden" name="id_cake" value="<?php echo $dt->id_cake ?>">
      <input type="text" name="harga" class="form-control" value="Rp. <?php echo number_format($dt->harga,0,',','.') ?> " readonly >
            <?php echo form_error('harga', '<div class="text-small text-danger">','</div>')?>
    </div>




    <div class="form-group">
      <label>Tanggal Pesan</label>
      <input type="date" name="tanggal_pesan" class="form-control">
       
             <?php echo form_error('tanggal_pesan', '<div class="text-small text-danger">','</div>')?>
    </div>


    <div class="form-group">
      <label>Tanggal Ambil Cake</label>
      <input type="date" name="tanggal_ambil" class="form-control" >
       <?php echo form_error('tanggal_ambil', '<div class="text-small text-danger">','</div>')?>
    </div>

    <div class="form-group">
      <label>Alamat</label>
      <input type="text" name="alamat_lengkap"class="form-control ">
       <?php echo form_error('alamat_lengkap', '<div class="text-small text-danger">','</div>')?>
    </div>
      <div class="form-group">
      <label>Nomor Hp</label>
      <input type="text" name="nohp"class="form-control ">
       <?php echo form_error('nohp', '<div class="text-small text-danger">','</div>')?>
    </div>

      <div class="form-group">
      <label>Jumlah Pesanan</label>
      <input type="text" name="jml_pesan"class="form-control ">
       <?php echo form_error('jml_pesan', '<div class="text-small text-danger">','</div>')?>
    </div>


<div class="form-group">
  <label>Pengiriman</label>
  <select name="pengiriman" class="form-control">
    <option value="">Pilih Pengiriman</option>
    <option value="Jasa Kurir" >Jasa Kurir</option>
    <option value="Ambil di Toko">Ambil di Toko</option>

  </select>

  <?php echo form_error('pengiriman' , '<div class="text-small text-danger">','</div>')?>
</div>


  

      
      <button type="submit" class="btn btn-warning">Pesan</button>
    </form>
  <?php endforeach; ?>
    </div>
  </div>
</div>