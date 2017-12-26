         

        
        <?php
            if (isset($_SESSION['pesan'])) {                        
             echo "<section class=\"content-header\">".$_SESSION['pesan']."</section>"; 
        }

        if (isset($edit)) {          
           ?>    
        <section class="content-header">
          <h1>          
            Edit Maskapai
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-plane"></i> Data Penerbangan</li>
            <li>Maskapai</li>            
          </ol>
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">                
                <div class="box-body pad">
                  <form action="<?php echo base_url()?>maskapai/updateMaskapai" method="POST" enctype="multipart/form-data">                                                                          

                  <?php  
                  if (isset($editmaskapai)) {
                    foreach ($editmaskapai as $data) {
                    
                  ?>                    
                    <div class="form-group">
                      <label for="">Nama Maskapai</label>                        
                      <input type="text" class="form-control" name="nama" required="" pattern="[a-zA-Z ]+" title="Inputan hanya dapat berupa huruf" value="<?php echo $data->nama_maskapai ?>">
                    </div>

                    <div class="form-group">
                      <label for="">Jenis Pesawat</label>                        
                      <input type="text" class="form-control" name="jenis" required="" pattern="[a-zA-Z0-9- ]+" title="Inputan hanya berupa huruf dan angka" value="<?php echo $data->jenis_pesawat ?>">
                    </div>

                    <div class="form-group">
                      <label for="">Kapasitas</label>                        
                      <input type="text" class="form-control" name="kapasitas" required="" pattern="[0-9]{2,3}" title="Inputan hanya berupa angka dan maksimal 3 digit" value="<?php echo $data->kapasitas_kursi ?>">
                    </div>

                    <div class="form-group">
                      <label for="">No Telepon</label>                        
                      <input type="text" class="form-control" name="no_telp" required="" pattern="[0-9\- ]+" title="Contoh inputan : 0345-93389" value="<?php echo $data->no_telp ?>">
                    </div>                    

                    <div class="form-group">
                      <div class="tabel-artikel">                          
                      <img src="<?php echo base_url()."assets/images/maskapai/".$data->gambar  ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <span class="btn btn-danger btn-file">
                      Ganti Logo<input type="file" name="gambar" accept="image/*" id="fileupload" multiple="multiple">
                      </span>                      
                    </div> 
                                   
                    <div class="box-footer"> 
                      <input type="hidden" name="id" value="<?php echo $data->id_maskapai ?>">                       
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <button type="button" name="cancel" value="cancel" onClick="window.location='<?php echo base_url() ?>Admin/maskapai';" class="btn btn-danger">Batal</button>
                    </div>

                    <?php  
                    }
                  }
                    ?>
                    

                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content --> 

        <?php  
      }
      if (isset($tambah)) {          
           ?>    
        <section class="content-header">
          <h1>          
            Tambah Data Maskapai
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-plane"></i> Data Penerbangan</li>
            <li>Tambah Data Maskapai</li>            
          </ol>
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">                
                <div class="box-body pad">
                  <form action="<?php echo base_url()?>maskapai/tambahMaskapai" method="POST" enctype="multipart/form-data">                                                                          
                                  
                    <div class="form-group">
                      <label for="">Nama Maskapai</label>                        
                      <input type="text" class="form-control" name="nama" required="" pattern="[a-zA-Z ]+" title="Inputan hanya dapat berupa huruf">
                    </div>

                    <div class="form-group">
                      <label for="">Jenis Pesawat</label>                        
                      <input type="text" class="form-control" name="jenis" required="" pattern="[a-zA-Z0-9- ]+" title="Inputan hanya berupa huruf dan angka">
                    </div>

                    <div class="form-group">
                      <label for="">Kapasitas</label>                        
                      <input type="text" class="form-control" name="kapasitas" required="" pattern="[0-9]{2,3}" title="Inputan hanya berupa angka dan maksimal 3 digit">
                    </div>

                    <div class="form-group">
                      <label for="">No Telepon</label>                        
                      <input type="text" class="form-control" name="no_telp" required="" pattern="[0-9\- ]+" title="Contoh inputan : 0345-93389">
                    </div>

                    <div class="form-group">
                      <span class="btn btn-danger btn-file">
                      Tambahkan Logo<input type="file" name="gambar" accept="image/*" id="fileupload" multiple="multiple" required="">
                      </span>                      
                    </div> 

                    <div class="form-group">
                      <div class="tabel-artikel">                          
                      </div>
                    </div> 
                                   
                    <div class="box-footer">                                         
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <button type="button" name="cancel" value="cancel" onClick="window.location='<?php echo base_url() ?>Admin/maskapai';" class="btn btn-danger">Batal</button>
                    </div>                                       

                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content --> 

        <?php  
      }
        ?>         
        <section class="content-header">
          <h1>          
            Maskapai Penerbangan
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-plane"></i> Data Penerbangan</li>
            <li>Maskapai</li>            
          </ol>
        </section> 

        <section class="content-header">
          <a href="<?php echo base_url()?>Admin/tambahMaskapai"><button class="btn btn-info glyphicon glyphicon-plus"> Tambah Data</button> </a>
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box">                
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>No</th>
                      <th>Logo</th>                      
                      <th>Maskapai</th>
                      <th>Jenis Pesawat</th>                      
                      <th>Kapasitas</th>
                      <th>No Telepon</th>                      
                      <th>Option</th>
                    </tr>
                    <?php 
                    if (isset($maskapai) && $maskapai != 0) {
                      
                    $no = 1;
                    foreach ($maskapai as $data) {                      
                      ?>
                    <tr>
                      <td><?php echo $no ?></td>
                      <td><img style="max-width:150px" src="<?php echo base_url()."assets/images/maskapai/".$data->gambar ?>"></td>
                      <td><?php echo $data->nama_maskapai ?></td>
                      <td><?php echo $data->jenis_pesawat ?></td>                                                                  
                      <td><?php echo $data->kapasitas_kursi ?></td>
                      <td><?php echo $data->no_telp ?></td>
                      <td>
                        <a href="<?php echo base_url()?>admin/editMaskapai/<?php echo $data->id_maskapai?>" title="Edit"> <button class='btn btn-warning btn-xs glyphicon glyphicon-pencil'></button></a>                     
                        <a href="<?php echo base_url()?>maskapai/hapusMaskapai/<?php echo $data->id_maskapai?>" title="Hapus" onclick='return checkDelete()'> <button class='btn btn-danger btn-xs glyphicon glyphicon-trash'></button></a>
                      </td>
                      </tr>
                    <?php 
                    $no++;
                      
                    }
                  }
                  
                    ?>                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->