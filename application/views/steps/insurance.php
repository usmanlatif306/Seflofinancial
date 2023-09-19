<!DOCTYPE html>

<html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<head>
<title>Insurance | Briskloanz </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/steps/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/steps/css/font-awesome.min.css">
<!-- <link rel="stylesheet" type="text/css" href="css/steps.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/steps/css/steps-comon.css">
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
    
    
    @media(max-width:767px){
.own-form {
    width: 100%;}
}


</style>
</head>
<body>

<header>
	<nav class="navbar">
		<div class="container">
		  <div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>/assets/homeweb/images/logo.png"></a>
		  </div>

		  <?php 
		   if(empty($_SESSION['email'])){ ?>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="<?php echo base_url();?>steps/signin">Sign in</a></li>
			<li><a href="<?php echo base_url();?>steps/signup"> Sign up</a></li>
		  </ul>
		  <?php }else{ ?>
		  <ul class="nav navbar-nav navbar-right">
		  <li><a href="<?php echo base_url();?>steps/dashboard">Dashboard</a></li>
		  	<li><a href="<?php echo base_url();?>steps/logout">Logout</a></li>
		  	</ul>
		  <?php } ?>
		</div>
	  </nav>
	  <div class="container-fluid">
		<div class="row border-tb">
			<div class="container">
				<ul class="nav nav-tabs nav-justified pagesteps-links">
				    <li class="active"><a href="<?php echo base_url(); ?>/steps/insurance">Insurance</a></li>
					<!-- <li><a href="bus.html">Business Information</a></li>
					<li><a href="doc.html">Documents Submission</a></li>
					<li><a href="sub.html">Submission</a></li> -->
				</ul>
			</div>
		</div>
	</div>	
</header>
	

	<div class="container">
	<div class="col-md-3"></div>
    <div class="col-md-6" id="success_message" style="display: none;">
        <h3 class="text-center mb-15 alert alert-success">Data saved successfully</h3>
    </div>
    <div class="col-md-3"></div>
	<br/>
		<form method="post" id="insurance_form" name="insurance_form" class="own-form">
			<div class="row">
				<h3 class="text-center mb-15">Insurance</h3>
				<div class="form-group col-md-6">
						<!-- <label for="">First Name</label> -->
						<label for=""><?php echo $questions[0]['question'];?></label>
						<?php $question_id = $questions[0]['question_id']; ?>
						<input type="text" class="form-control" value="<?php echo @$answer[1]['answer']; ?> " name="<?php echo $question_id; ?>" placeholder="First Name">
				</div>
				<div class="form-group col-md-6">
					<!-- <label for="">Last Name</label> -->
					<label for=""><?php echo $questions[1]['question'];?></label>
					<?php $question_id = $questions[1]['question_id']; ?>
					<input type="text" class="form-control" value="<?php echo @$answer[2]['answer']; ?>" name="<?php echo $question_id; ?>" placeholder="Last Name">
                </div>
                <div class="form-group col-md-12">
                        <!-- <label for="">Types Of Insurance Type</label> -->
                        <label for=""><?php echo $questions[2]['question'];?></label>
                        <?php $question_id = $questions[2]['question_id']; ?>
                        <select class="form-control" name="<?php echo $question_id; ?>" ><!-- month_sec  -->
                                <option disabled="" selected="">Select </option>
                                <option <?php if("Auto & Home Insurance"==@$answer[3]['answer']){ ?> selected <?php } ?> >Auto & Home Insurance</option>
                                <option <?php if("Life Insurance"==@$answer[3]['answer']){ ?> selected <?php } ?>>Life Insurance</option>
                                <option <?php if("Travel Insurance"==@$answer[3]['answer']){ ?> selected <?php } ?>>Travel Insurance</option>
                                <option <?php if("Visitor Insurance"==@$answer[3]['answer']){ ?> selected <?php } ?> >Visitor Insurance</option>
                                <option <?php if("Super Visa Insurance"==@$answer[3]['answer']){ ?> selected <?php } ?>>Super Visa Insurance</option>
                                <option <?php if("Business Insurance"==@$answer[3]['answer']){ ?> selected <?php } ?>>Business Insurance</option>
                                <option <?php if("Commercial Insurance"==@$answer[3]['answer']){ ?> selected <?php } ?>>Commercial Insurance</option>
                                <option <?php if("Trucking Insurance"==@$answer[3]['answer']){ ?> selected <?php } ?>>Trucking Insurance</option>
                                <option <?php if("RESP"==@$answer[3]['answer']){ ?> selected <?php } ?>>RESP</option>
                                <option <?php if("RRSP"==@$answer[3]['answer']){ ?> selected <?php } ?>>RRSP </option>
                                <option v<?php if("Segregated Funds"==@$answer[3]['answer']){ ?> selected <?php } ?>>Segregated Funds</option>
                        </select>
                            
                    </div>
                   
                        
                  <?php if(!empty($_SESSION['email'])){ ?>  
				<div class="form-group col-md-6">
						<!-- <label for="email">Email</label> -->
						<label for=""><?php echo $questions[3]['question'];?></label>
						<?php $question_id = $questions[3]['question_id']; ?>
						<input type="email" class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter email" name="email" value="<?php echo $_SESSION['email']; ?>" readonly>
				</div> <?php }else { ?>
					<div class="form-group col-md-6">
						<!-- <label for="email">Email</label> -->
						<label for=""><?php echo $questions[3]['question'];?></label>
						<?php $question_id = $questions[3]['question_id']; ?>
						<input type="email" class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter email" name="email">
				</div>
				<?php } ?>
				<div class="form-group col-md-6">
					<!-- <label for="">Phone Number</label> -->
					<label for=""><?php echo $questions[4]['question'];?></label>
					<?php $question_id = $questions[4]['question_id']; ?>
					<input type="text" value="<?php echo @$answer[5]['answer']; ?>" class="form-control phone" name="<?php echo $question_id; ?>" placeholder="Phone number">
				</div>
				
				 <?php if(!empty($_SESSION['email'])){ ?>  
					<div class="form-group col-md-12">
					<!-- <label for="">Phone Number</label> -->
					<label for=""><?php //echo $questions[5]['question'];?></label>
					<?php $question_id = $questions[5]['question_id']; ?>
					<input type="hidden" value="123456" class="form-control phone" name="<?php echo $question_id; ?>" placeholder="Password">
				</div>
				 <?php } else{ ?>
				 
				 <div class="form-group col-md-12">
					<!-- <label for="">Phone Number</label> -->
					<label for=""><?php echo $questions[5]['question'];?></label>
					<?php $question_id = $questions[5]['question_id']; ?>
					<input type="password" value="<?php echo @$answer[6]['answer']; ?>" class="form-control phone" name="<?php echo $question_id; ?>" placeholder="Password">
				</div>
				 
				 <?php } ?>
				
				<div class="check-box col-md-12">
					<input class="magic-checkbox" type="checkbox"  id="own"><!-- name="layout" -->
					<label for="own"> I authorise BriskLoans to contact insurance providers on behalf of me. i authorise BriskLoansto send me updates on email,call or sms and share my requried information with insurance providers for arranging best possible insurance policy <!-- - <strong>I WILL SHARE CONTENT FOR THIS ONCE I RECEIVE FROM LEGAL PERSON FROM CANADA</strong> --> <!--<a href="#" target="_blank">terms</a> --></label>
				</div>
				<div class="col-md-12 text-center">
					<button type="submit" class="btn action-button">Continue</button>
				  <div class="error_message"></div>
				</div>
			</div>	
		</form>
	</div>


<?php include('footer.php'); 


if(!empty($_SESSION['edit'])){ 
?>


	<script type="text/javascript">
	
	
//	$(document).ready(function() {
		  //  $('form#insurance_form').on('submit', function(e) {
       // e.preventDefault();
       
      function insurence_form_submit(){
       
        if ($("input[type=checkbox]").is( 
		                      ":checked")) { 
        var form = $('form#insurance_form').serialize();
        $.ajax({
            type: 'post',
            url: '<?php echo base_url();?>Steps/add_insurance',
            data: form,
            success: function(data) {
        		
                var obj = JSON.parse(data);
                if (obj.status == 'success') {
                   $('.success_message').css('display', 'block'); 
                   $('.error_message').css('display', 'none');
                  // $('.success_message').html(obj.message); 
                   $('#insurance_form')[0].reset();
                   $("#success_message").show();
                  
                   
                    setTimeout(function() { 
                    
                        window.location.replace('<?php echo base_url(); ?>steps/dashboard');
                        
                    }, 3000);
                    
                } else {
                  // $('.success_message').css('display', 'none'); 
                   $('.error_message').css('display', 'block');
                   $('.error_message').html(obj.message); 
                   setTimeout(function() {
                    	$('.error_message').html('');
                }, 2000);
                }
                
               
            }
        });
      }else { 
			    			 $('.error_message').css('display', 'block');
			           $('.error_message').html("Please check the checkbox!"); 
			           setTimeout(function() {
                    	$('.error_message').html('');
                }, 2000);
			      }
      }

  
</script>
<?php }else { ?>


	<script type="text/javascript">
	
      function insurence_form_submit(){
       
        if ($("input[type=checkbox]").is( 
		                      ":checked")) { 
        var form = $('form#insurance_form').serialize();
        $.ajax({
            type: 'post',
            url: '<?php echo base_url();?>Steps/add_insurance',
            data: form,
            success: function(data) {
        		
                var obj = JSON.parse(data);
                if (obj.status == 'success') {
                   $('.success_message').css('display', 'block'); 
                   $('.error_message').css('display', 'none');
                  // $('.success_message').html(obj.message); 
                   $('#insurance_form')[0].reset();
                   $("#success_message").show();
                  
                   
                    setTimeout(function() { 
                    
                        window.location.replace('<?php echo base_url(); ?>')
                        
                    }, 3000);
                    
                } else {
                  // $('.success_message').css('display', 'none'); 
                   $('.error_message').css('display', 'block');
                   $('.error_message').html(obj.message); 
                   setTimeout(function() {
                    	$('.error_message').html('');
                }, 2000);
                }
                
               
            }
        });
      }else { 
			    			 $('.error_message').css('display', 'block');
			           $('.error_message').html("Please check the checkbox!"); 
			           setTimeout(function() {
                    	$('.error_message').html('');
                }, 2000);
			      }
      }

  
</script>


<?php } ?>

	<script>
 	$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='insurance_form']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      '1': "required",
      '2': "required",
      '4':{
        required: true,
        email: true
      },
      
       '5': {
     required: true,
      digits: true,
        minlength:10,
        maxlength:10
    },
      '3': "required",
      
     },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
       insurence_form_submit();
    }
  });
});
</script>

<script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/additional-methods.js"></script>
</body>
</html>