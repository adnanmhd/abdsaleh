        <section class="content-header">
          <h1>          
            Kotak Masuk          
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-envelope"></i> Kotak Masuk</li>
            <li>Baca Pesan</li>            
          </ol>
        </section>      

        <section class="content"> 
          

          <div class="row">
            <div class="col-md-12">
              <div class="box">                
                  <div class="box-body">
                    <div class="col-xs-2">
                      <!-- <strong> -->
                        <p>Pengirim</p>
                        <p>Email</p>
                        <p>Subject</p>
                        <p>Dikirim</p>
                      <!-- </strong>     -->         
                    </div>                
              

            <?php 
            foreach ($pesan as $data) {          
            ?>
                    <div class="col-xs-4"> 
                      <strong>
                        <p>: <?php echo $data->nama ?></p>
                        <p>: <?php echo $data->email ?></p>
                        <p>: <?php echo $data->subject ?></p>
                        <p>: <?php echo $data->waktu ?> </p>
                      </strong>             
                    </div>



                  <div class="row">                                                    
                    <div class="col-md-12">
                    <br>
                  <br>
                      <div class="panel panel-default">                      
                        <div class="panel-body">
                          
                          <p><?php echo $data->pesan; ?></p>
                        </div>
                      </div>                      
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
            <?php 
          }
            ?>          
        </section><!-- /.content -->