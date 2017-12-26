        <section class="content-header">
        <?php 
          if ($photo == 0) {                 
          ?>
          <h1>          
            Data Galeri Kosong         
          </h1>                  
          <?php 
        } else{          
          ?>    
          <h1>          
            Galeri
          </h1>  

          <ol class="breadcrumb">
            <li><i class="fa fa-image"></i> Galeri</li>
            <li>Data Galeri</li>            
          </ol>              

        <?php 
        }
        ?>
        </section>
        
          <?php
            if (isset($_SESSION['pesan'])) {
              echo "<section class=\"content-header\">".$_SESSION['pesan']."</section>";
            }
           ?>     
                

        <section class="content">          
          <div class="row">
            <div class="box">
              <div class="box-body">

              <?php  
              if ($photo != 0) {
                # code...
              
              foreach ($photo as $data) {                
              ?>

                <a class="col-md-3 col-xs-6" href="#" data-toggle="modal" data-target="<?php echo "#modal".$data->id_photo ?>">
                    <img class="galeri" src="<?php echo base_url() ?>assets/images/galeri/<?php echo $data->photo?>" alt="">
                </a>

              <?php 
              } 
            }
              ?>

              </div>  
            </div>                              
            
            
                        
          </div>
        </section><!-- /.content -->  

<?php  
  if ($photo != 0) {
    # code...
  
  foreach ($photo as $data) {                
  ?>

  <div class="modal fade" id="<?php echo "modal".$data->id_photo ?>" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <div class="pull-left">
            <a href="<?php echo base_url()?>galeri/hapusPhoto/<?php echo $data->id_photo?>" onclick='return checkDelete()' title="Hapus"><button class="btn btn-xs btn-danger glyphicon glyphicon-trash"></button></a>
            <a href="<?php echo base_url()?>Admin/editPhoto/<?php echo $data->id_photo?>" title="Edit"><button class="btn btn-xs btn-warning glyphicon glyphicon-pencil"></button></a>
          </div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>          
        </div>
        <div class="modal-body">
          <img class="img-responsive" src="<?php echo base_url() ?>assets/images/galeri/<?php echo $data->photo ?>">
          <h6>Diupload pada : <?php echo $data->waktu ?></h6>
          <p><?php echo $data->judul ?></p>
        </div>
      </div>
    </div>
  </div>

  <?php
    }
  }
   ?>
 