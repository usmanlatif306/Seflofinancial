<!DOCTYPE html>
<?php

?>
<html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<head>
	<title>Home Loan | Seflo Financial </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="https://www.seflofinancial.com/wp-content/uploads/2023/01/favicon-150x150.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/steps/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/steps/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/steps/css/steps.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/steps/css/steps-comon.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

<header>
	<nav class="navbar">
		<div class="container">
		  <div class="navbar-header">
			<a class="navbar-brand" href="https://seflofinancial.com/"><img src="https://www.seflofinancial.com/wp-content/uploads/2023/01/Seflofinanciallogo2.png" style="height:66px;"></a>
		  </div>
		  <!-- <ul class="nav navbar-nav">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">Page 1</a></li>
			<li><a href="#">Page 2</a></li>
		  </ul> -->
		 
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
					<li class="active"><a href="home-loan.html">Home Loan</a></li>
				</ul>
			</div>
		</div>
	</div>	
</header>
    <div class="col-md-3"></div>
    <div class="col-md-6" id="success_message" style="display: none;">
        <h3 class="text-center mb-15 alert alert-success">Data saved successfully</h3>
    </div>
    <div class="col-md-3"></div>

<div>

<!-- multistep form -->
<form class="msform" id="homeloanform">
  <!-- progressbar -->
  <!-- <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul> -->
  <!-- fieldsets -->
  <fieldset>
        <div class="step2">
            <div class="row">

                <div class="col-md-12">
                        <h3 class="text-center mb-15">Home Loan</h3>
                </div>
                <div class="col-md-6">
                  
                    
                    <div class="form-group text-left">
                        <label for=""><?php echo $questions[0]['question'];?></label>
                        <?php 
                            $question_id = $questions[0]['question_id']; 

                            $js = 'id="month_sec" class="form-control" ';
                            $options = array(
                                                ''          => 'Select',
                                                'New Home'   => 'New Home',
                                                'Home refinance'  => 'Home refinance'
                                            );
                            echo form_dropdown($question_id, $options,'',$js );
                        ?> 	
                        <span id="smonth_sec" class="error">This field is required.</span>
                    </div>
                     
                    
                </div>

                <div class="col-md-6">
                    
                    
                    <div class="form-group text-left">
                        <!-- <label for=""> What type of property you are purchasing? </label> -->
                        <label for=""><?php echo $questions[1]['question'];?></label>
                        <?php 
                            $question_id = $questions[1]['question_id']; 

                            $js = 'id="month_sec2" class="form-control" ';
                            $options = array(
                                                '' => 'Select',
                                                'Single family home' => 'Single family home',
                                                'Multi family home' => 'Multi family home',
                                                'Townhome' => 'Townhome',
                                                'Flat' => 'Flat',
                                            );
                            echo form_dropdown($question_id, $options,'',$js );
                        ?>
                        <span id="smonth_sec2" class="error">This field is required.</span>
                    </div>
                    
                </div>
                
                <div class="col-md-6">
                                         
                    <div class="form-group text-left">
                        <!-- <label>How this property will be used?  </label> -->
                        <label><?php echo $questions[2]['question'];?></label>
                        <?php 
                            $question_id = $questions[2]['question_id']; 

                            $js = 'id="month_sec3" class="form-control" ';
                            $options = array(
                                                '' => 'Select',
                                                'Primary use' => 'Primary use',
                                                'Secondary use' => 'Secondary use',
                                                'Rental purpose' => 'Rental purpose'
                                            );
                            echo form_dropdown($question_id, $options,'',$js );
                        ?>
                        <span id="smonth_sec3" class="error">This field is required.</span>
                    </div>
                     
                </div>

                <div class="col-md-6">
                  
                    <div class="form-group text-left">
                            <!-- <label for="">Name of state in which property to be purchased? </label> -->
                            <?php $question_id = $questions[3]['question_id']; ?> 
                            <label for=""><?php echo $questions[3]['question'];?></label> 
                            <input type="text" value="<?php echo @$answer[4]['answer']; ?>" class="form-control" id="month_sec4" name="<?php echo $question_id; ?>" placeholder="">
                             <span id="smonth_sec4" class="error">This field is required.</span>
                    </div>
                </div>

                <div class="col-md-6">
                   
                    <div class="form-group text-left">
                        <!-- <label for="">Have you already funded any home ? </label> -->
                        <?php $question_id = $questions[4]['question_id']; ?>
                        <label for=""><?php echo $questions[4]['question'];?></label>
                        <input type="text" class="form-control" value="<?php echo @$answer[5]['answer']; ?>" id="month_sec5" name="<?php echo $question_id; ?>" placeholder="">
                        <span id="smonth_sec5" class="error">This field is required.</span>
                    </div>
                    
                </div>

                <div class=" col-md-6">
                       
                        <div class="form-group text-left">
                            <!-- <label>When do you want to buy ?</label> -->
                            <label><?php echo $questions[5]['question'];?></label>
                            <?php 
                                $question_id = $questions[5]['question_id']; 

                                $js = 'id="month_sec6" class="form-control" ';
                                $options = array(
                                                    '' => 'Select',
                                                    'Immediately' => 'Immediately',
                                                    'Comparing options' => 'Comparing options',
                                                    'Within next few months' => 'Within next few months'
                                                );
                                echo form_dropdown($question_id, $options,'',$js );
                            ?>
                            <span id="smonth_sec6" class="error">This field is required.</span>
                        </div> 
                        
                    </div>

             </div>       
           </div>
	


    <input type="button" name="next" onclick="home_loan_form1(this.id);" id="homeloan1form" class="next action-button" value="Next" />
  </fieldset>

  <fieldset class="">
        <div class="row">
            <div class="col-md-6">
                <div class="step02">
                
                    
                    <div class="form-group text-left">    
                        <!-- <label>What is estimated purchase price ?</label> -->
                        <?php $question_id = $questions[6]['question_id']; ?>
                        <label><?php echo $questions[6]['question'];?></label>
                            <input type='text' value="<?php echo @$answer[7]['answer']; ?>" id="sel" name="<?php echo $question_id; ?>" class="form-control" maxlength="" />
                             <span id="ssel" class="error">This field is required.</span>
                        </div>	
                        
                    
                </div>	
                <hr>
            </div>
            <div class="col-md-6">
                <div class="step2">
                    
                    <div class="form-group text-left">
                        <!-- <label for="sel1">What is % down payment ?</label> -->
                        <?php $question_id = $questions[7]['question_id']; ?>
                        <label for="sel1"><?php echo $questions[7]['question'];?></label>
                        <select class="form-control" id="sel2" name="<?php echo $question_id; ?>" >
                            <option disabled="" selected="">Select </option>
                                <option <?php if(@$answer[8]['answer']==10){ ?> selected <?php } ?> value="10">10</option>
                                <option <?php if(@$answer[8]['answer']==20){ ?> selected <?php } ?> value="20">20</option>
                                <option <?php if(@$answer[8]['answer']==30){ ?> selected <?php } ?> value="30">30</option>
                                <option <?php if(@$answer[8]['answer']==40){ ?> selected <?php } ?> value="40">40</option>
                        </select>
                         <span id="ssel2" class="error">This field is required.</span>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-md-6">     
                <div class="step4">
                    
                    <div class="form-group text-left">
                        <!-- <label for="sel1">What is combined household income ?</label> -->
                        <?php $question_id = $questions[8]['question_id']; ?>
                        <label for="sel1"><?php echo $questions[8]['question'];?></label>
                        <select class="form-control" id="sel3" name="<?php echo $question_id; ?>" >
                            <option  disabled="" selected="">Select </option>
                            <option <?php if(@$answer[9]['answer']=="Less than $500"){ ?> selected <?php } ?> value="Less than $500">Less than $500</option>
                            <option <?php if(@$answer[9]['answer']=="Less than $1000"){ ?> selected <?php } ?> value="Less than $1000">Less than $1000</option>
                            <option <?php if(@$answer[9]['answer']=="Less than $2000"){ ?> selected <?php } ?> value="Less than $2000">Less than $2000</option>
                            <option <?php if(@$answer[9]['answer']=="Less than $5000"){ ?> selected <?php } ?> value="Less than $5000">Less than $5000</option>
                            <option <?php if(@$answer[9]['answer']=="More than $5000"){ ?> selected <?php } ?> value="More than $5000">Less than $5000</option>
                        </select>
                        <span id="ssel3" class="error">This field is required.</span>
                        
                    </div>
                </div>  
               
            </div>
            <div class="col-md-6"> 
                <div class="step3">	
                        <div class="form-group text-left">    
                            <!-- <label>If yes, how long ago it was ?</label> -->
                            <?php $question_id = $questions[9]['question_id']; ?>
                            <label><?php echo $questions[9]['question'];?></label>
                            <input type='text' value="<?php echo @$answer[10]['answer']; ?>" id='sel4' name="<?php echo $question_id; ?>" class="form-control" maxlength="" />
                            <span id="ssel4" class="error">This field is required.</span>
                        </div>	
                </div>
            </div>      
        </div>    
        <hr>    
	<div class="step5 radio-group">
        <!-- <h2 class="fs-title">What is Your Employment Status ? </h2> -->
        <?php $question_id = $questions[10]['question_id']; ?>
		<h2 class="fs-title"><?php echo $questions[10]['question'];?></h2>
		<div class="">
			<div class="btn-group" data-toggle="buttons">
				 <label class="btn btn-default radio-btn radio-left <?php if(@$answer[12]['answer']==1){ ?> active focus <?php } ?>">
					<input type="radio" <?php if(@$answer[11]['answer']=="1"){ ?> checked <?php } ?> id="emp1" onchange="sel5()" class="sel5" name="<?php echo $question_id; ?>" value="1" /> Self Employed
				</label>
				<label class="btn btn-default radio-btn <?php if(@$answer[12]['answer']==2){ ?> active focus <?php } ?>">
					<input type="radio" <?php if(@$answer[11]['answer']=="2"){ ?> checked <?php } ?> id="emp2" onchange="sel5()" class="sel5" name="<?php echo $question_id; ?>" value="2" /> Salaried
				</label> 
				<label class="btn btn-default radio-btn <?php if(@$answer[12]['answer']==3){ ?> active focus <?php } ?>">
					<input type="radio" id="emp3" <?php if(@$answer[11]['answer']=="3"){ ?> checked <?php } ?> onchange="sel5()" class="sel5" name="<?php echo $question_id; ?>" value="3" /> Part Time
				</label> 
				<label class="btn btn-default radio-btn <?php if(@$answer[12]['answer']==4){ ?> active focus <?php } ?>">
					<input type="radio" id="emp4" onchange="sel5()" <?php if(@$answer[11]['answer']=="4"){ ?> checked <?php } ?> class="sel5" name="<?php echo $question_id; ?>" value="4" /> Unemployed
				</label>
				<label class="btn btn-default radio-btn <?php if(@$answer[12]['answer']==5){ ?> active focus <?php } ?>">
					<input type="radio" id="emp5" onchange="sel5()" <?php if(@$answer[11]['answer']=="5"){ ?> checked <?php } ?> class="sel5" name="<?php echo $question_id; ?>" value="5" />Other
				</label>
			 </div>  
			 <span id="ssel5" class="error">This field is required.</span>
		 </div>
		
	</div>
    
    <hr>
	<div class="step5 radio-group">
        <!-- <h2 class="fs-title">What is your credit score? </h2> -->
        <?php $question_id = $questions[11]['question_id']; ?>
		<h2 class="fs-title"><?php echo $questions[11]['question'];?></h2>
		<div class="">
			<div class="btn-group" data-toggle="buttons">
				 <label class="btn btn-default radio-btn <?php if(@$answer[12]['answer']==1){ ?> active focus <?php } ?> radio-left">
					<input type="radio" id="c_score" <?php if(@$answer[12]['answer']==1){ ?> checked <?php } ?> onchange="sel6()" class="sel6" name="<?php echo $question_id; ?>" value="1" /> 499 or below
				</label>
				<label class="btn btn-default <?php if(@$answer[12]['answer']==2){ ?> active focus <?php } ?>  radio-btn">
					<input type="radio" <?php if(@$answer[12]['answer']==2){ ?> checked <?php } ?>  id="c_score2" onchange="sel6()" class="sel6" name="<?php echo $question_id; ?>" value="2" /> 500- 599
				</label> 
				<label class="btn btn-default  radio-btn <?php if(@$answer[12]['answer']==3){ ?> active focus <?php } ?>">
					<input type="radio" <?php if(@$answer[12]['answer']==3){ ?> checked <?php } ?> id="c_score3" onchange="sel6()" class="sel6" name="<?php echo $question_id; ?>" value="3" /> 600-649
				</label> 
				<label class="btn btn-default radio-btn <?php if(@$answer[12]['answer']==4){ ?> active focus <?php } ?>">
					<input type="radio" <?php if(@$answer[12]['answer']==4){ ?> checked <?php } ?> id="c_score4" onchange="sel6()" class="sel6" name="<?php echo $question_id; ?>" value="4" /> 650-679
				</label>
				<label class="btn btn-default radio-btn <?php if(@$answer[12]['answer']==5){ ?> active focus <?php } ?>">
					<input type="radio" id="c_score5" <?php if(@$answer[12]['answer']==5){ ?> checked <?php } ?> onchange="sel6()" class="sel6" name="<?php echo $question_id; ?>" value="5" /> 650-679
				</label>
				<label class="btn btn-default radio-btn <?php if(@$answer[12]['answer']==6){ ?> active focus <?php } ?>">
					<input type="radio" id="c_score6" <?php if(@$answer[12]['answer']==6){ ?> checked <?php } ?> onchange="sel6()" class="sel6" name="<?php echo $question_id; ?>" value="6" /> 680-719
				</label>
				<label class="btn btn-default radio-btn <?php if(@$answer[12]['answer']==7){ ?> active focus <?php } ?>">
					<input type="radio" id="c_score7" <?php if(@$answer[12]['answer']==7){ ?> checked <?php } ?> onchange="sel6()" class="sel6" name="<?php echo $question_id; ?>" value="7" /> 720 and above
				</label>
				
			 </div> 
			  <span id="ssel6" class="error">This field is required.</span>
		 </div>
		
    </div>
  
            

	<input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" onclick="home_loan_form2(this.id);" id="homeloan2form" class="next action-button" value="Next" />
  </fieldset>

  <fieldset class="step8">
	<div class="row step6">
		<h2 class="fs-title">We need this to verify your identity.  </h2>
		<h3 class="fs-subtitle">Don't worry, your information is safe with us</h3>
		<div class="form-group text-left col-md-6">
                <!-- <label for="">First Name</label> -->
                <?php $question_id = $questions[12]['question_id']; ?>
                <label for=""><?php echo $questions[12]['question'];?></label>
                <input type="text" value="<?php echo @$answer[13]['answer']; ?>" class="form-control" id="verify" name="<?php echo $question_id; ?>" placeholder="First Name">
                 <span id="sverify" class="error">This field is required.</span>
                
        </div>
		<div class="form-group text-left  col-md-6">
                <!-- <label for="">Last Name</label> -->
                <?php $question_id = $questions[13]['question_id']; ?>
                <label for=""><?php echo $questions[13]['question'];?></label>
                <input type="text"  value="<?php echo @$answer[14]['answer']; ?>"class="form-control" id="verify2" name="<?php echo $question_id; ?>" placeholder="Last Name">
                 <span id="sverify2" class="error">This field is required.</span>
        </div>
	</div>
	<hr>
	<div class="row step7">
		<h2 class="fs-title">What is your address ?  </h2>
		<h3 class="fs-subtitle"></h3>
        <div class="form-group text-left  col-md-6">
                <!-- <label for="">Street</label> -->
                <?php $question_id = $questions[14]['question_id']; ?>
                <label for=""><?php echo $questions[14]['question'];?></label>
                <input type="text" value="<?php echo @$answer[15]['answer']; ?>" class="form-control" id="verify3" name="<?php echo $question_id; ?>" placeholder="Street">
                 <span id="sverify3" class="error">This field is required.</span>
        </div>
        <div class="form-group text-left  col-md-6">
                <!-- <label for="">City</label> -->
                <?php $question_id = $questions[15]['question_id']; ?>
                <label for=""><?php echo $questions[15]['question'];?></label>
                <input type="text"  value="<?php echo @$answer[16]['answer']; ?>"  class="form-control" id="verify4" name="<?php echo $question_id; ?>" placeholder="City">
                 <span id="sverify4" class="error">This field is required.</span>
        </div>
        <div class="form-group text-left  col-md-6">
                <!-- <label for="">State</label> -->
                <?php $question_id = $questions[16]['question_id']; ?>
                <label for=""><?php echo $questions[16]['question'];?></label>
                <input type="text"  value="<?php echo @$answer[17]['answer']; ?>" class="form-control" id="verify5" name="<?php echo $question_id; ?>" placeholder="State">
                 <span id="sverify5" class="error">This field is required.</span>
        </div>
        <div class="form-group text-left  col-md-6">
                <!-- <label for="">Zip</label> -->
                <?php $question_id = $questions[17]['question_id']; ?>
                <label for=""><?php echo $questions[17]['question'];?></label>
                <input type="text"  value="<?php echo @$answer[18]['answer']; ?>" class="form-control" id="verify6" name="<?php echo $question_id; ?>" placeholder="Zip">
                 <span id="sverify6" class="error">This field is required.</span>
        </div>
        <div class="form-group text-left  col-md-6">
                <!-- <label for="">What is your Phone Number ? </label> -->
                <?php $question_id = $questions[18]['question_id']; ?>
                <label for=""><?php echo $questions[18]['question'];?></label>
                <input type="text" value="<?php echo @$answer[19]['answer']; ?>" class="form-control restrictnumber" id="verify7" name="<?php echo $question_id; ?>" placeholder="Phone Number">
                 <span id="sverify7" class="error">This field is required.</span>
        </div>
        <div class="form-group text-left  col-md-6">
                <!-- <label for="">Please share your SSN ?  </label> -->
                <?php $question_id = $questions[19]['question_id']; ?>
                <label for=""><?php echo $questions[19]['question'];?></label>
                <input type="text"  value="<?php echo @$answer[20]['answer']; ?>" class="form-control restrictnumber" id="verify8" name="<?php echo $question_id; ?>" placeholder="SSN">
                 <span id="sverify8" class="error">This field is required.</span>
        </div>
        <?php 
        if(!empty($_SESSION['email'])){ ?>
        <div class="form-group text-left  col-md-6">
                <!-- <label for="">What is your email Id ?  </label> -->
                <?php $question_id = $questions[20]['question_id']; ?>
                <label for=""><?php echo $questions[20]['question'];?></label>
                <input type="email"  class="form-control" id="verify9" name="<?php echo $question_id; ?>" placeholder="Email Id" value="<?php echo $_SESSION['email']; ?>" readonly>
                 <span id="sverify9" class="error">This field is required.</span>
                 <span id="semverify9" class="error">Please enter vaild email.</span>
        </div>
            <?php }else{ ?>
            
            <div class="form-group text-left  col-md-6">
                <!-- <label for="">What is your email Id ?  </label> -->
                <?php $question_id = $questions[20]['question_id']; ?>
                <label for=""><?php echo $questions[20]['question'];?></label>
                <input type="email" value="<?php echo @$answer[21]['answer']; ?>" class="form-control" id="verify9" name="<?php echo $question_id; ?>" placeholder="Email Id">
                 <span id="sverify9" class="error">This field is required.</span>
                 <span id="semverify9" class="error">Please enter vaild email.</span>
        </div>
             
             
          <?php    } ?>
		  
		<?php  if(!empty($_SESSION['email'])){ ?>
        <div class="form-group text-left  col-md-6">
                <!-- <label for="">Create A Password  </label> -->
                <?php $question_id = $questions[21]['question_id']; ?>
                <label for=""><?php //echo $questions[21]['question'];?></label>
                <input type="hidden" value="123456" class="form-control" name="<?php echo $question_id; ?>" id="verify10" placeholder="Password">
                 <span id="sverify10" class="error">This field is required.</span>
        </div>
		<?php } else{ ?>
		
		<div class="form-group text-left  col-md-6">
                <!-- <label for="">Create A Password  </label> -->
                <?php $question_id = $questions[21]['question_id']; ?>
                <label for=""><?php echo $questions[21]['question'];?></label>
                <input type="password" value="<?php echo @$answer[22]['answer']; ?>" class="form-control" name="<?php echo $question_id; ?>" id="verify10" placeholder="Password">
                 <span id="sverify10" class="error">This field is required.</span>
        </div>
		
		
		<?php } ?>

	</div>
			
		
	<input type="button" name="previous" class="previous action-button" value="Previous" />
	<a  class="next action-button" type="button" onclick="home_loan_form3(this.id);" id="homeloan3form">Submit</a>
	
<!--	href="<?php echo base_url();?>steps/signin"-->
	</div>
    <!--<input type="button" name="next" class="next action-button" value="Next" /> -->
  </fieldset>

</form>
</div>

<footer class="container-fluid">
	<div class="row">
		<div class="container">
			<ul class="list-inline text-center">
				<li>Copyright &#169; 2023 Seflo Financial  |  All Rights Reserved. </li>
				<!--<li><a href="#"> Terms of Use </a></li>
				<li><a href="#">Privacy Policy</a></li>-->
			  </ul>
			  <!--<div class="text-center">
				  <p>4100 Abc Ridge Road, Suite 500, abc, UT 84043 <br>
					(123) 456-7890</p>
			  </div>-->
		</div>
	</div>
	
</footer>


<script>

/************ First Form **************/
    function home_loan_form1(id){
	    var count=0;
	    if($("#month_sec").val()==null){
	      $("#smonth_sec").css("display","block");
	      count++;
	    }
	    
	    
	    if($("#month_sec2").val()==null){
	      $("#smonth_sec2").css("display","block");
	      count++;
	    }
	    
	    
	    
	    if($("#month_sec3").val()==null){
	      $("#smonth_sec3").css("display","block");
	      count++;
	    }
	    
	    
	    
	    if($("#month_sec4").val()==""){
	      $("#smonth_sec4").css("display","block");
	      count++;
	    }
	    
	    
	    if($("#month_sec5").val()==""){
	      $("#smonth_sec5").css("display","block");
	      count++;
	    }
	    
	    if($("#month_sec6").val()==null){
	      $("#smonth_sec6").css("display","block");
	      count++;
	    }
	    
	    if(count==0){
	         next(id);
	    }
	   
    }
    
  $("#month_sec").on('input', function() {
    if($("#month_sec").val()==null){
	    $("#smonth_sec").css("display","block");
	    }else{
	        $("#smonth_sec").css("display","none");
	    }
	   });
	   
	   	$("#month_sec2").on('input', function() {
    if($("#month_sec2").val()==null){
	    $("#smonth_sec2").css("display","block");
	    }else{
	        $("#smonth_sec2").css("display","none");
	    }
	   });
	   
	   	$("#month_sec3").on('input', function() {
    if($("#month_sec3").val()==null){
	    $("#smonth_sec3").css("display","block");
	    }else{
	        $("#smonth_sec3").css("display","none");
	    }
	   });
	   
	   	$("#month_sec4").on('input', function() {
    if($("#month_sec4").val()==""){
	    $("#smonth_sec4").css("display","block");
	    }else{
	        $("#smonth_sec4").css("display","none");
	    }
	   });
	   
	   	$("#month_sec5").on('input', function() {
    if($("#month_sec5").val()==""){
	    $("#smonth_sec5").css("display","block");
	    }else{
	        $("#smonth_sec5").css("display","none");
	    }
	   });
	   
	   
	   	$("#month_sec6").on('input', function() {
    if($("#month_sec6").val()==null){
	    $("#smonth_sec6").css("display","block");
	    }else{
	        $("#smonth_sec6").css("display","none");
	    }
	   });
	   
	   
	 /*********** Second Form **********/ 
	 
	 function home_loan_form2(id){
	     var count=0;
	      if($("#sel").val()==""){
	      $("#ssel").css("display","block");
	      count++;
	    }
	    
	     if($("#sel2").val()==null){
	      $("#ssel2").css("display","block");
	      count++;
	    }
	    
	    if($("#sel3").val()==null){
	      $("#ssel3").css("display","block");
	      count++;
	    }
	    
	    
	     if($("#sel4").val()==""){
	      $("#ssel4").css("display","block");
	      count++;
	    }
	    
	     if($(".sel5:checked").length==0){
        $("#ssel5").css("display","block");
        count++;
       }



  if($(".sel6:checked").length==0){
        $("#ssel6").css("display","block");
        count++;
       }

	      if(count==0){
	         next(id);
	    }
	     
	 }
	 
	 	$("#sel").on('input', function() {
    if($("#sel").val()==""){
	    $("#ssel").css("display","block");
	    }else{
	        $("#ssel").css("display","none");
	    }
	   });
	   
	   
	   $("#sel2").on('input', function() {
    if($("#sel2").val()==null){
	    $("#ssel2").css("display","block");
	    }else{
	        $("#ssel2").css("display","none");
	    }
	   });
	   
	    $("#sel3").on('input', function() {
    if($("#sel3").val()==null){
	    $("#ssel3").css("display","block");
	    }else{
	        $("#ssel3").css("display","none");
	    }
	   });
	   
	   $("#sel4").on('input', function() {
    if($("#sel4").val()==""){
	    $("#ssel4").css("display","block");
	    }else{
	        $("#ssel4").css("display","none");
	    }
	   });
	   
	    function sel5(){
		 
      if(!$(".sel5").is(":checked").length==0) {
           $("#ssel5").css("display","block");
       }else{
           $("#ssel5").css("display","none");
       }
	    }
      
        function sel6(){
      if(!$(".sel6").is(":checked").length==0) {
           $("#ssel6").css("display","block");
       }else{
           $("#ssel6").css("display","none");
       }
        }
	   
	 /*************** fucntion 3 *************/
	   function home_loan_form3(id){
	    var count=0; 
	    
	        if($("#verify").val()==""){
	      $("#sverify").css("display","block");
	      count++;
	    } 
	    
	      if($("#verify2").val()==""){
	      $("#sverify2").css("display","block");
	      count++;
	    } 
	    
	    
	      if($("#verify3").val()==""){
	      $("#sverify3").css("display","block");
	      count++;
	    } 
	    
	    
	      if($("#verify4").val()==""){
	      $("#sverify4").css("display","block");
	      count++;
	    } 
	    
	      if($("#verify5").val()==""){
	      $("#sverify5").css("display","block");
	      count++;
	    } 
	    
	     if($("#verify6").val()==""){
	      $("#sverify6").css("display","block");
	      count++;
	    } 
	    
	     if($("#verify7").val()==""){
	      $("#sverify7").css("display","block");
	      count++;
	    } 
	    
	     if($("#verify8").val()==""){
	      $("#sverify8").css("display","block");
	      count++;
	    } 
	    
	    if($("#verify9").val()==""){
	      $("#sverify9").css("display","block");
	      count++;
	    }
        else if($("#verify9").val() !=""){
            $email = $("#verify9").val();
            if( !isEmail($email) ) {
                $("#semverify9").css("display","block");
            count++;    
            }           
        } 
	    
	    if($("#verify10").val()==""){
	      $("#sverify10").css("display","block");
	      count++;
	    }
         
	    
	    if(count==0){
	       
	        //location.href = '<?php echo base_url();?>steps/signin';
            saveData();
	    }
	   }

       
	   
	   $("#verify").on('input', function() {
    if($("#verify").val()==""){
	    $("#sverify").css("display","block");
	    }else{
	        $("#sverify").css("display","none");
	    }
	   });
	   
	    $("#verify2").on('input', function() {
    if($("#verify2").val()==""){
	    $("#sverify2").css("display","block");
	    }else{
	        $("#sverify2").css("display","none");
	    }
	   });
	   
	    $("#verify3").on('input', function() {
    if($("#verify3").val()==""){
	    $("#sverify3").css("display","block");
	    }else{
	        $("#sverify3").css("display","none");
	    }
	   });
	   
	   $("#verify4").on('input', function() {
    if($("#verify4").val()==""){
	    $("#sverify4").css("display","block");
	    }else{
	        $("#sverify4").css("display","none");
	    }
	   });
	   
	   $("#verify5").on('input', function() {
    if($("#verify5").val()==""){
	    $("#sverify5").css("display","block");
	    }else{
	        $("#sverify5").css("display","none");
	    }
	   });
	   
	      $("#verify6").on('input', function() {
    if($("#verify6").val()==""){
	    $("#sverify6").css("display","block");
	    }else{
	        $("#sverify6").css("display","none");
	    }
	   });
	   
	   $("#verify7").on('input', function() {
    if($("#verify7").val()==""){
	    $("#sverify7").css("display","block");
	    }else{
	        $("#sverify7").css("display","none");
	    }
	   });
	   
	    $("#verify8").on('input', function() {
    if($("#verify8").val()==""){
	    $("#sverify8").css("display","block");
	    }else{
	        $("#sverify8").css("display","none");
	    }
	   });

        $("#verify9").on('input', function() {
            if($("#verify9").val()=="") {
               $("#sverify9").css("display","block");
            }else{
                $("#sverify9").css("display","none");
                $email = $("#verify9").val();
                if( !isEmail($email) ) {
                    $("#semverify9").css("display","block");
                count++;    
                } else 
                    $("#semverify9").css("display","none");
                
            }
        });
	   
	   $("#verify10").on('input', function() {
    if($("#verify10").val()==""){
	    $("#sverify10").css("display","block");
	    }else{
	        $("#sverify10").css("display","none");
	    }
	   });
	   
	   
	   
	   
	   
	   $(function () {
$('#month_sec5').keydown(function (e) {
if (e.shiftKey || e.ctrlKey || e.altKey) {
e.preventDefault();
} else {
var key = e.keyCode;
if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
e.preventDefault();
}
}
});
});
	 
</script>

<?php 
if(!empty($_SESSION['edit'])){ 
?>


<script>
 function saveData()
        {
            var form = $('form#homeloanform').serialize();
            $.ajax({
                type: 'post',
                url: '<?php echo base_url();?>steps/add_homeloan',
                data: form,
                success: function(data) {
                            
                    var obj = JSON.parse(data);
                    console.log(obj);
                    $('#homeloanform')[0].reset();
                    $("#success_message").show();
                    setTimeout(function() { $("#success_message").hide(); }, 1000);
                    
                    setTimeout(function() { 
                       
                        window.location.replace('<?php echo base_url(); ?>steps/dashboard')
                        
                    }, 3000);
                    // if (obj.status == 'success') {
                    //   // $('.success_message').css('display', 'block'); 
                    //    $('.error_message').css('display', 'none');
                    //   // $('.success_message').html(obj.message); 
                    //     setTimeout(function() {
                    //         $('.load_div').css('display','none');
                    //       window.location.href='<?php echo base_url();?>steps/add_homeloan';
                    // }, 2000);
                        
                    // } else {
                    //   // $('.success_message').css('display', 'none'); 
                    //    $('.error_message').css('display', 'block');
                    //    $('.error_message').html(obj.message); 
                       
                    // }
                }
            });
        }
		
$("#month_sec").val("<?php echo $answer[1]['answer']; ?>");
$("#month_sec2").val("<?php echo $answer[2]['answer']; ?>");
$("#month_sec3").val("<?php echo $answer[3]['answer']; ?>");
$("#month_sec6").val("<?php echo $answer[6]['answer']; ?>");

</script>
<?php }else{ ?>

<script>
 function saveData()
        {
            var form = $('form#homeloanform').serialize();
            $.ajax({
                type: 'post',
                url: '<?php echo base_url();?>steps/add_homeloan',
                data: form,
                success: function(data) {
                            
                    var obj = JSON.parse(data);
                    console.log(obj);
                    $('#homeloanform')[0].reset();
                    $("#success_message").show();
                    setTimeout(function() { $("#success_message").hide(); }, 1000);
                    
                    setTimeout(function() { 
                       
                        window.location.replace('<?php echo base_url(); ?>')
                        
                    }, 3000);
                    // if (obj.status == 'success') {
                    //   // $('.success_message').css('display', 'block'); 
                    //    $('.error_message').css('display', 'none');
                    //   // $('.success_message').html(obj.message); 
                    //     setTimeout(function() {
                    //         $('.load_div').css('display','none');
                    //       window.location.href='<?php echo base_url();?>steps/add_homeloan';
                    // }, 2000);
                        
                    // } else {
                    //   // $('.success_message').css('display', 'none'); 
                    //    $('.error_message').css('display', 'block');
                    //    $('.error_message').html(obj.message); 
                       
                    // }
                }
            });
        }
</script>

<?php } ?>



	<script type="text/javascript" src="<?php echo base_url(); ?>assets/steps/js/vendor/jquery-library.js"></script>
	<!-- <script src="../js/vendor/jquery-migrate.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/steps/js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/steps/js/steps.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/steps/js/vendor/bootstrap.min.js"></script>
	
</body>
</html>