<?php include('header.php');  ?>



<?php include('navbar.php'); ?>


    
    <div class="container page__container pt-4">

        <div class="row">

            <div class="col-md-3">

                <?php include('profile_sidebar.php')  ?>

            </div><!-- end col -->

            <div class="col-md-9 main-tiles">

            	<!-- Accound edit form -->

				<div class="row">
					
					<div class="col-md-4">

                        <div class="card card-body">

                            <div class="d-flex align-items-center">



                                <div class="avatar avatar-lg">

                                    <span class="bg-soft-primary avatar-title rounded-circle text-center text-primary">

                                        <i class="fa fa-check"></i>
                                    </span>

                                </div>

                                <div>

                                    <a href="/bookalorry/userpanel/applications_submitted.php" class="text-muted mb-2">Applications Submitted</a>

                                    <h4 class="m-0 bold">14</h4>

                                </div>



                            </div>

                        </div>

                    </div><!-- End col -->

                    <div class="col-md-4">

                        <div class="card card-body">

                            <div class="d-flex align-items-center">



                                <div class="avatar avatar-lg">

                                    <span class="bg-soft-success avatar-title rounded-circle text-center text-success">

                                        <i class="fa fa-check-circle"></i>

                                    </span>

                                </div>

                                <div>

                                    <a href="/bookalorry/userpanel/applications_approved.php" class="text-muted mb-2">Applications Approved</a>

                                    <h4 class="m-0 bold">592</h4>

                                </div>



                            </div>

                        </div>

                    </div><!-- End col -->

                    <div class="col-md-4">

                        <div class="card card-body">

                            <div class="d-flex align-items-center">



                                <div class="avatar avatar-lg">

                                    <span class="bg-soft-warning avatar-title rounded-circle text-center text-warning">

                                        <i class="fa fa-spinner"></i>

                                    </span>

                                </div>

                                <div>

                                    <a href="/bookalorry/userpanel/applications_under_process.php" class="text-muted mb-2">Applications Under Process</a>

                                    <h4 class="m-0 bold">6</h4>

                                </div>



                            </div>

                        </div>

                    </div><!-- End col -->

                    <div class="col-md-12">
                    		
						<div class="card">
			            	<div class="card-header card-header-large bg-light d-flex align-items-center">
			                    <div class="flex">
			                        <h4 class="card-header__title">Edit Account</h4>
			                    </div>
			                </div>
		                </div>
			            <div class="page__container">
			                <div class="card card-form">
			                    <div class="row no-gutters">
			                        <div class="col-lg-12 card-form__body card-body">
			                            <div class="row">
			                                <div class="col">
			                                    <div class="form-group">
			                                        <label for="fname">First name</label>
			                                        <input id="fname" type="text" class="form-control" placeholder="First name" value="Adrian">
			                                    </div>
			                                </div>
			                                <div class="col">
			                                    <div class="form-group">
			                                        <label for="lname">Last name</label>
			                                        <input id="lname" type="text" class="form-control" placeholder="Last name" value="Demian">
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="form-group">
			                                <label for="desc">Bio / Description</label>
			                                <textarea id="desc" rows="4" class="form-control" placeholder="Bio / description ..."></textarea>
			                            </div>
			                            <div class="form-group">
		                                    <label for="opass">Old Password</label>
		                                    <input id="opass" type="password" class="form-control" placeholder="Old password" value="****">
		                                </div>
		                                <div class="form-group">
		                                    <label for="npass">New Password</label>
		                                    <input id="npass" type="password" class="form-control is-invalid">
		                                    <small class="invalid-feedback">The new password must not be empty.</small>
		                                </div>
		                                <div class="form-group">
		                                    <label for="cpass">Confirm Password</label>
		                                    <input id="cpass" type="password" class="form-control" placeholder="Confirm password">
		                                </div>
			                        </div>
			                    </div>
			                </div>
			                <div class="text-right mb-5">
			                    <a href="" class="btn btn-success">Save</a>
			                </div>
			            </div>

                    </div><!-- End Col -->

				</div>
				<!-- row -->


				

            	<!-- And  Account edit form --> 

            </div><!-- End col -->

        </div>
        <!-- end row -->

    </div>  	



<?php include('footer.php'); ?>