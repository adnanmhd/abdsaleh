<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <title>Login</title>

  <style type="text/css">

.login-page {
  width: 400px;
  padding: 2% 0 0;
  margin: auto;    
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 50px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #2C3E50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #243242;
  transition :0.2s;
}

.header{  
  padding: 20px;
  width: 600px;
  margin: auto;
}

.logo{
  float: left;
  /*margin-right: 10px;*/
}

.logo2{
  margin-top: 10px;  
}

.logo2 h1, h3{
  margin: 0;
  font-weight: 300;
}

.logo img{
  margin-right: 10px;
  margin-left: 15px;
  max-width: 80px;
}

body {
  background: #1F9EA3;    
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
  </style>
</head>
<body>


<div class="header">
  <div class="logo">
    <img src="<?php echo base_url() ?>assets/images/logo-dishub.png">
  </div>
  <div class="logo2">
    <h1>Login Administrator</h1>
    <h3>Abdulrachman Saleh Airport | Website</h3>
  </div>
</div>

<div class="login-page"> 
<?php
            if (isset($_SESSION['pesan'])) {              
          ?>        
             <?php 
             echo "<section class=\"content-header\">".$_SESSION['pesan']."</section>"; ?>        
        <?php 
        }
           ?>
 
  <div class="form">
    <form class="login-form" action="<?php echo base_url() ?>admin/login" method="POST">
      <input type="text" name="username" placeholder="Username" required="" />
      <input type="password" name="password" placeholder="Password" required=""/>
      <button>Login</button>      
    </form>
  </div>
</div>
</body>
</html>