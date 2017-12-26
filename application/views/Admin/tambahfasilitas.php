        <section class="content-header">
          <h1>
          
            Tambah Data Fasilitas
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-server"></i> Fasilitas</li>
            <li>Tambah Data</li>            
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
                  <form action="<?php echo base_url()?>fasilitas/simpanFasilitas" method="POST" enctype="multipart/form-data">                                                                          

                    <div class="form-group">
                      <label for="">Jenis</label>                        
                      <select name="jenis" class="form-control" id="sel1">
                        <?php  
                        if ($menu == 'airside') {
                        ?>
                        <option>Air Side</option>
                        <option>Land Side</option>                        
                        <?php
                        }
                        else if($menu == 'landside'){
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
                      <input type="text" class="form-control" pattern="[a-zA-Z0-9- ]+" title="Inputan hanya berupa angka dan huruf" name="nama" required="" >
                    </div>

                    <div class="form-group">
                      <label for="">Keterangan</label>                        
                      <input type="text" class="form-control" pattern="[a-zA-Z0-9- ^,.)(]+" title="Inputan hanya dapat berupa huruf dan angka" name="informasi" required="" >
                    </div>

                    <div class="form-group">
                      <div class="tabel-artikel">                                                
                      </div>
                    </div>

                    <div class="form-group">
                      <span class="btn btn-danger btn-file">
                      Tambahkan Photo<input type="file" name="gambar" accept="image/*" id="fileupload" multiple="multiple">
                      </span>                      
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


