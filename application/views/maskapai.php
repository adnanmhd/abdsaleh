    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row blog-post-page">
          <h4 class="classic-title"><span>Maskapai Penerbangan</span></h4>
          <div class="col-md-12 blog-box" style="min-height:400px">

              <div class="center">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead class="thead">
                      <tr>
                        <th>Maskapai</th>
                        <th>Jenis Pesawat</th>
                        <th>Kapasitas</th>                        
                        <th>No Telepon</th> 
                      </tr>
                    </thead>

                    <tbody class="tbody">

                    <?php 
                    if (isset($maskapai)) {
                      foreach ($maskapai as $data) {
                        
                      
                    ?>
                      <tr>
                        <td>
                          <img src="<?php echo base_url()."assets/images/maskapai/$data->gambar"; ?>">
                        </td>
                        <td><?php echo $data->jenis_pesawat; ?></td>
                        <td><?php echo $data->kapasitas_kursi; ?> Kursi</td> 
                        <td><?php echo $data->no_telp; ?></td>                                               
                      </tr>
                      <?php 
                      }
                    }
                    ?>                      
                    </tbody>
                  </table>
                </div>
              </div>
            
          </div>          
            <!-- End Single Post Area -->            
        </div>          

      </div>

    </div>
    </div>
    <!-- End content -->

