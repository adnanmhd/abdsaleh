<?php 

if (empty($_SESSION['login'])) {

    redirect(base_url()."admin/login");
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Abdul Rachman Saleh-Airport</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/logo-dishub.png" type="image/x-icon" />          
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/flat/blue.css"> -->
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style type="text/css">
    .tabel-artikel img{
      width: 250px;
    }
    .tabel-artikel td{
      min-width: 100px;
    }

    .tabel-artikel th, #id{
      text-align: center;
    }
    </style>

     <script language="JavaScript" type="text/javascript">
    function checkDelete(){
        return confirm('Data Akan Dihapus?');
    }
  </script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script language="javascript" type="text/javascript">
        $(function () {
            $("#fileupload").change(function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = $(".tabel-artikel");
                    dvPreview.html("");
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    $($(this)[0].files).each(function () {
                        var file = $(this);
                        if (regex.test(file[0].name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = $("<img />");                              
                                img.attr("src", e.target.result);
                                dvPreview.append(img);
                            }
                            reader.readAsDataURL(file[0]);
                        } else {
                            alert(file[0].name + " is not a valid image file.");
                            dvPreview.html("");
                            return false;
                        }
                    });
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            });
        });
    </script>

 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url() ?>Admin/index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>assets/images/avatar.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['admin'] ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() ?>assets/images/avatar.jpg">

                <p>
                  <?php echo $_SESSION['admin'] ?>
                  <small>Abdulrachman Saleh Airport</small>
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">                
                <div class="pull-left">
                  <a href="<?php echo base_url() ?>admin/profile" class="btn btn-default btn-flat">Profile</a>                                  
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url() ?>admin/logout" class="btn btn-default btn-flat">Logout</a>                                  
                </div>
              </li>
            </ul>
          </li>          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/images/logo-dishub.png">
        </div> 
        <div class="pull-left info">
          <p>Abdulrachman Saleh<br>Airport</p>          
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- search form -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">        
        <li <?php if ($menu == "home") {?>
          class="active"
          <?php 
        } ?> >
          <a href="<?php echo base_url()?>Admin/index">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>

          </a>
        </li>        

        <li <?php if ($menu == "maskapai" || $menu == "rute" || $menu == "keberangkatan" || $menu == "kedatangan") { ?>
          class="treeview active"
          <?php 
        } ?> >
          <a href="#">
            <i class="fa fa-plane"></i> <span>Data Penerbangan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($menu == 'kedatangan') {?>
            class="active"
            <?php 
            }  ?>><a href="<?php echo base_url()?>Admin/kedatangan"><i class="fa fa-sign-in"></i> Kedatangan</a></li>

            <li <?php if ($menu == 'keberangkatan') {?>
            class="active"
            <?php 
            }  ?>><a href="<?php echo base_url()?>Admin/keberangkatan"><i class="fa fa-sign-out"></i> Keberangkatan</a></li>
            
            <li <?php if ($menu == 'maskapai') {?>
            class="active"
            <?php 
            }  ?>>
              <a href="<?php echo base_url()?>Admin/maskapai"><i class="fa fa-plane"></i> Maskapai</a>
            </li>

            <li <?php if ($menu == 'rute') {?>
            class="active"
            <?php 
            }  ?>>
              <a href="<?php echo base_url()?>Admin/rutePenerbangan"><i class="fa fa-road"></i> Rute Penerbangan</a>
            </li>
          </ul>
        </li>



        <li <?php if ($menu == "databerita" or $menu == "tambahberita") {?>
          class="treeview active"
          <?php 
        } ?>>
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>Admin/tambahBerita"><i class="fa fa-plus-circle"></i> Tambah Berita</a></li>
            <li <?php if ($menu == "databerita") {?>
            class="active"
            <?php 
            } ?> ><a href="<?php echo base_url()?>Admin/dataBerita"><i class="fa fa-server"></i> Data Berita</a></li>
          </ul>
        </li>

        <li <?php if ($menu == "galeri" or $menu == "upload") {?>
          class="treeview active"
          <?php 
        } ?>>
          <a href="#">
            <i class="fa fa-image"></i> <span>Galeri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($menu == "upload") {?>
            class="active"
            <?php 
            } ?> ><a href="<?php echo base_url()?>Admin/uploadPhoto"><i class="fa fa-camera"></i> Upload Photo</a></li>
            
            <li <?php if ($menu == "galeri") {?>
            class="active"
            <?php 
            } ?> ><a href="<?php echo base_url()?>Admin/dataGaleri"><i class="fa fa-file-image-o"></i> Data Galeri</a></li>
          </ul>
        </li>            

        <li  <?php if ($menu == "airside" or $menu == "landside") {?>
          class="treeview active"
          <?php 
        } ?>>
          <a href="#">
            <i class="fa fa-server"></i> <span>Fasilitas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($menu == "airside") {?>
            class="active"
            <?php 
            } ?>><a href="<?php echo base_url()?>Admin/fasilitasAirside"><i class="fa fa-plane"></i> Air Side</a></li>

            <li <?php if ($menu == "landside") {?>
            class="active"
            <?php 
            } ?>><a href="<?php echo base_url()?>Admin/fasilitasLandside"><i class="fa fa-road"></i> Land Side</a></li>
          </ul>
        </li>    

        <li <?php if ($menu == "laporan") {?>
            class="active"
            <?php 
            } ?> >
          <a href="<?php echo base_url()?>Admin/laporanPenerbangan">
            <i class="fa fa-file"></i> <span>Data Laporan Penerbangan</span>                     
          </a>          
        </li>       

        <li <?php if ($menu == "kotak_masuk") {?>
            class="active"
            <?php 
            } ?> >
          <a href="<?php echo base_url()?>Admin/kotakMasuk">
            <i class="fa fa-envelope"></i> <span>Kotak Masuk</span> 
            <?php 
            if (isset($kotak_masuk)) {              
              foreach ($kotak_masuk as $data) { 
              if ($data->kotak_masuk > 0) {                                    
              ?>
            <span class="badge" style="background-color:#F14C53"><?php echo $data->kotak_masuk; ?></span>            
            <?php }
              }
            }
            ?>            
          </a>          
        </li>        
               
      </ul>                   
       
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    