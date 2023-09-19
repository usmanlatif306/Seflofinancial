<!DOCTYPE html>
<html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>      <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>      <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<head>
  <title>Forgot | Seflo Financial </title>
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


  </style>
</head>
<body>
 <?php include('header.php'); ?>

<div class="container ct-container">
  <h3 class="">Forgot Password </h3>

   <div class="alert alert-success col-12 alert-dismissible" role="alert" style="display: none;" id="smessage">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <span></span> 
  </div>

  <div class="alert alert-danger col-12 alert-dismissible" role="alert" style="display: none;" id="emessage">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <span></span> 
  </div>

   <div class="forgot_div">                                 
  <p>Please enter your email and we will send you reset instructions. </p>
<form method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" required>
  </div>
  
  <!-- <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div> -->
  <div class="">
    <button type="submit" class="btn action-button pull-left">Send</button>     <a class="pull-right action-button btn" style="background-color: transparent;color: #003366" href="<?php echo base_url();?>steps/signin">Cancel </a>
  </div>  
</form>
</div>

</div>
<?php include('footer.php'); ?>
      <script>
        $(document).ready(function(){

          $(document).on('submit',function(e){
            e.preventDefault();
      
            var email = $('#email').val();
        if(email){
            $.ajax({
        type: 'post',
        url: '<?php echo base_url() ?>'+'Steps/forgot_pwd',
        data: {'email':email},
        success: function(data) {
            /*console.log('data:');
            console.log(data);  */
            var obj = $.parseJSON(data);
            if(obj.status == 'success'){
                $('form').trigger("reset");

                $('#smessage').css('display','block');
                $('#emessage').css('display','none');
                $('#smessage').find('span').html('Kindly check mail to reset the password!');
                setTimeout(function () {
                     window.location.reload();
                 }, 2500);
            
        }else{
             $('#emessage').css('display','block');
            $('#smessage').css('display','none');
            $('#emessage').find('span').html('This email is not registered with us!');
        }
        }

    });  
    }else{
      $('#emessage').css('display','block');
            $('#smessage').css('display','none');
            $('#emessage').find('span').html('Email is required!');
    }   
        
          
   });
 });
      </script>
</body>
</html>