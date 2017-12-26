     <?php
            if (isset($_SESSION['pesan'])) {                        
             echo "<section class=\"content-header\">".$_SESSION['pesan']."</section>"; 
        }   ?>
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">                
            <div class="box-body pad">        

              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12"> <h3>Admin profile</h3><hr></div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 text-center">
                      <img style="-webkit-user-select:none; 
                      max-width:150px; margin:auto;" src="<?php echo base_url(); ?>assets/images/avatar.jpg">
                    </div>

                    <div class="col-md-6">                     
                      
                      <div class="row"> 

                      <?php
                      if (isset($profile)) {
                        foreach ($profile as $data) {
                      ?>

                        <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url() ?>admin/updateAkun">
                   
                          <div class="form-group">
                            <label class="control-label col-sm-3">Username:</label>
                            <div class="col-sm-9"> 
                              <input type="text" class="form-control" name="username" pattern="[a-zA-Z0-9-]+" title="Inputan hanya dapat berupa huruf dan angka" value="<?php echo $data->username; ?>">
                            </div>
                          </div>

                          
                          <div class="form-group">
                            <label class="control-label col-sm-3"></label>
                            <div class="col-sm-9"> 
                              <span>Catatan : masukkan password baru bila ingin mengganti password</span>
                            </div>
                          </div>

                          <div class="form-group">                               
                            <label class="control-label col-sm-3">Password Baru:</label>
                            <div class="col-sm-9">                          
                              <input type="password" name="password1" pattern="[a-zA-Z0-9- ]+" title="Inputan hanya dapat berupa huruf dan angka" class="form-control" name="no_penerbangan">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-3">Ulangi Password Baru:</label>
                            <div class="col-sm-9">                           
                              <input type="password" name="password2" pattern="[a-zA-Z0-9- ]+" title="Inputan hanya dapat berupa huruf dan angka" class="form-control">                           
                            </div>
                          </div>
                          
                          
                          <div class="form-group"> 
                            <div class="col-sm-offset-3 col-sm-9">
                              <input type="hidden" name="id" value="<?php echo $data->id_admin; ?>">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                              <button type="button" name="cancel" value="cancel" onClick="window.location='<?php echo base_url() ?>Admin/index';" class="btn btn-danger">Batal</button>
                            </div>
                          </div>
                        </form>

                        <?php
                        }
                      }
                        ?>                       

                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>                          
          </div>        
        </div>
      </div> 

    </section>  


