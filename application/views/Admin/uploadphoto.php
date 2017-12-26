        <section class="content-header">
          <h1>
          
            Upload Photo
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-image"></i> Galeri</li>
            <li>Upload Photo</li>            
          </ol>
        </section>

          <?php
            if (isset($_SESSION['pesan'])) {
              echo "<section class=\"content-header\">".$_SESSION['pesan']."</section>";
            }
           ?>             

        <!-- Main content -->
        <section class="content">          
          <div class="row">
            <div class="col-md-12">                          
              <div class="box box-info">                
                <div class="box-body pad">
                  <form action="<?php echo base_url()?>galeri/uploadPhoto" method="POST" enctype="multipart/form-data">                                                                          
                  
                    <div class="form-group">
                      <!-- <label for="">Judul Pho</label>                         -->
                      <input type="text" class="form-control" name="judul" pattern="[a-zA-Z0-9- ^,.)(]+" title="Inputan hanya dapat berupa huruf dan angka" placeholder="Judul Photo" required="" >
                    </div>

                    <div class="form-group">
                      <span class="btn btn-danger btn-file">
                      Browse<input type="file" name="gambar" accept="image/*" id="fileupload" multiple="multiple" required="">
                      </span>                      
                    </div> 

                    <div class="form-group">
                      <div class="tabel-artikel">                          
                      </div>
                    </div> 
                                                       
                    <div class="box-footer">                        
                      <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                    

                  </form>
                </div>
              </div>
            </div><!-- /.col-->
          </div><!-- ./row -->
        </section><!-- /.content -->


