

    <!-- Start Home Page Slider -->
    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
          <!-- <li data-target="#main-slide" data-slide-to="3"></li> -->
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="<?php echo base_url()?>assets/images/slider/bg5.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <div class="slide-title animated5 white pull-left">
                  <h4>
                    <span>Selamat Datang di</span>
                  </h4>                
                  <h4>                    
                    <span>Bandara Abdulrachman Saleh</span>
                  </h4>                
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="item">
            <img class="img-responsive" src="<?php echo base_url()?>assets/images/slider/bg4.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <div class="slide-title animated5 pull-left">
                  <h4>
                    <span>Contact Bandara</span>
                  </h4>                

                  <h4>
                    <span>(0341) 791718</span>
                  </h4>                                  
                </div>
              </div>
            </div>
          </div> -->

          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="<?php echo base_url()?>assets/images/slider/bg2.jpg" alt="slider">
            <div class="slider-content">
              <!-- <div class="col-md-12 text-center">
                <div class="slide-title animated7 white pull-left">
                  <h3>
                    <span>Selamat Datang di
                    <br>
                    <small>Bandara Abdul Rachman Saleh</small></span>
                  </h3>                
                </div>
              </div> -->
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="<?php echo base_url()?>assets/images/slider/bg6.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <div class="slide-title animated5 pull-left">
                  <h4>
                    <span>Contact Bandara</span>
                  </h4>                

                  <h4>
                    <span>(0341) 793900 / 2992700</span>
                  </h4>                                  
                </div>
              </div>
            </div>
          </div>          
          <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>
      <!-- /carousel -->
    </section>
    <!-- End Home Page Slider --> 

<?php
  $mydate=getdate();      

  if ($mydate['weekday']== "Sunday") {
    $mydate['weekday'] = "Minggu";
  }
  elseif ($mydate['weekday'] == "Monday") {
    $mydate['weekday'] = "Senin";
  }
  elseif ($mydate['weekday'] == "Tuesday") {
    $mydate['weekday'] = "Selasa";
  }
  elseif ($mydate['weekday'] == "Wednesday") {
    $mydate['weekday'] = "Rabu";
  }
  elseif ($mydate['weekday'] == "Thursday") {
    $mydate['weekday'] = "Kamis";
  }
  elseif ($mydate['weekday'] == "Friday") {
    $mydate['weekday'] = "Jumat";
  }
  elseif ($mydate['weekday'] == "Saturday") {
    $mydate['weekday'] = "Sabtu";
  }

  if ($mydate['month']== "January") {
    $mydate['month'] = "Januari";
  }
  elseif ($mydate['month']== "February") {
    $mydate['month'] = "Februari";
  }
  elseif ($mydate['month']== "March") {
    $mydate['month'] = "Maret";
  }
  elseif ($mydate['month']== "May") {
    $mydate['month'] = "Mei";
  }
  elseif ($mydate['month']== "June") {
    $mydate['month'] = "Juni";
  }
  elseif ($mydate['month']== "July") {
    $mydate['month'] = "Juli";
  }
  elseif ($mydate['month']== "August") {
    $mydate['month'] = "Agustus";
  }
  elseif ($mydate['month']== "October") {
    $mydate['month'] = "Oktober";
  }
  elseif ($mydate['month']== "December") {
    $mydate['month'] = "Desember";
  }
  
  
  ?>       

    <!-- Start Testimonials Section -->
    <div id="content">
      <div class="container">
        <div class="row">

          <div class="col-md-8">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Jadwal Penerbangan</span></h4>

            <!-- Nav Tabs -->
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab1" data-toggle="tab"><i class="icon-award-1"></i>Keberangkatan</a></li>
              <li><a href="#tab2" data-toggle="tab"><i class="icon-beaker"></i>Kedatangan</a></li>              
            </ul>

            <!-- Tab Panels -->
            <div class="tab-content">
              <!-- Tab Content 1 -->             
              <div class="tab-pane fade in active" id="tab1">

              <?php 
              
              echo "<span>".$mydate['weekday'].", ".$mydate['mday']." ".$mydate['month']." ".$mydate['year']."</span>";
              ?>
              <br>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead class="thead">
                      <tr>
                        <th>Maskapai</th>
                        <th>Flight</th>
                        <th>Tujuan</th>
                        <th>Waktu</th>                        
                      </tr>
                    </thead>

                    <tbody class="tbody">                  

                    <?php                                                                                    
                    
                    if ($keberangkatan != 0) {
                                     
                      foreach ($keberangkatan as $data) {
                        
                      
                    ?>
                      <tr>
                        <td>
                          <img src="<?php echo base_url()."assets/images/maskapai/".$data->gambar; ?>">
                        </td>
                        <td><?php echo $data->no_penerbangan; ?></td>
                        <td><?php echo $data->tujuan; ?></td>
                        <td><?php echo $data->waktu_berangkat; ?></td>
                        <!-- <td> <span class="label label-default">Dijadwalkan</span> </td> -->
                      </tr>
                      <?php
                    }
                  }
                  
                    
                    ?>                                                                                 
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- Tab Content 2 -->

              <div class="tab-pane fade" id="tab2">
              <?php
              echo "<span>".$mydate['weekday'].", ".$mydate['mday']." ".$mydate['month']." ".$mydate['year']."</span>";

              ?>
              <br>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead class="thead">
                      <tr>
                        <th>Maskapai</th>
                        <th>Flight</th>
                        <th>Tujuan</th>
                        <th>Waktu</th>
                        <!-- <th>Status</th> -->
                      </tr>
                    </thead>

                    <tbody class="tbody">                                      

                    <?php                                                                               

                    if ($kedatangan != 0) {
                                     
                      foreach ($kedatangan as $data) {
                        
                      
                    ?>
                      <tr>
                        <td>
                          <img src="<?php echo base_url()."assets/images/maskapai/".$data->gambar; ?>">
                        </td>
                        <td><?php echo $data->no_penerbangan; ?></td>
                        <td><?php echo $data->dari; ?></td>
                        <td><?php echo $data->waktu_tiba; ?></td>
                        <!-- <td> <span class="label label-default">Dijadwalkan</span> </td> -->
                      </tr>
                      <?php
                    }
                  }
                    
                    ?>                      

                    </tbody>
                  </table>
                </div>
              </div> 
            </div>

          </div>

          <div class="col-md-4">
            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Berita Terbaru</span></h4>

            <!-- Start Latest Posts -->
            <div class="latest-posts-classic">

              <!-- Post 1 -->
              <?php             
              if (isset($berita)) {
              $i = 0;
              foreach ($berita as $data) {
                if ($i < 3) {
                  
                
                ?>              
              <div class="post-row">                            
                <h3 class="post-title"><a href="<?php echo base_url(); ?>berita/detailberita/<?php echo $data->id_berita; ?>"><?php echo $data->judul ?></a></h3>
                <h6 class="post-date"><span><?php echo $data->tgl_post; ?></span></h6>
                
                <div class="post-content">
                  <p>
                  <?php
                  $isi = explode(" ", $data->berita);
                  $isinya = implode(" ", array_splice($isi, 0, 30));
                  echo $isinya;
                  ?>
                  <a class="read-more" href="<?php echo base_url()?>berita/detailberita/<?php echo $data->id_berita; ?>"> Baca Selengkapnya</a></p>
                </div>
              </div>

              <?php   } $i++;               
                }
              }
              ?>              

            </div>
            <!-- End Latest Posts -->
          </div>
          <!-- .col-md-6 -->
        </div>
      </div>
    </div>
    <!-- End Testimonials Section -->


    <!-- Start Portfolio Section -->
      <div>
        <div class="container">
          <!-- Start Recent Projects Carousel -->
          <div class="recent-projects">
            <h4 class="classic-title"><span>Galeri</span></h4>
            <div class="projects-carousel touch-carousel">

            <?php  
            if ($photo != 0) {
              $i = 0;
              foreach ($photo as $data) {
                if ($i<10) {
            ?>

              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <div class="portfolio-thumb">
                    <a class="lightbox" title="<?php echo $data->judul ?>" href="<?php echo base_url()?>assets/images/galeri/<?php echo $data->photo ?>">
                      <div class="thumb-overlay"><!-- <i class="fa fa-arrows-right"></i> --></div>
                      <img alt="" src="<?php echo base_url()?>assets/images/galeri/<?php echo $data->photo ?>" />
                    </a>
                  </div>
                  <div class="portfolio-details">
                    <a href="#">                      
                      <span><?php echo $data->judul; $i++ ?></span>
                      <!-- <span>Animation</span> -->
                    </a>
                  </div>
                </div>
              </div> 
            <?php                    
                }
              }
            }

            ?>

            </div>
          </div>
          <!-- End Recent Projects Carousel -->
        </div>
        <!-- .container -->
      </div>
      <!-- End Portfolio Section -->      
