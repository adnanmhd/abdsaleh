    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row blog-post-page">          
          <div class="col-md-8 blog-box">
            <h4 class="classic-title"><span>Berita</span></h4>

            <!-- Start Single Post Area -->
            <?php 
            if (isset($beritadetail)) {
              foreach ($beritadetail as $data) {
                $id = $data->id_berita;
                ?>

            <div class="blog-post gallery-post">

              <!-- Start Single Post (Gallery Slider) -->
              <div class="post-head">
                <!-- <div class="touch-slider post-slider"> -->
                  <div class="item">
                    
                    
                      <img alt="" src="<?php echo base_url(); ?>assets/images/berita/<?php echo $data->gambar; ?>">
                    
                  </div>                  
                <!-- </div> -->
              </div>
              <!-- End Single Post (Gallery) -->

              <!-- Start Single Post Content -->
              <div class="post-content">                
                <h2><?php echo $data->judul; ?></h2>
                <ul class="post-meta">                  
                  <li><?php echo $data->tgl_post; ?></li>                 
                </ul>
                <p>
                <?php echo $data->berita; ?>
                </p>
                
                                
              </div>
              <!-- End Single Post Content -->

            </div>
            <?php 
              }
            }
            ?>
            <!-- End Single Post Area -->            
          </div>


          <!-- Sidebar -->
          <div class="col-md-3 sidebar right-sidebar">
            <h4 class="classic-title"><span>Recent Post</span></h4>
            

            <!-- Popular Posts widget -->
            <div class="widget widget-popular-posts">              
              <ul>
              <?php
                if (isset($berita)) {
                  $i = 0;
                  foreach ($berita as $data) {
                    if ($i<5 && $data->id_berita != $id) {                                    

                ?>
                <li>                
                  <div class="widget-thumb">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/images/berita/<?php echo $data->gambar; ?>"/></a>
                  </div>
                  <div class="widget-content">
                    <h5><a href="<?php echo base_url(); ?>berita/detailberita/<?php echo $data->id_berita; ?>"><?php echo $data->judul ?></a></h5>
                    <span><?php echo $data->tgl_post; ?></span>
                  </div>
                  <div class="clearfix"></div>
                </li>
                <?php 
                    } $i++;

                  }
                }
                 ?>                
              </ul>
            </div>            
            

          </div>
          <!--End sidebar-->


        </div>

      </div>
    </div>
    <!-- End content -->
