<!DOCTYPE html>
<html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<head>
	<title>Personal Loan | Seflo Financial </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="https://briskloanz.com/assets/homeweb/images/fav.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/steps/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/steps/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/steps/css/steps.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/steps/css/steps-comon.css">

    
	<style>
        .msform {
    width: 860px;
}
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
        
        
        
        
        @media(max-width:767px){
.msform {
    width: 100%;}
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
					<li class="active"><a href="personal.html">Personal Loan </a></li>
				</ul>
			</div>
		</div>
	</div>	
</header>

    <div class="col-md-3"></div>
    <div class="col-md-6" id="success_message" style="display: none;">
        <h3 class="text-center mb-15 alert alert-success">Submitted</h3>
    </div>
    <div class="col-md-3"></div>

<div>

<!-- multistep form -->
<form class="msform" id="plform">
  <!-- progressbar -->
  <!-- <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul> -->
  <!-- fieldsets -->
  <fieldset>
	<div class="step1">
            <div class="row">
                <div class="col-md-12">
                        <h3 class="text-center mb-15">Personal Loan</h3>
                </div>
                <div class="col-md-6">
                    <div class="form-group text-left">
                        <label for=""><?php echo $questions[0]['question'];?></label>
                        <?php $question_id = $questions[0]['question_id']; ?> 
                        <input type="text" value="<?php echo $answer[1]['answer']; ?>" class="form-control restrictnumber" id="personal1" name="<?php echo $question_id; ?>" placeholder="" >
                          <span id="spersonal1" class="error">This field is required.</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group text-left">
                        <!-- <label for="">Please select Loan Duration? </label> -->
                        <label for=""><?php echo $questions[1]['question'];?></label> 
                        <?php $question_id = $questions[1]['question_id']; ?>
                        <select class="form-control" id="personal2" name="<?php echo $question_id; ?>" >
                                <option disabled="" selected>Select </option>
                                <option <?php if($answer[2]['answer']=='1 month'){ ?> selected <?php } ?>> 1 month</option>
                                <option <?php if($answer[2]['answer']=='2 month'){ ?> selected <?php } ?>>2 month</option>
                                <option <?php if($answer[2]['answer']=='3 month'){ ?> selected <?php } ?>>3 month</option>
                                <option <?php if($answer[2]['answer']=='4 month'){ ?> selected <?php } ?>>4 month</option>
                            </select>
                              <span id="spersonal2" class="error">This field is required.</span>
                    </div>
                </div>
                <!-- <div class="clearfix"></div>
               <br> -->

                <div class="col-md-12">
                        
                        <div class="radio-group form-group text-left">
                                <!-- <label>May we know purpose of loan? </label> -->
                                <label for=""><?php echo $questions[2]['question'];?></label>
                                <?php $question_id = $questions[2]['question_id']; ?>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default radio-btn radio-left <?php if(@$answer[3]['answer']==1){ ?> active focus <?php } ?>">
                                        <input type="radio" class="personal3" <?php if(@$answer[3]['answer']==1){ ?> checked <?php } ?> id="" name="<?php echo $question_id; ?>" value="1" /> Pay off Credit cards
                                    </label>
                                    <label class="btn btn-default radio-btn <?php if(@$answer[3]['answer']==2){ ?> active focus <?php } ?>">
                                        <input class="personal3" type="radio" id="" <?php if(@$answer[3]['answer']==2){ ?> checked <?php } ?> name="<?php echo $question_id; ?>" value="2" />Wedding expense
                                    </label> 
                                    <label class="btn btn-default radio-btn <?php if(@$answer[3]['answer']==3){ ?> active focus <?php } ?>">
                                        <input class="personal3" type="radio" id="" <?php if(@$answer[3]['answer']==3){ ?> checked <?php } ?> name="<?php echo $question_id; ?>" value="3" />Working Capital
                                    </label> 
                                    <label class="btn btn-default radio-btn <?php if(@$answer[3]['answer']==4){ ?> active focus <?php } ?>">
                                        <input class="personal3" type="radio" id="" <?php if(@$answer[3]['answer']==4){ ?> checked <?php } ?> name="<?php echo $question_id; ?>" value="4" />Invoices Factoring
                                    </label>
                                    <label class="btn btn-default radio-btn <?php if(@$answer[3]['answer']==5){ ?> active focus <?php } ?>">
                                        <input class="personal3" type="radio" id="" <?php if(@$answer[3]['answer']==5){ ?> checked <?php } ?> name="<?php echo $question_id; ?>" value="5" />Vacation
                                    </label>
                                    <label class="btn btn-default radio-btn <?php if(@$answer[3]['answer']==6){ ?> active focus <?php } ?>">
                                        <input class="personal3" type="radio" id="" <?php if(@$answer[3]['answer']==6){ ?> checked <?php } ?> name="<?php echo $question_id; ?>" value="6" />Medical Expense
                                    </label>
                                    <label class="btn btn-default radio-btn <?php if(@$answer[3]['answer']==7){ ?> active focus <?php } ?>">
                                            <input class="personal3" type="radio" id="" <?php if(@$answer[3]['answer']==7){ ?> checked <?php } ?> name="<?php echo $question_id; ?>" value="7" />Buy a car
                                    </label>
                                    <label class="btn btn-default radio-btn <?php if(@$answer[3]['answer']==8){ ?> active focus <?php } ?>">
                                            <input class="personal3" type="radio" id="" <?php if(@$answer[3]['answer']==8){ ?> checked <?php } ?> name="<?php echo $question_id; ?>" value="8" />Business Loan
                                    </label>
                                    <label class="btn btn-default radio-btn <?php if(@$answer[3]['answer']==9){ ?> active focus <?php } ?>">
                                            <input class="personal3" type="radio" id="" <?php if(@$answer[3]['answer']==9){ ?> checked <?php } ?> name="<?php echo $question_id; ?>" value="9" />Equipment Purchase
                                        </label>
                                        <label class="btn btn-default radio-btn <?php if(@$answer[3]['answer']==10){ ?> active focus <?php } ?>">
                                                <input class="personal3" type="radio" <?php if(@$answer[3]['answer']==10){ ?> checked <?php } ?> id="" name="<?php echo $question_id; ?>" value="10" />Moving and relocation
                                        </label>
                                        <label class="btn btn-default radio-btn <?php if(@$answer[3]['answer']==11){ ?> active focus <?php } ?>">
                                                <input class="personal3" type="radio" <?php if(@$answer[3]['answer']==11){ ?> checked <?php } ?> id="" name="<?php echo $question_id; ?>" value="11" />Other
                                        </label>
                                 </div>  
                                 <span id="spersonal3" class="error">This field is required.</span>
                             </div>
                </div>

                <div class="col-md-12">
                        
                        <div class="radio-group form-group text-left">
                                <!-- <label>What is Your Employment Status ?  </label> -->
                                <label for=""><?php echo $questions[3]['question'];?></label>
                                <?php $question_id = $questions[3]['question_id']; ?>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default radio-btn radio-left <?php if(@$answer[4]['answer']==1){ ?> active focus <?php } ?>">
                                        <input class="personal4" type="radio" <?php if(@$answer[4]['answer']==1){ ?> checked <?php } ?> id="" name="<?php echo $question_id; ?>" value="1" /> Self Employed
                                    </label>
                                    <label class="btn btn-default radio-btn <?php if(@$answer[4]['answer']==2){ ?> active focus <?php } ?>">
                                        <input class="personal4" type="radio" <?php if(@$answer[4]['answer']==2){ ?> checked <?php } ?> id="" name="<?php echo $question_id; ?>" value="2" />Salaried
                                    </label> 
                                    <label class="btn btn-default radio-btn <?php if(@$answer[4]['answer']==3){ ?> active focus <?php } ?>">
                                        <input class="personal4" type="radio" <?php if(@$answer[4]['answer']==3){ ?> checked <?php } ?> id="" name="<?php echo $question_id; ?>" value="3" />Part Time
                                    </label> 
                                    <label class="btn btn-default radio-btn <?php if(@$answer[4]['answer']==4){ ?> active focus <?php } ?>">
                                        <input class="personal4" type="radio" <?php if(@$answer[4]['answer']==4){ ?> checked <?php } ?> id="" name="<?php echo $question_id; ?>" value="4" />Unemployed
                                    </label>
                                        <label class="btn btn-default radio-btn <?php if(@$answer[4]['answer']==5){ ?> active focus <?php } ?>">
                                                <input class="personal4" type="radio" id="" <?php if(@$answer[4]['answer']==5){ ?> checked <?php } ?> name="<?php echo $question_id; ?>" value="5" />Other
                                        </label>
                                 </div>  
                                  <span id="spersonal4" class="error">This field is required.</span>
                             </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group text-left">
                        <!-- <label for="">What is your Annual Pre tax income ?  </label>  -->
                        <label for=""><?php echo $questions[4]['question'];?></label>
                        <?php $question_id = $questions[4]['question_id']; ?>
						
						
						<div class="slidecontainer">
						<?php
						if(!empty($answer[5]['answer'])){ ?>
  <input type="range" min="1000" max="100000" value="<?php echo $answer[5]['answer']; ?>" name="<?php echo $question_id; ?>" class="slider" id="myRange">
  <p>Current Slider Value: $<span id="demo"><?php echo $answer[5]['answer']; ?></span></p>
					<?php	}else{ ?>
					 <input type="range" min="1000" max="100000" value="1000" name="<?php echo $question_id; ?>" class="slider" id="myRange">
  <p>Current Slider Value: $<span id="demo"></span></p>
					<?php } ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
						
						
						
						
						
						
                        <!--<input id="ex6" value="<?php //echo $answer[5]['answer']; ?>"    type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-value="3"/>-->
                        <!--<span id="ex6CurrentSliderValLabel">Current Slider Value: <span id="demo12"></span></span>-->
                    </div>
                </div>            

            </div>    
	
	</div>	
	

    <input type="button"  onclick="personal_loan_form1(this.id);" id="personalloan1form" name="next" class="next action-button" value="Next" />
  </fieldset>

  <fieldset class="">
        <div class="row step6">
                <h2 class="fs-title">We need this to verify your identity.  </h2>
                <h3 class="fs-subtitle">Don't worry, your information is safe with us</h3>
                <div class="form-group text-left col-md-6">
                  <!-- <label for="">First Name</label> -->
                  <label for=""><?php echo $questions[5]['question'];?></label>
                  <?php $question_id = $questions[5]['question_id']; ?>
                  <input type="text" value="<?php echo $answer[6]['answer']; ?>" class="form-control" id="pinfo" name="<?php echo $question_id; ?>" placeholder="First Name">
                  <span id="spinfo" class="error">This field is required.</span>
                </div>
                <div class="form-group text-left  col-md-6">
                  <!-- <label for="">Last Name</label> -->
                  <label for=""><?php echo $questions[6]['question'];?></label>
                  <?php $question_id = $questions[6]['question_id']; ?>
                  <input type="text" value="<?php echo $answer[7]['answer']; ?>" class="form-control" id="pinfo2" name="<?php echo $question_id; ?>" placeholder="Last Name">
                  <span id="spinfo2" class="error">This field is required.</span>
                </div>
            </div>
            <hr>
            <div class="row step7">
                <h2 class="fs-title">What is your address ?  </h2>
                <h3 class="fs-subtitle"></h3>
                <div class="form-group text-left  col-md-6">
                        <!-- <label for="">Street</label> -->
                        <label for=""><?php echo $questions[7]['question'];?></label>
                        <?php $question_id = $questions[8]['question_id']; ?>
                        <input type="text" value="<?php echo $answer[1]['answer']; ?>" class="form-control" id="pinfo3" name="<?php echo $question_id; ?>" placeholder="Street">
                         <span id="spinfo3" class="error">This field is required.</span>
                </div>
                <div class="form-group text-left  col-md-6">
                        <!-- <label for="">City</label> -->
                        <label for=""><?php echo $questions[8]['question'];?></label>
                        <?php $question_id = $questions[8]['question_id']; ?>
                        <input type="text" value="<?php echo $answer[9]['answer']; ?>" class="form-control" id="pinfo4" name="<?php echo $question_id; ?>" placeholder="City">
                         <span id="spinfo4" class="error">This field is required.</span>
                </div>
                <div class="form-group text-left  col-md-6">
                        <!-- <label for="">State</label> -->
                        <label for=""><?php echo $questions[9]['question'];?></label>
                        <?php $question_id = $questions[9]['question_id']; ?>
                        <input type="text" value="<?php echo $answer[10]['answer']; ?>" class="form-control" id="pinfo5" name="<?php echo $question_id; ?>" placeholder="State">
                         <span id="spinfo5" class="error">This field is required.</span>
                </div>
                <div class="form-group text-left  col-md-6">
                        <!-- <label for="">Zip</label> -->
                        <label for=""><?php echo $questions[10]['question'];?></label>
                        <?php $question_id = $questions[10]['question_id']; ?>
                        <input type="text"  value="<?php echo $answer[11]['answer']; ?>"class="form-control" id="pinfo6" name="<?php echo $question_id; ?>" placeholder="Zip">
                         <span id="spinfo6" class="error">This field is required.</span>
                </div>
                <div class="form-group text-left  col-md-6">
                        <!-- <label for="">What is your Phone Number ? </label> -->
                        <label for=""><?php echo $questions[11]['question'];?></label>
                        <?php $question_id = $questions[11]['question_id']; ?>
                        <input type="text" value="<?php echo $answer[12]['answer']; ?>" class="form-control restrictnumber" id="pinfo7" name="<?php echo $question_id; ?>" placeholder="Phone Number">
                         <span id="spinfo7" class="error">This field is required.</span>
                </div>
                <div class="form-group text-left  col-md-6">
                        <!-- <label for="">Please share your SSN ?  </label> -->
                        <label for=""><?php echo $questions[12]['question'];?></label>
                        <?php $question_id = $questions[12]['question_id']; ?>
                        <input type="text" value="<?php echo $answer[13]['answer']; ?>" class="form-control restrictnumber" id="pinfo8" name="<?php echo $question_id; ?>" placeholder="SSN">
                         <span id="spinfo8" class="error">This field is required.</span>
                </div>
				<?php if(!empty($_SESSION['email'])){ ?>
                <div class="form-group text-left  col-md-6">
                        <!-- <label for="">What is your email Id ?  </label> -->
                        <label for=""><?php echo $questions[13]['question'];?></label>
                        <?php $question_id = $questions[13]['question_id']; ?>
                        <input type="email" class="form-control" id="pinfo9" name="<?php echo $question_id; ?>" placeholder="Email Id" value="<?php echo $_SESSION['email']; ?>" readonly>
                         <span id="spinfo9" class="error">This field is required.</span>
                </div>
				<?php }else{ ?>
				
				<div class="form-group text-left  col-md-6">
                        <!-- <label for="">What is your email Id ?  </label> -->
                        <label for=""><?php echo $questions[13]['question'];?></label>
                        <?php $question_id = $questions[13]['question_id']; ?>
                        <input type="email" class="form-control" id="pinfo9" name="<?php echo $question_id; ?>" placeholder="Email Id">
                         <span id="spinfo9" class="error">This field is required.</span>
                </div>
				<?php } ?>
        
		<?php  if(!empty($_SESSION['email'])){ ?>
                <div class="form-group text-left  col-md-6">
                        <!-- <label for="">Create A Password  </label> -->
                        <label for=""><?php //echo $questions[14]['question'];?></label>
                        <?php $question_id = $questions[14]['question_id']; ?>
                        <input type="hidden" value="123456" class="form-control" id="pinfo10" name="<?php echo $question_id; ?>" placeholder="Password">
                         <span id="spinfo10" class="error">This field is required.</span>
                </div>
				
		<?php } else{ ?>
		 <div class="form-group text-left  col-md-6">
                        <!-- <label for="">Create A Password  </label> -->
                        <label for=""><?php echo $questions[14]['question'];?></label>
                        <?php $question_id = $questions[14]['question_id']; ?>
                        <input type="password" value="<?php echo $answer[15]['answer']; ?>" class="form-control" id="pinfo10" name="<?php echo $question_id; ?>" placeholder="Password">
                         <span id="spinfo10" class="error">This field is required.</span>
                </div>
		
		<?php } ?>
        
            </div>
	

	<input type="button" name="previous" class="previous action-button" value="Previous" />
    <a onclick="personal_loan_form2(this.id);" id="personalloan2form" class="next action-button" type="button">Submit</a>
  </fieldset>

</form>
</div>

<footer class="container-fluid">
	<div class="row">
		<div class="container">
			<ul class="list-inline text-center">
				<li>Copyright &#169; 2023 Seflo Financial  |  All Rights Reserved. </li>
				<li><a href="#"> Terms of Use </a></li>
				<li><a href="#">Privacy Policy</a></li>
			  </ul>
			  <div class="text-center">
				  <p>212 N. 2nd Street, Richmond, KY 40475 <br>
					(502) 381-9649</p>
			  </div>
		</div>
	</div>
	
</footer>





	<script type="text/javascript" src="<?php echo base_url(); ?>assets/steps/js/vendor/jquery-library.js"></script>
	<!-- <script src="../js/vendor/jquery-migrate.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/steps/js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/steps/js/steps.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/steps/js/vendor/bootstrap.min.js"></script>
    <script src="https://seiyria.com/bootstrap-slider/js/bootstrap-slider.js"></script>
    <script src="https://seiyria.com/bootstrap-slider/dependencies/js/highlight.min.js"></script>
    <link type="text/css" href="https://seiyria.com/bootstrap-slider/css/bootstrap-slider.css">
    <link type="text/css" href="https://seiyria.com/bootstrap-slider/dependencies/css/highlightjs-github-theme.css">
    
    <script>
    // With JQuery
    $(document).ready(function(){
        $("#ex6").slider();
        $("#ex6").on("slide", function(slideEvt) {
            $("#ex6SliderVal").text(slideEvt.value);
        });
});
    </script>
    
    
    <script>
   function  personal_loan_form1(id){
       var count=0;
       
        if($("#personal1").val()==""){
	      $("#spersonal1").css("display","block");
	      count++;
	    }
	    
	    if($("#personal2").val()==null){
	      $("#spersonal2").css("display","block");
	      count++;
	    }
	    
	      if(!$(".personal3").is(":checked")) {
           $("#spersonal3").css("display","block");
           count++;
       }
       
       
         if(!$(".personal4").is(":checked")) {
           $("#spersonal4").css("display","block");
           count++;
       }
       
      
       if(count==0){
           
          next(id)
       }
   }
   
   
     $("#personal1").on('input', function() {
    if($("#personal1").val()==""){
	      $("#spersonal1").css("display","block");
	    }else{
	        $("#spersonal1").css("display","none");
	    }
});


 $("#personal2").on('input', function() {
    if($("#personal2").val()==""){
	      $("#spersonal2").css("display","block");
	    }else{
	        $("#spersonal2").css("display","none");
	    }
});
   
    $('.personal3').on('click change', function(e) {
        
      if(!$(".personal3").is(":checked")) {
           $("#spersonal3").css("display","block");
       }else{
           $("#spersonal3").css("display","none");
       }
      });
      
      
       $('.personal4').on('click change', function(e) {
        
      if(!$(".personal4").is(":checked")) {
           $("#spersonal4").css("display","block");
       }else{
           $("#spersonal4").css("display","none");
       }
      });
      
      
      
      function personal_loan_form2(id){
          var count=0;
           if($("#pinfo").val()==""){
	      $("#spinfo").css("display","block");
	      count++;
	    }
	    
	    if($("#pinfo2").val()==""){
	      $("#spinfo2").css("display","block");
	      count++;
	    }
	    
	    if($("#pinfo3").val()==""){
	      $("#spinfo3").css("display","block");
	      count++;
	    }
	    
	     if($("#pinfo4").val()==""){
	      $("#spinfo4").css("display","block");
	      count++;
	    }
	    
	     if($("#pinfo5").val()==""){
	      $("#spinfo5").css("display","block");
	      count++;
	    }
	    
	    if($("#pinfo6").val()==""){
	      $("#spinfo6").css("display","block");
	      count++;
	    }
	    
	    if($("#pinfo7").val()==""){
	      $("#spinfo7").css("display","block");
	      count++;
	    }
	    
	    if($("#pinfo8").val()==""){
	      $("#spinfo8").css("display","block");
	      count++;
	    }
	    
	    if($("#pinfo9").val()==""){
	      $("#spinfo9").css("display","block");
	      count++;
	    }
	    
	    if($("#pinfo10").val()==""){
	      $("#spinfo10").css("display","block");
	      count++;
	    }
	    
	   if(count==0){
	        //location.href = '<?php echo base_url();?>steps/signin';
          saveData();
	   }
          
      }

      
         $("#pinfo").on('input', function() {
    if($("#pinfo").val()==""){
	      $("#spinfo").css("display","block");
	    }else{
	        $("#spinfo").css("display","none");
	    }
});



         $("#pinfo2").on('input', function() {
    if($("#pinfo2").val()==""){
	      $("#spinfo2").css("display","block");
	    }else{
	        $("#spinfo2").css("display","none");
	    }
});

     $("#pinfo3").on('input', function() {
    if($("#pinfo3").val()==""){
	      $("#spinfo3").css("display","block");
	    }else{
	        $("#spinfo3").css("display","none");
	    }
});

 $("#pinfo4").on('input', function() {
    if($("#pinfo4").val()==""){
	      $("#spinfo4").css("display","block");
	    }else{
	        $("#spinfo4").css("display","none");
	    }
});

$("#pinfo5").on('input', function() {
    if($("#pinfo5").val()==""){
	      $("#spinfo5").css("display","block");
	    }else{
	        $("#spinfo5").css("display","none");
	    }
});

$("#pinfo6").on('input', function() {
    if($("#pinfo6").val()==""){
	      $("#spinfo6").css("display","block");
	    }else{
	        $("#spinfo6").css("display","none");
	    }
});


$("#pinfo7").on('input', function() {
    if($("#pinfo7").val()==""){
	      $("#spinfo7").css("display","block");
	    }else{
	        $("#spinfo7").css("display","none");
	    }
});

$("#pinfo8").on('input', function() {
    if($("#pinfo8").val()==""){
	      $("#spinfo8").css("display","block");
	    }else{
	        $("#spinfo8").css("display","none");
	    }
});

$("#pinfo9").on('input', function() {
    if($("#pinfo9").val()==""){
	      $("#spinfo9").css("display","block");
	    }else{
	        $("#spinfo9").css("display","none");
	    }
});

$("#pinfo10").on('input', function() {
    if($("#pinfo10").val()==""){
	      $("#spinfo10").css("display","block");
	    }else{
	        $("#spinfo10").css("display","none");
	    }
});
</script>



<?php 
if(!empty($_SESSION['edit'])){ 
?>
<script>

        function saveData()
        {
            var form = $('form#plform').serialize();
            $.ajax({
                type: 'post',
                url: '<?php echo base_url();?>steps/add_personal',
                data: form,
                success: function(data) {
                            
                    var obj = JSON.parse(data);
                    console.log(obj);
                    $('#plform')[0].reset();
                    $("#success_message").show();
                    setTimeout(function() { $("#success_message").hide(); }, 5000);
                    
                      setTimeout(function() { 
                       
                        window.location.replace('<?php echo base_url(); ?>steps/dashboard')
                        
                    }, 3000);
                }
            });
        }
</script>
<?php }else{ ?>
<script>

        function saveData()
        {
            var form = $('form#plform').serialize();
            $.ajax({
                type: 'post',
                url: '<?php echo base_url();?>steps/add_personal',
                data: form,
                success: function(data) {
                            
                    var obj = JSON.parse(data);
                    console.log(obj);
                    $('#plform')[0].reset();
                    $("#success_message").show();
                    setTimeout(function() { $("#success_message").hide(); }, 5000);
                    
                      setTimeout(function() { 
                       
                        window.location.replace('<?php echo base_url(); ?>')
                        
                    }, 3000);
                }
            });
        }
</script>

<?php } ?>


<style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #ff9b00;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #ff9b00;
  cursor: pointer;
}
</style>


</body>
</html>