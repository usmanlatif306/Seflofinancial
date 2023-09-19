<!DOCTYPE html>
<html lang="en">
<!-- Header Begins -->

	<?php include("header.php"); ?>

<!-- Header Ends -->

<body>
	
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
					  <h5 class="txt-dark">Completed Applictions</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>Applications</span></a></li>
						<li class="active"><span>completed</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Completed Applications</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_1" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>Name</th>
														<th>Loan Type</th>
														<th>Purpose</th>
														<th>Amount Requested</th>
														<th>Application Date</th>
														<th>Status</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>Name</th>
														<th>Loan Type</th>
														<th>Purpose</th>
														<th>Amount Requested</th>
														<th>Application Date</th>
														<th>Status</th>
													</tr>
												</tfoot>
												<tbody>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>61</td>
														<td>2011/04/25</td>
														<td><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></td>
													</tr>
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->
				
			</div>
			
			<!-- Footer -->
			<?php include("footer.php"); ?>
			<!-- /Footer -->
			
			
		</div>
		<!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	<!-- jQuery -->
    <script src="<?php echo base_url();?>assets/admin/vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- Data table JavaScript -->
	<script src="<?php echo base_url();?>assets/admin/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/dist/js/dataTables-data.js"></script>
	<!-- Slimscroll JavaScript -->
	<script src="<?php echo base_url();?>assets/admin/dist/js/jquery.slimscroll.js"></script>
	<!-- Owl JavaScript -->
	<script src="<?php echo base_url();?>assets/admin/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	<!-- Switchery JavaScript -->
	<script src="<?php echo base_url();?>assets/admin/vendors/bower_components/switchery/dist/switchery.min.js"></script>
	<!-- Fancy Dropdown JS -->
	<script src="<?php echo base_url();?>assets/admin/dist/js/dropdown-bootstrap-extended.js"></script>
	<!-- Init JavaScript -->
	<script src="<?php echo base_url();?>assets/admin/dist/js/init.js"></script>
</body>

</html>
