<!DOCTYPE html>
<html lang="en">
<!-- Header Begins -->

	<?php include("header.php"); ?>

<!-- Header Ends -->

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper  theme-1-active pimary-color-blue">

       
		<!-- Top Menu Items -->
		
		<?php include("navbar.php"); ?>

		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		
		<?php include("leftsidebarmenu.php"); ?>
		<!-- /Left Sidebar Menu -->
		
		<!-- Right Sidebar Menu -->

		<?php include("rightsidebarmenu.php"); ?>
		
		<!-- /Right Sidebar Menu -->
		
		
       
		<!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Application Edit</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>Applications</span></a></li>
							<li class="active"><span>Applications Edit</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

				<div class="row">
					<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Jaswinder Application</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<form action="#" class="form-horizontal">
														<div class="form-body">
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6>
															<hr class="light-grey-hr">
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">First Name</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control" placeholder="John doe">
																			<span class="help-block"> This is inline help </span> 
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group has-error">
																		<label class="control-label col-md-3">Last Name</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control" placeholder="12n">
																			<span class="help-block"> This field has error. </span> 
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Gender</label>
																		<div class="col-md-9">
																			<select class="form-control">
																				<option value="">Male</option>
																				<option value="">Female</option>
																			</select>
																			<span class="help-block"> Select your gender. </span> 
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Date of Birth</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control" placeholder="dd/mm/yyyy">
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Category</label>
																		<div class="col-md-9">
																			<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
																				<option value="Category 1">Category 1</option>
																				<option value="Category 2">Category 2</option>
																				<option value="Category 3">Category 5</option>
																				<option value="Category 4">Category 4</option>
																			</select>
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Membership</label>
																		<div class="col-md-9">
																			<div class="radio-list">
																				<div class="radio-inline pl-0">
																					<span class="radio radio-info">																					<input type="radio" name="radio7" id="radio_9" value="option1">
																						<label for="radio_9">Option 1</label>
																					</span>
																				</div>
																				<div class="radio-inline pl-0">
																					<span class="radio radio-info">																				<input type="radio" name="radio7" id="radio_10" value="option2">
																						<label for="radio_10">Option 2</label>
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															
															<div class="seprator-block"></div>
															
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account-box mr-10"></i>address</h6>
															<hr class="light-grey-hr">
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Address 1</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Address 2</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">City</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">State</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Post Code</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Country</label>
																		<div class="col-md-9">
																			<select class="form-control">
																				<option>Country 1</option>
																				<option>Country 2</option>
																			</select>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
														</div>
														<div class="form-actions mt-10">
															<div class="row">
																<div class="col-md-6">
																	<div class="row">
																		<div class="col-md-offset-3 col-md-9">
																			<button type="submit" class="btn btn-success  mr-10">Submit</button>
																			<button type="button" class="btn btn-default">Cancel</button>
																		</div>
																	</div>
																</div>
																<div class="col-md-6"> </div>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>


			
				<!-- Footer -->
			<?php include("footer.php"); ?>
			<!-- /Footer -->
			</div>
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<?php include("footerscripts.php");?>
	
	
</body>

</html>
