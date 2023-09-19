<!DOCTYPE html>
<html>
<head>
	<title>Documents Submission | Seflo Financial </title>
	 <?php include('top.php'); ?>
	 <style>
	     .error{
	         color:red;
	     }
	 </style>
</head>
<body>


 <?php include('step_header.php'); ?>
<div class="container">
	<form class="msform" name="step4form" method="post" action="<?php echo base_url();?>steps/addstep4" enctype='multipart/form-data'>
		<fieldset class="">
			<div class="row">
				<div class="col-md-12">
					<div class="doc-step1">
						<h2 class="fs-title text-center">Bank Statements</h2>
						
						<div class="form-group text-left input_upload">
							<div class="form-group text-left col-md-6">
								<div class="row">
									<?php $question_id = $questions[0]['question_id']; ?>
									<label for="name"><?php echo $questions[0]['question']; ?></label>
									<input type="date" id="from_date" name="<?php echo $question_id; ?>" placeholder="dd/mm/yyyy" class="form-control date_pick" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
								</div>
							</div>
							<div class="form-group text-left col-md-6">
								<?php $question_id = $questions[1]['question_id']; ?>
								<label for="name"><?php echo $questions[1]['question']; ?></label>
								<input type="date" name="<?php echo $question_id; ?>" placeholder="dd/mm/yyyy" class="form-control date_pick" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >	
							</div>
							<div class="clearfix"></div>
							<label class="text-left"><?php echo $questions[2]['question']; ?></label>
							<input type="file" name="<?php echo $questions[2]['question_id']; ?>[]" multiple class="form-control" />
		
						</div>
					</div>
					<hr>
				</div>

				
				<div class="col-md-12">
					<div class="doc-step2">
						<h2 class="fs-title text-center">Financial Documents</h2>
						<div class="row">
						<div class="col-md-6">
						<div class="form-group text-left input_upload">
							<h5>Balance Sheet</h5>
							<div class="form-group text-left col-md-6">
								<div class="row">
									<?php $question_id = $questions[3]['question_id']; ?>
									<input type="date" name="<?php echo $question_id; ?>" placeholder="dd/mm/yyyy" class="form-control date_pick" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
								</div>
							</div>
							<div class="form-group text-left col-md-6">
								<?php $question_id = $questions[4]['question_id']; ?>
								<input type="date" name="<?php echo $question_id; ?>" placeholder="dd/mm/yyyy" class="form-control date_pick" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >	
							</div>
							<div class="clearfix"></div>
							<label class="text-left"><?php echo $questions[5]['question']; ?></label>
							<input type="file" name="<?php echo $questions[5]['question_id']; ?>[]" multiple class="form-control" />
		
						</div>
						<hr>
						</div>
						
						<div class="col-md-6">
						<div class="form-group text-left input_upload">
							<h5>Profit Loss Account</h5>
							<div class="form-group text-left col-md-6">
								<div class="row">
									<?php $question_id = $questions[6]['question_id']; ?>
									<input type="date" name="<?php echo $question_id; ?>" placeholder="dd/mm/yyyy" class="form-control date_pick" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
								</div>
							</div>
							<div class="form-group text-left col-md-6">
								<?php $question_id = $questions[7]['question_id']; ?>
								<input type="date" name="<?php echo $question_id; ?>" placeholder="dd/mm/yyyy" class="form-control date_pick" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >	
							</div>
							<div class="clearfix"></div>
							<label class="text-left"><?php echo $questions[8]['question']; ?></label>
							<input type="file" name="<?php echo $questions[8]['question_id']; ?>[]" multiple class="form-control" />
			
						</div>
						<hr>
						</div>
						
						<div class="col-md-6">
						<div class="form-group text-left input_upload">
							<h5> Cash Flow Statement </h5>
							<div class="form-group text-left col-md-6">
								<div class="row">
									<?php $question_id = $questions[9]['question_id']; ?>
									<input type="date" name="<?php echo $question_id; ?>" placeholder="dd/mm/yyyy" class="form-control date_pick" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
								</div>
							</div>
							<div class="form-group text-left col-md-6">
								<?php $question_id = $questions[10]['question_id']; ?>
								<input type="date" name="<?php echo $question_id; ?>" placeholder="dd/mm/yyyy" class="form-control date_pick" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >	
							</div>
							<div class="clearfix"></div>
							<label class="text-left"><?php echo $questions[11]['question']; ?></label>
							<input type="file" name="<?php echo $questions[11]['question_id']; ?>[]" multiple class="form-control" />
			
						</div>
						
						</div>
						
						<div class="col-md-6">
						<div class="form-group text-left input_upload">
							<h5> Tax Return </h5>
							<div class="form-group text-left col-md-6">
								<div class="row">
									<?php $question_id = $questions[12]['question_id']; ?>
									<input type="date" name="<?php echo $question_id; ?>" placeholder="dd/mm/yyyy" class="form-control date_pick" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
								</div>
							</div>
							<div class="form-group text-left col-md-6">
								<?php $question_id = $questions[13]['question_id']; ?>
								<input type="date" name="<?php echo $question_id; ?>" placeholder="dd/mm/yyyy" class="form-control date_pick" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >	
							</div>
							<div class="clearfix"></div>
							<label class="text-left"><?php echo $questions[14]['question']; ?></label>
							<input type="file" name="<?php echo $questions[14]['question_id']; ?>[]" multiple class="form-control" />
			
						</div>
						</div>
						</div>	
					</div>
					<hr>
				</div>	
				
				<div class="col-md-12">
					<div class="doc-step1">
						<h2 class="fs-title text-center">Kyc and Business Proof</h2>
						<div class="row">
							<div class="col-md-6">
						<div class="form-group text-left input_upload">
								<h5> <?php echo $questions[15]['question']; ?> </h5>
							<div class="clearfix"></div>
							<label class="text-left">Upload File</label>
							<input type="file" name="<?php echo $questions[15]['question_id']; ?>[]" multiple class="form-control" />
		
						</div>
						<hr>
						</div>
						
						<div class="col-md-6">
						<div class="form-group text-left input_upload">
								<h5> <?php echo $questions[16]['question']; ?> </h5>
							<div class="clearfix"></div>
							<label class="text-left">Uplaod File</label>
							<input type="file" name="<?php echo $questions[16]['question_id']; ?>[]" multiple class="form-control" />
		
						</div>
						<hr>
						</div>
						<div class="col-md-6">
						<div class="form-group text-left input_upload">
								<h5> <?php echo $questions[17]['question']; ?> </h5>
							<div class="clearfix"></div>
							<label class="text-left">Upload File</label>
							<input type="file" name="<?php echo $questions[17]['question_id']; ?>[]" multiple class="form-control" />
		
						</div>
						<hr>
						</div>
						<div class="col-md-6">
						<div class="form-group text-left input_upload">
								<h5> <?php echo $questions[18]['question']; ?> </h5>
							<div class="clearfix"></div>
							<label class="text-left">Upload File</label>
							<input type="file" name="<?php echo $questions[18]['question_id']; ?>[]" multiple class="form-control" />
							</div>
							<hr>
						</div>
						<div class="col-md-6">
						<div class="form-group text-left input_upload">
								<h5> <?php echo $questions[19]['question']; ?> </h5>
							<div class="clearfix"></div>
							<label class="text-left">Upload File</label>
							<input type="file" name="<?php echo $questions[19]['question_id']; ?>[]" multiple class="form-control" />
		
						</div>
						</div>

					</div>
						
					</div>
				
			</div>
			
		<button class="next action-button" type="submit">Next</button>
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


 	$(function() {
  $("form[name='step4form']").validate({
    rules: {
      //'62': "required",
      63: {     
          //required: true,
          greaterThan: {
          	depends: function(element) {
                return !!$("#from_date").val().length;
            }
          }
        } , 
      // '64[]': "required",
      //  '65': "required",
      //  '66': "required",
      //  '68': "required",
      //  '69': "required",
      //   '67[]': "required",
      //    '70[]': "required",
      //    '71': "required",
      //  '72': "required",
       
      //    '74': "required",
      //  '75': "required",
       
      //  '73[]': "required",
      //    '76[]': "required",
         
      //    '77[]': "required",
      //    '78[]': "required",
         
      //     '79[]': "required",
      //    '80[]': "required",
      //     '81[]': "required",
     },
    submitHandler: function(form) {
      form.submit();
    }
  });
});

$(document).ready(function () {
jQuery.validator.addMethod("greaterThan", 
function(value, element) {

    if (!/Invalid|NaN/.test(new Date(value))) {
        return new Date(value) >= new Date($('#from_date').val());
    }

    return isNaN(value) && isNaN($('#from_date').val()) 
        || (Number(value) >= Number($('#from_date').val())); 
},'Must be greater or equal than From Date.');
});

 		
  $("input[name='27[]']").on('click change', function(e) {
       if($("input[name='27[]']:checked").length==0){
        $("#legal_struct").css("display","block");
       }else{
           $("#legal_struct").css("display","none"); 
       }
      });	
      
      
       $("input[name='38[]']").on('click change', function(e) {
       if($("input[name='38[]']:checked").length==0){
        $("#bs3owned").css("display","block");
       }else{
           $("#bs3owned").css("display","none"); 
       }
      });	
      
       $("input[name='39']").on('click change', function(e) {
       if($("input[name='39']:checked").length==0){
        $("#bs3facility").css("display","block");
       }else{
           $("#bs3facility").css("display","none"); 
       }
      });	
 	
 </script>
 
 
  
 <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/additional-methods.js"></script>

</body>
</html>