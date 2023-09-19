<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<header>
	<nav class="navbar">
		<div class="container">
		  <div class="navbar-header">
			<a class="navbar-brand" href="https://seflofinancial.com/"><img src="https://www.seflofinancial.com/wp-content/uploads/2023/01/Seflofinanciallogo2.png" style="height:52px;"></a>
		  </div>
          <?php 
          if(empty($_SESSION['email'])){ ?>
		  <ul class="nav navbar-nav navbar-right" style="display: inline-flex;margin: 7.5px 25%;">
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
				<ul class="nav nav-tabs nav-justified pagesteps-links" hidden>
					<li  class="active"><a href="<?php echo base_url();?>steps">Basic Information</a></li>
					<li><a href="<?php echo base_url();?>steps/owner">Owner Information</a></li>
					<li><a href="<?php echo base_url();?>steps/business">Business Information</a></li>
					<li><a href="<?php echo base_url();?>steps/document">Documents Submission</a></li>
					<li><a href="<?php echo base_url();?>steps/submission">Submission</a></li>
				</ul>
			</div>
		</div>
	</div>	
</header>