<body>
<div id="app">
<section class="section">
  <div class="d-flex flex-wrap align-items-stretch">
    <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-black">
      <div class="p-4 m-3">
        <img src="<?php echo base_url('assets/assets_stisla')?>/assets/img/2.png" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2 center">
        <!-- <h6 class="text-dark font-weight-normal">Welcome <span class="font-weight-bold">Raihani</span></h6> -->
        <p class="text-muted">Please enter a new password ! </p>


         <span class="m-2"><?php echo $this->session->flashdata('pesan')?></span>
         
        <form method="POST" action="<?php echo base_url('auth/ganti_password_aksi') ?>" >
          <div class="form-group">
            <label for="pass_baru">New Password</label>
            <input id="pass_baru" type="password" class="form-control" name="pass_baru" tabindex="1" autofocus>
           <?php echo form_error('pass_baru', '<div class="text-small text-danger">','</div>')?>
          </div>

          <div class="form-group">
            <div class="d-block">
              <label for="ulang_pass" class="control-label">Retype Password</label>
            </div>
            <input id="ulang_pass" type="password" class="form-control" name="ulang_pass" tabindex="2">
            <?php echo form_error('ulang_pass', '<div class="text-small text-danger">','</div>')?>
          </div>

        

    
            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
              Change Password
            </button>

        
  &nbsp;&nbsp;<a class="btn btn-primary btn-lg btn-icon icon-right" href="<?php echo base_url('admin/data_cake')?>">Kembali</a>
     
        </form>

        <div class="text-center mt-5 text-small">
         
        </div>
      </div>
    </div>
   <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?php echo base_url('assets/assets_stisla')?>/assets/img/unsplash/IMG_0338.jpg">
      <div class="absolute-bottom-left index-2">
        <div class="text-light p-5 pb-2">
          <div class="mb-5 pb-3">
            <h1 class="mb-2 display-4 font-weight-bold">Ganti Password</h1>
            <h5 class="font-weight-normal text-muted-transparent">&nbsp;Admin</h5>
          </div>
        


                       
        <!--  <div class="row email ml-1 ">
         <br><i class="fas fa-envelope">raihaniia29@gmail.com</i>
          </div> -->
      
               
                   <!-- 
                    <div class="sosmed">
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"> </i>Instagram raihaniia</a>

                       
                        <br><br><div class="lihat-peta ml-1">
                            <a href="https://www.google.com/maps/place/Jl.+Pramuka+I,+Sempaja+Sel.,+Kec.+Samarinda+Utara,+Kota+Samarinda,+Kalimantan+Timur+75243/@-0.4608428,117.1490308,1338m/data=!3m1!1e3!4m5!3m4!1s0x2df678b61741c293:0x3c3086ea27a2c6e9!8m2!3d-0.462109!4d117.1511291">Lihat Peta</a><div class="address">
                        <p>Jl. Pramuka 1 Blok B, No.36
                            Samarinda, Kalimantan Timur. Indonesia</p>
                
                </div>
            
                    
              
            </div>
        </div>
   -->




        </div>
      </div>
    </div>
  </div>
</section>
</div>