        <section class="content-header">
          <h1>
          
            Edit Data Fasilitas
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-server"></i> Fasilitas</li>
            <li>Edit Data</li>            
          </ol>
        </section>
        
        <!-- Main content -->
        <section class="content">          
          <div class="row">
            <div class="col-md-12">                          
              <div class="box box-info">                
                <div class="box-body pad">
                  <form action="<?php echo base_url()?>fasilitas/updateFasilitas" method="POST" enctype="multipart/form-data">                                                                          

                  <?php  
                  if (isset($fasilitas)) {
                    foreach ($fasilitas as $data) {
                    
                  ?>

                    <div class="form-group">
                      <label for="">Jenis</label>                        
                      <select name="jenis" class="form-control" id="sel1">
                        <?php  
                        if ($data->jenis == 'Air Side') {
                        ?>
                        <option>Air Side</option>
                        <option>Land Side</option>                        
                        <?php
                        }
                        else if($data->jenis == 'Land Side'){
                        ?>                        
                        <option>Land Side</option>                        
                        <option>Air Side</option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  
                    <div class="form-group">
                      <label for="">Nama Fasilitas</label>                        
                      <input type="text" class="form-control" name="nama" required="" pattern="[a-zA-Z0-9- ]+" title="Inputan hanya dapat berupa huruf dan angka" value="<?php echo $data->nama_fasilitas ?>">
                    </div>

                    <div class="form-group">
                      <label for="">Keterangan</label>                        
                      <input type="text" class="form-control" name="informasi" required="" pattern="[a-zA-Z0-9- ^,.)(]+" title="Inputan hanya dapat berupa huruf dan angka" value="<?php echo $data->informasi_fasilitas ?>">
                    </div>

                    <div class="form-group">
                      <span class="btn btn-danger btn-file">
                      Ganti Photo<input type="file" name="gambar" accept="image/*" id="fileupload" multiple="multiple" >
                      </span>                      
                    </div> 

                    <div class="form-group">
                      <div class="tabel-artikel">                          
                        <img src="<?php echo base_url()."assets/images/fasilitas/".$data->gambar?>">
                      </div>
                    </div> 
                                                          
                    <div class="box-footer"> 
                      <input type="hidden" name="id" value="<?php echo $data->id_fasilitas ?>">                       
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <?php  
                      if ($data->jenis == 'Air Side') { ?>
                      <button type="button" name="cancel" value="cancel" onClick="window.location='<?php echo base_url() ?>Admin/fasilitasAirside';" class="btn btn-danger">Batal</button>
                      <?php                      
                      } elseif ($data->jenis == 'Land Side') { ?>
                      <button type="button" name="cancel" value="cancel" onClick="window.location='<?php echo base_url() ?>Admin/fasilitasLandside';" class="btn btn-danger">Batal</button>
                      <?php
                      }
                      ?>
                    </div>

                    <?php  
                    }
                  }
                    ?>
                    

                  </form>
                </div>
              </div>
            </div><!-- /.col-->
          </div><!-- ./row -->
        </section><!-- /.content -->


