<!DOCTYPE html>
<html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<head>
<title>Owner Information | Seflo Financial </title>
 <?php include('top.php'); ?>
<style>
	.own-form{
	width: 600px;
	margin: 5% auto;
	position: relative;
	background: white;
    border: 0 none;
    border-radius: 3px;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.13);
    padding: 20px 30px;
    box-sizing: border-box;
	}
	.check-box .magic-checkbox + label:before {
		top: 2px;
		height: 17px;
    	width: 17px;
    	line-height: 15px;
	}
	.check-box .magic-checkbox[type=checkbox]:checked + label:before {
		background-color: #ff9900;
    	color: #fff;
	}
 .error{
     color:red;
 }
</style>

</head>
<body>

 <?php include('step_header.php'); 

 ?>

	<div class="container">
		<form method="post" class="own-form" name="step2form" id="step2form">
			<div class="row">
				<h3 class="text-center mb-15">Owner Information</h3>
				<div class="form-group col-md-6">
						<?php $question_id = $questions[0]['question_id']; ?>
						<label for=""><?php echo $questions[0]['question']; ?></label>
						<input type="text" class="form-control" id="" name="<?php echo $question_id; ?>" placeholder="First Name" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
				</div>
				<div class="form-group col-md-6">
					<?php $question_id = $questions[1]['question_id']; ?>
					<label for=""><?php echo $questions[1]['question']; ?></label>
					<input type="text" class="form-control" id="" name="<?php echo $question_id;?>" placeholder="Last Name" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
				</div>
				<div class="form-group col-md-12">
						<?php $question_id = $questions[2]['question_id']; ?>
						<label for="email"><?php echo $questions[2]['question']; ?></label>
						<?php if(!empty($_SESSION['email'])){ ?>
		<input type="email" class="form-control" id="email" name="<?php echo $question_id;?>" placeholder="Enter email" value="<?php echo @$_SESSION['email']; ?>"  readonly>
						    
					<?php	}else{ ?>
						<input type="email" class="form-control" id="email" name="<?php echo $question_id;?>" placeholder="Enter email" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					<?php	}
						?>
				</div>
				<div class="form-group col-md-12">
					<?php $question_id = $questions[3]['question_id']; ?>
					<label for=""><?php echo $questions[3]['question']; ?></label>
					<input type="text" class="form-control restrictnumber" id="" name="<?php echo $question_id;?>" placeholder="Phone number" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
				</div>
				
					<?php if(!empty($_SESSION['email'])){ ?>
				<div class="form-group col-md-12">
						<?php $question_id = $questions[4]['question_id']; ?>
						<label for="pwd"><?php //echo $questions[4]['question']; ?></label>
						<input type="hidden" class="form-control"  name="<?php echo $question_id;?>" id="password" value="123456" >
				</div>
				<div class="form-group col-md-12">
						<?php $question_id = $questions[5]['question_id']; ?>
						<label for="pwd"><?php //echo $questions[5]['question']; ?></label>
						<input type="hidden"  class="form-control"  name="<?php echo $question_id;?>" id="confirm_password" value="123456">
				</div>
				
					<?php }else{ ?>
					<div class="form-group col-md-12">
						<?php $question_id = $questions[4]['question_id']; ?>
						<label for="pwd"><?php echo $questions[4]['question']; ?></label>
						<input type="password" class="form-control"  name="<?php echo $question_id;?>" id="password" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
				</div>
				<div class="form-group col-md-12">
						<?php $question_id = $questions[5]['question_id']; ?>
						<label for="pwd"><?php echo $questions[5]['question']; ?></label>
						<input type="password"  class="form-control"  name="<?php echo $question_id;?>" id="confirm_password" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>">
				</div>
					
					<?php } ?>
				
				<div class="check-box col-md-12">
					<input class="magic-checkbox" type="checkbox" id="own">
					<label for="own"><a href="<?php echo base_url();?>steps/terms" target="_blank">I agree to the following terms</a></label>
				</div>
				<div class="col-md-12 text-center">
					<button type="submit" name="submit" class="btn action-button">Continue</button>
				</div>
				<!-- <div class="load_div"><i class="fa fa-spinner" aria-hidden="true"></i></div> -->
				<div class="error_message"></div>
			</div>	
		</form>
	</div>

 <?php include('footer.php'); ?>
 <script type="text/javascript">
 	$(document).ready(function() {
 		var url = window.location.href;
 		if (url.indexOf('owner') > 0) {
 			$('.pagesteps-links li:nth-child(2)').addClass('active').siblings().removeClass('active');
		}
 	});
 	
 	
 	
 	
 	$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='step2form']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      20: "required",
      21: "required",
      22: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      23: "required",
      24: {     
          required: true,
        minlength: 6
        } , 
       25: {
           required: true,
           equalTo: '#password'
           },
     
    },
    // Specify validation error messages
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
       submit_form();
     // form.submit();
    }
  });
});
 	
 	
 	
 	

//	$(document).ready(function() {
		  //  $('form#step2form').on('submit', function(e) {
		    	 //e.preventDefault();
		    	 //check pwd length
		    	 function submit_form(){
		    	 if($('#password').val().length>=6){
		    	   //to check pwd/confirm pwd same or not
			    	 if ($('#password').val() == $('#confirm_password').val()) {
				    	 //to check terms are accepted or not
				    	if ($("input[type=checkbox]").is( 
		                      ":checked")) { 
				    	$('.load_div').css('display','block');
				     
			        var form = $('form#step2form').serialize();
			        $.ajax({
			            type: 'post',
			            url: '<?php echo base_url();?>steps/addstep2',
			            data: form,
			            success: function(data) {
			        				
			                var obj = JSON.parse(data);
			                if (obj.status == 'success') {
			                  // $('.success_message').css('display', 'block'); 
			                   $('.error_message').css('display', 'none');
			                  // $('.success_message').html(obj.message); 
			                    setTimeout(function() {
			                    	$('.load_div').css('display','none');
			                      window.location.href='<?php echo base_url();?>steps/business';
			                }, 2000);
			                    
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
			           $('.error_message').html("Please agree the terms to continue!"); 
			      }
			    }else{
			         $('.error_message').css('display', 'block');
	             $('.error_message').html("Passwords does not match!");
			    	 }
			    }else{
			    	$('.error_message').css('display', 'block');
			      $('.error_message').html("Minimum Password length should be 6"); 
			    }
			      //empty error message div after 2 seconds
			      setTimeout(function() {
			          	$('.error_message').html('');
			      }, 2000);
			      
		    	 }
   // });


//	}); 
</script>

<script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
</body>
</html>