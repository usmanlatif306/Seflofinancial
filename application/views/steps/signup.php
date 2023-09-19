<!DOCTYPE html>
<html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>      <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>      <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<head>
  <title>Sign Up | Seflo Financial </title>
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



  </style>
</head>
<body>
  <?php include('header.php'); ?>
  
  <div>
<form class="msform" id="userform">
  <fieldset>
  <h3 class="text-center"> Create your account </h3>
  <h5 class="text-center"> Enter your informations to sign up </h5>
  <p class="text-center"> Already have an account? <a href="<?php echo base_url();?>steps/signin"> Sign in </a> </p>
<br>
  <div class="col-md-6">
    <div class="form-group text-left">
      <label for="">First Name*</label>
      <input type="text" name="name" class="form-control" id="name">
    </div>
  </div>  
  <div class="col-md-6">
    <div class="form-group text-left">
      <label for="">Last Name*</label>
      <input type="text" name="lname" class="form-control" id="lname">
    </div>
  </div>
<!--  <div class="col-md-12">
    <div class="form-group text-left">
      <label for="">Business Name</label>
      <input type="text" name="business_name" class="form-control" id="">
    </div>
  </div>  -->
  <div class="col-md-12">
    <div class="form-group text-left">
      <label for="">Mobile Phone*</label>
      <input type="text" name="mobile" class="form-control phone" id="mobile">
    </div>
  </div>
  
  <div class="col-md-12">
    <div class="form-group text-left">
      <label for="email">Email Address*</label>
      <input type="email" name="email" class="form-control" id="email">
    </div>
  </div>
  
  <div class="col-md-12">  
    <div class="form-group text-left">
      <label for="pwd">Password*</label>
      <input type="password" name="password" class="form-control" id="password">
    </div>
  </div>  

  <div class="col-md-12">  
    <div class="form-group text-left">
      <label for="pwd">Confirm Password*</label>
      <input type="password" class="form-control" id="confirm_password">
    </div>
  </div>  
  <div class="clearfix"></div>
  <div class="checkbox">
    <label><input type="checkbox" id="agree"><a href="https://www.seflofinancial.com/terms-of-use/" target="_blank">I agree to the following terms</a></label>
  </div>
  <!-- <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div> -->
  <div class="text-center">
    <button type="submit" class="btn action-button ">Sign Up</button> <br><br>
   <!--  <a href="<?php echo base_url(); ?>steps/signin">Sign in </a> -->
  </div> 
  <div class="error_message">Email id is already used please try again with other email id.</div>
  <div class="success_message"> Thank you for signing up with us. </div>
  </fieldset> 
</form>

</div>
<?php include('footer.php'); ?>
<script>
  $(document).ready(function() {
        $('form#userform').on('submit', function(e) {
         
           e.preventDefault();
            var name = $('#name').val();
            var lname = $('#lname').val();
            var mobile = $('#mobile').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var confirm_password = $('#confirm_password').val();
           if(name&&lname&&mobile&&email&&password&&confirm_password){
           //check pwd length
           if($('#password').val().length>=6){
             //to check pwd/confirm pwd same or not
             if ($('#password').val() == $('#confirm_password').val()) {
               //to check terms are accepted or not
              if ($("input[type=checkbox]").is( 
                          ":checked")) { 
              $('.load_div').css('display','block');
             
              var form = $('form#userform').serialize();
              $.ajax({
                  type: 'post',
                  url: '<?php echo base_url();?>Steps/create_user',
                  data: form,
                  success: function(data) {
                      //console.log(data);
                      var obj = JSON.parse(data);
                     // console.log(obj);

                      if (obj.status == 'success') {
                         
                         $('.success_message').css('display', 'block'); 
                         $('.success_message').html(obj.message); 
                         $('.error_mesage').css('display', 'none');
                         window.location.href='<?php echo base_url();?>'+'steps/dashboard';
                         //location.reload();
                        // $('.success_message').html(obj.message); 
                         /* setTimeout(function() {
                            window.location.href='<?php echo base_url();?>steps/signin';
                      }, 3000);  */
                          
                      } else {
                        // $('.success_message').css('display', 'none'); 
                         $('.error_message').css('display', 'block');
                         $('.error_message').html(obj.message); 
                         
                      }
                  }
              });
              } // terms are not accepted in else
              else { 
                 $('.error_message').css('display', 'block');
                 $('.error_message').html("Please agree the terms to sign up!"); 
            }
          }else{
               $('.error_message').css('display', 'block');
               $('.error_message').html("Passwords does not match!");
             }
          }else{
            $('.error_message').css('display', 'block');
            $('.error_message').html("Minimum Password length should be 8 characters, having at least one number OR a wild character (e.g:!@#$)"); 
          }
        }else{
           $('.error_message').css('display', 'block');
            $('.error_message').html("Fill all the required fields!"); 
        }
            //empty error message div after 2 seconds
            setTimeout(function() {
                  $('.error_message').html('');
                  $('.success_message').html('');
            }, 2000);
    });


  });
</script>
</body>

</html>