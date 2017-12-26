        <section class="content-header">
          <h1>
          
            Edit Berita           
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-newspaper-o"></i> Berita</li>
            <li>Data Berita</li>
            <li>Edit Berita</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">          
          <div class="row">
            <div class="col-md-12">              

            <?php 
            foreach ($berita as $berita) {
              # code...
            
            ?>
              <div class="box box-info">                
                <div class="box-body pad">
                  <form action="<?php echo base_url()?>berita/editberita" method="POST" enctype="multipart/form-data">
                    <div class="col-md-3">
                      <div class="form-group">
                        <div class="tabel-artikel">
                          <img src="<?php echo base_url(); ?>assets/images/berita/<?php echo $berita->gambar; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <span class="btn btn-danger btn-file">
                        Ganti Photo<input type="file" name="gambar" accept="image/*" id="fileupload" multiple="multiple" >
                        </span>                      
                      </div>                      
                    </div>

                    <div class="col-md-5">
                      <div class="form-group">
                        <label for="">Judul Berita</label>                        
                        <input type="text" class="form-control" name="judul" placeholder="Judul" pattern="[a-zA-Z0-9- ^,.)(]+" title="Inputan hanya dapat berupa huruf dan angka" value="<?php echo $berita->judul; ?>">
                      </div>
                    </div>                                      

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Isi Berita</label>
                        <textarea id="editor1" name="isi" placeholder="Place some text here" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          <?php echo $berita->berita; ?>
                        </textarea>
                      </div>
                      <div class="box-footer">
                        <input type="hidden" name="id" value="<?php echo $berita->id_berita;?>">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" name="cancel" value="cancel" onClick="window.location='<?php echo base_url() ?>Admin/dataBerita';" class="btn btn-danger">Batal</button>
                      </div>
                    </div>  

                  </form>
                </div>
              </div>
            </div><!-- /.col-->
          </div><!-- ./row -->
        </section><!-- /.content -->

          <?php
            }
            ?>

