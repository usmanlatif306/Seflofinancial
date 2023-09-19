<!DOCTYPE html>
<html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<head>
	<title>Business Information | Seflo Financial </title>
	 <?php include('top.php'); ?>
	<style>
		.btn-group {
			width: 100%;
		}
		
		.error{
		    color:red;
		}
		
			.error2{
		    color:red;
		    display:none;
		}
		
	</style>
</head>
<body>

 <?php include('step_header.php'); ?>
<form class="msform" id="step3form" name="step3form">
	<fieldset class="">

		<div class="bus-step1">
			<h2 class="fs-title"><?php echo $questions[0]['question']; ?></h2>
		
			<div class="form-group">
				<?php $question_id = $questions[0]['question_id']; ?>
				<!-- <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span> -->
				<input type="text" name="<?php echo $question_id; ?>" placeholder="Please enter Legal Name of the Business" class="form-control" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" />
			</div>
		</div>
		<hr>
		<div class="bus-step2 row">
			<h2 class="fs-title"><?php echo $questions[1]['question']; ?></h2>
			<?php 
				$question_id = $questions[1]['question_id']; 
				$answer = $answers[$question_id]['answer'];
				$answerArr = explode(",", $answer);
			?>
			<div class="check-box col-md-6">
				<input class="magic-checkbox legal_struct" type="checkbox" name="<?php echo $questions[1]['question_id']; ?>[]"  id="busstep2-1" value="Sole Proprietorship" <?php echo in_array("Sole Proprietorship", $answerArr) ? 'checked' : NULL; ?> >
				<label for="busstep2-1">Sole Proprietorship</label>
			</div>
			<div class="check-box col-md-6">
				<input class="magic-checkbox legal_struct" type="checkbox" name="<?php echo $questions[1]['question_id']; ?>[]" id="busstep2-2" value="Partnership" <?php echo in_array("Partnership", $answerArr) ? 'checked' : NULL; ?> >
				<label for="busstep2-2">Partnership</label>
			</div>
			<div class="check-box col-md-6">
				<input class="magic-checkbox legal_struct" type="checkbox" name="<?php echo $questions[1]['question_id']; ?>[]" id="busstep2-3" value="Corporation" <?php echo in_array("Corporation", $answerArr) ? 'checked' : NULL; ?> >
				<label for="busstep2-3">Corporation</label>
			</div>
			<div class="check-box col-md-6">
				<input class="magic-checkbox legal_struct" type="checkbox" name="<?php echo $questions[1]['question_id']; ?>[]" id="busstep2-5" value="Private Ltd" <?php echo in_array("Private Ltd", $answerArr) ? 'checked' : NULL; ?> >
				<label for="busstep2-5">Private Ltd</label>
			</div>
			<div class="check-box col-md-6">
				<input class="magic-checkbox legal_struct" type="checkbox" name="<?php echo $questions[1]['question_id']; ?>[]" id="busstep2-6" value="Cooperative" <?php echo in_array("Cooperative", $answerArr) ? 'checked' : NULL; ?> >
				<label for="busstep2-6">Cooperative</label>
			</div>
			<div class="check-box col-md-6">
				<input class="magic-checkbox anyother legal_struct" type="checkbox" name="<?php echo $questions[1]['question_id']; ?>[]" id="busstep2-7" value="Other" <?php echo in_array("Other", $answerArr) ? 'checked' : NULL; ?> >
				<label for="busstep2-7">Other</label>
			</div>
			<div class="col-md-12">
				<div class="Other">
					<?php $question_id = $questions[2]['question_id']; ?>
					<textarea class="form-control" rows="3" name="<?php echo $question_id; ?>" id="comment"><?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?></textarea>
				</div>
		   </div>
		   <span id="legal_struct" class="error2">This field is required.</span>
		   
		</div>
		<hr>
		<div class="bus-step3 row">
			<h2 class="fs-title">Full Address of the Business</h2>
			<div class="col-md-12">
				<div class="row">
					<!-- <h3 class="text-center mb-15">Owner Information</h3> -->
					<!--<div class="form-group col-md-12 text-left">
						<?php $question_id = $questions[3]['question_id']; ?>
						<label for=""><?php echo $questions[3]['question']; ?></label>
						<input type="text" class="form-control" id="" name="<?php echo $question_id; ?>" placeholder="Office name" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>-->
					<div class="form-group col-md-12 text-left">
						<?php $question_id = $questions[4]['question_id']; ?>
						<label for=""><?php echo $questions[4]['question']; ?></label>
						<textarea class="form-control" rows="3" name="<?php echo $question_id; ?>" id="comment"><?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?></textarea>
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[5]['question_id']; ?>
						<label for=""><?php echo $questions[5]['question']; ?></label>
						<input type="text" class="form-control" name="<?php echo $question_id; ?>" id="" placeholder="City" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[6]['question_id']; ?>
						<label for=""><?php echo $questions[6]['question']; ?></label>
						<input type="text" class="form-control" name="<?php echo $question_id; ?>" id="" placeholder="State" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[7]['question_id']; ?>
						<label for=""><?php echo $questions[7]['question']; ?></label>
						<input type="text" class="form-control" id="" name="<?php echo $question_id; ?>" placeholder="Country" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[8]['question_id']; ?>
						<label for=""><?php echo $questions[8]['question']; ?> </label>
						<input type="text" class="form-control " id="" name="<?php echo $question_id; ?>" placeholder="Postal Code" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
				<!--	<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[9]['question_id']; ?>
						<label for=""><?php echo $questions[9]['question']; ?> </label>
						<input type="text" class="form-control" id="" name="<?php echo $question_id; ?>" placeholder="MSA" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>-->
				</div>	
			</div>
			
		</div>
		<hr>
		<div class="bus_step4 row">
			<h2 class="fs-title">Industry Classification and Sub-classification </h2>
			<div class="form-group col-md-6 text-left">
				<label for="sel1"><?php echo $questions[10]['question']; ?></label>
				<?php 
					$question_id = $questions[10]['question_id']; 
					$answer = $answers[$question_id]['answer'];
				?>
				<select id="cate_one" class="form-control" name="<?php echo $question_id; ?>" onchange="subClassification()" >
					<?php if(!empty($all_categories)){
						echo '<option value="0">Select Category</option>';
						foreach ($all_categories as $key => $value) {
							$selected = ($value["cat_id"]==$answer)?"selected":"";
							echo '<option value="'.$value['cat_id'].'" '.$selected.' >'.$value['cat_name'].' >'.$value['cat_name'].'</option>';
						}

					}else{
						echo '<option value="0">No Category available</option>';
					} ?>
					</select>
			</div>
			<div class="form-group col-md-6 text-left">
				<label for="sel1"><?php echo $questions[11]['question']; ?></label>
				<select id="child_cate" class="form-control" name="<?php echo $questions[11]['question_id']; ?>">
					<option value="">Select Subcategory</option>
				</select>
			</div>	
		</div>
		<hr>
		<div class="bus-step5 row">
			<div class="col-md-12">
				<h2 class="fs-title"><?php echo $questions[12]['question']; ?> </h2>
				<div class="radio-group">
					<div class="btn-group" data-toggle="buttons">
						<?php 
							$question_id = $questions[12]['question_id']; 
							$answer = $answers[$question_id]['answer'];
						?> 
						<label class="btn btn-default radio-btn radio-left <?php echo $answer == 'Owned' ? 'active' : '' ?>">
							<input type="radio" id="" name="<?php echo $question_id; ?>[]" value="Owned" <?php echo $answer == 'Owned' ? 'checked' : '' ?> /> Owned
						</label>
						<label class="btn btn-default radio-btn radio-right <?php echo $answer == 'Leased' ? 'active' : '' ?>">
							<input type="radio" id="" name="<?php echo $question_id; ?>[]" value="Leased" <?php echo $answer == 'Leased' ? 'checked' : '' ?>  />Leased
						</label> 
						<!--<label class="btn btn-default radio-btn radio-right <?php echo $answer == 'Mortgage' ? 'active' : '' ?>">
							<input type="radio" id="" name="<?php echo $question_id; ?>[]" value="Mortgage" <?php echo $answer == 'Mortgage' ? 'checked' : '' ?> />Mortgage
						</label> -->
					</div>	
				</div>
				<span id="bs3owned" class="error2">This field is required.</span>
			</div>		
		</div>
		<hr>
		<div class="row bus-step6">
			<div class="col-md-12">
				<h2 class="fs-title"><?php echo $questions[13]['question']; ?> </h2>
				<div class="radio-group">
					<div class="btn-group" data-toggle="buttons">
						<?php 
							$question_id = $questions[13]['question_id']; 
							$answer = $answers[$question_id]['answer'];
						?>
						<label class="btn btn-default radio-btn radio-left <?php echo $answer == '0 - 5' ? 'active' : '' ?>">
							<input type="radio" id="" name="<?php echo $question_id; ?>" value="0 - 5" <?php echo $answer == '0 - 5' ? 'checked' : '' ?> /> 0 - 5
						</label>
						<label class="btn btn-default radio-btn radio-right <?php echo $answer == '6 - 10' ? 'active' : '' ?>">
							<input type="radio" id="" name="<?php echo $question_id; ?>" value="6 - 10" <?php echo $answer == '6 - 10' ? 'checked' : '' ?> />6 - 10
						</label> 
						<label class="btn btn-default radio-btn radio-right <?php echo $answer == '10 - 15' ? 'active' : '' ?>">
							<input type="radio" id="" name="<?php echo $question_id; ?>" value="10 - 15" <?php echo $answer == '10 - 15' ? 'checked' : '' ?> />10 - 15
						</label> 
						<label class="btn btn-default radio-btn radio-right <?php echo $answer == '16 - 20' ? 'active' : '' ?>">
							<input type="radio" id="" name="<?php echo $question_id; ?>" value="16 - 20" <?php echo $answer == '16 - 20' ? 'checked' : '' ?> />16 - 20
						</label> 
						<label class="btn btn-default radio-btn radio-right <?php echo $answer == '20 and higher' ? 'active' : '' ?>">
							<input type="radio" id="" name="<?php echo $question_id; ?>" value="20 and higher" <?php echo $answer == '20 and higher' ? 'checked' : '' ?> />20 and higher
						</label> 
					</div>	
				</div>
					<span id="bs3facility" class="error2">This field is required.</span>
			</div>		
		</div>
		<hr>
		<div class="row bus-step7 btn-group radio_options">
			<h2 class="fs-title"><?php echo $questions[14]['question']; ?></h2>
			<?php 
				$question_id = $questions[14]['question_id']; 
				$answer = $answers[$question_id]['answer'];
			?>
			<div class="radio-box col-md-6">
				<input type="radio" class="magic-radio options_check" value="Yes"  name="<?php echo $question_id; ?>" id="bus-1" <?php echo $answer == 'Yes' ? 'checked' : '' ?> >
				<label for="bus-1">Yes </label>
			</div>
			<div class="radio-box col-md-6">
				<input type="radio" class="magic-radio" value="No"  name="<?php echo $question_id; ?>" id="bus-2" <?php echo $answer == 'No' ? 'checked' : '' ?> >
				<label for="bus-2">No </label>
			</div>
			<div class="col-md-12 depends">
				<div class="row">
					<div class="form-group text-left col-md-12">
						<?php $question_id = $questions[15]['question_id']; ?>
						<label for="name"><?php echo $questions[15]['question']; ?></label>
						<input type="text" placeholder="000" class="form-control" name="<?php echo $question_id; ?>" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
				</div>	
			</div>
	
		</div>
		<hr>
		<div class="row bus-step8 btn-group radio_options">
			<h2 class="fs-title"><?php echo $questions[16]['question']; ?></h2>
			<?php 
				$question_id = $questions[16]['question_id']; 
				$answer = $answers[$question_id]['answer'];
			?>
			<div class="col-md-6 radio-box">
				<input class="magic-radio options_check" value="Yes" type="radio" name="<?php echo $question_id; ?>" id="bus-3" <?php echo $answer == 'Yes' ? 'checked' : '' ?> >
				<label for="bus-3">Yes </label>
				
			</div>
			<div class="col-md-6 radio-box">
					<input class="magic-radio" value="No" type="radio" name="<?php echo $question_id; ?>" id="bus-4" <?php echo $answer == 'No' ? 'checked' : '' ?> >
					<label for="bus-4">No </label>
			</div>
			<div class="col-md-12 depends">
				<div class="row">
					<div class="form-group text-left col-md-12">
						<?php $question_id = $questions[17]['question_id']; ?>
						<label for="name"><?php echo $questions[17]['question']; ?></label>
						<input type="date" placeholder="000" class="form-control" id="" name="<?php echo $question_id; ?>" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
				</div>	
			</div>
		</div>
		<hr>
		<div class="bus-step3 row">
			<h2 class="fs-title">Owner information </h2>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12"><h2 class="fs-title text-left">Business Info </h2></div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[18]['question_id']; ?>
						<label for=""><?php echo $questions[18]['question']; ?></label>
						<input type="text" class="form-control" id="" name="<?php echo $question_id; ?>" placeholder="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[19]['question_id']; ?>
						<label for=""><?php echo $questions[19]['question']; ?></label>
						<input type="text" class="form-control restrictnumber" id="" name="<?php echo $question_id; ?>" placeholder="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-12 text-left">
						<?php $question_id = $questions[20]['question_id']; ?>
						<label for=""> <?php echo $questions[20]['question']; ?></label>
						<input type="text" class="form-control restrictnumber" id="" name="<?php echo $question_id; ?>" placeholder="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-12 text-left">
						<?php $question_id = $questions[21]['question_id']; ?>
						<label for=""> <?php echo $questions[21]['question']; ?></label>
						<input type="text" class="form-control restrictnumber" id="" name="<?php echo $question_id; ?>" placeholder="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<h2 class="fs-title text-left">Primary Owner</h2>
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[22]['question_id']; ?>
						<label for=""><?php echo $questions[22]['question']; ?></label>
						<input type="text" class="form-control" id="" name="<?php echo $question_id; ?>" placeholder="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[23]['question_id']; ?>
						<label for=""><?php echo $questions[23]['question']; ?></label>
						<input type="text" class="form-control restrictnumber" id="" name="<?php echo $question_id; ?>" placeholder="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[24]['question_id']; ?>
						<label for=""><?php echo $questions[24]['question']; ?></label>
						<input type="text" class="form-control restrictnumber" id=""name="<?php echo $question_id; ?>"  placeholder="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[25]['question_id']; ?>
						<label for=""> <?php echo $questions[25]['question']; ?></label>
						<input type="text" class="form-control restrictnumber" id="" name="<?php echo $question_id; ?>" placeholder="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[26]['question_id']; ?>
						<label for=""><?php echo $questions[26]['question']; ?></label>
						<input type="text" class="form-control" id="" placeholder="" name="<?php echo $question_id; ?>" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[27]['question_id']; ?>
						<label for=""><?php echo $questions[27]['question']; ?></label>
						<input type="text" class="form-control" id="" placeholder="" name="<?php echo $question_id; ?>" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-12 text-left">
						<?php $question_id = $questions[28]['question_id']; ?>
						<label for=""><?php echo $questions[28]['question']; ?></label>
						<textarea type="text" class="form-control" id="" placeholder="" name="<?php echo $question_id; ?>"><?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?></textarea>
					</div>
				</div>	
						<hr>
					
				<div class="row">	
					<div class="col-md-12">
						<h2 class="fs-title text-left">Secondary Owner</h2>
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[29]['question_id']; ?>
						<label for=""><?php echo $questions[29]['question']; ?></label>
						<input type="text" class="form-control" id="" name="<?php echo $question_id; ?>" placeholder="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[30]['question_id']; ?>
						<label for=""><?php echo $questions[30]['question']; ?></label>
						<input type="text" class="form-control restrictnumber" id="" name="<?php echo $question_id; ?>" placeholder="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[31]['question_id']; ?>
						<label for=""><?php echo $questions[31]['question']; ?></label>
						<input type="text" class="form-control restrictnumber" id="" name="<?php echo $question_id; ?>" placeholder="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[32]['question_id']; ?>
						<label for=""> <?php echo $questions[32]['question']; ?></label>
						<input type="text" class="form-control restrictnumber" id="" name="<?php echo $question_id; ?>" placeholder="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[33]['question_id']; ?>
						<label for=""><?php echo $questions[33]['question']; ?></label>
						<input type="text" class="form-control" id="" name="<?php echo $question_id; ?>" placeholder="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-6 text-left">
						<?php $question_id = $questions[34]['question_id']; ?>
						<label for=""><?php echo $questions[34]['question']; ?></label>
						<input type="text" class="form-control" id="" name="<?php echo $question_id; ?>" placeholder="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
					</div>
					<div class="form-group col-md-12 text-left">
						<?php $question_id = $questions[35]['question_id']; ?>
						<label for=""><?php echo $questions[35]['question']; ?></label>
						<textarea type="text" class="form-control" id="" name="<?php echo $question_id; ?>" placeholder=""><?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?></textarea>
					</div>
				</div>	
	
				</div>
			</div>
			
		</div>

		<!-- <a href="<?php echo base_url();?>steps/document" class="next action-button" type="button">Next</a> -->
		<button class="next action-button" type="submit" name="submit">Submit</button>
		<!-- <div class="load_div"><i class="fa fa-spinner" aria-hidden="true"></i></div> -->
		<div class="error_message"></div>
	</fieldset>

</form>

 <?php include('footer.php'); ?>
 <script type="text/javascript">
 	$(document).ready(function() {
 		var url = window.location.href;
 		if (url.indexOf('business') > 0) {
 			$('.pagesteps-links li:nth-child(3)').addClass('active').siblings().removeClass('active');
		}
 	});
 	
 	
 	
 	
 	$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='step3form']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      '26': "required",
      
      
       '30': "required",
        '31': "required",
         '32': "required",
          '33': "required",
           34: {
             required: true,
           },
           
          
           '36': "required",
          '37': "required",
         
           '40': "required",
          '41': "required",
          
          '42': "required",
          '43': "required",
           //'44': "required",
           '45': "required",
           /*'46': "required",
           '47': "required",*/
           '48': "required",
           
           '49': "required",
           //'50': "required",
           '51': "required",
             '52': {
     required: true,
      digits: true,
       
    },
    
      '53': {
      digits: true,
    },
           //'53': "required",
           '54': "required",
           /*'55': "required",
           '56': "required",
           '57': "required",
           '58': "required",
           '59': "required",
           '60': "required",
           '61': "required",*/
     },
    
    errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.btn-group') );
                
            }
            else 
            { // This is the default behavior 
                error.insertAfter( element );
            }
         },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
        var count=0;
        
         if(!$(".legal_struct").is(":checked")) {
   
           $("#legal_struct").css("display","block");
           count++;
       }
       
        if(!$("input[name='38[]']:checked").is(":checked")) {
        $("#bs3owned").css("display","block");
           count++;
       }
       
       
       if(!$("input[name='39']:checked").is(":checked")) {
        $("#bs3facility").css("display","block");
           count++;
       }
       
        
       
       if(count==0){
        submit_form();
       }
       
     // form.submit();
    }
  });
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
 	

// 	$(document).ready(function() {
//$('form#step3form').on('submit', function(e) {
       // e.preventDefault();
       function submit_form(){
        $('.load_div').css('display','block');
        var form = $('form#step3form').serialize();
        console.log(form);
        $.ajax({
            type: 'post',
            url: '<?php echo base_url();?>steps/addstep3',
            data: form,
            success: function(data) {
                var obj = JSON.parse(data);
                //console.log(data);
                if (obj.status == 'success') {
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
                }
            }
        });
       }

   // });
//});
    
    
$(document).ready(function () {
	subClassification();
});

function subClassification(){
    $('#child_cate').html('');
    var cat_id = $('#cate_one').val();
    
       $.ajax({
        type: 'post',
        url: '<?php echo base_url();?>steps/get_subcategories_for_cat/'+cat_id,
        success: function(data) {
            var obj = JSON.parse(data);
            var res = '';
               $.each(obj.all_subcategories, function(k, v){
                 $('<option></option>').val(v.sub_id).text(v.sub_name)
		            .appendTo($('#child_cate'));
		        });
             
        }

    });
};

 </script>
 
 <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/additional-methods.js"></script>

</body>
</html>