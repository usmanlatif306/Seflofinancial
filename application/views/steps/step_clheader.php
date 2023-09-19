<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<header>
	<nav class="navbar">
		<div class="container">
		  <div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/homeweb/images/logo.png"></a>
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
				<?php if($actual_link==base_url().'steps/clHome' || $actual_link==base_url().'steps/clHome/'){ ?>
					<li  class="active"><a href="<?php echo base_url();?>steps/clHome">Basic Information</a></li>
				<?php }else{ ?>
				<li  class=""><a href="<?php echo base_url();?>steps/clHome">Basic Information</a></li>
				<?php } ?>
				
				<?php if($actual_link==base_url().'steps/clOwner' || $actual_link==base_url().'steps/clOwner/'){ ?>
				<li class="active"><a href="<?php echo base_url();?>steps/clOwner">Owner Information</a></li>
					
				<?php }else{ ?>
			<li><a href="<?php echo base_url();?>steps/clOwner">Owner Information</a></li>
				<?php } ?>
				
				
				<?php if($actual_link==base_url().'steps/clBusiness' || $actual_link==base_url().'steps/clBusiness/'){ ?>
				
				<li class="active"><a href="<?php echo base_url();?>steps/clBusiness">Business Information</a></li>	
				<?php }else{ ?>
		<li><a href="<?php echo base_url();?>steps/clBusiness">Business Information</a></li>
				<?php } ?>
				
					
				<?php if($actual_link==base_url().'steps/clDocument' || $actual_link==base_url().'steps/clDocument/'){ ?>
				
				
				 <li class="active"><a href="<?php echo base_url();?>steps/clDocument">Documents Submission</a></li>
				<?php }else{ ?>
	<li><a href="<?php echo base_url();?>steps/clDocument">Documents Submission</a></li>
				<?php } ?>
					
					
					<?php if($actual_link==base_url().'steps/clSubmission' || $actual_link==base_url().'steps/clSubmission/'){ ?>
				
				<li class="active"><a href="<?php echo base_url();?>steps/clSubmission">Submission</a></li>
				
				<?php }else{ ?>
	<li><a href="<?php echo base_url();?>steps/clSubmission">Submission</a></li>
				<?php } ?>
					
					
					
				</ul>
			</div>
		</div>
	</div>	
</header>