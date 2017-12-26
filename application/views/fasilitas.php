
    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">

        <?php
        if ($menu == "airside") {
          ?>
        <h4 class="classic-title"><span>Air Side</span></h4>     
        <?php
        }
        elseif ($menu == "landside"){
          ?>
        <h4 class="classic-title"><span>Land Side</span></h4>   
        <?php 
        }
        ?>

        

        <?php 
        if (isset($fasilitas)) {          

          foreach ($fasilitas as $data) {
            if ($menu == "airside" && $data->jenis == "Air Side") {              
            
        ?>


         <!-- Start Call Action -->
          <div class="call-action call-action-boxed call-action-style1 clearfix">
            <!-- Call Action Button -->
            <div class="button-side col-md-6 col-sm-6 col-xs-12" style="margin-top:8px; max-width:250px"> <img src="<?php echo base_url(); ?>assets/images/fasilitas/<?php echo $data->gambar; ?>"> </div>
            <h2 class="primary col-md-6 col-sm-6 col-xs-12"><strong><?php echo $data->nama_fasilitas; ?></strong></h2>
            <p class="col-xs-12 col-md-6 col-sm-6"><?php echo $data->informasi_fasilitas; ?>.</p>
          </div>
          <!-- End Call Action -->

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:20px;"></div>

        <?php }

            elseif ($menu == "landside" && $data->jenis == "Land Side") {              
            
        ?>


          <!-- Start Call Action -->

          <div class="call-action call-action-boxed call-action-style1 clearfix">
            <!-- Call Action Button -->
            <div class="button-side col-xs-12" style="margin-top:8px; max-width:250px"> <img src="<?php echo base_url(); ?>assets/images/fasilitas/<?php echo $data->gambar; ?>"> </div>
            <h2 class="primary col-md-6 col-sm-6 col-xs-12"><strong><?php echo $data->nama_fasilitas; ?></strong></h2>
            <p class="col-md-6 col-sm-6 col-xs-12"><?php echo $data->informasi_fasilitas; ?>.</p>
          </div>
          <!-- End Call Action -->

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:20px;"></div>

        <?php }

          }
        }
        ?>          
          
        </div>
      </div>
    </div>
    <!-- End Content -->
