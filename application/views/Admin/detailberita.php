    <section class="content-header">
      <h1>
        Detail Berita
        <small>Abdulrahmansaleh-Airport</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-newspaper-o"></i> Berita</a></li>
        <li class="active">Data Berita</li>
      </ol>
    </section>

        <!-- Main content -->
        <section class="content">          
          <div class="row">
            <div class="col-xs-12">
              <div class="box">                
                <div class="box-body table-responsive no-padding">
                  <table class="table tabel-berita">
                  <?php 
                    foreach ($berita as $data) {  ?>
                    <tr>                    
                      <th>Judul</th> <td><?php echo $data->judul; ?></td>
                    </tr>

                    <tr>
                      <th>Waktu Post</th><td><?php echo $data->tgl_post; ?></td>
                    </tr>                     
                    <tr>
                      <th>Gambar</th><td><img style="max-width:600px" src="<?php echo base_url()."assets/images/berita/".$data->gambar; ?>"> </td>
                    </tr>

                    <tr>
                      <th>Isi berita</th><td><?php echo $data->berita; ?></td>
                    </tr>
                                                                                                                           
                    <?php
                    }
                    ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
