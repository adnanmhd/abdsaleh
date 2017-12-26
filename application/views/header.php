<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>Abdulrachman Saleh Airport</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="iThemesLab">

  <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/logo-dishub.png" type="image/x-icon" />          

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/animate.css" media="screen">

  <!-- Color CSS Styles  -->
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/colors/blue.css" title="blue" media="screen" />
  <!-- <link rel="stylesheet" type="text/css" href="css/colors/beige.css" title="beige" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/cyan.css" title="cyan" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/orange.css" title="orange" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/peach.css" title="peach" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/pink.css" title="pink" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/purple.css" title="purple" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/sky-blue.css" title="sky-blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow" media="screen" />


 -->  
  <link href="<?php echo base_url()?>assets/css/fancybox/jquery.fancybox.css" rel="stylesheet">  
  <!-- Margo JS  -->
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.migrate.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/modernizrr.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.appear.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/count-to.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.textillate.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.lettering.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.parallax.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/mediaelement-and-player.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.slicknav.js"></script>

<?php if (isset($map)) {
  echo $map['js'];  }?>
    

</head>

<body>

  <!-- Full Body Container -->
  <div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>

    

    <header class="clearfix">

      
      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="<?php echo base_url()  ?>">
              <img alt="" src="<?php echo base_url()?>assets/images/logo.png">
            </a>
          </div>
          <div class="navbar-collapse collapse">

         
            <!-- Stat Search -->
            <!-- <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div> -->
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a  <?php 
                if($menu == "home"){
                  ?>
                class="active" <?php }?>
                href="<?php echo base_url()?>">Home</a>                
              </li>             
              

              <li>
                <a <?php 
                  if($menu == "berita" || $menu == "laporan" || $menu == "layout" or $menu == "maskapai" or $menu == "maskapai" or $menu == "travel" or $menu == "fasilitas"){
                    ?>
                  class="active" <?php }?>
                href="#">Informasi</a>
                <ul class="dropdown">
                  <li><a 
                  <?php 
                  if($menu == "berita"){
                    ?>
                  class="active" <?php }?>
                  href="<?php echo base_url() ?>berita">Berita</a>
                  </li>

                  <li><a 
                  <?php 
                  if($menu == "laporan"){
                    ?>
                  class="active" <?php }?>
                  href="<?php echo base_url() ?>laporanPenerbangan">Laporan Data Penerbangan</a>
                  </li>

                  <li><a 
                  <?php 
                  if($menu == "layout"){
                    ?>
                  class="active" <?php }?>
                  href="<?php echo base_url() ?>layout">Denah Bandara</a>
                  </li>

                  <li><a 
                  <?php 
                  if($menu == "maskapai"){
                    ?>
                  class="active" <?php }?>
                  href="<?php echo base_url() ?>maskapai">Maskapai Penerbangan</a>
                  </li>

                  <li><a <?php 
                  if($menu == "travel"){
                    ?>
                  class="active" <?php }?>
                  href="<?php echo base_url() ?>travel">Layanan Travel</a>
                  </li>

                </ul>
              </li>              
             
              <li>
                <a 
                <?php 
                  if($menu == "galeri"){
                    ?>
                  class="active" <?php }?>
                href="<?php echo base_url()?>galeri">Galeri</a>                
              </li> 

              <li>
                <a <?php 
                  if($menu == "airside" || $menu == "landside"){
                    ?>
                  class="active" <?php }?>
                href="#">Fasilitas</a>
                <ul class="dropdown">
                  <li><a 
                  <?php 
                  if($menu == "airside"){
                    ?>
                  class="active" <?php }?>
                  href="<?php echo base_url() ?>fasilitas/airSide">Air Side</a>
                  </li>

                  <li><a 
                  <?php 
                  if($menu == "landside"){
                    ?>
                  class="active" <?php }?>
                  href="<?php echo base_url() ?>fasilitas/landSide">Land Side</a>
                  </li>
                </ul>
              </li>              

              <li>
                <a <?php 
                  if($menu == "profil"){
                    ?>
                  class="active" <?php }?>
                href="<?php echo base_url()?>profilbandara">Profil Bandara</a>                
              </li>              
              <li><a <?php 
                  if($menu == "contact"){
                    ?>
                  class="active" <?php }?>
              href="<?php echo base_url()?>contact">Contact</a>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
                <a  <?php 
                if($menu == "home"){
                  ?>
                class="active" <?php }?>
                href="<?php echo base_url()?>">Home</a>                
              </li>             
              

              <li>
                <a <?php 
                  if($menu == "berita" || $menu == "laporan" || $menu == "layout" or $menu == "maskapai" or $menu == "maskapai" or $menu == "travel" or $menu == "fasilitas"){
                    ?>
                  class="active" <?php }?>
                href="#">Informasi</a>
                <ul class="dropdown">
                  <li><a 
                  <?php 
                  if($menu == "berita"){
                    ?>
                  class="active" <?php }?>
                  href="<?php echo base_url() ?>berita">Berita</a>
                  </li>

                  <li><a 
                  <?php 
                  if($menu == "laporan"){
                    ?>
                  class="active" <?php }?>
                  href="<?php echo base_url() ?>laporanPenerbangan">Laporan Data Penerbangan</a>
                  </li>

                  <li><a 
                  <?php 
                  if($menu == "layout"){
                    ?>
                  class="active" <?php }?>
                  href="<?php echo base_url() ?>layout">Denah Bandara</a>
                  </li>

                  <li><a 
                  <?php 
                  if($menu == "maskapai"){
                    ?>
                  class="active" <?php }?>
                  href="<?php echo base_url() ?>maskapai">Maskapai Penerbangan</a>
                  </li>

                  <li><a <?php 
                  if($menu == "travel"){
                    ?>
                  class="active" <?php }?>
                  href="<?php echo base_url() ?>travel">Layanan Travel</a>
                  </li>

                </ul>
              </li>              
             
              <li>
                <a 
                <?php 
                  if($menu == "galeri"){
                    ?>
                  class="active" <?php }?>
                href="<?php echo base_url()?>galeri">Galeri</a>                
              </li> 

              <li>
                <a <?php 
                  if($menu == "airside" || $menu == "landside"){
                    ?>
                  class="active" <?php }?>
                href="#">Fasilitas</a>
                <ul class="dropdown">
                  <li><a 
                  <?php 
                  if($menu == "airside"){
                    ?>
                  class="active" <?php }?>
                  href="<?php echo base_url() ?>fasilitas/airSide">Air Side</a>
                  </li>

                  <li><a 
                  <?php 
                  if($menu == "landside"){
                    ?>
                  class="active" <?php }?>
                  href="<?php echo base_url() ?>fasilitas/landSide">Land Side</a>
                  </li>
                </ul>
              </li>              

              <li>
                <a <?php 
                  if($menu == "profil"){
                    ?>
                  class="active" <?php }?>
                href="<?php echo base_url()?>profilbandara">Profil Bandara</a>                
              </li>              
              <li><a <?php 
                  if($menu == "contact"){
                    ?>
                  class="active" <?php }?>
              href="<?php echo base_url()?>contact">Contact</a>
              </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->    

