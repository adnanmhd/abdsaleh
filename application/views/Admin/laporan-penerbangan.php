         
        <?php
            if (isset($_SESSION['pesan'])) {                        
             echo "<section class=\"content-header\">".$_SESSION['pesan']."</section>"; 
        }        

        if (isset($tambahlaporan)) {
        
        
        ?>


        <section class="content-header">
          <h1>          
            Tambah Laporan Penerbangan Tahunan
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-plane"></i> Laporan Data Penerbangan</li>
            <li>Upload Data</li>            
          </ol>
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">                
                <div class="box-body pad">
                  <div class="col-md-8">
                  <br>
                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url() ?>laporanPenerbangan/tambahLaporan">
                      <div class="form-group">
                        <label class="control-label col-sm-3">Data Laporan:</label>
                        <div class="col-sm-9"> 
                          <select class="form-control" name="tahun" required aria-required="true">
                            <option value="">-- Tahun --</option>
                         <?php

                            for($i = 2010 ; $i <= date('Y'); $i++){
                                echo "<option>$i</option>";
                            }

                          ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3">Judul Laporan:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" pattern="[a-zA-Z0-9- ^,.)(]+" title="Inputan hanya dapat berupa huruf dan angka" name="judul" required="">
                        </div>
                      </div>                                                                  

                      <div class="form-group">
                        <label class="control-label col-sm-3" >Upload File (xlsx):</label>

                        <div class="col-sm-2">
                          <span class="btn btn-danger btn-file">
                          Browse<input type="file" multiple="multiple" required="" name="laporan" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                          </span>
                        </div>              

                        <div class="col-sm-7">
                          <p>*Note : Pilih file excel (xlsx) yang memuat data laporan penerbangan tahunan</p>
                        </div>        
                      </div>
                      
                      <div class="form-group"> 
                        <div class="col-sm-offset-3 col-sm-9">                          
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
    if (isset($editlaporan)) {      
      ?>
        <section class="content-header">
          <h1>          
            Edit Data Laporan Penerbangan
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-file"></i> Laporan Data Penerbangan</li>
            <li>Edit Data</li>            
          </ol>
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">                
                <div class="box-body pad">
                  <div class="col-md-8">
                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url() ?>laporanPenerbangan/editLaporan">

                    <?php 
                    foreach ($edit as $data) {

                    ?>
                      <div class="form-group">
                        <label class="control-label col-sm-3">Tahun:</label>
                        <div class="col-sm-9"> 
                          <input type="text" class="form-control" name="tahun" readonly="" value="<?php echo $data->tahun ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3">Judul:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" pattern="[a-zA-Z0-9- ^,.)(]+" title="Inputan hanya dapat berupa huruf dan angka" name="judul" value="<?php echo $data->judul ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3">File:</label>
                        <div class="col-sm-9">                           
                          <input type="text" class="form-control" readonly="" value="<?php echo $data->file ;  ?>">                                                     
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3">Ganti File:</label>
                        <div class="col-sm-9">                                                     
                          <input type="file" class="form-control" multiple="multiple" name="laporan" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                        </div>
                      </div>
                                          

                      <?php 
                    }
                      ?>
                      
                      <div class="form-group"> 
                        <div class="col-sm-offset-3 col-sm-9">
                          <input type="hidden" name="jenis" value="keberangkatan">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                          <button type="button" name="cancel" value="cancel" onClick="window.location='<?php echo base_url() ?>Admin/laporanPenerbangan';" class="btn btn-danger">Batal</button>
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
        ?>



        <section class="content-header">
          <h1>          
            Laporan Tahunan Penerbangan
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-file"></i> Data Laporan Penerbangan</li>            
          </ol>
        </section> 

        <section class="content-header">
          <a href="<?php echo base_url()?>Admin/tambahLaporan"><button class="btn btn-info"> Upload Laporan</button> </a>
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box">                
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>  
                      <th></th>                                                              
                      <th>Tahun</th>
                      <th>Judul</th>                      
                      <th>File</th>                      
                      <th>Option</th>
                    </tr>
                    <?php 
                    if (isset($laporan)) {
                      
                    $no = 1;
                    foreach ($laporan as $data) {                      
                      ?>
                    <tr>
                      <td></td>                      
                      <td><?php echo $data->tahun ?></td>
                      <td style="max-width:300px"><?php echo $data->judul ?></td>                                                                  
                      <td> <a href=""><?php echo $data->file ?></a></td>                      
                      <td>
                        <a href="<?php echo base_url()?>admin/editLaporan/<?php echo $data->tahun?>" title="Edit"> <button class='btn btn-warning btn-xs glyphicon glyphicon-pencil'></button></a>                     
                        <a href="<?php echo base_url()?>laporanPenerbangan/hapusLaporan/<?php echo $data->tahun?>" title="Hapus" onclick='return checkDelete()'> <button class='btn btn-danger btn-xs glyphicon glyphicon-trash'></button></a>
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

