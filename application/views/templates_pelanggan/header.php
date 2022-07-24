<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--=== Favicon ===-->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<title>Toko Cake</title>

<!--=== Bootstrap CSS ===-->
<link href="<?php echo base_url()?>assets/assets_shop/css/bootstrap.min.css" rel="stylesheet">
<!--=== Slicknav CSS ===-->
<link href="<?php echo base_url()?>assets/assets_shop/css/plugins/slicknav.min.css" rel="stylesheet">
<!--=== Magnific Popup CSS ===-->
<link href="<?php echo base_url()?>assets/assets_shop/css/plugins/magnific-popup.css" rel="stylesheet">
<!--=== Owl Carousel CSS ===-->
<link href="<?php echo base_url()?>assets/assets_shop/css/plugins/owl.carousel.min.css" rel="stylesheet">
<!--=== Gijgo CSS ===-->
<link href="<?php echo base_url()?>assets/assets_shop/css/plugins/gijgo.css" rel="stylesheet">
<!--=== FontAwesome CSS ===-->
<link href="<?php echo base_url()?>assets/assets_shop/css/font-awesome.css" rel="stylesheet">
<!--=== Theme Reset CSS ===-->
<link href="<?php echo base_url()?>assets/assets_shop/css/reset.css" rel="stylesheet">
<!--=== Main Style CSS ===-->
<link href="<?php echo base_url()?>assets/assets_shop/css/style.css" rel="stylesheet">
<!--=== Responsive CSS ===-->
<link href="<?php echo base_url()?>assets/assets_shop/css/responsive.css" rel="stylesheet">



   

</head>


<!-- untuk mengaktifkan style loading -->
<!-- <body class="loader-active">
 -->
<!--== Preloader Area Start ==-->
<!-- <div class="preloader"> -->
   <!--  <div class="preloader-spinner"> -->
        <!-- <div class="loader-content"> -->
            <!-- <img src="<?php echo base_url()?>assets/assets_shop/img/preloader.gif" alt="JSOFT"> -->
       <!--  </div>
    </div>
</div> -->
<!--== Preloader Area End ==-->

<!--== Header Area Start ==-->
<header id="header-area" class="fixed-top">
    <!--== Header Top Start ==-->
    <div id="header-top">
        <div class="container">
            <div class="row">
                <!--== Single HeaderTop Start ==-->

                
                <div class="col-lg-10 text-left">
                    <i class="fa fa-map-marker"></i> Indonesia, Kota Tarakan, Kalimantan Utara
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Single HeaderTop Start ==-->
               
                    <!-- <div class="col-lg-3 text-left">
                    <i class="fa fa-mobile"></i>+6285346898811
                </div> -->
                <!--== Single HeaderTop End ==-->

                <!--== Single HeaderTop Start ==-->
           
                    
                    &emsp;<i class="fa fa-clock-o"></i> 
                    <script type="text/javascript">//detik = 1000
                windows.setTimeout("waktu()",1000);
                function waktu()
                {
                    var tanggal = new Date();
                    setTimeout("waktu()",1000);
                    document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();

                }
            </script> 
            <body bgcolor="white" text="yellow" onload="waktu()">
                <div id="output"></div>
            </body>
               </div>
                <!--== Single HeaderTop End ==-->

                <!--== Social Icons Start ==-->
               <!--  <div class="col-lg-12 text-right">
                    <div class="header-social-icons">
                        
                        <a href="https://id.pinterest.com/login/"><i class="fa fa-pinterest"></i></a>
                        <a href="https://m.facebook.com/login/?locale=id_ID"><i class="fa fa-facebook"></i></a>
                        <a href="https://id.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div> -->
                <!--== Social Icons End ==-->
            </div>
        </div>
    </div>
    <!--== Header Top End ==-->

    <!--== Header Bottom Start ==-->
    <div id="header-bottom">
        <div class="container">
            <div class="row">
                <!--== Logo Start ==-->
                <div class="col-lg-4">
                    <!-- logo perusahaan -->
                    <!-- <a href="index.html" class="logo">
                        <img src="<?php echo base_url()?>assets/assets_shop/img/logo.png" alt="JSOFT"> -->
                    </a>
                </div>
                <!--== Logo End ==-->

                <!--== Main Menu Start ==-->
                <div class="col-lg-8 d-none d-xl-block">
                    <nav class="mainmenu alignright">
        <ul> 
<li class=""><a href="<?php echo base_url('pelanggan/dashboard')?>">Halaman Utama</a></li>

<li><a href="<?php echo base_url('pelanggan/data_cake')?>">Cake</a></li>
<li><a href="<?php echo base_url('pelanggan/transaksi')?>">Transaksi</a></li>

<li><a href="<?php echo base_url('register')?>">Register</a></li>

<?php if($this->session->userdata('nama')){?>
    <li><a href="<?php echo base_url('auth/logout')?>"> Welcome <?php echo $this->session->userdata ( 'nama')?><span> | Logout</span></a></li>
<?php } else {?>
  <li><a href="<?php echo base_url('auth/login')?>">Login</a></li>
<?php }?>
         </ul>                   
                    </nav>
                </div>
                <!--== Main Menu End ==-->
            </div>
        </div>
    </div>
    <!--== Header Bottom End ==-->

</header>

<!--== Header Area End ==-->
