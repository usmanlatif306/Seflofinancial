<!DOCTYPE html>
<html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>      <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>      <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<head>
  <title>Login | Seflo Financial </title>
 <?php include('top.php'); ?>
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
@media (min-width: 320px) and (max-width: 480px) {
    .signinmobile{
        margin-left: -30% !important;
    }
    .formfieldmobile{
        width: 71% !important;
    }
    .buttonsubmitmobile{
        margin-right: 30%;
    }
}
</style>
</head>
<body>
   <?php include('header.php'); ?>

<div class="container ct-container">
  <h3 class="text-center signinmobile"> Sign In </h3>
     <?php if($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger col-12 alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error :</strong> <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php } ?>
        

<form id="userloginform1" method="post" action="<?php echo base_url();?>UserLogin">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control formfieldmobile" name="email" id="email">
    <span style="color:red;"><?php echo form_error('email'); ?></span>

  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control formfieldmobile" name="password" id="password">
    <span style="color:red;"><?php echo form_error('password'); ?></span>

  </div>
  <!-- <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div> -->
  <div class="text-center">
    <button type="submit" class="btn action-button buttonsubmitmobile ">Sign In</button> <br><br>
    <a href="<?php echo base_url();?>steps/forgot" class="buttonsubmitmobile">Forgot Password </a>
  </div> 
   <div class="error_message"></div>
   <div class="success_message"></div> 
</form>



</div>

<?php include('footer.php'); ?>
<script>
  $(document).ready(function() {
        /*$('form#userloginform').on('submit', function(e) {
         
           e.preventDefault();
            var email = $('#email').val();
            var password = $('#password').val();
           if(email&&password){
            $('.load_div').css('display','block');
             
              var form = $('form#userloginform').serialize();
              $.ajax({
                  type: 'post',
                  url: '<?php echo base_url();?>UserLogin',
                  data: form,
                  success: function(data) {
                      console.log(data);
                      var obj = JSON.parse(data);
                      if (obj.status == 'success') {
                         
                         $('.success_message').css('display', 'block'); 
                         $('.success_message').html(obj.message); 
                         $('.error_mesage').css('display', 'none');
                         //location.reload();
                        // $('.success_message').html(obj.message); 
                          setTimeout(function() {
                            window.location.href='<?php echo base_url();?>steps/user';
                      }, 2000);
                          
                      } else {
                        // $('.success_message').css('display', 'none'); 
                         $('.error_message').css('display', 'block');
                         $('.error_message').html(obj.message); 
                         
                      }
                  }
              });
           
        }else{
           $('.error_message').css('display', 'block');
            $('.error_message').html("Fill all the required fields!"); 
        }
            //empty error message div after 2 seconds
            setTimeout(function() {
                  $('.error_message').html('');
                  $('.success_message').html('');
            }, 2000);
    });*/


  });
</script>
</body>
</html>