<section id="content" style="margin-top:10px">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="clearfix">
        </div>        
        <div class="row">
          <section id="projects">
          <ul id="thumbs" class="portfolio">

          <?php  
          if ($photo != 0) {
              foreach ($photo as $data) {                  
          ?>
            <!-- Item Project and Filter Name -->
            <li class="item-thumbs col-lg-3 design" data-id="id-0">
                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="<?php base_url() ?>assets/images/galeri/<?php echo $data->photo  ?>">
                <!-- <span class="overlay-img"></span>
                <span class="overlay-img-thumb glyphicon glyphicon-eye-open"></span> -->
                </a>
                <!-- Thumb Image and Description -->
                <img src="<?php echo base_url() ?>assets/images/galeri/<?php echo $data->photo  ?>" alt="<?php echo $data->judul  ?>">
            </li>

        <?php  }
            }?>
            
            
            <!-- <li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">            
                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php base_url() ?>assets/images/galeri/Pemeriksaan BNN.jpg">
                <span class="overlay-img"></span>
                <span class="overlay-img-thumb font-icon-plus"></span>
                </a>            
                <img src="<?php base_url() ?>assets/images/galeri/Pemeriksaan BNN.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
            </li> -->
                        
            
            <!-- End Item Project -->
          </ul>
          </section>
        </div>
      </div>
    </div>
  </div>
  </section>