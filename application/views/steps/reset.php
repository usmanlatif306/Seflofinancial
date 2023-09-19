<!DOCTYPE html>
<html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>      <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>      <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<head>
  <title>Reset Password | Seflo Financial </title>
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
  <h3 class="">Reset Password </h3>

   <div class="alert alert-success col-12 alert-dismissible" role="alert" style="display: none;" id="smessage">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <span></span> 
  </div>

  <div class="alert alert-danger col-12 alert-dismissible" role="alert" style="display: none;" id="emessage">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <span></span> 
  </div>

  
  <form>
    <div class="row">
      <div class="col-md-6">
              <div class="form-group">
                  <label for="userpassword">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" value="">
                 <br/><br>
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label for="userpassword">Retype Password</label>
                  <input type="password" class="form-control" id="cpassword" placeholder="Re Type password" value="">
                  <span class="form-text text-muted"></span>
                  <br/><br>
              </div>
          </div> <!-- end col -->
      </div>
  <!-- <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>  -->
  
  <!-- <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div> -->
  <div class="">
    <button type="submit" class="btn action-button pull-left">Send</button>     <a class="pull-right action-button btn" style="background-color: transparent;color: #003366" href="<?php echo base_url();?>steps/signin">Cancel </a>
  </div>  
</form>



</div>
<?php include('footer.php'); ?>
      <script>
        //  $(document).ready(function(){

          $(document).on('submit',function(e){
            e.preventDefault();
        var pwd=$("#password").val();
        var npwd=$("#cpassword").val();
        //console.log(pwd.localeCompare(npwd));
        //length 6 opr greater
        if(pwd.length >= 6  ){//&& npwd.length >= 6
        if((pwd.localeCompare(npwd))==0){
            $.ajax({
        type: 'post',
        url: '<?php echo base_url() ?>'+'Steps/reset_pwd',
        data: {'password':pwd},
        success: function(data) {
           /* console.log('data:');
            console.log(data);  */
            var obj = $.parseJSON(data);
            if(obj.status == 'success'){
               // $('#smessage').css('display','block');
               // $('#emessage').css('display','none');
               // $('#smessage').find('span').html('Details Changed successfully!');
                window.location.href='<?php echo base_url();?>'+'steps/dashboard';
            
        }else{
             $('#emessage').css('display','block');
            $('#smessage').css('display','none');
            $('#emessage').find('span').html('Something went wrong!');
        }
        }

    });     
        }else{
            $('#emessage').css('display','block');
            $('#smessage').css('display','none');
            $('#emessage').closest('div').find('span').html('Password doesn\'t match');
        }
       }else{
            $('#emessage').css('display','block');
            $('#smessage').css('display','none');
            $('#emessage').closest('div').find('span').html('Password length should be greater than equal to 6!');

       }
       /* setTimeout(function() {
            $('#emessage').css('display','none');
            $('#smessage').css('display','none');
            $('#emessage').closest('div').find('span').html('');
            }, 3000);*/
          
    });
 //});
      </script>
</body>
</html>