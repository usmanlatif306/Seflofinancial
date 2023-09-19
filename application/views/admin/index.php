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
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin">Seflo Financial</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin">Dashboards</a></li>
                                    <!-- <li class="breadcrumb-item active">Dashboard 2</li> -->
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                   
                    <div class="col-xl-3 col-md-6">
                         <a href="<?php echo base_url();?>admin/index/1">
                        <div class="card-box">
                            <div class="dropdown float-right" style="display: none;">
                               
                                <div class="dropdown-menu dropdown-menu-right">
                                     <!-- 
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                  
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
									-->
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-2">New Applications</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#f05050 "
                                        data-bgColor="#F9B9B9" value="<?php echo $last7days; ?>"
                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                        data-thickness=".15"/>
                                </div>
                                <div class="text-right">
                        <h2 class="mt-3 pt-1 mb-1"> <?php echo $last7days; ?> </h2>
                                <p class="text-muted mb-0">In last 7 days</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        </a>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <a href="<?php echo base_url();?>admin/index/2">
                        <div class="card-box">
                            <div class="dropdown float-right" style="display: none;">
                               
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- 
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                  
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
									-->
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-3">In Process</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#675db7"
                                        data-bgColor="#e8e7f4" value="<?php echo $last30days; ?>"
                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                        data-thickness=".15"/>
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1"> <?php echo $last30days; ?> </h2>
                                    <p class="text-muted mb-0">In last 30 days</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </a>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <a href="<?php echo base_url();?>admin/index/3">
                        <div class="card-box">
                            <div class="dropdown float-right" style="display: none;">
                               
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- 
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                  
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
									-->
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Submitted Applications</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#23b397"
                                        data-bgColor="#c8ece5" value="<?php echo $pending; ?>"
                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                        data-thickness=".15"/>
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1"><?php echo $pending; ?> </h2>
                                    <p class="text-muted mb-0"></p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </a>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <a href="<?php echo base_url();?>admin/index/4">
                        <div class="card-box">
                            <div class="dropdown float-right" style="display: none;">
                              
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- 
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                  
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
									-->
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Approved Applications</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#ffbd4a"
                                        data-bgColor="#FFE6BA" value="<?php echo $approved; ?>"
                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                        data-thickness=".15"/>
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1"> <?php echo $approved; ?> </h2>
                                    <p class="text-muted mb-0">Approved Applications</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </a>
                    </div><!-- end col -->

                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card-box">
                            <div class="dropdown float-right" style="display: none;">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- 
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                  
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
									-->
                                </div>
                            </div>
                            <h4 class="header-title mb-3">Recent Application</h4>

                            <div class="table-responsive">
                               
                                <table class="table table-centered table-borderless table-hover table-nowrap mb-0" id="datatable123">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Id</th>
                                        <th class="border-top-0">Amount Requested</th>
                                        <th class="border-top-0">Purpose</th>
                                        <th class="border-top-0">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                         <?php if(!empty($topapplications)){ 
                        foreach ($topapplications as $key => $value) { ?>
                                    <tr>
                                        <td>
										<a href="<?php echo base_url().'admin/view_application/'.$value['app_id'];?>">
                                            <img src="<?php echo base_url();?>assets/admin/images/users/user-2.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2"><?php echo $value['userdetails']->name." ".$value['userdetails']->lname; ?></span>
                                         </a>
									   </td>
                                        <td>
                                          
                                            <span class="ml-2">L-<?php  echo $value['app_no'];?></span>
                                        </td>
                                        <td><?php  
										if($value['amount_needed']==0){
				                        echo "NA";
				                     }else{
					               echo '$'.$value['amount_needed'];
				                 }
										?></td>
                                        <td><?php  echo $value['purpose'];?></td>
                                        <td>
                                            <?php if($value['app_status']=='Not Submitted'){ ?>
                                            <span class="badge badge-pill badge-danger"><?php  echo $value['app_status'];?></span>
                                    <?php }else if($value['app_status']=='Pending') { ?>
                                            
                                             <span class="badge badge-pill badge-info"><?php  echo $value['app_status'];?></span> 
                                            
                                            <?php }else{ ?>
                                            
                                              <span class="badge badge-pill badge-success"><?php  echo $value['app_status'];?></span> 
                                            
                                            <?php } ?>
                                            
                                            </td>
                                    </tr>
                                    
                                    
                                    <?php } } ?>
                                   
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive -->

                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                </div>
                <!-- end row -->

                
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
                            <div class="inbox-item-img"><img src="<?php echo base_url();?>assets/admin/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="<?php echo base_url();?>assets/admin/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
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

        <!-- Third Party js-->
        <script src="<?php echo base_url();?>assets/admin/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/libs/peity/jquery.peity.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/libs/apexcharts/apexcharts.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/libs/datatables/dataTables.bootstrap4.js"></script>
        <script src="<?php echo base_url();?>assets/admin/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/libs/datatables/responsive.bootstrap4.min.js"></script>
        <!-- third party js ends -->

        <!-- Dashboard init -->
        <script src="<?php echo base_url();?>assets/admin/js/pages/dashboard-2.init.js"></script>

        <!-- App js-->
        <script src="<?php echo base_url();?>assets/admin/js/app.min.js"></script>
        
    </body>
</html>