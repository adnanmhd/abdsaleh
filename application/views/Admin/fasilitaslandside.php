         

        <section class="content-header">
          <h1>          
            Fasilitas Land Side
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-server"></i> Fasilitas</li>
            <li>Land Side</li>            
          </ol>
        </section>
        <?php
            if (isset($_SESSION['pesan'])) {                        
             echo "<section class=\"content-header\">".$_SESSION['pesan']."</section>"; 
        }
           ?> 

        <section class="content-header">
          <a href="<?php echo base_url()?>Admin/tambahFasilitas/landside"><button class="btn btn-info glyphicon glyphicon-plus"> Tambah Data</button> </a>
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box">                
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>No</th>
                      <th>Fasilitas</th>
                      <th>Keterangan</th>                      
                      <th>Gambar</th>
                      <th>Option</th>
                    </tr>
                    <?php 
                    if (isset($landside) && $landside != 0) {
                      
                    $no = 1;
                    foreach ($landside as $data) {

                      if ($data->jenis == 'Land Side') {

                      ?>
                    <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $data->nama_fasilitas?></td>
                      <td style="max-width:280px" ><?php echo $data->informasi_fasilitas?></td>   
                      <td><img style="max-width:250px" src="<?php echo base_url()."assets/images/fasilitas/".$data->gambar?>"></td>                                                               
                      <td><a href="<?php echo base_url()?>admin/editFasilitas/<?php echo $data->id_fasilitas."/"."landside"?>" title="Edit"><button class='btn btn-warning btn-xs glyphicon glyphicon-pencil'></button></a><a href="<?php echo base_url()?>admin/hapusFasilitas/<?php echo $data->id_fasilitas."/"."landside"?>" onclick='return checkDelete()'title="Hapus"><button class='btn btn-danger btn-xs glyphicon glyphicon-trash'></button></a></td>
                      </tr>
                    <?php 
                    $no++;
                      }
                    }
                  }
                  if (isset($landside) && $landside == 0) {
                    ?>

                    <td>Data Fasilitas Land Side Kosong</td>

                  <?php
                    
                  }
                    ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->