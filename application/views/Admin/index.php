             
        
        <?php
            if (isset($_SESSION['pesan'])) {                        
             echo "<section class=\"content-header\">".$_SESSION['pesan']."</section>"; 
        }              
        ?>    
        <section class="content-header">
          <h1>          
            Dashboard
          </h1>          
        </section>
    <section class="content">

      
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">                
            <div class="box-body pad">
              <div class="row">
                <div class="col-md-2">
                  <div class="pull-left">
                    <img style="max-width:100px; margin-left:50px" src="<?php echo base_url() ?>assets/images/logo-dishub.png">  
                  </div>
                </div>

                <div class="col-md-6">                  
                  <div class="pull-right">
                    <h2>Selamat Datang Di Laman Administrator Website Abdulrachman Saleh Airport</h2>
                  </div> 
                </div>
              </div> 

              <br>                          

              <img style="width:100%" src="<?php echo base_url(); ?>assets/images/slider/bg5.jpg">      
              
            </div>                          
          </div>        
        </div>
      </div> 

    </section>  


