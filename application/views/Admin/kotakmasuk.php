        <section class="content-header">
        <?php 
          if ($pesan == 0) {                 
          ?>
          <h1>          
            Kotak Masuk  Kosong         
          </h1>          
          <?php 
        } else{          
          ?>    
          <h1>          
            Kotak Masuk 
          </h1>                

        <?php 
        }
        ?>
        </section>

        <section class="content-header">
          <?php
            if (isset($_SESSION['pesan'])) {
              echo $_SESSION['pesan'];
            }
           ?>     
        </section>

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box">                
                <div class="box-body table-responsive no-padding">                

                
                  <table class="table">
                    <tr>
                      <th>No</th>
                      <th>Dikirim</th>
                      <th>Pengirim</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Pesan</th>                      
                    </tr>

                    <?php 
                $no = 1;
                if ($pesan != 0) {
                foreach ($pesan as $data) {                      
                  $isi = explode(" ", $data->pesan);
                  $isinya = implode(" ", array_splice($isi, 0, 20));
                
                 ?>

                    <tr 
                    <?php if ($data->dibaca == 0) {
                    ?>
                    style="background-color:#F5F5F5;"
                    <?php 
                    } ?>
                    >
                      <td><?php echo $no ?></td>
                      <td><?php echo $data->waktu ?></td>
                      <td><?php echo $data->nama?></td>
                      <td><?php echo $data->email?></td>
                      <td><?php echo $data->subject?></td>
                      <td><p><?php echo $isinya?></p> <a href="<?php base_url()?>detailPesan/<?php echo $data->id_pesan?>"> Baca Selengkapnya...</a></td>                                            
                      <td><a href="<?php base_url()?>hapusPesan/<?php echo $data->id_pesan?>" onclick='return checkDelete()'><button class='btn btn-danger btn-xs glyphicon glyphicon-trash'></button> </a></td>
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