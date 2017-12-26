         

        <section class="content-header">
          <h1>          
            Data Berita           
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-newspaper-o"></i> Berita</li>
            <li>Data Berita</li>            
          </ol>
        </section>
        <?php
            if (isset($_SESSION['pesan'])) {              
          ?>
        <section class="content-header">
             <?php 
             echo $_SESSION['pesan']; ?>
        </section>
        <?php 
        }
           ?>  

        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box">                
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover tabel-artikel">
                    <tr>
                      <th> </th>
                      <th>Waktu Post</th>
                      <th>Judul</th>
                      <th>Isi Berita</th>
                      <th>Gambar</th>                      
                      <th>Option</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach ($berita as $data) {
                      $isi = explode(" ", $data->berita);
                      $isinya = implode(" ", array_splice($isi, 0, 50));
                      ?>
                    <tr>
                      <td></td>
                      <td><?php echo substr($data->tgl_post, 0, 11) ?></td>
                      <td><?php echo $data->judul?></td>
                      <td><p><?php echo $isinya?></p> <a href="<?php base_url()?>detailBerita/<?php echo $data->id_berita?>"> Baca Selengkapnya...</a></td>
                      <td>                    
                      <img src="<?php echo base_url()."assets/images/berita/".$data->gambar; ?>"> 
                      </td>                      
                      <td id='id'><a href="<?php base_url()?>editBerita/<?php echo $data->id_berita?>"><button class='btn btn-warning btn-xs glyphicon glyphicon-pencil'></button> </a> <a href="<?php base_url()?>hapusBerita/<?php echo $data->id_berita?>" onclick='return checkDelete()'><button class='btn btn-danger btn-xs glyphicon glyphicon-trash'></button> </a></td>
                      </tr>
                    <?php 
                    $no++;
                    }
                    ?>
                  </table>

                </div><!-- /.box-body -->

              </div><!-- /.box -->

              <?php 
              echo $this->pagination->create_links(); ?>
              
            </div>
          </div>
        </section><!-- /.content -->