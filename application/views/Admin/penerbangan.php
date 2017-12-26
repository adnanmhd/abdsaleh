         
        
        <?php
            if (isset($_SESSION['pesan'])) {                        
             echo "<section class=\"content-header\">".$_SESSION['pesan']."</section>"; 
        }        

      if (isset($editKeberangkatan)) {          
        ?>    
        <section class="content-header">
          <h1>          
            Edit Jadwal Keberangkatan
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-plane"></i> Data Penerbangan</li>
            <li>Keberangkatan</li>            
          </ol>
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">                
                <div class="box-body pad">
                  <div class="col-md-8">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url() ?>maskapai/editJadwalPenerbangan">

                    <?php 
                    foreach ($editKeberangkatan as $data) {

                    ?>
                      <div class="form-group">
                        <label class="control-label col-sm-3">Maskapai:</label>
                        <div class="col-sm-9"> 
                          <input type="text" class="form-control" name="maskapai" readonly="" value="<?php echo $data->maskapai ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3">No. Penerbangan:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="no_penerbangan" pattern="[a-zA-Z0-9- ]+" title="Inputan tidak sesuai" value="<?php echo $data->no_penerbangan ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3">Tujuan:</label>
                        <div class="col-sm-9">                           
                          <input type="text" class="form-control" readonly="" value="<?php echo $data->tujuan;  ?>">                           
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3" for="pwd">Waktu Berangkat:</label>
                        <div class="col-sm-9"> 
                          <input type="time" class="form-control" required="" name="waktu_berangkat" value="<?php echo $data->waktu_berangkat ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3" >Waktu Tiba:</label>
                        <div class="col-sm-9"> 
                          <input type="time" class="form-control"  required="" name="waktu_tiba" value="<?php echo $data->waktu_tiba ?>">
                        </div>
                      </div>
                      <input type="hidden" name="id" value="<?php echo $data->id_jadwal; ?>">

                      <?php 
                    }
                      ?>
                      
                      <div class="form-group"> 
                        <div class="col-sm-offset-3 col-sm-9">
                          <input type="hidden" name="jenis" value="keberangkatan">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->        

        <?php        
      }
      if (isset($editKedatangan)) {
      ?>

        <section class="content-header">
          <h1>          
            Edit Jadwal Kedatangan
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-plane"></i> Data Penerbangan</li>
            <li>Kedatangan</li>            
          </ol>
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">                
                <div class="box-body pad">
                  <div class="col-md-8">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url() ?>maskapai/editJadwalPenerbangan">

                    <?php 
                    foreach ($editKedatangan as $data) {

                    ?>
                      <div class="form-group">
                        <label class="control-label col-sm-3">Maskapai:</label>
                        <div class="col-sm-9"> 
                          <input type="text" class="form-control" name="maskapai" readonly="" value="<?php echo $data->maskapai ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3">No. Penerbangan:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="no_penerbangan" pattern="[a-zA-Z0-9- ]+" title="Inputan tidak sesuai" value="<?php echo $data->no_penerbangan ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3">Tujuan:</label>
                        <div class="col-sm-9">                           
                          <input type="text" class="form-control" readonly="" value="<?php echo $data->tujuan;  ?>">                           
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3" for="pwd">Waktu Berangkat:</label>
                        <div class="col-sm-9"> 
                          <input type="time" class="form-control" required="" name="waktu_berangkat" value="<?php echo $data->waktu_berangkat ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3" >Waktu Tiba:</label>
                        <div class="col-sm-9"> 
                          <input type="time" class="form-control"  required="" name="waktu_tiba" value="<?php echo $data->waktu_tiba ?>">
                        </div>
                      </div>

                      <input type="hidden" name="id" value="<?php echo $data->id_jadwal; ?>">

                      <?php 
                    }
                      ?>
                      
                      <div class="form-group"> 
                        <div class="col-sm-offset-3 col-sm-9">
                          <input type="hidden" name="jenis" value="kedatangan">                          
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->        


      <?php   
      }
      if (isset($tambahkeberangkatan)) {          
           ?>    
        <section class="content-header">
          <h1>          
            Tambah Jadwal Keberangkatan
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-plane"></i> Data Penerbangan</li>
            <li>Keberangkatan</li>            
          </ol>
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">                
                <div class="box-body pad">
                  <div class="col-md-8">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url() ?>maskapai/tambahJadwalPenerbangan">
                      <div class="form-group">
                        <label class="control-label col-sm-3">Maskapai:</label>
                        <div class="col-sm-9"> 
                          <select class="form-control" name="id_maskapai" required="">
                            <option value="">-- Pilih Maskapai --</option>
                          <?php  
                          if (isset($maskapai)) {
                            foreach ($maskapai as $data) {                                                        
                          ?>
                            <option value="<?php echo $data->id_maskapai;  ?>"> <?php echo $data->nama_maskapai;  ?> </option>
                          <?php }
                            } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3">No. Penerbangan:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="no_penerbangan" pattern="[a-zA-Z0-9- ]+" required="" title="Inputan tidak valid">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3">Tujuan:</label>
                        <div class="col-sm-9"> 
                          <select class="form-control" required="" name="id_route">
                            <option value="">-- Pilih Tujuan --</option>
                          <?php  
                          if (isset($rute)) {
                            foreach ($rute as $data) {                                                        
                              if ($data->tujuan != "Malang") {
                                                              
                          ?>
                            <option value="<?php echo $data->id_route;  ?>"> <?php echo $data->tujuan;  ?> </option>
                          <?php }
                              }
                            } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3" for="pwd">Waktu Berangkat:</label>
                        <div class="col-sm-9"> 
                          <input type="time" class="form-control" required="" name="waktu_berangkat">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3" >Waktu Tiba:</label>
                        <div class="col-sm-9"> 
                          <input type="time" class="form-control"  required="" name="waktu_tiba">
                        </div>
                      </div>
                      
                      <div class="form-group"> 
                        <div class="col-sm-offset-3 col-sm-9">
                          <input type="hidden" name="jenis" value="keberangkatan">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content --> 

        <?php  
      }
      if (isset($tambahkedatangan)) {
      ?>
        <section class="content-header">
          <h1>          
            Tambah Jadwal Kedatangan
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-plane"></i> Data Penerbangan</li>
            <li>Kedatangan</li>            
          </ol>
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">                
                <div class="box-body pad">
                  <div class="col-md-8">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url() ?>maskapai/tambahJadwalPenerbangan">
                      <div class="form-group">
                        <label class="control-label col-sm-3">Maskapai:</label>
                        <div class="col-sm-9"> 
                          <select class="form-control" name="id_maskapai" required="">
                            <option value="">-- Pilih Maskapai --</option>
                          <?php  
                          if (isset($maskapai)) {
                            foreach ($maskapai as $data) {                                                        
                          ?>
                            <option value="<?php echo $data->id_maskapai;  ?>"> <?php echo $data->nama_maskapai;  ?> </option>
                          <?php }
                            } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3">No. Penerbangan:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="no_penerbangan" pattern="[a-zA-Z0-9- ]+" title="Inputan tidak valid" required="">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3">Dari:</label>
                        
                        <div class="col-sm-9"> 
                          <select class="form-control" name="id_route" required="">
                            <option value="">-- Asal Keberangkatan --</option>
                          <?php  
                          if (isset($rute)) {
                            foreach ($rute as $data) {                                                        
                              if ($data->dari != "Malang") {
                                                              
                          ?>
                            <option value="<?php echo $data->id_route;  ?>"> <?php echo $data->dari;  ?> </option>
                          <?php }
                              }
                            } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3" for="pwd">Waktu Berangkat:</label>
                        <div class="col-sm-9"> 
                          <input type="time" class="form-control" required="" name="waktu_berangkat">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3" >Waktu Tiba:</label>
                        <div class="col-sm-9"> 
                          <input type="time" class="form-control"  required="" name="waktu_tiba">
                        </div>
                      </div>
                      
                      <div class="form-group"> 
                        <div class="col-sm-offset-3 col-sm-9">
                          <input type="hidden" name="jenis" value="kedatangan">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->       
      <?php 
      }
      if (isset($kedatangan)) {
        # code...      
        ?>         
        <section class="content-header">
          <h1>          
            Jadwal Kedatangan
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-plane"></i> Data Penerbangan</li>
            <li>Kedatangan</li>            
          </ol>
        </section> 

        <section class="content-header">
          <a href="<?php echo base_url()?>Admin/tambahKedatangan"><button class="btn btn-info glyphicon glyphicon-plus"> Jadwal Kedatangan</button> </a>
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box">                
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>No</th>                                            
                      <th>Maskapai</th>
                      <th>Flight</th>                      
                      <th>Tujuan</th>
                      <th>Waktu</th>                      
                      <th>Option</th>
                    </tr>
                    <?php 
                    if (isset($kedatangan)) {
                      
                    $no = 1;
                    foreach ($kedatangan as $data) {                      
                      ?>
                    <tr>
                      <td><?php echo $no ?></td>
                      <td><img style="max-width:100px" src="<?php echo base_url()."assets/images/maskapai/".$data->gambar ?>"></td>
                      <td><?php echo $data->no_penerbangan ?></td>
                      <td><?php echo $data->dari ?></td>                                                                  
                      <td><?php echo $data->waktu_tiba ?></td>                      
                      <td>
                        <a href="<?php echo base_url()?>admin/editKedatangan/<?php echo $data->id_jadwal?>" title="Edit"> <button class='btn btn-warning btn-xs glyphicon glyphicon-pencil'></button></a>                     
                        <a href="<?php echo base_url()?>maskapai/hapusKedatangan/<?php echo $data->id_jadwal?>" title="Hapus" onclick='return checkDelete()'> <button class='btn btn-danger btn-xs glyphicon glyphicon-trash'></button></a>
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

        <?php } 
        if (isset($keberangkatan)) {
          ?>

        <section class="content-header">
          <h1>          
            Jadwal Keberangkatan
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-plane"></i> Data Penerbangan</li>
            <li>Keberangkatan</li>            
          </ol>
        </section> 

        <section class="content-header">
        <a href="<?php echo base_url()?>Admin/tambahKeberangkatan" title="Tambah Jadwal Keberangkatan" ><button class="btn btn-info glyphicon glyphicon-plus"> Jadwal Keberangkatan</button></a>
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box">                
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>No</th>                                            
                      <th>Maskapai</th>
                      <th>Flight</th>                      
                      <th>Tujuan</th>
                      <th>Waktu</th>                      
                      <th>Option</th>
                    </tr>
                    <?php 
                    if (isset($keberangkatan)) {
                      
                    $no = 1;
                    foreach ($keberangkatan as $data) {                      
                      ?>
                    <tr>
                      <td><?php echo $no ?></td>
                      <td><img style="max-width:100px" src="<?php echo base_url()."assets/images/maskapai/".$data->gambar ?>"></td>
                      <td><?php echo $data->no_penerbangan ?></td>
                      <td><?php echo $data->tujuan ?></td>                                                                  
                      <td><?php echo $data->waktu_berangkat ?></td>                      
                      <td>
                        <a href="<?php echo base_url()?>admin/editKeberangkatan/<?php echo $data->id_jadwal?>" title="Edit"> <button class='btn btn-warning btn-xs glyphicon glyphicon-pencil'></button></a>                     
                        <a href="<?php echo base_url()?>maskapai/hapusKeberangkatan/<?php echo $data->id_jadwal?>" title="Hapus" onclick='return checkDelete()'> <button class='btn btn-danger btn-xs glyphicon glyphicon-trash'></button></a>
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

        <?php
        } ?>