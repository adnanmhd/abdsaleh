
    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row blog-post-page">
          <h4 class="classic-title"><span>Laporan Data Penerbangan</span></h4>

          <div class="blog-box">

            <form class="form-horizontal" method="POST" action="<?php echo base_url() ?>laporanPenerbangan">

              <div class="form-group">
                <label class="control-label col-sm-3 col-xs-6">Pilih Tahun Untuk Ditampilkan</label>    
                <div class="col-sm-2 col-xs-6">                           
                  <select class="form-control" name="tahun" required aria-required="true">
                    <option value="">--Tahun--</option>
                  <?php                
                  foreach ($tahun as $data) {
                    echo "<option>$data->tahun</option>";
                  }                   

                  ?>
                  </select>
                </div>

                <div class="col-sm-2 col-xs-12">
                  <button type="submit" class="btn-system btn-medium">Tampilkan</button>
                </div>
              </div>
            </form>
          </div>

          <br>
          <div class="col-md-12 blog-box" style="min-height:400px">            

              <div class="center">
              <h3 style="text-decoration: underline;">
              <?php 
              if (isset($file)) {
                foreach ($file as $data) {
                  echo $data->judul;
                }
              }
                ?>
              </h3>
              <br>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <!-- <thead class="thead">
                      <tr>
                        <th>Maskapai</th>
                        <th>Jenis Pesawat</th>
                        <th>Kapasitas</th>                        
                        <th>No Telepon</th> 
                      </tr>
                    </thead> -->

                    <tbody class="tbody">



                   <?php  
                          
                  if (isset($laporan)) {                                    

                  $columSize = count($laporan);
                  $rowSize = max(array_map('count', $laporan));                  


                    
                    for ($row = 1; $row <= $rowSize; $row++) {                        

                      echo "<tr>";                  
                      for ($i=0; $i < $columSize; $i++) { 

                        if ($i == 0) {
                           echo "<th style='width:100px'>".$laporan[$i][$row]."</th>";

                         }

                        elseif ($row == 1 && $i == 0) {
                           echo "<th rowspan=\"2\">".$laporan[$i][$row]."</th>";                           
                         } 

                        elseif ($row == 1 && $i > 0) {
                           echo "<th colspan=\"1\">".$laporan[$i][$row]."</th>";                           
                         } 
                        
                        elseif ($row < 3) {                        
                           echo "<th>".$laporan[$i][$row]."</th>";                           
                         } 
                        elseif ($row >= 3) {
                          echo "<td>".$laporan[$i][$row]."</td>";
                        }
                        
                      }
                      echo "</tr>";
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

