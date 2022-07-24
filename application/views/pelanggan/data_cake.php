

<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
<div class="container">
<div class="row">
<!-- Page Title Start -->
<div class="col-lg-12">
<div class="section-title  text-center">
<h2>Cake Varian Rasa</h2>
<span class="title-line"><i class="fa fa-birthday-cake"></i></span>
<p>Pilih Cake Sesuai Keinginan Anda</p>
<div class="px-4 bg-light "><marquee class="py-1" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
         <p class="text-dark "><b>Silahkan Registrasi dan Login Sebelum Pesan Produk Kami. Terimakasih</b>
        <i class="fa fa-smile-o"></i></span></p>
        
</marquee></div><br>

</div>
</div>
<!-- Page Title End -->
</div>
</div>
</section>
<!--== Page Title Area End ==-->

<!--== Car List Area Start ==-->
<section id="car-list-area" class="section-padding">
<div class="container">
    <?php echo $this->session->flashdata('pesan') ?>
<div class="row">
<!-- Car List Content Start -->
<div class="col-lg-12">
<div class="car-list-content">
<div class="row">
    <!-- Single Car Start -->

<?php foreach($cake as $mb) :?>
    <div class="col-lg-6 col-md-6">
        <div class="single-car-wrap">
         <img src="<?php echo base_url('assets/upload/'.$mb->gambar)?>" alt="logo" width="170" class="shadow-light  mb-5 mt-2 center">
          
            <div class="car-list-info without-bar">
                <h2><a href="#"><?php echo $mb->nama_cake; ?></a></h2>
              
                <h5>Rp. <?php echo number_format($mb->harga,0,',','.') ?> <!-- / Jual --></h5>
             
                
        <p class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star unmark"></i>
        </p>
        <?php 
        if($mb->status =="1"){
            echo anchor ('pelanggan/pesan/tambah_pesan/'.$mb->id_cake,'<span class ="btn btn-warning ml-6">Pesan</span>');
        }else{
                echo "<span class='btn  btn-warning ml-6'>Tidak Tersedia</span>";
            }
        
        ?>
                &nbsp;&nbsp;<a href="<?php echo base_url('pelanggan/data_cake/detail_cake/'.$mb->id_cake)?>" class="btn btn-warning ml-6">Detail</a>
            </div>
        </div>
    </div>

    
<?php endforeach;?>
    <!-- Single Car End -->

    
</div>
</div>


</div>
<!-- Car List Content End -->
</div>
</div>
</section>
<!--== Car List Area End ==-->






