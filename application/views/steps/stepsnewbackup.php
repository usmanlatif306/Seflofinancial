<!DOCTYPE html>
<html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<head>
<title>Steps Seflo Financial </title>
<?php include('top.php'); ?>
<style>
.radio-group.step02 label{
display: table;
height: 80px;
}
.radio-group.step02 label span{
display: table-cell;
vertical-align: middle;
}
.error{
color:red;
display:none;
}
.msform{
	text-align: left !important;
}
</style>
</head>
<body>
<?php include('step_header.php'); ?>
<div>
<!-- multistep form -->

<form class="msform" id="step1form" action="<?php echo base_url();?>steps" method="POST">
<!-- progressbar -->
<!-- <ul id="progressbar">
<li class="active">Account Setup</li>
<li>Social Profiles</li>
<li>Personal Details</li>
</ul> -->
<!-- fieldsets -->
<?php if($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger col-12 alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Error :</strong> <?php echo $this->session->flashdata('error'); ?>
                </div>
              <?php } ?>
              <?php if($this->session->flashdata('success')) { ?>
                <div class="alert alert-success col-12 alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Success :</strong> <?php echo $this->session->flashdata('success'); ?>
                </div>
              <?php } ?>
<fieldset>
<div class="step3">
<div class="form-inline">		
<div class="form-group">
<label for=""><?php echo $questions[0]['question']; ?> *</label>
<?php $question_id = $questions[0]['question_id']; ?>    
<input type='number' class="form-control nub restrictnumber" name="<?php echo $question_id; ?>" placeholder="Enter amount ($)" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" required/>
</div>

<div class="form-group">
<label for=""><?php echo $questions[1]['question']; ?> *</label>
<?php 
$question_id = $questions[1]['question_id']; 
$js = 'id="purpose_sec" class="form-control" ';
$options = array(
'Emergency cash'	=> 'Emergency cash',
'Purchase'	=> 'Purchase',
'Other'		=> 'Other',
);
echo form_dropdown($question_id, $options,set_value($question_id,$answers[$question_id]['answer']),$js );
?>  
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[2]['question']; ?> *</label>
<?php $question_id = $questions[2]['question_id']; 
if(!empty($_SESSION['username'])){
?>
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter name" id="" value="<?php echo $_SESSION['username']; ?>" readonly/>
<?php
}else{
?>
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter name" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" required/>
<?php
}  
?>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[3]['question']; ?> *</label>
<?php $question_id = $questions[3]['question_id']; 
if(!empty($_SESSION['userlastname'])){
?>
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter name" id="" value="<?php echo $_SESSION['userlastname']; ?>" readonly/>
<?php
}else{
?>
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter name" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" required/>
<?php
}  
?>  
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[4]['question']; ?></label>
<?php 
$question_id = $questions[4]['question_id']; 
$js = 'id="gender_sec" class="form-control" ';
$options = array(
'Male'	=> 'Male',
'Female'	=> 'Female',
);
echo form_dropdown($question_id, $options,set_value($question_id,$answers[$question_id]['answer']),$js );
?>
</div>


<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[5]['question']; ?></label>
<?php $question_id = $questions[5]['question_id']; ?>    
<input type='date' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter Date of Birth" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[6]['question']; ?> *</label>
<?php $question_id = $questions[6]['question_id']; 
if(!empty($_SESSION['email'])){
?>
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Email address" id="" value="<?php echo $_SESSION['email']; ?>" readonly/>
<?php
}else{
?>
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Email address" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" required/>
<?php
}  
?>      
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[7]['question']; ?> *</label>
<?php $question_id = $questions[7]['question_id']; 
if(!empty($_SESSION['usermobile'])){
?>
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Phone number" id="" value="<?php echo $_SESSION['usermobile']; ?>" readonly/>
<?php
}else{
?>
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Phone number" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>" required/>
<?php
}  
?>    
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[8]['question']; ?></label>
<?php 
$question_id = $questions[8]['question_id']; 
$js = 'id="marital_sec" class="form-control" ';
$options = array(
'Single'	=> 'Single',
'Married'	=> 'Married',
'Divorced'	=> 'Divorced',
);
echo form_dropdown($question_id, $options,set_value($question_id,$answers[$question_id]['answer']),$js );
?>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[9]['question']; ?></label>
<?php $question_id = $questions[9]['question_id']; ?>    
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter Street Address" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[10]['question']; ?></label>
<?php $question_id = $questions[10]['question_id']; ?>    
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter City" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[11]['question']; ?></label>
<?php 
$question_id = $questions[11]['question_id']; 
$js = 'id="state_sec" class="form-control" ';
$options = array(
'Alabama'  => 'Alabama',
'Alaska' => 'Alaska',
'Arizona'  => 'Arizona',
'Arkansas'  => 'Arkansas',
'California'  => 'California',
'Colorado'  => 'Colorado',
'Connecticut'  => 'Connecticut',
'Delaware'  => 'Delaware',
'District of Columbia'  => 'District of Columbia',
'Florida'  => 'Florida',
'Georgia'  => 'Georgia',
'Hawaii'  => 'Hawaii',
'Idaho'  => 'Idaho',
'Illinois'  => 'Illinois',
'Indiana'  => 'Indiana',
'Iowa'  => 'Iowa',
'Kansas'  => 'Kansas',
'Kentucky'  => 'Kentucky',
'Louisiana'  => 'Louisiana',
'Maine'  => 'Maine',
'Maryland'  => 'Maryland',
'Massachusetts'  => 'Massachusetts',
'Michigan'  => 'Michigan',
'Minnesota'  => 'Minnesota',
'Mississippi'  => 'Mississippi',
'Missouri'  => 'Missouri',
'Montana'  => 'Montana',
'Nebraska'  => 'Nebraska',
'Nevada'  => 'Nevada',
'New Hampshire'  => 'New Hampshire',
'New Jersey'  => 'New Jersey',
'New Mexico'  => 'New Mexico',
'New York'  => 'New York',
'North Carolina'  => 'North Carolina',
'North Dakota'  => 'North Dakota',
'Ohio'  => 'Ohio',
'Oklahoma'  => 'Oklahoma',
'Oregon'  => 'Oregon',
'Pennsylvania'  => 'Pennsylvania',
'Rhode Island'  => 'Rhode Island',
'South Carolina'  => 'South Carolina',
'South Dakota'  => 'South Dakota',
'Tennessee'  => 'Tennessee',
'Texas'  => 'Texas',
'Utah'  => 'Utah',
'Vermont'  => 'Vermont',
'Virginia'  => 'Virginia',
'Washington'  => 'Washington',
'West Virginia'  => 'West Virginia',
'Wisconsin'  => 'Wisconsin',
'Wyoming'  => 'Wyoming',
);
echo form_dropdown($question_id, $options,set_value($question_id,$answers[$question_id]['answer']),$js );
?>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[12]['question']; ?></label>
<?php $question_id = $questions[12]['question_id']; ?>    
<input type='number' class="form-control" name="<?php echo $question_id; ?>" placeholder="Zip Code" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[13]['question']; ?></label>
<?php 
$question_id = $questions[13]['question_id']; 
$js = 'id="time_sec" class="form-control" ';
$options = array(
'3 or more months'	=> '3 or more months',
'More than 1 year'	=> 'More than 1 year',
'2 or more years'	=> '2 or more years',
);
echo form_dropdown($question_id, $options,set_value($question_id,$answers[$question_id]['answer']),$js );
?>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[14]['question']; ?></label>
<?php 
$question_id = $questions[14]['question_id']; 
$js = 'id="residence_type" class="form-control" ';
$options = array(
'Rent'	=> 'Rent',
'Own'	=> 'Own',
'Other'	=> 'Other',
);
echo form_dropdown($question_id, $options,set_value($question_id,$answers[$question_id]['answer']),$js );
?>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[15]['question']; ?></label>
<?php $question_id = $questions[15]['question_id']; ?>    
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Monthly rent/mortgage" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[16]['question']; ?></label>
<?php $question_id = $questions[16]['question_id']; ?>    
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Social Security Number" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[17]['question']; ?></label>
<?php 
$question_id = $questions[17]['question_id']; 
$js = 'id="employment_status" class="form-control" ';
$options = array(
'Full Time Employee'	=> 'Full Time Employee',
'Part Time Employee'	=> 'Part Time Employee',
'Contractor Employee'	=> 'Contractor Employee',
);
echo form_dropdown($question_id, $options,set_value($question_id,$answers[$question_id]['answer']),$js );
?>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[18]['question']; ?></label>
<?php $question_id = $questions[18]['question_id']; ?>    
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter name" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[19]['question']; ?></label>
<?php $question_id = $questions[19]['question_id']; ?>    
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter address" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>


<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[20]['question']; ?></label>
<?php 
$question_id = $questions[20]['question_id']; 
$js = 'id="current_employee_sec" class="form-control" ';
$options = array(
'3 or more months'	=> '3 or more months',
'More than 1 year'	=> 'More than 1 year',
'2 or more years'	=> '2 or more years',
);
echo form_dropdown($question_id, $options,set_value($question_id,$answers[$question_id]['answer']),$js );
?>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[21]['question']; ?></label>
<?php 
$question_id = $questions[21]['question_id']; 
$js = 'id="pay_type" class="form-control" ';
$options = array(
'Hourly'	=> 'Hourly',
'Annual salary'	=> 'Annual salary',
'Other'	=> 'Other',
);
echo form_dropdown($question_id, $options,set_value($question_id,$answers[$question_id]['answer']),$js );
?>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[22]['question']; ?></label>
<?php 
$question_id = $questions[22]['question_id']; 
$js = 'id="pay_type_often" class="form-control" ';
$options = array(
'Every week'	=> 'Every week',
'Every other week(bi-weekly)'	=> 'Every other week(bi-weekly)',
'Once per month'	=> 'Once per month',
);
echo form_dropdown($question_id, $options,set_value($question_id,$answers[$question_id]['answer']),$js );
?>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[23]['question']; ?></label>
<?php 
$question_id = $questions[23]['question_id']; 
$js = 'id="week_day" class="form-control" ';
$options = array(
'Monday'	=> 'Monday',
'Tuesday'	=> 'Tuesday',
'Wednesday'	=> 'Wednesday',
'Thursday'	=> 'Thursday',
'Friday'	=> 'Friday',
'Saturday'	=> 'Saturday',
'Sunday'	=> 'Sunday',
);
echo form_dropdown($question_id, $options,set_value($question_id,$answers[$question_id]['answer']),$js );
?>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[24]['question']; ?></label>
<?php $question_id = $questions[24]['question_id']; ?>    
<input type='text' class="form-control nub restrictnumber" name="<?php echo $question_id; ?>" placeholder="Enter number" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[25]['question']; ?></label>
<?php $question_id = $questions[25]['question_id']; ?>    
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Occupation" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[26]['question']; ?></label>
<?php $question_id = $questions[26]['question_id']; ?>    
<input type='text' class="form-control nub restrictnumber" name="<?php echo $question_id; ?>" placeholder="Enter income" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[27]['question']; ?></label>
<?php $question_id = $questions[27]['question_id']; ?>    
<input type='date' class="form-control" name="<?php echo $question_id; ?>" placeholder="Next Pay Date" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[28]['question']; ?></label>
<?php 
$question_id = $questions[28]['question_id']; 
$js = 'id="account_type" class="form-control" ';
$options = array(
'Checking Account'	=> 'Checking Account',
'Saving Account'	=> 'Saving Account',
);
echo form_dropdown($question_id, $options,set_value($question_id,$answers[$question_id]['answer']),$js );
?>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[29]['question']; ?></label>
<?php $question_id = $questions[29]['question_id']; ?>    
<input type='number' class="form-control nub restrictnumber" name="<?php echo $question_id; ?>" placeholder="Routing number" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[30]['question']; ?></label>
<?php $question_id = $questions[30]['question_id']; ?>    
<input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter Bank Name" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[31]['question']; ?></label>
<?php $question_id = $questions[31]['question_id']; ?>    
<input type='number' class="form-control nub restrictnumber" name="<?php echo $question_id; ?>" placeholder="Account Number" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>

<div class="form-group" style="margin-top:30px;">
<label for=""><?php echo $questions[32]['question']; ?></label>
<?php $question_id = $questions[32]['question_id']; ?>    
<input type='number' class="form-control nub restrictnumber" name="<?php echo $question_id; ?>" placeholder="Confirm account number" id="" value="<?php echo $answers[$question_id]['answer']?$answers[$question_id]['answer']:''; ?>"/>
</div>


</div>
</div>
<button type="submit" id="b1form" name="next" class="next action-button">Apply Now</button>
</fieldset>
</form>
</div>
<?php include('footer.php'); ?>
</body>
</html>