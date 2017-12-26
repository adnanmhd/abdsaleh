    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row blog-post-page">
          <h4 class="classic-title"><span>Berita</span></h4>
          <div class="col-md-10 blog-box">

            <!-- Start Single Post Area -->
            <!-- Start Latest Posts -->
            <div class="latest-posts-classic">

              <!-- Post 1 -->
              <?php 
              if (isset($berita)) {
                foreach ($berita as $data) {
                  
                ?>
              <div class="post-row"> 
                <div class="image-post col-md-4 col-sm-4 col-xs-12">
                  <img src="<?php echo base_url()?>assets/images/berita/<?php echo $data->gambar; ?>">
                </div>             

                <div class="berita col-md-8 col-sm-8 col-xs-12">
                  <h3 class="post-title"><a href="<?php echo base_url() ?>berita/detailBerita/<?php echo $data->id_berita; ?>"><?php echo $data->judul; ?></a></h3>
                  <h6 class="post-date"><span><?php echo $data->tgl_post; ?></span></h6>
                  
                  <div class="post-content">
                    <p>
                    <?php
                    $isi = explode(" ", $data->berita);
                    $isinya = implode(" ", array_splice($isi, 0, 50));
                    echo $isinya;
                    ?> <a class="read-more" href="<?php echo base_url()?>berita/detailberita/<?php echo $data->id_berita; ?>"> Baca Selengkapnya...</a></p>
                  </div>  
                </div>
                
              </div>

              <?php 
                }
              }
              echo $this->pagination->create_links(); ?>              

            </div>
            <!-- End Latest Posts -->
            </div>
            <!-- End Single Post Area -->            
          </div>          

        </div>

      </div>
    </div>
    <!-- End content -->

 