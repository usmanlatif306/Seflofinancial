<!DOCTYPE html>
<html lang="en">
    <!-- Header Begins -->
   <?php include('header.php');?>
   <!-- Header Ends -->

    <body>

        <!-- Navigation Bar-->
      <?php include('header-topbar.php');?>
      <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/profilesetting">Settings</a></li>
                                    <li class="breadcrumb-item active">Settings</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Settings</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 
                <div class="row">
                	<div class="col-lg-4 col-xl-4">
                        <div class="card-box text-center">
                            <img src="<?php echo base_url(); ?>assets/admin/images/users/user-1.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                            <h4 class="mb-0"><?php echo  $details['firstname']." ".$details['lastname']; ?></h4>
                            <p class="text-muted">@Admin</p>

                            <a href="<?php echo base_url() . 'admin'; ?>" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Dashboard</a>
                            <a href="<?php echo base_url() . 'admin/application'; ?>" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Applications</a>

                            <div class="text-left mt-3">
                                <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2"><?php echo  $details['firstname']." ".$details['lastname']; ?></span></p>
                                <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2"><?php echo  $details['phone']; ?></span></p>
                                <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 "><?php echo  $details['Email']; ?></span></p>
                                <!-- <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ml-2"><?php echo  $details['Location']; ?></span></p> -->
                            </div>
                        
                        </div> <!-- end card-box -->
                    </div>
                    <?php //echo '<pre>'; print_r($_SESSION); echo '</pre>'; ?>
                    <div class="col-lg-8 col-xl-8">
                        <div class="card-box">
                            <ul class="nav nav-pills navtab-bg">
                                <li class="nav-item">
                                    <!-- <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                        <i class="mdi mdi-settings-outline mr-1"></i>Settings
                                    </a> -->
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane show active" id="settings">
                                     <?php if($this->session->flashdata('success')) { ?>
                                            <div class="alert alert-success col-12 alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <strong>Success :</strong> <?php echo $this->session->flashdata('success'); ?>
                                            </div>
                                        <?php } ?>

                                         <?php if($this->session->flashdata('error')) { ?>
                                            <div class="alert alert-danger col-12 alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <strong>Error :</strong> <?php echo $this->session->flashdata('error'); ?>
                                            </div>
                                        <?php } ?>
                                    <form action="<?php echo base_url().'Admin/update_profile/'.$_SESSION['briskloanz'];?>" method="post" enctype="multipart/form-data">
                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstname">First Name</label>
                                                    <input type="text" class="form-control" name="firstname" placeholder="Enter first name" value="<?php echo  $details['firstname']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastname">Last Name</label>
                                                    <input type="text" class="form-control" name="lastname" placeholder="Enter last name" value="<?php echo  $details['lastname']; ?>">
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstname">Mobile</label>
                                                    <input type="text" class="form-control" name="phone" placeholder="Enter Mobile" value="<?php echo  $details['phone']; ?>">
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastname">Location</label>
                                                    <input type="text" class="form-control" name="Location" placeholder="Enter last name" value="<?php echo  $details['Location']; ?>">
                                                </div>
                                            </div> --> <!-- end col -->
                                        </div> <!-- end row -->

                                        <!-- <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="userbio">Bio</label>
                                                    <textarea class="form-control" name="bio" rows="4" placeholder="Write something..."><?php echo  $details['bio']; ?></textarea>
                                                </div>
                                            </div> 
                                        </div>  -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="useremail">Email Address</label>
                                                    <input type="email" class="form-control" name="Email" placeholder="Enter email" value="<?php echo  $details['Email']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="userpassword">Password</label>
                                                    <input type="password" class="form-control" name="password" placeholder="Enter password" value="<?php echo  $details['password']; ?>">
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Company Info</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="companyname">Company Name</label>
                                                    <input type="text" class="form-control" name="company_name" placeholder="Enter company name" value="<?php echo  $details['company_name']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cwebsite">Website</label>
                                                    <input type="text" class="form-control" name="website" placeholder="Enter website url" value="<?php echo  $details['website']; ?>">
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- end settings content-->

                            </div> <!-- end tab-content -->
                        </div> <!-- end card-box-->

                    </div> <!-- end col -->
                </div>
                <!-- end row-->

                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!-- Footer Start -->
        <?php include('footer.php');?>
        <!-- end Footer -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="<?php echo base_url();?>assets/admin/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
            
                    <h5><a href="javascript: void(0);">Marcia J. Melia</a> </h5>
                    <p class="text-muted mb-0"><small>Product Owner</small></p>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <div class="row">
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                </div>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                        <label class="custom-control-label" for="customSwitch1">Notifications</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2">API Access</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                        <label class="custom-control-label" for="customSwitch3">Auto Updates</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                        <label class="custom-control-label" for="customSwitch4">Online Status</label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="<?php echo base_url(); ?>assets/admin/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="<?php echo base_url(); ?>assets/admin/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="<?php echo base_url();?>assets/admin/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="<?php echo base_url();?>assets/admin/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="<?php echo base_url();?>assets/admin/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="<?php echo base_url();?>assets/admin/js/vendor.min.js"></script>

        <!-- App js-->
        <script src="<?php echo base_url();?>assets/admin/js/app.min.js"></script>
        
    </body>
</html>