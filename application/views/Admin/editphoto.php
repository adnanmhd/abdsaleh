        <section class="content-header">
          <h1>
          
            Edit Photo
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-image"></i> Galeri</li>
            <li>Edit Photo</li>            
          </ol>
        </section>

        <!-- Main content -->

        <?php
        if (isset($photo)) {
          foreach ($photo as $data) {
         
          ?>
        <section class="content">          
          <div class="row">
            <div class="col-md-12">                          
              <div class="box box-info">                
                <div class="box-body pad">

                  <form action="<?php echo base_url()?>galeri/editPhoto" method="POST" enctype="multipart/form-data">                                                                                                            
                    <div class="form-group">
                      <div>                          
                        <img style="max-width:400px" src="<?php echo base_url()?>assets/images/galeri/<?php echo $data->photo?>">
                      </div>
                    </div> 

                    <div class="form-group">
                      <!-- <label for="">Judul Pho</label>                         -->
                      <input type="text" class="form-control" name="judul" pattern="[a-zA-Z0-9- ^,.)(]+" title="Inputan hanya dapat berupa huruf dan angka" value="<?php echo $data->judul?>" required="" >
                    </div>                    
                                                       
                    <div class="box-footer">                      
                      <input type="hidden" name="id" value="<?php echo $data->id_photo?>">  
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <button type="button" name="cancel" value="cancel" onClick="window.location='<?php echo base_url() ?>Admin/dataGaleri';" class="btn btn-danger">Batal</button>
                    </div>
                    

                  </form>
                </div>
              </div>
            </div><!-- /.col-->
          </div><!-- ./row -->
        </section><!-- /.content -->

        <?php         
          }
        } ?>


