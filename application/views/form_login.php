<body>
<div id="app">
  <section class="section">
    <div class="d-flex flex-wrap align-items-stretch">
      <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
        <div class="p-4 m-3">
         <img src="<?php echo base_url('assets/assets_stisla')?>/assets/img/2.png" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2 center">
      <h6 class="text-dark font-weight-normal text-justify">Welcome <span class="font-weight-bold"></span></h6>
          <p class="text-muted">Before you get started, you must login or register if you don't already have an account.</p>


           <span class="m-2"><?php echo $this->session->flashdata('pesan')?></span>
           
          <form method="POST" action="<?php echo base_url('auth/login') ?>" >
            <div class="form-group">
              <label for="username">Username</label>
              <input id="username" type="text" class="form-control" name="username" tabindex="1" autofocus>
             <?php echo form_error('username', '<div class="text-small text-danger">','</div>')?>
            </div>

            <div class="form-group">
              <div class="d-block">
                <label for="password" class="control-label">Password</label>
              </div>
              <input id="password" type="password" class="form-control" name="password" tabindex="2">
              <?php echo form_error('password', '<div class="text-small text-danger">','</div>')?>
            </div>

          

      
              <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                Login
              </button>

          

            <div class="mt-5 text-center">
              Don't have an account? <a href="<?php echo base_url('register')?>">Create new one</a>
            </div>
          </form>

          <div class="text-center mt-5 text-small">
            <!-- Copyright &copy; Your Company. Made with by stisla -->
            
          </div>
        </div>
      </div>
       <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?php echo base_url('assets/assets_stisla')?>/assets/img/unsplash/IMG_0338.jpg">
    <div class="absolute-bottom-left index-2">
      <div class="text-light p-5 pb-2">
        <div class="mb-5 pb-3">
         <!--  <h1 class="mb-2 display-4 font-weight-bold">Your Account</h1> -->
          
     </div>

    
      
      
<!-- 
      <div class="sosmed">
      <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i>raihaniia</a>
    

       <div class="row email ml-1 ">
       <br><i class="fas fa-envelope">raihaniia29@gmail.com</i> -->
     
             
                      
              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>