<!DOCTYPE html>
<html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<head>
    
	<title>Steps Briskloanz </title>
	 <?php include('top.php'); ?>
	<style>
		.radio-group.step02 label{
			display: table;
			height: 80px;
		}
		.radio-group.step02 label span {
			display: table-cell;
    		vertical-align: middle;
		}
		.error{
		    color:red;
		    display:none;
		}
	</style>
	
</head>
<body>
 <?php include('step_clheader.php'); ?>

<div>
<?php //echo '<pre>'; print_r($questions); echo '</pre>';?>
<!-- multistep form -->
<?php //print_r($_SESSION); ?>
<form class="msform" id="step1form">
  <!-- progressbar -->
  <!-- <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul> -->
  <!-- fieldsets -->
  <fieldset>
	<div class="step1">
		<h2 class="fs-title"><?php echo $questions[0]['question'];?></h2>
		<div class="input-group">
			<?php $question_id = $questions[0]['question_id']; ?>
			<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
			<input type="number" placeholder="Please enter a valid dollar amount" class="form-control numb restrictnumber" name="<?php echo $question_id; ?>" id="bs11amount" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
		
		</div>
			<span id="bs1amount" class="error">This field is required.</span>
	</div>	
	<hr>
	<div class="step3">	
     	 <h2 class="fs-title"><?php echo $questions[1]['question']; ?></h2>
   		 <div class="form-inline">		
	     	<div class="form-group">
	     		<?php 
	     			$question_id = $questions[1]['question_id']; 

	     			$js = 'id="month_sec" class="form-control" ';
                  	$options = array(
                  						''			=> 'Select',
                  						'January'	=> 'January',
                  						'February'	=> 'February',
                  						'March'		=> 'March',
                  						'April'		=> 'April',
                  						'May'		=> 'May',
                  						'June'		=> 'June',
                  						'July'		=> 'July',
                  						'August'	=> 'August',
                  						'September' => 'September',
                  						'October' 	=> 'October',
                  						'November' 	=> 'November',
                  						'December' 	=> 'December',
              						);
                    echo form_dropdown($question_id, $options,set_value($question_id,$answers[$question_id]['answer']),$js );
     			?>  
		    	<!-- <select class="form-control" id="month_sec" name="<?php echo $question_id; ?>" required>
		      		<option value="" disabled="" selected>Select </option>
		        	<option>January </option>
		        	<option>February</option>
		        	<option>March</option>
		        	<option>April</option>
		        	<option>May</option>
		        	<option>June</option>
		        	<option>July</option>
		        	<option>August</option>
		        	<option>September</option>
		        	<option>October</option>
		        	<option>November</option>
		        	<option>December</option>

		      </select> -->
		      <span id="bs1month" class="error">This field is required.</span>
		  </div>
		  
		  <div class="form-group">
		  	<?php $question_id = $questions[2]['question_id']; ?>    
	     	<input type='text' class="form-control nub restrictnumber" maxlength="4" name="<?php echo $question_id; ?>" placeholder="Enter year" id="bs11year" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" />
	     	<span id="bs1year" class="error">This field is required.</span>
	     </div>	
	    </div>
		    
    	<!-- <a href="javascript:void(0);" type="button" name="next" class="next" value="Next">(Don't Remember Exact Date) </a> -->
    </div>

    <input type="button" id="b1form" onclick="b_form1(this.id)" name="next" class="next action-button" value="Next" />
  </fieldset>

  <fieldset class="">
  	<div class="step02">
    	<h2 class="fs-title"><?php echo $questions[3]['question']; ?></h2>
		<div class="form-group text-left">
			<label for="sel1">Select list (select one):</label>
			<?php 
				$question_id = $questions[3]['question_id']; 

				$js = 'id="sel1" class="form-control" ';
				$options = array(
          						'' => 'Select',
          						'Expansion of business'	=> 'Expansion of business',
          						'Working Capital- Line of credit' => 'Working Capital- Line of credit',
          						'Invoice Financing' => 'Invoice Financing',
          						'Merchant Cash Advance' => 'Merchant Cash Advance',
          						'Equipment financing' => 'Equipment financing',
          						'Small Business loans' => 'Small Business loans',
          						'Mortgage Loan' => 'Mortgage Loan',
          						'Paying Payroll' => 'Paying Payroll',
          						'Professional Loan' => 'Professional Loan',
          						'Home Loan' => 'Home Loan',
          						'Personal Loan' => 'Personal Loan',
          						'Finance a car' => 'Finance a car',
          						'Buy out a business' => 'Buy out a business',
          						'Marketing and Promotions' 	=> 'Marketing and Promotions',
          						'other_show' => 'Other',
      						);
            	echo form_dropdown($question_id, $options,set_value($question_id,$answers[$question_id]['answer']),$js );
			?>  
			
			<!-- <select class="form-control" id="sel1" name="<?php echo $question_id; ?>">
				<option disabled="" selected="">Select </option>
			  	<option>Expansion of business</option>
			  	<option>Working Capital- Line of credit</option>
			  	<option>Invoice Financing</option>
				<option> Merchant Cash Advance </option>
				<option>Equipment financing </option>
				<option>Small Business loans</option>
				<option>Mortgage Loan</option>
				<option>Paying Payroll</option>
				<option>Professional Loan</option>
				<option>Home Loan</option>
				<option>Personal Loan</option>
				<option>Finance a car</option>
				<option>Buy out a business</option>
				<option>Marketing and Promotions</option>
				<option value="other_show"> Other</option>
				  
			</select> -->
			
			<div class="other_field mt-15">
				<?php $question_id = $questions[4]['question_id']; ?>  
				<textarea class="form-control" rows="3" id="comment1" name="<?php echo $question_id; ?>"><?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?></textarea>
			</div>
				<span id="bs2list" class="error">This field is required.</span>
		</div>	
        
     </div>	
	 <hr>
     <div class="step2">
     	<h2 class="fs-title"><?php echo $questions[5]['question']; ?></h2>
        <div class="radio-group ">
	        <div class="btn-group" data-toggle="buttons">
	        	<?php 
	        		$question_id = $questions[5]['question_id'];
	        		$answer = $answers[$question_id]['answer'];
        		?>  
	            <label class="btn btn-default radio-btn radio-left <?php echo $answer == '499 or below' ? 'active' : '' ?>">
		            <input type="radio" onchange="credit_score();" class="creditscore" name="<?php echo $question_id;?>" value="499 or below" <?php echo $answer == '499 or below' ? 'checked' : '' ?> /> 499 or below
		        </label>
		        <label class="btn btn-default radio-btn <?php echo $answer == '500- 599' ? 'active' : '' ?>">
		            <input type="radio" onchange="credit_score();" class="creditscore" name="<?php echo $question_id;?>" value="500- 599" <?php echo $answer == '500- 599' ? 'checked' : '' ?> />500- 599
		        </label> 
		        <label class="btn btn-default radio-btn <?php echo $answer == '600-649' ? 'active' : '' ?>">
		            <input type="radio" onchange="credit_score();" class="creditscore" name="<?php echo $question_id;?>" value="600-649" <?php echo $answer == '600-649' ? 'checked' : '' ?> />600-649
		        </label> 
		        <label class="btn btn-default radio-btn <?php echo $answer == '650-679' ? 'active' : '' ?>">
		            <input type="radio" onchange="credit_score();" class="creditscore" name="<?php echo $question_id;?>" value="650-679" <?php echo $answer == '650-679' ? 'checked' : '' ?> />650-679
		        </label>
		        <label class="btn btn-default radio-btn <?php echo $answer == '680-719' ? 'active' : '' ?>">
		            <input type="radio" onchange="credit_score();" class="creditscore" name="<?php echo $question_id;?>" value="680-719" <?php echo $answer == '680-719' ? 'checked' : '' ?> />680-719
		        </label>
		        <label class="btn btn-default radio-btn <?php echo $answer == '720 and above' ? 'active' : '' ?>">
		            <input type="radio" onchange="credit_score();" class="creditscore" name="<?php echo $question_id;?>" value="720 and above" <?php echo $answer == '720 and above' ? 'checked' : '' ?> />720 and above
		        </label>
	     	</div>  
     	</div>
     		<span id="bs2cscore" class="error">This field is required.</span>
	</div>
	<hr>
	<div class="step4 radio-group">
		<h2 class="fs-title"><?php echo $questions[6]['question']; ?> </h2>
		<div class="">
				<div class="btn-group" data-toggle="buttons">
				<?php 
					$question_id = $questions[6]['question_id']; 
					$answer = $answers[$question_id]['answer'];
				?>  
					 <label class="btn btn-default radio-btn radio-left <?php echo $answer == '$ 0' ? 'active' : '' ?>">
						<input type="radio" class="q156" onchange="turnover();" name="<?php echo $question_id;?>" value="$ 0" <?php echo $answer == '$ 0' ? 'checked' : '' ?> /> $ 0
					</label>
					<label class="btn btn-default radio-btn <?php echo $answer == '$ 1k-5k' ? 'active' : '' ?>">
						<input type="radio" class="q156" onchange="turnover();" name="<?php echo $question_id;?>" value="$ 1k-5k" <?php echo $answer == '$ 1k-5k' ? 'checked' : '' ?> /> $ 1k-5k
					</label> 
					<label class="btn btn-default radio-btn <?php echo $answer == '$ 6k-10k' ? 'active' : '' ?>">
						<input type="radio" class="q156" onchange="turnover();" name="<?php echo $question_id;?>" value="$ 6k-10k" <?php echo $answer == '$ 6k-10k' ? 'checked' : '' ?> /> $ 6k-10k
					</label> 
					<label class="btn btn-default radio-btn <?php echo $answer == '$ 11k- 15k' ? 'active' : '' ?>">
						<input type="radio" class="q156" onchange="turnover();"" name="<?php echo $question_id;?>" value="$ 11k- 15k" <?php echo $answer == '$ 11k- 15k' ? 'checked' : '' ?> /> $ 11k- 15k
					</label>
					<label class="btn btn-default radio-btn <?php echo $answer == '$ 16k - 20k' ? 'active' : '' ?>">
						<input type="radio" class="q156" onchange="turnover();" name="<?php echo $question_id;?>" value="$ 16k - 20k" <?php echo $answer == '$ 16k - 20k' ? 'checked' : '' ?> /> $ 16k - 20k
					</label>
					<label class="btn btn-default radio-btn <?php echo $answer == '$ 21k - 50k' ? 'active' : '' ?>">
						<input type="radio" class="q156" onchange="turnover();" name="<?php echo $question_id;?>" value="$ 21k - 50k" <?php echo $answer == '$ 21k - 50k' ? 'checked' : '' ?> /> $ 21k - 50k
					</label>
					<label class="btn btn-default radio-btn <?php echo $answer == '$ 51k - 70k' ? 'active' : '' ?>">
						<input type="radio" class="q156" onchange="turnover();" name="<?php echo $question_id;?>" value="$ 51k - 70k" <?php echo $answer == '$ 51k - 70k' ? 'checked' : '' ?> /> $ 51k - 70k
					</label>
					<label class="btn btn-default radio-btn <?php echo $answer == '$ 71k - 100k' ? 'active' : '' ?>">
						<input type="radio" class="q156" onchange="turnover();" name="<?php echo $question_id;?>" value="$ 71k - 100k" <?php echo $answer == '$ 71k - 100k' ? 'checked' : '' ?> /> $ 71k - 100k
					</label>
				 </div>  
				 <span id="bs2turnover" class="error">This field is required.</span>
			 </div>
	</div>  
	<hr>
	<div class="step5 radio-group">
		<h2 class="fs-title"><?php echo $questions[7]['question']; ?></h2>
		<div class="">
			<div class="btn-group" data-toggle="buttons">
			<?php 
				$question_id = $questions[7]['question_id']; 
				$answer = $answers[$question_id]['answer'];
			?>  
				 <label class="btn btn-default radio-btn radio-left <?php echo $answer == '$ 0' ? 'active' : '' ?>">
					<input type="radio" class="revenue" name="<?php echo $question_id;?>" value="$ 0" <?php echo $answer == '$ 0' ? 'checked' : '' ?> /> $ 0
				</label>
				<label class="btn btn-default radio-btn <?php echo $answer == '$ 1k-50k' ? 'active' : '' ?>">
					<input type="radio" class="revenue" name="<?php echo $question_id;?>" value="$ 1k-50k" <?php echo $answer == '$ 1k-50k' ? 'checked' : '' ?> /> $ 1k-50k
				</label> 
				<label class="btn btn-default radio-btn <?php echo $answer == '$ 50k-100k' ? 'active' : '' ?>">
					<input type="radio" class="revenue" name="<?php echo $question_id;?>" value="$ 50k-100k" <?php echo $answer == '$ 50k-100k' ? 'checked' : '' ?> /> $ 50k-100k
				</label> 
				<label class="btn btn-default radio-btn <?php echo $answer == '$ 100k- 150k' ? 'active' : '' ?>">
					<input type="radio" class="revenue" name="<?php echo $question_id;?>" value="$ 100k- 150k" <?php echo $answer == '$ 100k- 150k' ? 'checked' : '' ?> /> $ 100k- 150k
				</label>
				<label class="btn btn-default radio-btn <?php echo $answer == '$ 150k - 200k' ? 'active' : '' ?>">
					<input type="radio" class="revenue" name="<?php echo $question_id;?>" value="$ 150k - 200k" <?php echo $answer == '$ 150k - 200k' ? 'checked' : '' ?> /> $ 150k - 200k
				</label>
				<label class="btn btn-default radio-btn <?php echo $answer == '$ 200k - 500k' ? 'active' : '' ?>">
					<input type="radio" class="revenue" name="<?php echo $question_id;?>" value="$ 200k - 500k" <?php echo $answer == '$ 200k - 500k' ? 'checked' : '' ?> /> $ 200k - 500k
				</label>
				<label class="btn btn-default radio-btn <?php echo $answer == '$ 500k - 1m' ? 'active' : '' ?>">
					<input type="radio" class="revenue" name="<?php echo $question_id;?>" value="$ 500k - 1m" <?php echo $answer == '$ 500k - 1m' ? 'checked' : '' ?> /> $ 500k - 1m
				</label>
				<label class="btn btn-default radio-btn <?php echo $answer == 'More than 1mn $' ? 'active' : '' ?>">
					<input type="radio" class="revenue" name="<?php echo $question_id;?>" value="More than 1mn $" <?php echo $answer == 'More than 1mn $' ? 'checked' : '' ?> /> More than 1mn $
				</label>
			 </div>  
			 <span id="bs2revenue" class="error">This field is required.</span>
		 </div>
		
	</div>
	<hr>
	<div class="row step6">
		<h2 class="fs-title"><?php echo $questions[8]['question']; ?> </h2>
		<?php 
			$question_id = $questions[8]['question_id']; 
			$answer = $answers[$question_id]['answer'];
			$answerArr = explode(",", $answer);
		?>
		<div class="check-box col-md-6">  
				<input class="magic-checkbox" type="checkbox" name="<?php echo $question_id; ?>[]" id="step6-1" value="Amount" <?php echo in_array("Amount", $answerArr) ? 'checked' : NULL; ?> >				
				<label for="step6-1">Amount</label>
		</div>
		<div class="check-box col-md-6">
			<input class="magic-checkbox" type="checkbox" name="<?php echo $question_id; ?>[]" id="step6-2" value="Speed" <?php echo in_array("Speed", $answerArr) ? 'checked' : NULL; ?> >
			<label for="step6-2">Speed</label>
		</div>
		<div class="check-box col-md-6">
			<input class="magic-checkbox" type="checkbox" name="<?php echo $question_id; ?>[]" id="step6-3" value="Low APR" <?php echo in_array("Low APR", $answerArr) ? 'checked' : NULL; ?> >
			<label for="step6-3">Low APR</lab el>
		</div>
		<div class="check-box col-md-6">
			<input class="magic-checkbox" type="checkbox" name="<?php echo $question_id; ?>[]" id="step6-4" value="Fewer Documentation" <?php echo in_array("Fewer Documentation", $answerArr) ? 'checked' : NULL; ?> >
			<label for="step6-4">Fewer Documentation</label>
		</div>
	</div>
		 <span id="bs2imp" class="error">This field is required.</span>
	<hr>
	<div class="row step7">
		<h2 class="fs-title"><?php echo $questions[9]['question']; ?> </h2>
		<?php 
			$question_id = $questions[9]['question_id']; 
			$answer = $answers[$question_id]['answer'];
			$answerArr = explode(",", $answer);
		?>
			<div class="check-box col-md-6">
				<input class="magic-checkbox" type="checkbox" name="<?php echo $question_id; ?>[]" id="step7-1" value="SMEs" <?php echo in_array("SMEs", $answerArr) ? 'checked' : NULL; ?> >
				<label for="step7-1">SMEs</label>
			</div>
			<div class="check-box col-md-6">
				<input class="magic-checkbox" type="checkbox" name="<?php echo $question_id; ?>[]" id="step7-2" value="Retail Consumers" <?php echo in_array("Retail Consumers", $answerArr) ? 'checked' : NULL; ?> >
				<label for="step7-2">Retail Consumers</label>
			</div>
			<div class="check-box col-md-6">
				<input class="magic-checkbox" type="checkbox" name="<?php echo $question_id; ?>[]" id="step7-3" value="Large Corporates" <?php echo in_array("Large Corporates", $answerArr) ? 'checked' : NULL; ?> >
				<label for="step7-3">Large Corporates</label>
			</div>
			<div class="check-box col-md-6">
				<input class="magic-checkbox" type="checkbox" name="<?php echo $question_id; ?>[]" id="step7-4" value="Wholesale or distributor" <?php echo in_array("Wholesale or distributor", $answerArr) ? 'checked' : NULL; ?> >
				<label for="step7-4">Wholesale or distributor</label>
			</div>
			<div class="check-box col-md-6">
				<input class="magic-checkbox" type="checkbox" name="<?php echo $question_id; ?>[]" id="step7-5" value="Public Sector" <?php echo in_array("Public Sector", $answerArr) ? 'checked' : NULL; ?> >
				<label for="step7-5">Public Sector</label>
			</div>
			<div class="check-box col-md-6">
				<input class="magic-checkbox anyother" value="step7other"  type="checkbox" id="step7-6" <?php echo in_array("step7other", $answerArr) ? 'checked' : NULL; ?> >
				<label for="step7-6">Any other</label>
			</div>
			<div class="col-md-12">
				 <div class="step7other">
				 <?php $question_id = $questions[10]['question_id']; ?>
					 <textarea class="form-control" rows="3" id="comment" name="<?php echo $question_id; ?>"><?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?></textarea>
				 </div>
			</div> 
      <span id="bsserve" class="error">This field is required.</span>
	</div>

	<input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" onclick="b_form2(this.id);" id="b2form" name="next" class="next action-button" value="Next" />
  </fieldset>

<!-- have not changed the name -->
  <fieldset class="step8">
    <h2 class="fs-title"><?php echo $questions[11]['question']; ?>  </h2>
	<div class="radio_options">
		<?php 
			$question_id = $questions[11]['question_id']; 
			$answer = $answers[$question_id]['answer'];
		?> 
    	<div class="col-md-6 radio-box ">
			<input type="radio" class="bsaccountant magic-radio options_check"  name="step8"  id="step8-1" value="Accountant" <?php echo $answer == 'Accountant' ? 'checked' : '' ?> >
			<label for="step8-1">Accountant</label>
		</div>
		<div class="col-md-6 radio-box">
			<input type="radio" class=" bsaccountant magic-radio"  name="step8" id="step8-2" value="Business Owner" <?php echo $answer == 'Business Owner' ? 'checked' : '' ?> >
			<label for="step8-2">Business Owner</label>
		</div>
     <span id="bsaccountant" class="error">This field is required.</span>
<!-- name and value not changed due to divs dependancy -->
		<div class="col-md-12 depends">
			<hr>
				<div class="row radio_options">
					<h3 class="fs-title-b"><?php echo $questions[12]['question']; ?></h3>
					<?php 
						$question_id = $questions[12]['question_id']; 
						$answer = $answers[$question_id]['answer'];
					?>
					<div class="col-md-6 radio-box">
						<input type="radio" class="magic-radio anyother bscontected" value="step_me"  name="step8-a" id="step8-3" <?php echo $answer == 'Just me' ? 'checked' : '' ?> >
						<label for="step8-3">Just me </label> 
					</div>
					<div class="col-md-6 radio-box">
						<input type="radio" class="magic-radio anyother bscontected" value="step_client" name="step8-a" id="step8-4" <?php echo $answer == 'I and my client' ? 'checked' : '' ?>>
						<label for="step8-4"> I and my client</label>
					</div>
					
					 <span id="bscontected" class="error">This field is required.</span>
					<div class="col-md-12 step_me radio-target">
						<div class="row">
						<hr>
						 <h2 class="fs-title">Contact information</h2>
							<div class="form-group text-left col-md-6">
								<?php 
									$question_id = $questions[13]['question_id']; 
								?>
								<input type="text" name="<?php echo $question_id; ?>" placeholder="Enter Name" class="form-control" id="name" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
								 <span id="bscontact_name" class="error">This field is required.</span>
							</div>
							<div class="form-group text-left col-md-6">
								<?php $question_id = $questions[14]['question_id']; ?>
								<input type="number" name="<?php echo $question_id; ?>" placeholder="Enter Number" class="form-control numb restrictnumber" id="numb" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
								<span id="bscontact_number" class="error">This field is required.</span>
							</div>
	
							<div class="form-group text-left col-md-6">
								<?php $question_id = $questions[15]['question_id']; ?>
								<input type="email" name="<?php echo $question_id; ?>" class="form-control" id="email" placeholder="Enter email" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
								<span id="bscontact_email" class="error">This field is required.</span>
								<span id="bsvalid_email" class="error">Please enter vaild email.</span>
							</div>
							<div class="clearfix"></div>
						</div>
					 </div>
					 <div class="col-md-12 step_client radio-target">
						<div class="row">
						   <hr>
							<h2 class="fs-title">Client information</h2>
						   <div class="col-md-6">
							   <div class="form-group text-left">
							   		<?php $question_id = $questions[16]['question_id']; ?>
								   <!-- <label for="">Client Name</label> -->
								   <input type="text" name="<?php echo $question_id; ?>" class="form-control" id="bsclient_name1" placeholder="Client Name" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
								   
								   <span id="bsclient_name" class="error">This field is required.</span>
							   </div>
						   </div>
						   <div class="col-md-6">
							   <div class="form-group text-left">
							   		<?php $question_id = $questions[17]['question_id']; ?>
								   <!-- <label for="">Client Phone</label> -->
								   <input type="number" name="<?php echo $question_id; ?>" placeholder="Client Phone" class="form-control phone" id="bsclient_phone1" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
								   <span id="bsclient_phone" class="error">This field is required.</span>
							   </div>
						   </div>
						   <div class="col-md-6">
							   <div class="form-group text-left">
							   		<?php $question_id = $questions[18]['question_id']; ?>
								   <!-- <label for="">Client Email ID</label> -->
								   <input type="email" name="<?php echo $question_id; ?>" placeholder="Client Email ID" class="form-control" id="bsclient_email1" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" >
								    <span id="bsclient_email" class="error">This field is required.</span>
								    <span id="bsclvalid_email" class="error">Please enter vaild email.</span>
							   </div>
						   </div>
						</div>
						
			   </div> 
					
				</div>	
			
		</div>
			
		</div>
	<input type="button" name="previous" class="previous action-button" value="Previous" />
	<button class="next action-button" type="button" onclick="b_form3(this.id);" id="b3form" name="submit">Next</button>
	<!-- <div class="load_div"><i class="fa fa-spinner" aria-hidden="true"></i></div> -->
	<!-- <div class="success_message">This is a msg</div> -->
	<div class="error_message"></div>
	<!-- <a href="<?php echo base_url();?>steps/owner" class="next action-button" type="submit">Next</a> -->
	
    <!--<input type="button" name="next" class="next action-button" value="Next" /> -->
  </fieldset>

</form>
</div>
 <?php include('footer.php'); ?>
<script type="text/javascript">
//	$(document).ready(function() {
		  //  $('form#step1form').on('submit', function(e) {
		  function business_first_form_submit(){
        //e.preventDefault();
        $('.load_div').css('display','block');
        var form = $('form#step1form').serialize();
        $.ajax({
            type: 'post',
            url: '<?php echo base_url();?>steps/addClHome',
            data: form,
            success: function(data) {
        				
                var obj = JSON.parse(data);
                if (obj.status == 'success') {
                  	// $('.success_message').css('display', 'block'); 
                   $('.error_message').css('display', 'none');
                  	// $('.success_message').html(obj.message); 
                    setTimeout(function() {
                    	$('.load_div').css('display','none');
                      	window.location.href='<?php echo base_url();?>steps/clOwner';
                }, 500);
                    
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

//	});
</script>
</body>
</html>