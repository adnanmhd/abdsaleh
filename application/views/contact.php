    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row blog-post-page">
          <h4 class="classic-title"><span>Contact</span></h4>   

          <div class="col-md-7 col-sm-12 col-xs-12">

          <?php echo $map['html'];  ?>   
            
          </div>                 

          <div class="col-md-5">                 

            
            <table class="table table-bordered">
              <tr>
                <th style="min-width:100px"><span class="fa fa-globe"></span> Alamat</th>
                <td>  Jalan Abdul Rachman Saleh, Pakis, Malang. Jawa Timur</td>
              </tr>

              <tr>
                <th><span class="fa fa-home"></span> Jam Kerja</th>
                <td>  07.00 - 17.00 WIB (Senin-Jumat)</td>
              </tr>

              <tr>
                <th><span class="fa fa-phone"></span> Telepon</th>
                <td>  (0341) 793900 / 2992700</td>
              </tr>              
              
              </tr>
            </table>
              

            

            <div class="panel panel-default">
              <div class="panel panel-head" style="padding:10px;"><h4 style="color:#66667D">Kritik dan Saran</h4></div>
              <?php 
              if (isset($_SESSION['pesan'])) {
                echo $_SESSION['pesan'];
              }
              ?>
              <div class="panel panel-body">
                <!-- Start Contact Form -->
                <form role="form" class="contact-form" id="contact-form" method="post" action="<?php base_url()?>contact/pesan">
                  <div class="form-group">
                    <div class="controls">
                      <input type="text" placeholder="Nama" name="nama" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <input type="email" class="email" placeholder="Email" name="email" required="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <input type="text" placeholder="Subject" name="subject" required="">
                    </div>
                  </div>

                  <div class="form-group">

                    <div class="controls">
                      <textarea rows="7" placeholder="Pesan" name="pesan" required=""></textarea>
                    </div>
                  </div>
                  <button type="submit" id="submit" class="btn-system btn-large">Kirim</button>
                  <div id="success" style="color:#34495e;"></div>
                </form>
                <!-- End Contact Form -->                
              </div>
            </div>

          </div>
            
            <!-- End Single Post Area -->            
        </div>          

      </div>

    </div>    
    <!-- End content -->

 