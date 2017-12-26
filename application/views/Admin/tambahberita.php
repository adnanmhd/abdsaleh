        <section class="content-header">
          <h1>
          
            Tambah Berita           
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-newspaper-o"></i> Berita</li>
            <li>Tambah Berita</li>            
          </ol>
        </section>

         <section class="content-header">
          <?php
            if (isset($_SESSION['pesan'])) {
              echo $_SESSION['pesan'];
            }
           ?>     
        </section>

        <!-- Main content -->
        <section class="content">          
          <div class="row">
            <div class="col-md-12">                          
              <div class="box box-info">                
                <div class="box-body pad">
                  <form action="<?php echo base_url()?>berita/simpanBerita" method="POST" enctype="multipart/form-data">                                                                          
                  
                    <div class="form-group">
                      <label for="">Judul Berita</label>                        
                      <input type="text" class="form-control" name="judul" pattern="[a-zA-Z0-9- ^,.)(]+" title="Inputan hanya dapat berupa huruf dan angka" placeholder="Judul" required="" >
                    </div>

                    <div class="form-group">
                      <span class="btn btn-danger btn-file">
                      Tambahkan Photo<input type="file" name="gambar" accept="image/*" id="fileupload" multiple="multiple" required="">
                      </span>                      
                    </div> 

                    <div class="form-group">
                      <div class="tabel-artikel">                          
                      </div>
                    </div> 
                  
                    
                    <div class="form-group">
                      <label>Isi Berita</label>
                      <textarea id="editor1" name="isi" placeholder="Place some text here" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required >
                        
                      </textarea>
                    </div>
                    <div class="box-footer">                        
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    

                  </form>
                </div>
              </div>
            </div><!-- /.col-->
          </div><!-- ./row -->
        </section><!-- /.content -->


