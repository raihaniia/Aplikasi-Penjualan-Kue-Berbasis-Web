<body >
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar" style="color: pink;"></div>
      <nav class="navbar navbar-expand-lg main-navbar"  >
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        
          </ul>
           
        </form>


  
  <ul  class="navbar-nav navbar-right">
  

    <li class="dropdown"><a href="#" class="nav-link nav-link-lg nav-link-user">
     
      <div class="d-sm-none d-lg-inline-block">Welcome <?php echo $this->session->userdata('nama')?></div></a>
      
      </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">NILA CAKE</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
          </div>
          <ul class="sidebar-menu">
           
             

       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard')?>">
          <i class="fas fa-cookie"></i>
          <span>Dashboard</span></a>
      </li>
      

     

       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/data_cake')?>">
          <i class="fas fa-cookie"></i>
          <span>Data Cake</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/data_type')?>">
          <i class="fas fa-grip-horizontal"></i>
          <span>Data Type</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/data_pelanggan')?>">
          <i class="fas fa-user"></i>
          <span>Data Pelanggan</span></a>
      </li>

      
   <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/transaksi')?>">
          <i class="fas fa-random"></i>
          <span>Pemesanan</span></a>
      </li>

 

       


       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/penjualan')?>">
          <i class="fas fa-cart-arrow-down"></i>
          <span> Penjualan</span></a>
     
       </li>


    



      
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/laporan')?>">
          <i class="fas fa-clipboard-list"></i>
          <span>Laporan Pemesanan</span></a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/laporan_penjualan')?>">
          <i class="fas fa-clipboard-list"></i>
          <span>Laporan Penjualan</span></a>
      </li>



       


      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('auth/logout')?>">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('auth/ganti_password')?>">
          <i class="fas fa-lock"></i>
          <span>Ganti Password</span></a>
      </li>
            
            </ul>

         <!--    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div> -->
        </aside>
      </div>
