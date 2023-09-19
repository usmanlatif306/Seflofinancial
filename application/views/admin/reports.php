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
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/reports">Reports</a></li>
                                    <!-- <li class="breadcrumb-item active">Dashboard 2</li> -->
                                </ol>
                            </div>
                            <h4 class="page-title">Reports</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                   
                    <div class="col-xl-6 col-md-6">
                         <a href="<?php echo base_url();?>admin/index/1">
                        <div class="card-box">
                         <div>
                          <canvas id="myChart"></canvas>
                          <input type="hidden" name="allapplications" id="allapplications" value="<?php echo $allapplications; ?>">
                          <input type="hidden" name="approved" id="approved" value="<?php echo $approved; ?>">
                          <input type="hidden" name="pending" id="pending" value="<?php echo $pending; ?>">
                          <input type="hidden" name="rejected" id="rejected" value="<?php echo $rejected; ?>">
                        </div>
                        </div>
                        </a>
                    </div><!-- end col -->

                    <div class="col-xl-6 col-md-6">
                        <a href="<?php echo base_url();?>admin/index/2">
                        <div class="card-box">
                            <div>
                          <canvas id="myChart1"></canvas>
                            <input type="hidden" name="total_amt" id="total_amt" value="<?php echo $total_amt; ?>">
                          <input type="hidden" name="total_amt_accepted" id="total_amt_accepted" value="<?php echo $total_amt_accepted; ?>">
                          <input type="hidden" name="total_amt_rejected" id="total_amt_rejected" value="<?php echo $total_amt_rejected; ?>">
                          
                        </div>
                        </div>
                    </a>
                    </div><!-- end col -->

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





        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');
  var allapplications = $('#allapplications').val();
  var approved = $('#approved').val();
  var pending = $('#pending').val();
  var rejected = $('#rejected').val();

  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['All', 'Approved', 'Pending', 'Rejected'],
      datasets: [{
        label: '# of Applications in 6 months',
        data: [allapplications, approved, pending, rejected],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          //beginAtZero: true
           min: 1,
           max: 6,
        }
      }
    }
  });  


  var total_amt = $('#total_amt').val();
  var total_amt_accepted = $('#total_amt_accepted').val();
  var total_amt_rejected = $('#total_amt_rejected').val();



  const ctx1 = document.getElementById('myChart1');
  new Chart(ctx1, {
    type: 'line',
    data: {
      labels: ['Total Amount', 'Approved', 'Rejected'],
      datasets: [{
        label: '# of Applications in a Month',
        data: [total_amt, total_amt_accepted, total_amt_rejected],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {

          min: 0,
          max: 10000,
        }
      }
    }
  });  


</script>
        
    </body>
</html>