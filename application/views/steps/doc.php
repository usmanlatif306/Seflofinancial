<!DOCTYPE html>
<html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<head>
	<title>Documents Submission | Seflo Financial </title>
	 <?php include('top.php'); ?>
</head>
<body>

 <?php include('step_header.php'); ?>
<div class="container">
	<form class="msform" id="step4form" method="post" action="<?php echo base_url();?>steps/addstep4" enctype='multipart/form-data'>
		<fieldset class="">

			<div class="doc-step1">
				<h2 class="fs-title"><?php echo $questions[0]['question']; ?></h2>		
				<!-- <div class="input-group">
					<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
					<input type="text" name="numeric" placeholder="Please enter a valid dollar amount" class="form-control numb" />
				</div> -->
				
				<div class="form-group text-left">
					<label class="text-left">Upload File</label>
					<input type="file" name="<?php echo $questions[0]['question_id']; ?>" class="form-control" />

				</div>
			</div>
			<hr>
			<div class="doc-step2">
				<h2 class="fs-title"><?php echo $questions[1]['question']; ?></h2>
				<h3 class="fs-subtitle">They need to upload in PDF or Excel form</h3>
				
				<div class="form-group text-left">
					<label>Upload File</label>
					<input type="file" name="<?php echo $questions[1]['question_id']; ?>" class="form-control" />
				</div>
				
			</div>
			<hr>
			<div class="doc-step3">
				<h2 class="fs-title"><?php echo $questions[2]['question']; ?></h2>
				<h3 class="fs-subtitle">Driver License, Business License, SSN proof, Cancel Check, Tax Filing Record, business Plan Soft Copy, Balance Sheet and P&L Report, Documents about the business model etc</h3>
				
				<div class="form-group text-left">
					<label>Upload File PDF, JPG or PNG </label>
					<input type="file" name="<?php echo $questions[2]['question_id']; ?>" class="form-control" />
					
				</div>
				
			</div>
			<hr>
			<div class="doc-step3">
				<h2 class="fs-title"><?php echo $questions[3]['question']; ?></h2>
				<!-- <h3 class="fs-subtitle"></h3> -->
				
				<div class="form-group text-left">
					<label>Upload File PDF, JPG or PNG </label>
					<input type="file" name="<?php echo $questions[3]['question_id']; ?>" class="form-control" />
					
				</div>
				<!-- <div class="input-group">
					<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
					<input type="text" name="numeric" placeholder="Please enter a valid dollar amount" class="form-control numb" />
				</div> -->
			</div>

			<!-- <input type="button" name="next" class="next action-button" value="Next" /> -->
		<!-- 	<a href="<?php echo base_url();?>steps/submission" class="next action-button" type="button">Next</a> -->
		<button class="next action-button" type="submit" name="submit">Next</button>
		<!-- <div class="load_div"><i class="fa fa-spinner" aria-hidden="true"></i></div> -->
		<div class="error_message"></div>
		</div>

	</form>
</div>

 <?php include('footer.php'); ?>
 <script type="text/javascript">
 	$(document).ready(function() {
 		var url = window.location.href;
 		if (url.indexOf('document') > 0) {
 			$('.pagesteps-links li:nth-child(4)').addClass('active').siblings().removeClass('active');
		}
 	});

 		$(document).ready(function() {
		    $('form#step4form').on('submit', function(e) {
        e.preventDefault();
        $('.load_div').css('display','block');
        var form = $('form#step4form').serialize();
        $.ajax({
            type: 'post',
            url: '<?php echo base_url();?>steps/addstep4',
            data: form,
            success: function(data) {
                var obj = JSON.parse(data);
                console.log(obj);
                /*if (obj.status == 'success') {
                  // $('.success_message').css('display', 'block'); 
                   $('.error_message').css('display', 'none');
                  // $('.success_message').html(obj.message); 
                    setTimeout(function() {
                    	$('.load_div').css('display','none');
                      window.location.href='<?php echo base_url();?>steps/document';
                }, 2000);
                    
                } else {
                  // $('.success_message').css('display', 'none'); 
                   $('.error_message').css('display', 'block');
                   $('.error_message').html(obj.message); 
                   setTimeout(function() {
                    	$('.error_message').html('');
                }, 2000);
                }*/
           /* }
        });

    });
	});*/
 </script>
</body>
</html>