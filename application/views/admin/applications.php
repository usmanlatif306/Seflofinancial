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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/application">Applications</a></li>
                    <!--<li class="breadcrumb-item active">Grid View</li>-->
                  </ol>
                </div>
                
                <?php echo $this->session->flashdata('message'); ?>
                <h4 class="page-title">Applications</h4>
              </div>
            </div>
          </div>     
          <!-- end page title --> 
          <div class="row">
            <div class="col-sm-9">
              <div class="card">
                <div class="card-body">
                  <div id="cardCollpase4" class="collapse pt-3 show">
                    <div class="row align-center">
                      <div class="col-md-3 col-12">
                        <h4 class="header-title mb-0">Application Number</h4>
                      </div>
                      <div class="col-md-4 col-12">
                        <!-- <div class="custom-search">
                          <form class="app-search">
                            <div class="app-search-box">
                              <div class="input-group">
                                <input type="text" class="form-control" id="search" placeholder="Search...">
                                <div class="input-group-append">
                                  <button class="btn" type="submit">
                                    <i class="fe-search"></i>
                                  </button>
                                </div>
                              </div>
                            </div>

                          </form>

                        </div> -->  </div>
                        <div class="col-md-4 col-12">
                          <div id="btnContainer">
                            <button class="btn-gray" id="list" onclick="showList()"><i class="fa fa-bars"></i> List</button> 
                            <button class="btn-gray activ" id="grid" onclick="showGrid()"><i class="fa fa-th-large"></i> Grid</button>
                            <script type="text/javascript">
                                function showGrid() {
                                  document.getElementById('gridvw').style.display = 'block';
                                  document.getElementById('example_wrapper').style.display = 'none';
                                }
                                function showList() {
                                  document.getElementById('gridvw').style.display = 'none';
                                  document.getElementById('example_wrapper').style.display = 'block';
                                }
                            </script>
                          </div>
                        </div>
                      </div> <!-- end row-->
                      <div class="marg-btom25"></div>
                      <div class="row" id="gridvw">

                      <?php if(!empty($topapplications)){ 
                        foreach ($topapplications as $key => $value) {
                        //echo '<pre>'; print_r($value); echo '</pre>'; ?>
                        <div class="column info-box">                   
                          <div class="card">
                            <div class="card-header">
                              <div class="row">
                                
                                <div class="col-sm-12 text-center">
                                  <span class="alert-icon"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
                                  <p><b>L-<?php  echo $value['app_no'];?></b></p>
                                </div>
                                <div class="col-sm-12 text-center">
                                  <h4 class="card-title"><?php echo $value['userdetails']->name." ".$value['userdetails']->lname; ?></h4>
                                  <span class="label-common">    <?php  echo $value['app_status'];?></span>
                                  <!-- <span class="label-common label-submit">    Submitted</span> -->
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-6">
                                  <p><b>Amount Requested:</b></p>
                                  <p><?php 
								  if($value['amount_needed']==0){
				                        echo "NA";
				                     }else{
					               echo '$'.$value['amount_needed'];
				                 }
								  ?></p>
                                </div>
                                <div class="col-sm-6">
                                  <p><b>Purpose:</b></p>
                                  <p><?php  echo $value['purpose'];?></p>
                                </div>
                                <div class="col-sm-12">
                                  <p><b>Application Date:</b></p>
                                  <p><?php  echo $value['submission_date'];?></p>
                                </div>
                               <!-- <div class="col-sm-6">
                                  <p><b>Business Name:</b></p>
                                  <p><?php  echo $value['userdetails']->business_name;?></p>
                                </div>-->
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <a href="<?php echo base_url().'admin/view_application/'.$value['app_id'];?>">
                                    <button type="button" class="btn btn-success" >View</button>
                                  </a>
                                </div>
								<div class="col-md-4">
                                  <a href="<?php echo base_url().'admin/create_pdf/'.$value['app_id'];?>">
                                    <button type="button" class="btn btn-primary" >Pdf</button>
                                  </a>
                                </div>
                                <div class="col-md-4">
                                  <a href="<?php echo base_url().'admin/delete/'.$value['app_no'];?>">
                                   <img src="<?php echo base_url(); ?>assets/delete-forever.png" style="width:69%;margin-top:-4px">
                                  </a>
                                </div>
                                
                                
                                
                              </div>
                            </div>
                            <div class="card-footer"> <h4 class="card-title"><?php  echo $value['submission_date'];?></h4></div>
                          </div>                
                        </div>  

                      <?php } }else{echo '<span class="label-common label-submit">No Applications Yet!</span>';} ?>

                      </div>
                                            <div class="row">
                          <div class="col-md-12">
                              <div style="overflow-x:auto;">
							
                                                 <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                  <th>ID</th>
                <th>Amount Requested:</th>
                <th>Purpose:</th>
                <th>Application Date:</th>
                <th>Status:</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           <?php if(!empty($applications)){ 
                        foreach ($applications as $key => $value) {
                        /*echo '<pre>'; print_r($value); echo '</pre>'; die;*/ ?>
            <tr>
                 <td><?php echo $value['userdetails']->name." ".$value['userdetails']->lname; ?></td>
                <td>L-<?php  echo $value['app_no'];?></td>
                <td><?php  
				if($value['amount_needed']==0){
				   echo "NA";
				}else{
					echo '$'.$value['amount_needed'];
				}
				?></td>
                <td><?php  echo $value['purpose'];?></td>
                <td><?php  echo $value['submission_date'];?></td>
                <td> <?php if($value['app_status']=='Not Submitted'){ ?>
                                            <span class="badge badge-pill badge-danger"><?php  echo $value['app_status'];?></span>
                                    <?php }else if($value['app_status']=='Pending') { ?>
                                            
                                             <span class="badge badge-pill badge-info"><?php  echo $value['app_status'];?></span> 
                                            
                                            <?php }else{ ?>
                                            
                                              <span class="badge badge-pill badge-success"><?php  echo $value['app_status'];?></span> 
                                            
                                            <?php } ?></td>
                <td>
                  <a href="<?php echo base_url('admin/view_application/'.$value['app_id']); ?>" class="label-submit label-common">View</a>
                  
                  <a href="<?php echo base_url('admin/create_pdf/'.$value['app_id']); ?>" class="label-submit label-common">Pdf</a>
                  
                   <a href="<?php echo base_url().'admin/delete/'.$value['app_no'];?>">
                                   <img src="<?php echo base_url(); ?>assets/delete-forever.png" style="width:32%">
                                  </a>
                  <!-- <button type="button" class="label-submit label-common">View</button> -->
                </td>
                <!-- <button type="button" class="label-submit label-common">Submitted</button> -->
            </tr>
            
              <?php }} ?>
        </tbody>
      
    </table>
                              </div>
               
                          </div>
                      </div>
                    </div> <!-- collapsed end -->
                  </div> <!-- end card-body -->
                </div> <!-- end card-->
              </div> <!-- end col-->
              <div class="col-sm-3">
                <!-- Portlet card -->
                <div class="card">
                  <div class="card-body">

                    <h4 class="header-title mb-0">Recent Activities</h4>
                    <div class="slimScrollDiv recent-update notification-list"><div class="slimscroll noti-scroll">

                      <!-- item-->
                         <?php if(!empty($topapplications)){ 
                        foreach ($topapplications as $key => $value) {
                    $t=str_replace("am","",$value['submission_date']);
                    $t=str_replace("pm","",$value['submission_date']);     
                       
                        ?>
                        
                      
                      <a href="<?php echo base_url('admin/viewApplication/'.$value['app_no']); ?>" class="dropdown-item notify-item active">
                        <div class="notify-icon">
                          <span><?php  echo date("M d", strtotime($t));?>,<br>
                         <?php  echo date("Y", strtotime($t));?></span></div>
                          <p class="notify-details">L-<?php  echo $value['app_no'].' '.$value['userdetails']->name;?>  has submitted a new application.</p>
                          <p class="text-muted mb-0 user-msg">
                            <small><?php  echo date("H:i a", strtotime($t));?></small>
                          </p>
                        </a>
<?php } } ?>
                       
                            </div>
                            <div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 8px; position: absolute; top: 0px; opacity: 0.4; display: none; 
                            border-radius: 7px; z-index: 99; right: 1px; height: 124.764px;"></div>
                            <div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px;
                            background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>

                          </div> <!-- end card-->
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
            <?php include('footerscripts.php');?>
<style>
    .column {
    width: 33%;
  }
  
  b{
      font-size:12px;
  }
  p {
   
    font-size: 12px;
}
.card-footer .card-title {
   
    font-size: 13px !important;
}

.btn-success {
  
    font-size: 13px !important;
}
    
@media screen and (min-width: 480px) and (max-width: 767px) {

 .column {
    width: 100%;
  }

    
    
    
</style>
                  
</body>
</html>