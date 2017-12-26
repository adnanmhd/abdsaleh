         

        
        <?php
            if (isset($_SESSION['pesan'])) {                        
             echo "<section class=\"content-header\">".$_SESSION['pesan']."</section>"; 
        }

        if (isset($edit)) {          
           ?>    
        <section class="content-header">
          <h1>          
            Edit Rute Penerbangan
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-plane"></i> Data Penerbangan</li>
            <li>Rute Penerbangan</li>            
          </ol>
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">                
                <div class="box-body pad">
                  <form action="<?php echo base_url()?>maskapai/updateRute" method="POST" enctype="multipart/form-data">                                                                          

                  <?php  
                  if (isset($editrute)) {
                    foreach ($editrute as $data) {
                    
                  ?>                    
                    <div class="form-group">
                      <label for="">Dari</label>                        
                      <input type="text" class="form-control" name="dari" required="" pattern="[a-zA-Z- ^)(]+" title="Inputan hanya dapat berupa huruf" value="<?php echo $data->dari ?>">
                    </div>

                    <div class="form-group">
                      <label for="">Tujuan</label>                        
                      <input type="text" class="form-control" name="tujuan" required="" pattern="[a-zA-Z- ^)(]+" value="<?php echo $data->tujuan ?>">
                    </div>                  
                                   
                    <div class="box-footer"> 
                      <input type="hidden" name="id" value="<?php echo $data->id_route?>">                       
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
            Tambah Rute Penerbangan
          </h1>
         
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">            
                <div class="box-body pad">
                  
                  <form action="<?php echo base_url()."maskapai/tambahRute" ?>" method="POST" enctype="multipart/form-data">
                    <div class="col-lg-3">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Dari</span>              
                        <input type="text" class="form-control" name="dari" pattern="[a-zA-Z- ^)(]+" required="" aria-describedby="basic-addon1">
                      </div>

                    </div>

                    <div class="col-lg-3">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Tujuan</span>
                        <input type="text" class="form-control" name="tujuan" pattern="[a-zA-Z- ^)(]+" required="" aria-describedby="basic-addon1">
                      </div>
                    </div>
                    
                    <div class="col-lg-3">
                      <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </section><!-- /.content --> 

        <?php  
      }
        ?>         
        <section class="content-header">
          <h1>          
            Rute Penerbangan
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-plane"></i> Data Penerbangan</li>
            <li>Rute Penerbangan</li>            
          </ol>
        </section> 

        <section class="content-header">
          <a href="<?php echo base_url()?>Admin/tambahRute"><button class="btn btn-info glyphicon glyphicon-plus"> Rute</button> </a>
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box">                
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>No</th>
                      <th>Dari</th>                      
                      <th>Tujuan</th>                      
                      <th>Option</th>
                    </tr>

                    <?php 
                    if (isset($rute) && $rute != 0) {
                      
                    $no = 1;
                    foreach ($rute as $data) {                      
                      ?>
                    <tr>
                      <td><?php echo $no ?></td>                      
                      <td><?php echo $data->dari ?></td>
                      <td><?php echo $data->tujuan ?></td>
                      <td>
                        <a href="<?php echo base_url()?>admin/editRute/<?php echo $data->id_route?>" title="Edit"> <button class='btn btn-warning btn-xs glyphicon glyphicon-pencil'></button></a>                     
                        <a href="<?php echo base_url()?>maskapai/hapusRute/<?php echo $data->id_route?>" title="Hapus" onclick='return checkDelete()'> <button class='btn btn-danger btn-xs glyphicon glyphicon-trash'></button></a>
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