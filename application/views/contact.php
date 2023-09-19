<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Briskloanz</title>
	<meta name="description" content="">
	<?php include_once('links.php'); ?>
</head>
<body>
	<style>
	    .error{
	        color:red;
	    }
	</style>
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="at-wrapper" class="at-wrapper">
	<?php include_once('header.php'); ?>
		<!--************************************
				Home Slider Start
		*************************************-->
		<div class="at-innerbanner">
			<div class="at-innerbannerbox">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="at-innerbannercontent">
								<div class="at-pagetitle">
									<h1>Let's Talk</h1>
								</div>
								<ol class="at-breadcrumb">
									<li><a href="https://briskloanz.com/">Home</a></li>
									<li class="at-active"><span>Contact Us</span></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="at-main" class="at-main at-haslayout">
			<div class="at-contactusvtwo">
				<section class="at-sectionspace at-bglight at-haslayout">
					<div class="container">
						<div class="row">
							<div class="at-content">
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-left">
									<div class="at-colcontact">
										<span class="at-contacticon"><i class="icon-telephone114"></i></span>
										<h2>Get In Touch</h2>
										<span>Telephone: +1 226-500-4131</span>
										<span>Mobile: +1 226-500-4131</span>
										<span><a href="mailto:info@briskloanz.com">support@briskloanz.com</a></span>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-left">
									<div class="at-colcontact">
										<span class="at-contacticon"><i class="icon-icons74"></i></span>
										<h2>Our Location</h2>
										<address>9 Darling Crescent<span>Guelph, ON N1L 1P9, Canada</span></address>
										<span><a href="https://www.google.com/maps/place/9+Darling+Crescent,+Guelph,+ON+N1L+1P9,+Canada/@43.5043663,-80.1894991,17z/data=!3m1!4b1!4m5!3m4!1s0x882b835f89778ccb:0xfa2ebba81e8ca26d!8m2!3d43.5043663!4d-80.1873104">Get Directions</a></span>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-left">
									<div class="at-colcontact">
										<span class="at-contacticon"><i class="icon-icons98"></i></span>
										<h2>Looking For A Career?</h2>
										<div class="at-description">
											<p>Looking for a career with us<span>fill the form.</span></p>
										</div>
										<span><a href="mailto:info@briskloanz.com">support@briskloanz.com</a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="at-haslayout">
					<div class="at-content">
						<div id="at-locationmap" class="at-locationmap">
							<img src="<?php echo base_url(); ?>assets/homeweb/images/map_contact.png">
						</div>
						
						
				<script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/additional-methods.js"></script>		
	
		<form id="contact_from" class="at-formtheme at-formcontacus" name="contact_from" method="post">
							<div class="at-sectiontitleborder">
								<h2>Contact Us</h2>
							</div>
							<fieldset>
							    	<div class="alert alert-success" role="alert" id="success" style="display: none">
  <strong>Thank you.</strong>
</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
										<div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="Name*" >
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
										<div class="form-group">
											<input type="email" name="emailaddress" class="form-control" placeholder="Email Address*" >
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
										<div class="form-group">
											<input type="text" name="phonenumber" class="form-control" placeholder="Phone Number*" >
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left">
										<div class="form-group">
											<textarea name="message" class="form-control" placeholder="Message*"></textarea>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left">
										<button type="submit" class="at-btn">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</section>
			</div>
		</main>
		
	


	<script>
 	$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='contact_from']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      'name': "required",
       'emailaddress': {
            required: true,
            email: true
           },
     'phonenumber': {
     required: true,
      digits: true,
        minlength:10,
        maxlength:10
    },
      'message': "required",
      
      
     },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
        
       var form = $('form#contact_from').serialize();
        $.ajax({
            type: 'post',
            url: '<?php echo base_url();?>welcome/send_email',
            data: form,
            success: function(data) {
        	$("#success").css("display","block");
        	$("input[name='name']").val("");
        		$("input[name='emailaddress']").val("");
        			$("input[name='phonenumber']").val("");
        				$("input[name='message']").text("");
        				
            }
        });
        
    }
  });
});
</script>
		<!--************************************
				Main End
		*************************************-->
		<?php include_once('footer.php'); ?>
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<?php include_once('footer_links.php'); ?>
	
	<script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/additional-methods.js"></script>
	
</body>
</html>