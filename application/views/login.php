<!DOCTYPE html>
<html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>      <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>      <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<head>
  <title>Login | Briskloanz </title>
  <link rel="icon" href="<?php echo base_url();?>assets/homeweb/images/fav.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/homeweb/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="../css/normalize.css"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/homeweb/css/font-awesome.min.css">
<!--  <link rel="stylesheet" type="text/css" href="css/steps.css"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/steps/css/steps-comon.css">
  <style type="text/css">
.navbar {
    border-bottom: 1px solid #ddd;
}
.navbar-brand {
  height: auto;
}
.ct-container {
  max-width: 500px;
}
footer  {
  position: fixed;
    bottom: 0px;
    width: 100%;
}


  </style>
</head>
<body>
  <header>
  <nav class="navbar">
    <div class="container">
      <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>assets/homeweb/images/logo.png"></a>
      </div>
      <!-- <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      </ul> -->
      <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url();?>steps/signin"><!--<span class="glyphicon glyphicon-user"></span>--> Sign in</a></li>
      <li><a href="<?php echo base_url();?>steps/signup"><!-- <span class="glyphicon glyphicon-log-in"></span>--> Sign up</a></li>
      </ul>
    </div>
    </nav>
    
</header>

<div class="container ct-container">
  <h3 class="text-center"> Sign In </h3>
<form action="">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <!-- <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div> -->
  <div class="text-center">
    <button type="submit" class="btn action-button ">Sign In</button> <br><br>
    <a href="<?php echo base_url();?>steps/forgot">Forgot Password </a>
  </div>  
</form>



</div>

<footer class="container-fluid">
  <div class="row">
    <div class="container">
      <ul class="list-inline text-center">
        <li>Copyright &#169; 2020 Briskloanz  |  All Rights Reserved. </li>
        <li><a href="#"> Terms of Use </a></li>
        <li><a href="#">Privacy Policy</a></li>
        </ul>
        <div class="text-center">
          <p>4100 Abc Ridge Road, Suite 500, abc, UT 84043 <br>
          (123) 456-7890</p>
        </div>
    </div>
  </div>
  
</footer>

  <script type="text/javascript" src="<?php echo base_url();?>assets/homeweb/js/vendor/jquery-library.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/steps/js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/homeweb/js/vendor/bootstrap.min.js"></script>

</body>
</html>