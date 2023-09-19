<!DOCTYPE html>
<html lang="en">
   <!-- Header Begins -->
   <?php include('header.php');?>
   <!-- Header Ends -->
   <body>
      <!-- Navigation Bar-->
      <?php include('header-topbar.php');?>
      <!-- End Navigation Bar-->
      <div class="wrapper">
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box">
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/applications">Application</a></li>
                        <li class="breadcrumb-item active">John's Applications</li>
                     </ol>
                  </div>
                  <h4 class="page-title">Topbar Dark</h4>
               </div>
            </div>
         </div>
         <!-- end page title --> 
         <div class="page-4">
            <div class="row">
               <div class="col-md-8">
                  <section id="tabs">
                     <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab1" role="tablist">
                           <a class="nav-item nav-link active" id="View-App-tab" data-toggle="tab" href="#View-App" role="tab" aria-controls="View-App" aria-selected="false">View Application</a>
                           <a class="nav-item nav-link" id="overview-tab" data-toggle="tab" href="#overvew-tb" role="tab" aria-controls="overvew-tb" aria-selected="true">Overview</a>
                        </div>
                     </nav>
                     <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="View-App" role="tabpanel" aria-labelledby="View-App-tab">
                           <div class="card virtual-left">
                              <div class="card-body">
                                 <?php 
                                    foreach ($data as $row) { 
                                 ?>
                                 <div id="cardCollpase4" class="collapse pt-3 show">
                                    <div class="row align-center">
                                       <div class="col-md-8 col-12">
                                          <h4 class="header-title mb-0"><?php 
                                    echo $row->business_name;
                                   ?></h4>
                                       </div>
                                       <div class="col-md-4 col-12 text-right">
                                          <button type="button" class="btn btn-info">Application# <?php echo $row->application_No; ?></button>
                                       </div>
                                    </div>
                                    <!-- end row-->
                                    <div class="marg-btom25"></div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="blue-gray">
                                             <ul>
                                                <li>
                                                   <p><b>Submitted</b></p>
                                                   <p><?php echo $row->submit_date;?></p>
                                                </li>
                                                <li>
                                                   <p><b>Under Review</b></p>
                                                   <p>--</p>
                                                </li>
                                                <li>
                                                   <p><b>Application Under Process</b></p>
                                                   <p>--</p>
                                                </li>
                                                <li>
                                                   <p><b>Funding Approval</b></p>
                                                   <p>--</p>
                                                </li>
                                                <div class="clear"></div>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <ul class="white-panel">
                                             <li>
                                                <div class="widlft50">
                                                   <p><b>Amount Requested:</b></p>
                                                   <p>$<?php echo $row->amount_Required; ?></p>
                                                </div>
                                                <div class="widrht50 text-right"><img src="<?php echo base_url();?>assets/images/sales.png"></div>
                                                <div class="clear"></div>
                                             </li>
                                             <li>
                                                <div class="widlft50">
                                                   <p><b>Funding Purpose:</b></p>
                                                   <p><?php echo $row->purpose_Loan; ?></p>
                                                </div>
                                                <div class="widrht50 text-right"><img src="<?php echo base_url();?>assets/images/money.png"></div>
                                                <div class="clear"></div>
                                             </li>
                                             <li>
                                                <div class="widlft50">
                                                   <p><b>
                                                      Most Important Factor:</b>
                                                   </p>
                                                   <p><?php echo $row->important_Factor; ?></p>
                                                </div>
                                                <div class="widrht50 text-right"><img src="<?php echo base_url();?>assets/images/percentage.png"></div>
                                                <div class="clear"></div>
                                             </li>
                                             <div class="clear"></div>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="login-or">
                                             <hr class="hr-or">
                                             <span class="span-or">Basic Information</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b> Amount Requested </b></p>
                                                <p>$<?php echo $row->amount_Required; ?></p>
                                             </li>
                                             <li>
                                                <p><b>Business Start Date</b></p>
                                                <p><?php echo $row->bussiness_St_Date; ?></p>
                                             </li>
                                             <li>
                                                <p><b>Monthly Sales</b></p>
                                                <p>$ <?php echo $row->monthly_Turnover; ?></p>
                                             </li>
                                             <li>
                                                <p><b>Annual Sales</b></p>
                                                <p>$<?php echo $row->annual_Revenue; ?></p>
                                             <li>
                                                <p><b>Legal Structure</b></p>
                                                <p><?php echo $row->legal_structure; ?>
                                                </p>
                                             </li>
                                             <li>
                                                <p><b>Purose </b></p>
                                                <p><?php echo $row->purpose_Loan; ?></p>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="login-or">
                                             <hr class="hr-or">
                                             <span class="span-or">Business Information</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b>Legal Name</b></p>
                                                <p><?php echo $row->business_name;?></p>
                                             </li>
                                             <li>
                                                <p><b>Full Address</b></p>
                                                <p><?php echo $row->office_address; echo "  "; echo $row->office_city;  echo ",".$row->office_state; echo " ".$row->office_country; ?></p>
                                             </li>
                                             <li>
                                                <p><b>Business Facility Type</b></p>
                                                <p><?php echo $row->own_lea_mor; ?></p>
                                             </li>
                                             <li>
                                                <p><b>Existing Debt if any</b></p>
                                                <p><?php echo $row->existing_debt;?><?php echo $row->debt_why; ?></p>
                                             </li>
                                             <li>
                                                <p><b>Prior Bankruptcy if any</b></p>
                                                <p><?php echo $row->prior_bankrupt;?><?php echo $row->bankrupt_why; ?></p>
                                             </li>
                                             <li>
                                                <p><b>Tax/Employer Identification Number:</b></p>
                                                <p><?php echo $row->bus_Tax_id; ?></p>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b> Industry:</b></p>
                                                <p><?php echo $row->industry_class;?></p>
                                             </li>
                                             <li>
                                                <p><b>Sub Industry:</b></p>
                                                <p><?php echo $row->industry_subclass; ?></p>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- collapsed end -->
                              </div>
                              <!-- end card-body -->
                           </div>
                           <!-- end card-->
                           <div class="card virtual-left">
                              <div class="card-body">
                                 <div id="cardCollpase4" class="collapse pt-3 show">
                                    <div class="row align-center">
                                       <div class="col-md-4 col-12">
                                          <h4 class="header-title mb-0"><?php echo $row->business_name; ?></h4>
                                       </div>
                                       <div class="col-md-4 col-12">
                                          <span class="label-common label-submit">    Submitted</span>
                                       </div>
                                       <div class="col-md-4 col-12 text-right">
                                          <button type="button" class="btn btn-info"><i class="fa fa-download"></i>
                                          Application# LN - <?php echo $row->application_No; ?></button>
                                       </div>
                                    </div>
                                    <!-- end row-->
                                    <div class="marg-btom25"></div>
                                    <div class="row">
                                       <div class="col-sm-4 brder-right brder-botom">
                                          <div class="row">
                                             <div class="col-6">
                                                <p><b>Business Name</b></p>
                                                <p><?php echo $row->business_name; ?></p>
                                             </div>
                                             <div class="col-6 text-right">
                                                <img src="<?php echo base_url();?>assets/images/sales.png"/>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-4 brder-right brder-botom">
                                          <div class="row">
                                             <div class="col-6">
                                                <p><b>Owner's Name</b></p>
                                                <p><?php echo $row->firstname; echo " ".$row->lastname; ?></p>
                                             </div>
                                             <div class="col-6 text-right">
                                                <img src="<?php echo base_url();?>assets/images/money.png"/>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-4 brder-right brder-botom">
                                          <div class="row">
                                             <div class="col-6">
                                                <p><b> Owner's Email</b></p>
                                                <p><?php echo $row->email; ?></p>
                                             </div>
                                             <div class="col-6 text-right">
                                                <img src="<?php echo base_url();?>assets/images/percentage.png"/>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-4 brder-right">
                                          <div class="row">
                                             <div class="col-6">
                                                <p><b> Phone Number</b></p>
                                                <p><?php echo $row->phone; ?></p>
                                             </div>
                                             <div class="col-6 text-right">
                                                <img src="<?php echo base_url();?>assets/images/sales.png"/>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-4 brder-right">
                                          <div class="row">
                                             <div class="col-6">
                                                <p><b>Time in Business</b></p>
                                                <p>Since : <?php echo $row->bussiness_St_Date;?></p>
                                             </div>
                                             <div class="col-6 text-right">
                                                <img src="<?php echo base_url();?>assets/images/sales.png"/>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-4 brder-right">
                                          <div class="row">
                                             <div class="col-6">
                                                <p><b>Preffered Account Software</b></p>
                                                <p>---</p>
                                             </div>
                                             <div class="col-6 text-right">
                                                <img src="<?php echo base_url();?>assets/images/percentage.png"/>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="marg-btom25"></div>
                                    <div class="row align-center">
                                       <div class="col-md-12">
                                          <h4 class="header-title mb-0">Filled by:-</h4>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-4 brder-right brder-botom">
                                          <div class="row">
                                             <div class="col-6">
                                                <p><b> Name</b></p>
                                                <p><?php echo $row->ac_name; ?>
                                                   <?php echo $row->client_name; ?>
                                                </p>
                                             </div>
                                             <div class="col-6 text-right">
                                                <img src="<?php echo base_url();?>assets/images/sales.png"/>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-4 brder-right brder-botom">
                                          <div class="row">
                                             <div class="col-6">
                                                <p><b>Email</b></p>
                                                <p><?php echo $row->ac_email; ?>
                                                   <?php echo $row->client_email; ?>
                                                </p>
                                             </div>
                                             <div class="col-6 text-right">
                                                <img src="<?php echo base_url();?>assets/images/percentage.png"/>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-4 brder-botom padtp20">
                                          <div class="row">
                                             <div class="col-6">
                                                <p><b>Phone Number</b></p>
                                                <p><?php echo $row->ac_phone; ?>
                                                   <?php echo $row->client_phone; ?>
                                                </p>
                                             </div>
                                             <div class="col-6 text-right">
                                                <img src="<?php echo base_url();?>assets/images/sales.png"/>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="login-or">
                                             <hr class="hr-or">
                                             <span class="span-or">Documents Attached</span>
                                          </div>
                                          <ul class="download-list">
                                             <li><a href="<?php echo base_url();?>assets/steps/uploads/<?php echo $row->bank_statement; ?>" download><?php echo $row->bank_statement; ?></a></li>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->balance_sheet; ?>" download><?php echo $row->balance_sheet;  ?></a></li>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->pl_account; ?>" download><?php echo $row->pl_account; ?></a></li>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->cashflow; ?>" download><?php echo $row->cashflow; ?></a></li>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->tax_return; ?>" download><?php echo $row->tax_return; ?></a></li>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->ssn_copy; ?>" download><?php echo $row->ssn_copy; ?></a></li>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->dl; ?>" download><?php echo $row->dl; ?></a></li>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->passport; ?>" download><?php echo $row->passport; ?></a></li>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->tax_id; ?>" download><?php echo $row->tax_id; ?></a></li>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->aoi; ?>" download><?php echo $row->aoi; ?></a></li>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->v_cheque; ?>" download><?php echo $row->v_cheque; } ?></a></li>
                                          </ul>
                                       </div>
                                       <!-- collapsed end -->
                                    </div>
                                    <!-- end card-body -->
                                 </div>
                                 <!-- end card-->   
                              </div>
                           </div>
<form class="msform" method="post" action="<?php echo base_url() . 'admin/status'?>">
   <input type="hidden" id="last" name="last" value="<?php foreach($data as $row){echo $row->id; } ?>"/>

                           <!-- end card-body -->
                           <div class="card virtual-left">
                              <div class="card-body">
                                 <div id="cardCollpase4" class="collapse show">
                                    <!-- end row-->
                                    <div class="row">
                                       <div class="col-md-6 mx-auto">
                                          <div class="row align-center">
                                             <div class="col-md-4">
                                                <label for="example-select">Update Status</label>
                                             </div>
                                             <div class="col-md-8">
                                                <select class="form-control custom-select" name="status" id="example-select">
                                                   <option>Documents Pending</option>
                                                   <option>Documents Received</option>
                                                   <option>File Submitted</option>
                                                   <option>Under Review</option>
                                                   <option>Accepted</option>
                                                   <option>Rejected</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12 text-center">
                                                <div class="marg-btom25"></div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light mb-2">Submit</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end card-body -->
                                 </div>
                              </form>
                                 <!-- end card-->   
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="overvew-tb" role="tabpanel" aria-labelledby="overview-tab">
                           <div class="card virtual-left">
                              <div class="card-body">
                                 <div id="cardCollpase4" class="collapse pt-3 show">
                                    <?php foreach($data as $row){?>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="blue-gray">
                                             <div class="col-md-8 mx-auto">
                                                <div class="row align-center">
                                                   <div class="col-md-4">
                                                      <label for="example-select marg-top10">Status</label>
                                                   </div>
                                                   <div class="col-md-8">
                                                      <select class="form-control custom-select" name="status" id="example-select">
                                                         <option  <?php if($row->status == 'Documents Pending'){
                                                            echo "selected";
                                                         } ?>>Documents Pending</option>
                                                         <option <?php if($row->status == 'Documents Received'){
                                                            echo "selected";
                                                         } ?>>Documents Received</option>
                                                         <option <?php if($row->status == 'File Submitted'){
                                                            echo "selected";
                                                         } ?>>File Submitted</option>
                                                         <option <?php if($row->status == 'Under Review'){
                                                            echo "selected";
                                                         } ?>>Under Review</option>
                                                         <option <?php if($row->status == 'Accepted'){
                                                            echo "selected";
                                                         } ?>>Accepted</option>
                                                         <option <?php if($row->status == 'Rejected'){
                                                            echo "selected";
                                                         } ?>>Rejected</option>
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="marg-btom25"></div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="blue-gray">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <h4 class="header-title mb-3"><?php echo $row->business_name; ?></h4>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <ul>
                                                      <li>
                                                         <p><b> Application</b></p>
                                                         
                                                         <p><?php echo $row->application_No; ?></p>
                                                      </li>
                                                      <li>
                                                         <p><b>Amount</b></p>
                                                         <p>$<?php echo $row->amount_Required; ?></p>
                                                      </li>
                                                      <li>
                                                         <p><b>Application Date</b></p>
                                                         <p><?php echo $row->submit_date; ?></p>
                                                      </li>
                                                      <li>
                                                         <p><b>Loan Purpose</b></p>
                                                         <p><?php echo $row->purpose_Loan; } ?></p>
                                                      </li>
                                                      
                                                      <div class="clear"></div>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
</form>
                                    <div class="marg-btom25"></div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="blue-gray">
                                             <section id="tabs">
                                                <nav>
                                                   <div class="nav nav-tabs nav-fill" id="nav-tab1" role="tablist">
                                                      <a class="nav-item nav-link" id="Add-Note-tab" data-toggle="tab" href="#Add-Note" role="tab" aria-controls="Add-Note" aria-selected="false">Add Note</a>
                                                      <a class="nav-item nav-link" id="send-email-tab" data-toggle="tab" href="#send-email" role="tab" aria-controls="send-email" aria-selected="false">Send Email</a>
                                                      <a class="nav-item nav-link active" id="nav-document-tab" data-toggle="tab" href="#nav-document" role="tab" aria-controls="nav-document" aria-selected="true">Documents</a>
                                                   </div>
                                                </nav>
                                                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                                   <div class="tab-pane fade" id="Add-Note" role="tabpanel" aria-labelledby="Add-Note-tab">
                                                      <div class="modal" id="myModal">
                                                         <div class="modal-dialog">
                                                            <div class="modal-content">
                                                               <!-- Modal Header -->
                                                               <div class="modal-header">
                                                                  <h2 class="modal-title">Add New Note</h2>
                                                                  <button type="button" class="close" data-dismiss="modal">×</button>
                                                               </div>
                                                               <!-- Modal body -->
                                                               <div class="modal-body">
                                                                  <form method="post" action="<?php echo base_url() . 'admin/note'?>">
                                                                     <input type="hidden" id="last" name="last" value="<?php foreach($data as $row){echo $row->id; }?>"/>

                                                                     <div class="form-group">
                                                                        <label for="sel1">Status:</label>
                                                                        <select class="form-control" name="status" id="sel1">
                                                                           <option>Reviewing Application</option>
                                                                           <option>In Progress</option>
                                                                           <option>Pending</option>
                                                                           <option>Approved</option>
                                                                           <option>Declined</option>
                                                                        </select>
                                                                     </div>
                                                                     <div class="form-group">
                                                                        <label for="comment">Add Note:</label>
                                                                        <textarea class="form-control" name="message" rows="5" id="comment"></textarea>
                                                                     </div>
                                                                     <button type="submit" class="btn btn-primary">Save</button>
                                                                  </form>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            Internal Notes and Messages Among Trainers:
                                                         </div>
                                                         <div class="col-md-6 text-right">
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add New Mote</button>
                                                         </div>
                                                      </div>
                                                      <div class="marg-btom25"></div>
                                                      <?php foreach($mes as $r){?>
                                                      <div class="row">
                                                         <div class="col-md-12">
                                                            <div class="card">
                                                               <div class="card-body">
                                                                  <h5><b>Status: <span class="blu-text"><?php echo $r->status_m?></span></b></h5>
                                                                  <p><?php echo $r->message?></p>
                                                                  <h5><b>Writer: <?php echo $r->msg_sub_by;?></b></h5>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   <?php } ?>
                                                     
                                                      
                                                   </div>
                                                   <div class="tab-pane fade" id="send-email" role="tabpanel" aria-labelledby="send-email-tab">
                                                      <div class="inbox-rightbar">
                                                         <div class="mt-4">
                                                            <form method="post" action="<?php echo base_url() . 'admin/mail'?>">
                                          <input type="hidden" id="last" name="last" value="<?php foreach($data as $row){echo $row->id; }?>"/>
                                                               <div class="form-group">
                                                                  <input type="email" name="to" class="form-control" placeholder="To">
                                                               </div>
                                                               <div class="form-group">
                                                                  <input type="text" name="subject" class="form-control" placeholder="Subject">
                                                               </div>
                                                               <div class="form-group">
                                                                  <div class="summernote" style="display: none;">
                                                                   <!--  <h6>Hello Summernote</h6>
                                                                     <ul>
                                                                        <li>
                                                                           Select a text to reveal the toolbar.
                                                                        </li>
                                                                        <li>
                                                                           Edit rich document on-the-fly, so elastic!
                                                                        </li>
                                                                     </ul>
                                                                     <p>
                                                                        End of air-mode area
                                                                     </p>-->
                                                                  </div>
                                                                  <div class="note-editor note-frame card">
                                                                     <div class="note-dropzone">
                                                                        <div class="note-dropzone-message"></div>
                                                                     </div>
                                                                   
                                                                     <div class="note-editing-area">
                                                                        <div class="note-handle">
                                                                           <div class="note-control-selection">
                                                                              <div class="note-control-selection-bg"></div>
                                                                              <div class="note-control-holder note-control-nw"></div>
                                                                              <div class="note-control-holder note-control-ne"></div>
                                                                              <div class="note-control-holder note-control-sw"></div>
                                                                              <div class="note-control-sizing note-control-se"></div>
                                                                              <div class="note-control-selection-info"></div>
                                                                           </div>
                                                                        </div>
                                                                       <!-- <textarea class="note-codable" role="textbox" aria-multiline="true"></textarea>-->
                                                                        <div  class="form-group"  style="height: 230px;"><textarea rows="12" cols="91" name="messagebody" ></textarea>
                                                                        <!--   <h6>Hello Summernote</h6>
                                                                           <ul>
                                                                              <li>
                                                                                 Select a text to reveal the toolbar.
                                                                              </li>
                                                                              <li>
                                                                                 Edit rich document on-the-fly, so elastic!
                                                                              </li>
                                                                           </ul>
                                                                           <p>
                                                                              End of air-mode area
                                                                           </p>-->
                                                                        </div>
                                                                     </div>
                                                                     <output class="note-status-output" aria-live="polite"></output>
                                                                     <div class="note-statusbar" role="status">
                                                                        <output class="note-status-output" aria-live="polite"></output>  
                                                                        <div class="note-resizebar" role="seperator" aria-orientation="horizontal" aria-label="Resize">
                                                                           <div class="note-icon-bar"></div>
                                                                           <div class="note-icon-bar"></div>
                                                                           <div class="note-icon-bar"></div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="modal link-dialog" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Link">
                                                                        <div class="modal-dialog">
                                                                           <div class="modal-content">
                                                                              <div class="modal-header">
                                                                                 <h4 class="modal-title">Insert Link</h4>
                                                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    
                                                                              </div>
                                                                              <div class="modal-body">
                                                                                 <div class="form-group note-form-group"><label class="note-form-label">Text to display</label><input class="note-link-text form-control note-form-control note-input" type="text"></div>
                                                                                 <div class="form-group note-form-group"><label class="note-form-label">To what URL should this link go?</label><input class="note-link-url form-control note-form-control note-input" type="text" value="http://"></div>
                                                                                 <div class="form-check sn-checkbox-open-in-new-window"><label class="form-check-label"> <input role="checkbox" type="checkbox" class="form-check-input" checked="" aria-label="Open in new window" aria-checked="true"> Open in new window</label></div>
                                                                              </div>
                                                                              <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-link-btn" value="Insert Link" disabled=""></div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Image">
                                                                        <div class="modal-dialog">
                                                                           <div class="modal-content">
                                                                              <div class="modal-header">
                                                                                 <h4 class="modal-title">Insert Image</h4>
                                                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    
                                                                              </div>
                                                                              <div class="modal-body">
                                                                                 <div class="form-group note-form-group note-group-select-from-files"><label class="note-form-label">Select from files</label><input class="note-image-input form-control-file note-form-control note-input" type="file" name="files" accept="image/*" multiple="multiple"></div>
                                                                                 <div class="form-group note-group-image-url" style="overflow:auto;"><label class="note-form-label">Image URL</label><input class="note-image-url form-control note-form-control note-input  col-md-12" type="text"></div>
                                                                              </div>
                                                                              <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-image-btn" value="Insert Image" disabled=""></div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Video">
                                                                        <div class="modal-dialog">
                                                                           <div class="modal-content">
                                                                              <div class="modal-header">
                                                                                 <h4 class="modal-title">Insert Video</h4>
                                                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    
                                                                              </div>
                                                                              <div class="modal-body">
                                                                                 <div class="form-group note-form-group row-fluid"><label class="note-form-label">Video URL <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small></label><input class="note-video-url form-control note-form-control note-input" type="text"></div>
                                                                              </div>
                                                                              <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-video-btn" value="Insert Video" disabled=""></div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Help">
                                                                        <div class="modal-dialog">
                                                                           <div class="modal-content">
                                                                              <div class="modal-header">
                                                                                 <h4 class="modal-title">Help</h4>
                                                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    
                                                                              </div>
                                                                              <div class="modal-body" style="max-height: 300px; overflow: scroll;">
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undoes the last command</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redoes the last command</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span>
                                                                                 <div class="help-list-item"></div>
                                                                                 <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span>
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                 <p class="text-center"><a href="http://summernote.org/" target="_blank">Summernote 0.8.12</a> · <a href="https://github.com/summernote/summernote" target="_blank">Project</a> · <a href="https://github.com/summernote/summernote/issues" target="_blank">Issues</a></p>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="form-group m-b-0">
                                                                  <div class="text-right">
                                                                     <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="mdi mdi-content-save-outline"></i></button>
                                                                     <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="mdi mdi-delete"></i></button>
                                                                     <button class="btn btn-primary waves-effect waves-light"> <span>Send</span> <i class="mdi mdi-send ml-2"></i> </button>
                                                                  </div>
                                                               </div>
                                                            </form>
                                                         </div>
                                                         <!-- end card-->
                                                      </div>
                                                   </div>
                                                   <div class="tab-pane fade show active" id="nav-document" role="tabpanel" aria-labelledby="nav-document">
                                                      <form >
                                                         <div class="form-group">
                                                            <?php foreach($data as $row){ ?>
                                                            <label for="sel1">Uploaded Documents List:</label>
                                                            <ul class="download-list customlis">
                                                               <?php if($row->bank_statement != '') { ?>
                                             <li><a href="<?php echo base_url();?>assets/steps/uploads/<?php echo $row->bank_statement; ?>" download><?php echo $row->bank_statement; ?></a></li>
                                          <?php } if($row->balance_sheet != ''){ ?>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->balance_sheet; ?>" download><?php echo $row->balance_sheet;  ?></a></li>
                                          <?php } if($row->pl_account != '') { ?>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->pl_account; ?>" download><?php echo $row->pl_account; ?></a></li>
                                          <?php } if($row->cashflow != '') { ?>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->cashflow; ?>" download><?php echo $row->cashflow; ?></a></li>
                                            <?php } if($row->tax_return != '') { ?>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->tax_return; ?>" download><?php echo $row->tax_return; ?></a></li>
                                             <?php } if($row->ssn_copy != '') { ?>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->ssn_copy; ?>" download><?php echo $row->ssn_copy; ?></a></li>
                                             <?php } if($row->dl != '') { ?>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->dl; ?>" download><?php echo $row->dl; ?></a></li>
                                             <?php } if($row->passport != '') { ?>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->passport; ?>" download><?php echo $row->passport; ?></a></li>
                                             <?php } if($row->tax_id != '') { ?>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->tax_id; ?>" download><?php echo $row->tax_id; ?></a></li>
                                             <?php } if($row->aoi != '') { ?>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->aoi; ?>" download><?php echo $row->aoi; ?></a></li>
                                             <?php } if($row->v_cheque != '') { ?>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->v_cheque; ?>" download><?php echo $row->v_cheque;  ?></a></li>
                                             <?php } if($row->admin_doc != '') { ?>
                                             <?php $ad=$row->admin_doc; $count=0; $addoc=explode(',',$ad); $count=count($addoc); if($count>0) {foreach($addoc as $rr){
                                                ?>
                                                 <li><a href="<?php echo base_url();?>assets/images/<?php echo $rr; ?>" download><?php echo $rr; } ?></a></li>
                                                <?php
                                             }else{?>
                                             <li><a href="<?php echo base_url();?>assets/images/<?php echo $row->admin_doc; ?>" download><?php echo $row->admin_doc; } ?></a></li>
                                          <?php } ?>
                                          </ul>
                                          <?php } ?>
                                                           
                                                         </div>
                                                        
                                                      </form>
                                                      
                                                   <!--   <form  method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                                         data-upload-preview-template="#uploadPreviewTemplate">-->
                                                      <form action="<?php echo base_url() . 'admin/do_upload' ?>"  enctype="multipart/form-data" method="post">
                                                           <input type="hidden" id="last" name="last" value="<?php foreach($data as $row){echo $row->id; }?>"/>
                                                            <div class="form-group">
                                                            <label for="sel1">Upload Document</label>
                                                         </div>
                                                         <div class="fallback">
                                                            <input name="files[]" type="file" multiple />
                                                         </div>
                                                      <!--   <div class="dz-message needsclick">
                                                            <p class="h1 text-muted"><i class="mdi mdi-cloud-upload"></i></p>
                                                            <h3>Drop files here or click to upload.</h3>
                                                           
                                                         </div>-->
                                                      
                                                      <div class="marg-btom25"></div>
                                                      <div class="form-group text-center">  
                                                        
                                                      </div>
                                                      <div class="marg-btom25"></div>
                                                      <div class="form-group text-center">  
                                                     
                                                         <button type="submit" class="btn btn-primary">Submit</button>
                                                      </div>
                                                   </form>
                                                      <!-- Preview -->
                                                      <div class="dropzone-previews mt-3" id="file-previews"></div>
                                                      <div class="d-none" id="uploadPreviewTemplate">
                                                         <div class="card mt-1 mb-0 shadow-none border">
                                                            <div class="p-2">
                                                               <div class="row align-items-center">
                                                                  <div class="col-auto">
                                                                     <img data-dz-thumbnail="" class="avatar-sm rounded bg-light" alt="">
                                                                  </div>
                                                                  <div class="col pl-0">
                                                                     <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name=""></a>
                                                                     <p class="mb-0" data-dz-size=""></p>
                                                                  </div>
                                                                  <div class="col-auto">
                                                                     <!-- Button -->
                                                                     <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove="">
                                                                     <i class="mdi mdi-close-circle"></i>
                                                                     </a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </section>
                                          </div>
                                  <!--     </form>
                                          <!-- collapsed end -->
                                       </div>
                                       <!-- end card-body -->
                                    </div>
                                    <!-- end card-->
                                 </div>
                                 <!-- end col-->
                              </div>
                           </div>
                           <!-- end col-->        
                        </div>
                     </div>
                  </section>
               </div>
               <div class="col-md-4">
                  <!-- Portlet card -->
                  <div class="card virtual-right">
                     <div class="card-body">
                        <h4 class="header-title mb-0">Deal History</h4>
                        <section id="tabs">
                           <nav>
                              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                 <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" 
                                    aria-controls="nav-home" aria-selected="true">All</a>
                                 <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                                    aria-controls="nav-profile" aria-selected="false">Notes(4)</a>
                                 <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" 
                                    aria-controls="nav-contact" aria-selected="false">Email(1)</a>
                              </div>
                           </nav>
                           <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                 <div class="slimScrollDiv recent-update notification-list">
                                    <div class="slimscroll noti-scroll recent-update">
                                       <!-- item-->
                                       <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                          <div class="notify-icon">
                                             <span>May 28,<br>
                                             2020</span>
                                          </div>
                                          <p class="notify-details">#LN-04089 Thomas has submitted a new application 4089</p>
                                          <p class="text-muted mb-0 user-msg">
                                             <small>11:59pm</small>
                                          </p>
                                       </a>
                                       <!-- item-->
                                       <a href="javascript:void(0);" class="dropdown-item notify-item">
                                          <div class="notify-icon">
                                             <span>May 28,<br>
                                             2020</span>
                                          </div>
                                          <p class="notify-details">#LN-04089 Thomas has submitted a new application 4089</p>
                                          <p class="text-muted mb-0 user-msg">
                                             <small>11:59pm</small>
                                          </p>
                                       </a>
                                       <a href="javascript:void(0);" class="dropdown-item notify-item">
                                          <div class="notify-icon">
                                             <span>May 28,<br>
                                             2020</span>
                                          </div>
                                          <p class="notify-details">#LN-04089 Thomas has submitted a new application 4089</p>
                                          <p class="text-muted mb-0 user-msg">
                                             <small>11:59pm</small>
                                          </p>
                                       </a>
                                       <a href="javascript:void(0);" class="dropdown-item notify-item">
                                          <div class="notify-icon">
                                             <span>May 28,<br>
                                             2020</span>
                                          </div>
                                          <p class="notify-details">#LN-04089 Thomas has submitted a new application 4089</p>
                                          <p class="text-muted mb-0 user-msg">
                                             <small>11:59pm</small>
                                          </p>
                                       </a>
                                    </div>
                                    <div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 8px; position: absolute; top: 0px; opacity: 0.4; display: none; 
                                       border-radius: 7px; z-index: 99; right: 1px; height: 124.764px;"></div>
                                    <div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px;
                                       background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                 <div class="row">
                                    <div class="col-md-6">
                                       Internal Notes and Messages Among Trainers:
                                    </div>
                                    <div class="col-md-6 text-right">
                                       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Add New Mote</button>
                                    </div>
                                 </div>
                                 <div class="marg-btom25"></div>
                                 <?php foreach($mes as $r){?>
                                                      <div class="row">
                                                         <div class="col-md-12">
                                                            <div class="card">
                                                               <div class="card-body">
                                                                  <h5><b>Status: <span class="blu-text"><?php echo $r->status_m?></span></b></h5>
                                                                  <p><?php echo $r->message?></p>
                                                                  <h5><b>Writer: <?php echo $r->msg_sub_by;?></b></h5>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   <?php } ?>
                              
                                
                              </div>
                              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                 <div class="inbox-rightbar">
                                    <div class="mt-4">
                                       <form method="post" action="<?php echo base_url() . 'admin/mail'?>">
                                          <input type="hidden" id="last" name="last" value="<?php foreach($data as $row){echo $row->id; }?>"/>
                                          <div class="form-group">
                                             <input type="email" class="form-control" name="to" placeholder="To">
                                          </div>
                                          <div class="form-group">
                                             <input type="text" class="form-control" name="subject" placeholder="Subject">
                                          </div>
                                         <div class="form-group">
                                             <div class="summernote" style="display: none;">
                                           <!--     <h6>Hello Summernote</h6>
                                                <ul>
                                                   <li>
                                                      Select a text to reveal the toolbar.
                                                   </li>
                                                   <li>
                                                      Edit rich document on-the-fly, so elastic!
                                                   </li>
                                                </ul>
                                                <p>
                                                   End of air-mode area
                                                </p>-->
                                             </div>
                                             <div class="note-editor note-frame card">
                                                <div class="note-dropzone">
                                                   <div class="note-dropzone-message"></div>
                                                </div>
                                              <!--  <div class="note-toolbar card-header" role="toolbar">
                                                   <div class="note-btn-group btn-group note-style">
                                                      <div class="note-btn-group btn-group">
                                                         <button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Style" data-original-title="Style"><i class="note-icon-magic"></i></button>
                                                         <div class="dropdown-menu dropdown-style" role="list" aria-label="Style">
                                                            <a class="dropdown-item" href="#" data-value="p" role="listitem" aria-label="p">
                                                               <p>Normal</p>
                                                            </a>
                                                            <a class="dropdown-item" href="#" data-value="blockquote" role="listitem" aria-label="blockquote">
                                                               <blockquote class="blockquote">Blockquote</blockquote>
                                                            </a>
                                                            <a class="dropdown-item" href="#" data-value="pre" role="listitem" aria-label="pre">
                                                               <pre>Code</pre>
                                                            </a>
                                                            <a class="dropdown-item" href="#" data-value="h1" role="listitem" aria-label="h1">
                                                               <h1>Header 1</h1>
                                                            </a>
                                                            <a class="dropdown-item" href="#" data-value="h2" role="listitem" aria-label="h2">
                                                               <h2>Header 2</h2>
                                                            </a>
                                                            <a class="dropdown-item" href="#" data-value="h3" role="listitem" aria-label="h3">
                                                               <h3>Header 3</h3>
                                                            </a>
                                                            <a class="dropdown-item" href="#" data-value="h4" role="listitem" aria-label="h4">
                                                               <h4>Header 4</h4>
                                                            </a>
                                                            <a class="dropdown-item" href="#" data-value="h5" role="listitem" aria-label="h5">
                                                               <h5>Header 5</h5>
                                                            </a>
                                                            <a class="dropdown-item" href="#" data-value="h6" role="listitem" aria-label="h6">
                                                               <h6>Header 6</h6>
                                                            </a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="note-btn-group btn-group note-font"><button type="button" class="note-btn btn btn-light btn-sm note-btn-bold" role="button" tabindex="-1" title="" aria-label="Bold (CTRL+B)" data-original-title="Bold (CTRL+B)"><i class="note-icon-bold"></i></button><button type="button" class="note-btn btn btn-light btn-sm note-btn-underline" role="button" tabindex="-1" title="" aria-label="Underline (CTRL+U)" data-original-title="Underline (CTRL+U)"><i class="note-icon-underline"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Remove Font Style (CTRL+\)" data-original-title="Remove Font Style (CTRL+\)"><i class="note-icon-eraser"></i></button></div>
                                                   <div class="note-btn-group btn-group note-fontname">
                                                      <div class="note-btn-group btn-group">
                                                         <button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Font Family" data-original-title="Font Family"><span class="note-current-fontname" style="font-family: Poppins;">Poppins</span></button>
                                                         <div class="dropdown-menu note-check dropdown-fontname" role="list" aria-label="Font Family"><a class="dropdown-item" href="#" data-value="Arial" role="listitem" aria-label="Arial"><i class="note-icon-menu-check"></i> <span style="font-family: 'Arial'">Arial</span></a><a class="dropdown-item" href="#" data-value="Arial Black" role="listitem" aria-label="Arial Black"><i class="note-icon-menu-check"></i> <span style="font-family: 'Arial Black'">Arial Black</span></a><a class="dropdown-item" href="#" data-value="Comic Sans MS" role="listitem" aria-label="Comic Sans MS"><i class="note-icon-menu-check"></i> <span style="font-family: 'Comic Sans MS'">Comic Sans MS</span></a><a class="dropdown-item" href="#" data-value="Courier New" role="listitem" aria-label="Courier New"><i class="note-icon-menu-check"></i> <span style="font-family: 'Courier New'">Courier New</span></a><a class="dropdown-item" href="#" data-value="Helvetica" role="listitem" aria-label="Helvetica"><i class="note-icon-menu-check"></i> <span style="font-family: 'Helvetica'">Helvetica</span></a><a class="dropdown-item" href="#" data-value="Impact" role="listitem" aria-label="Impact"><i class="note-icon-menu-check"></i> <span style="font-family: 'Impact'">Impact</span></a><a class="dropdown-item" href="#" data-value="Tahoma" role="listitem" aria-label="Tahoma"><i class="note-icon-menu-check"></i> <span style="font-family: 'Tahoma'">Tahoma</span></a><a class="dropdown-item" href="#" data-value="Times New Roman" role="listitem" aria-label="Times New Roman"><i class="note-icon-menu-check"></i> <span style="font-family: 'Times New Roman'">Times New Roman</span></a><a class="dropdown-item" href="#" data-value="Verdana" role="listitem" aria-label="Verdana"><i class="note-icon-menu-check"></i> <span style="font-family: 'Verdana'">Verdana</span></a><a class="dropdown-item checked" href="#" data-value="Poppins" role="listitem" aria-label="Poppins"><i class="note-icon-menu-check"></i> <span style="font-family: 'Poppins'">Poppins</span></a></div>
                                                      </div>
                                                   </div>
                                                   <div class="note-btn-group btn-group note-color">
                                                      <div class="note-btn-group btn-group note-color note-color-all">
                                                         <button type="button" class="note-btn btn btn-light btn-sm note-current-color-button" role="button" tabindex="-1" title="" aria-label="Recent Color" data-original-title="Recent Color" data-backcolor="#FFFF00" data-forecolor="#000000"><i class="note-icon-font note-recent-color" style="background-color: rgb(255, 255, 0); color: rgb(0, 0, 0);"></i></button><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="More Color" data-original-title="More Color"></button>
                                                         <div class="dropdown-menu" role="list">
                                                            <div class="note-palette">
                                                               <div class="note-palette-title">Background Color</div>
                                                               <div>    <button type="button" class="note-color-reset btn btn-light" data-event="backColor" data-value="inherit">Transparent    </button>  </div>
                                                               <div class="note-holder" data-event="backColor">
                                                                  <div class="note-color-palette">
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="backColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="backColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="backColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="backColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="backColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="backColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="backColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-original-title="White"></button></div>
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="backColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="backColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="backColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="backColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="backColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="backColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="backColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="backColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-original-title="Magenta"></button></div>
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="backColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="backColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="backColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="backColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="backColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="backColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="backColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="backColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-original-title="Twilight"></button></div>
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="backColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="backColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="backColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="backColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="backColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="backColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="backColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="backColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-original-title="Careys Pink"></button></div>
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="backColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="backColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="backColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="backColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="backColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="backColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="backColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="backColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-original-title="Puce"></button></div>
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="backColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="backColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="backColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="backColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="backColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="backColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="backColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="backColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-original-title="Cadillac"></button></div>
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="backColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="backColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="backColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="backColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="backColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="backColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="backColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="backColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-original-title="Claret"></button></div>
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="backColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="backColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="backColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="backColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="backColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="backColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="backColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="backColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-original-title="Loulou"></button></div>
                                                                  </div>
                                                               </div>
                                                               <div>    <button type="button" class="note-color-select btn" data-event="openPalette" data-value="backColorPicker">Select    </button>    <input type="color" id="backColorPicker" class="note-btn note-color-select-btn" value="#FFFF00" data-event="backColorPalette">  </div>
                                                               <div class="note-holder-custom" id="backColorPalette" data-event="backColor">
                                                                  <div class="note-color-palette">
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="note-palette">
                                                               <div class="note-palette-title">Foreground Color</div>
                                                               <div>    <button type="button" class="note-color-reset btn btn-light" data-event="removeFormat" data-value="foreColor">Reset to default    </button>  </div>
                                                               <div class="note-holder" data-event="foreColor">
                                                                  <div class="note-color-palette">
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="foreColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="foreColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="foreColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="foreColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="foreColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="foreColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="foreColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-original-title="White"></button></div>
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="foreColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="foreColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="foreColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="foreColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="foreColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="foreColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="foreColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="foreColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-original-title="Magenta"></button></div>
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="foreColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="foreColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="foreColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="foreColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="foreColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="foreColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="foreColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="foreColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-original-title="Twilight"></button></div>
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="foreColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="foreColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="foreColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="foreColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="foreColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="foreColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="foreColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="foreColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-original-title="Careys Pink"></button></div>
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="foreColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="foreColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="foreColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="foreColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="foreColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="foreColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="foreColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="foreColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-original-title="Puce"></button></div>
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="foreColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="foreColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="foreColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="foreColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="foreColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="foreColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="foreColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="foreColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-original-title="Cadillac"></button></div>
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="foreColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="foreColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="foreColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="foreColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="foreColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="foreColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="foreColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="foreColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-original-title="Claret"></button></div>
                                                                     <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="foreColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="foreColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="foreColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="foreColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="foreColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="foreColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="foreColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="foreColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-original-title="Loulou"></button></div>
                                                                  </div>
                                                               </div>
                                                               <div>
                                                                  <button type="button" class="note-color-select btn" data-event="openPalette" data-value="foreColorPicker">Select    </button>    <input type="color" id="foreColorPicker" class="note-btn note-color-select-btn" value="#000000" data-event="foreColorPalette">  
                                                                  <div class="note-holder-custom" id="foreColorPalette" data-event="foreColor">
                                                                     <div class="note-color-palette">
                                                                        <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="note-btn-group btn-group note-para">
                                                      <button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Unordered list (CTRL+SHIFT+NUM7)" data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i class="note-icon-unorderedlist"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Ordered list (CTRL+SHIFT+NUM8)" data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i class="note-icon-orderedlist"></i></button>
                                                      <div class="note-btn-group btn-group">
                                                         <button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Paragraph" data-original-title="Paragraph"><i class="note-icon-align-left"></i></button>
                                                         <div class="dropdown-menu" role="list">
                                                            <div class="note-btn-group btn-group note-align"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Align left (CTRL+SHIFT+L)" data-original-title="Align left (CTRL+SHIFT+L)"><i class="note-icon-align-left"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Align center (CTRL+SHIFT+E)" data-original-title="Align center (CTRL+SHIFT+E)"><i class="note-icon-align-center"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Align right (CTRL+SHIFT+R)" data-original-title="Align right (CTRL+SHIFT+R)"><i class="note-icon-align-right"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Justify full (CTRL+SHIFT+J)" data-original-title="Justify full (CTRL+SHIFT+J)"><i class="note-icon-align-justify"></i></button></div>
                                                            <div class="note-btn-group btn-group note-list"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Outdent (CTRL+[)" data-original-title="Outdent (CTRL+[)"><i class="note-icon-align-outdent"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Indent (CTRL+])" data-original-title="Indent (CTRL+])"><i class="note-icon-align-indent"></i></button></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="note-btn-group btn-group note-table">
                                                      <div class="note-btn-group btn-group">
                                                         <button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Table" data-original-title="Table"><i class="note-icon-table"></i></button>
                                                         <div class="dropdown-menu note-table" role="list" aria-label="Table">
                                                            <div class="note-dimension-picker">
                                                               <div class="note-dimension-picker-mousecatcher" data-event="insertTable" data-value="1x1" style="width: 10em; height: 10em;"></div>
                                                               <div class="note-dimension-picker-highlighted"></div>
                                                               <div class="note-dimension-picker-unhighlighted"></div>
                                                            </div>
                                                            <div class="note-dimension-display">1 x 1</div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="note-btn-group btn-group note-insert"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Link (CTRL+K)" data-original-title="Link (CTRL+K)"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Picture" data-original-title="Picture"><i class="note-icon-picture"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Video" data-original-title="Video"><i class="note-icon-video"></i></button></div>
                                                   <div class="note-btn-group btn-group note-view"><button type="button" class="note-btn btn btn-light btn-sm btn-fullscreen" role="button" tabindex="-1" title="" aria-label="Full Screen" data-original-title="Full Screen"><i class="note-icon-arrows-alt"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-codeview" role="button" tabindex="-1" title="" aria-label="Code View" data-original-title="Code View"><i class="note-icon-code"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Help" data-original-title="Help"><i class="note-icon-question"></i></button></div>
                                                </div>
                                                <div class="note-editing-area">
                                                   <div class="note-handle">
                                                      <div class="note-control-selection">
                                                         <div class="note-control-selection-bg"></div>
                                                         <div class="note-control-holder note-control-nw"></div>
                                                         <div class="note-control-holder note-control-ne"></div>
                                                         <div class="note-control-holder note-control-sw"></div>
                                                         <div class="note-control-sizing note-control-se"></div>
                                                         <div class="note-control-selection-info"></div>
                                                      </div>
                                                   </div>-->
                                                  <!-- <textarea class="note-codable" role="textbox" aria-multiline="true"></textarea>-->
                                                   <div class="note-editable card-block"  class="form-control"  style="height: 230px;" ><textarea rows="10" cols="36" placeholder=
                                                   "Type Your message" name="messagebody"></textarea>
                                                   <!--   <h6>Hello Summernote</h6>
                                                      <ul>
                                                         <li>
                                                            Select a text to reveal the toolbar.
                                                         </li>
                                                         <li>
                                                            Edit rich document on-the-fly, so elastic!
                                                         </li>
                                                      </ul>
                                                      <p>
                                                         End of air-mode area
                                                      </p>-->
                                                   </div>
                                                </div>
                                                <output class="note-status-output" aria-live="polite"></output>
                                                <div class="note-statusbar" role="status">
                                                   <output class="note-status-output" aria-live="polite"></output>  
                                                   <div class="note-resizebar" role="seperator" aria-orientation="horizontal" aria-label="Resize">
                                                      <div class="note-icon-bar"></div>
                                                      <div class="note-icon-bar"></div>
                                                      <div class="note-icon-bar"></div>
                                                   </div>
                                                </div>
                                                <div class="modal link-dialog" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Link">
                                                   <div class="modal-dialog">
                                                      <div class="modal-content">
                                                         <div class="modal-header">
                                                            <h4 class="modal-title">Insert Link</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    
                                                         </div>
                                                         <div class="modal-body">
                                                            <div class="form-group note-form-group"><label class="note-form-label">Text to display</label><input class="note-link-text form-control note-form-control note-input" type="text"></div>
                                                            <div class="form-group note-form-group"><label class="note-form-label">To what URL should this link go?</label><input class="note-link-url form-control note-form-control note-input" type="text" value="http://"></div>
                                                            <div class="form-check sn-checkbox-open-in-new-window"><label class="form-check-label"> <input role="checkbox" type="checkbox" class="form-check-input" checked="" aria-label="Open in new window" aria-checked="true"> Open in new window</label></div>
                                                         </div>
                                                         <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-link-btn" value="Insert Link" disabled=""></div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Image">
                                                   <div class="modal-dialog">
                                                      <div class="modal-content">
                                                         <div class="modal-header">
                                                            <h4 class="modal-title">Insert Image</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    
                                                         </div>
                                                         <div class="modal-body">
                                                            <div class="form-group note-form-group note-group-select-from-files"><label class="note-form-label">Select from files</label><input class="note-image-input form-control-file note-form-control note-input" type="file" name="files" accept="image/*" multiple="multiple"></div>
                                                            <div class="form-group note-group-image-url" style="overflow:auto;"><label class="note-form-label">Image URL</label><input class="note-image-url form-control note-form-control note-input  col-md-12" type="text"></div>
                                                         </div>
                                                         <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-image-btn" value="Insert Image" disabled=""></div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Video">
                                                   <div class="modal-dialog">
                                                      <div class="modal-content">
                                                         <div class="modal-header">
                                                            <h4 class="modal-title">Insert Video</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    
                                                         </div>
                                                         <div class="modal-body">
                                                            <div class="form-group note-form-group row-fluid"><label class="note-form-label">Video URL <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small></label><input class="note-video-url form-control note-form-control note-input" type="text"></div>
                                                         </div>
                                                         <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-video-btn" value="Insert Video" disabled=""></div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Help">
                                                   <div class="modal-dialog">
                                                      <div class="modal-content">
                                                         <div class="modal-header">
                                                            <h4 class="modal-title">Help</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    
                                                         </div>
                                                         <div class="modal-body" style="max-height: 300px; overflow: scroll;">
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undoes the last command</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redoes the last command</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span>
                                                            <div class="help-list-item"></div>
                                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span>
                                                         </div>
                                                         <div class="modal-footer">
                                                            <p class="text-center"><a href="http://summernote.org/" target="_blank">Summernote 0.8.12</a> · <a href="https://github.com/summernote/summernote" target="_blank">Project</a> · <a href="https://github.com/summernote/summernote/issues" target="_blank">Issues</a></p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="form-group m-b-0">
                                             <div class="text-right">
                                                <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="mdi mdi-content-save-outline"></i></button>
                                                <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="mdi mdi-delete"></i></button>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit"> <span>Send</span> <i class="mdi mdi-send ml-2"></i> </button>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                    <!-- end card-->
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                     <!-- end card-->
                  </div>
                  <!-- end col-->
               </div>
               <!-- end row -->
            </div>
            <!-- end container -->
         </div>
         <!-- end wrapper -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page content -->
      <!-- ============================================================== -->
      <!-- Footer Start -->
      <?php include('footer.php');?>
      <!-- end Footer -->
      <!-- Vendor js -->
      <script src="<?php echo base_url();?>assets/js/vendor.min.js"></script>
      <!-- Third Party js-->
      <script src="<?php echo base_url();?>assets/libs/peity/jquery.peity.min.js"></script>
      <script src="<?php echo base_url();?>assets/libs/apexcharts/apexcharts.min.js"></script>
      <script src="<?php echo base_url();?>assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="<?php echo base_url();?>assets/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js"></script>
      <!-- Dashboard init -->
      <script src="<?php echo base_url();?>assets/js/pages/dashboard-1.init.js"></script>
      <!-- App js-->
      <script src="<?php echo base_url();?>assets/js/app.min.js"></script>
      <script>
         // Get the elements with class="column"
         var elements = document.getElementsByClassName("column");
         // Declare a loop variable
         var i;
         // List View
         function listView() {
           for (i = 0; i < elements.length; i++) {
             elements[i].style.width = "100%";
             }
           }
           // Grid View
           function gridView() {
             for (i = 0; i < elements.length; i++) {
               elements[i].style.width = "50%";
               }
             }
             /* Optional: Add active class to the current button (highlight it) */
             var container = document.getElementById("btnContainer");
             var btns = container.getElementsByClassName("btn");
             for (var i = 0; i < btns.length; i++) {
               btns[i].addEventListener("click", function() {
                 var current = document.getElementsByClassName("active");
                 current[0].className = current[0].className.replace(" active", "");
                 this.className += " active";
                 });
             }
      </script>
      <!-- Plugins js -->
      <script src="<?php echo base_url();?>assets/libs/dropzone/dropzone.min.js"></script>
      <!-- Init js-->
      <script src="<?php echo base_url();?>assets/js/pages/form-fileuploads.init.js"></script>
      <!-- App js-->
      <div class="modal" id="myModal1">
         <div class="modal-dialog">
            <div class="modal-content">
               <!-- Modal Header -->
               <div class="modal-header">
                  <h2 class="modal-title">Add New Note</h2>
                  <button type="button" class="close" data-dismiss="modal" >&times;</button>
               </div>
               <!-- Modal body -->

               <div class="modal-body">
                   <form method="post" action="<?php echo base_url() . 'admin/note'?>">
                                                                     <input type="hidden" id="last" name="last" value="<?php foreach($data as $row){echo $row->id; }?>"/>

                                                                     <div class="form-group">
                                                                        <label for="sel1">Status:</label>
                                                                        <select class="form-control" name="status" id="sel1">
                                                                           <option>Reviewing Application</option>
                                                                           <option>In Progress</option>
                                                                           <option>Pending</option>
                                                                           <option>Approved</option>
                                                                           <option>Declined</option>
                                                                        </select>
                                                                     </div>
                                                                     <div class="form-group">
                                                                        <label for="comment">Add Note:</label>
                                                                        <textarea class="form-control" name="message" rows="5" id="comment"></textarea>
                                                                     </div>
                                                                     <button type="submit" class="btn btn-primary">Save</button>
                                                                  </form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>