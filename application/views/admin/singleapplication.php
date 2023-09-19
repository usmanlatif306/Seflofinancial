<!DOCTYPE html>
<html lang="en">
<!-- Header Begins -->

<?php include('header.php'); ?>
<style type="text/css">
   .labelcss {
      position: relative;
      font-size: 18px;
      color: #aaa;
      /* margin-top: 30px; */
      margin-bottom: -2px;
      padding-top: 1px;
      padding-bottom: 10px;
   }
</style>
<!-- Header Ends -->

<body>
   <?php
   if ($data['app_status'] == 'Under Review') {
      $status = 1;
   } else if ($data['app_status'] == 'Document Pending') {
      $status = 2;
   } else if ($data['app_status'] == 'Document Received') {
      $status = 3;
   } else if ($data['app_status'] == 'File Submitted') {
      $status = 4;
   } else if ($data['app_status'] == 'Approved') {
      $status = 5;
   } else if ($data['app_status'] == 'Rejected') {
      $status = 6;
   }

   $completed_onboarding = ($data['userdetails']->completed_stripe_onboarding || $data['userdetails']->completed_stripe_onboarding === "1") ? 'true' : 'false';

   ?>
   <!-- Navigation Bar-->
   <?php include('header-topbar.php'); ?>
   <!-- End Navigation Bar-->
   <div class="wrapper">
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box">
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/applications">Application</a></li>
                        <!--<li class="breadcrumb-item active">John's Applications</li>-->
                     </ol>
                  </div>
                  <h4 class="page-title"></h4>
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
                                 //if($data['purpose']=="Business" || $data['purpose']=="Commercial"){
                                 // foreach ($data as $row) { 
                                 /* echo '<pre>';
                                       print_r($data); die;*/
                                 ?>
                                 <div id="cardCollpase4" class="collapse pt-3 show">
                                    <div class="row align-center">
                                       <div class="col-md-8 col-12">
                                          <h4 class="header-title mb-0"><?php
                                                                        echo $data['userdetails']->business_name;
                                                                        ?></h4>
                                       </div>
                                       <div class="col-md-4 col-12 text-right">
                                          <button type="button" class="btn btn-info">Application# <?php echo $data['app_no']; ?></button>
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
                                                   <p><?php echo $data['submission_date']; ?></p>
                                                </li>

                                                <li>
                                                   <p><b>Name</b></p>
                                                   <p><?php echo $data['userdetails']->name; ?></p>
                                                </li>
                                                <li>
                                                   <p><b>Mobile</b></p>
                                                   <p><?php echo $data['userdetails']->mobile; ?></p>
                                                </li>
                                                <li>
                                                   <p><b>Email</b></p>
                                                   <p><?php echo $data['userdetails']->email; ?></p>
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
                                                   <p>$<?php echo $data['amount_needed']; ?></p>
                                                </div>

                                             </li>
                                             <li hidden>
                                                <div class="widlft50">
                                                   <p><b>Funding Purpose:</b></p>
                                                   <p><?php echo $data['purpose']; ?></p>
                                                </div>

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
                                    <div class="column info-box">
                                       <div class="card">
                                          <div class="card-body">
                                             <div class="row">
                                                <div class="col-sm-12">
                                                   <?php
                                                   for ($i = 1; $i <= 8; ++$i) {
                                                   ?>
                                                      <p><b><?php echo $answers[$i]['question']; ?> : </b> <?php if (!empty($answers[$i]['answer'])) {
                                                                                                               echo $answers[$i]['answer'];
                                                                                                            } else {
                                                                                                               echo "<b>    ---</b>";
                                                                                                            }
                                                                                                            ?></p>
                                                   <?php } ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="column info-box">
                                       <div class="card">
                                          <div class="card-body">
                                             <div class="row">
                                                <div class="col-sm-12">
                                                   <?php
                                                   for ($i = 9; $i <= 16; ++$i) {
                                                   ?>
                                                      <p><b><?php echo $answers[$i]['question']; ?> : </b> <?php if (!empty($answers[$i]['answer'])) {
                                                                                                               echo $answers[$i]['answer'];
                                                                                                            } else {
                                                                                                               echo "<b>    ---</b>";
                                                                                                            }
                                                                                                            ?></p>
                                                   <?php } ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="column info-box">
                                       <div class="card">
                                          <div class="card-body">
                                             <div class="row">
                                                <div class="col-sm-12">
                                                   <?php
                                                   for ($i = 17; $i <= 24; ++$i) {
                                                   ?>
                                                      <p><b><?php echo $answers[$i]['question']; ?> : </b> <?php if (!empty($answers[$i]['answer'])) {
                                                                                                               echo $answers[$i]['answer'];
                                                                                                            } else {
                                                                                                               echo "<b>    ---</b>";
                                                                                                            }
                                                                                                            ?></p>
                                                   <?php } ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="column info-box">
                                       <div class="card">
                                          <div class="card-body">
                                             <div class="row">
                                                <div class="col-sm-12">
                                                   <?php
                                                   for ($i = 25; $i <= 33; ++$i) {
                                                   ?>
                                                      <p><b><?php echo $answers[$i]['question']; ?> : </b> <?php if (!empty($answers[$i]['answer'])) {
                                                                                                               echo $answers[$i]['answer'];
                                                                                                            } else {
                                                                                                               echo "<b>    ---</b>";
                                                                                                            }
                                                                                                            ?></p>
                                                   <?php } ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row" hidden>
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <?php
                                             for ($i = 1; $i <= 33; ++$i) {
                                             ?>
                                                <li>
                                                   <p><b><?php echo $answers[$i]['question']; ?></b></p>
                                                   <?php if (!empty($answers[$i]['answer'])) {
                                                   ?>
                                                      <p><?php echo $answers[$i]['answer']; ?></p>
                                                   <?php
                                                   } else {
                                                      echo "<p> <b>---</b> </p>";
                                                   }
                                                   ?>
                                                </li>
                                             <?php
                                             }
                                             ?>
                                             <li hidden>
                                                <p><b>Purose </b></p>
                                                <p><?php echo $data['purpose']; ?></p>
                                             </li>
                                          </ul>
                                       </div>
                                       <?php //JUST ME contact info
                                       $acc_type = trim($answers[13]['answer']);
                                       if (strcmp($acc_type, 'Just me') == 0) { ?>
                                          <!--<div class="col-md-12">
                                          <div class="labelcss">
                                             <label>CONTACT INFORMATION</label>
                                          </div>
                                       </div>-->

                                          <div class="col-md-12">
                                             <div class="login-or">
                                                <hr class="hr-or">
                                                <span class="span-or">CONTACT INFORMATION</span>
                                             </div>
                                          </div>




                                          <div class="col-md-12">
                                             <!-- <label>CONTACT INFORMATION</label> -->
                                             <ul class="list-line">
                                                <li>
                                                   <p><b><?php echo $answers[14]['question']; ?></b></p>
                                                   <p><?php echo $answers[14]['answer']; ?></p>
                                                </li>
                                                <li>
                                                   <p><b><?php echo $answers[15]['question']; ?></b></p>
                                                   <p><?php echo $answers[15]['answer']; ?></p>
                                                </li>
                                                <li>
                                                   <p><b><?php echo $answers[16]['question']; ?></b></p>
                                                   <p><?php echo $answers[16]['answer']; ?></p>
                                                </li>
                                             </ul>
                                          </div>
                                       <?php } else if ($answers[13]['answer'] == 'I and my client') { ?>
                                          <!-- <div class="col-md-12">
                                          <div class="labelcss">
                                             <label>CONTACT INFORMATION</label>
                                          </div>
                                       </div>--->
                                          <div class="col-md-12">
                                             <div class="login-or">
                                                <hr class="hr-or">
                                                <span class="span-or">CONTACT INFORMATION</span>
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                             <ul class="list-line">
                                                <li>
                                                   <p><b><?php echo $answers[17]['question']; ?></b></p>
                                                   <p><?php echo $answers[17]['answer']; ?></p>
                                                </li>
                                                <li>
                                                   <p><b><?php echo $answers[18]['question']; ?></b></p>
                                                   <p><?php echo $answers[18]['answer']; ?></p>
                                                </li>
                                                <li>
                                                   <p><b><?php echo $answers[19]['question']; ?></b></p>
                                                   <p><?php echo $answers[19]['answer']; ?></p>
                                                </li>
                                             </ul>
                                          </div>
                                       <?php } ?>

                                    </div>
                                 </div>
                                 <!-- collapsed end -->
                              </div>

                              <!-- end card-body -->
                           </div>


                           <?php

                           //}
                           ?>
                           <form class="msform" method="post">
                              <input type="hidden" id="last" name="last" value="<?php foreach ($data as $row) {
                                                                                    echo $row->id;
                                                                                 } ?>" />

                              <!-- end card-body -->
                              <div class="card virtual-left">
                                 <div class="card-body">
                                    <div id="cardCollpase4" class="collapse show">
                                       <!-- end row-->
                                       <div class="row">
                                          <div class="col-md-6 mx-auto">
                                             <div class="row align-center">
                                                <div class="col-md-12 d-none" id="onboardingError">
                                                   <div class="alert alert-danger">User has not connected with stripe.</div>
                                                </div>
                                                <div class="col-md-4">
                                                   <label for="example-select">Update Status</label>
                                                </div>
                                                <div class="col-md-8">

                                                   <?php // echo 1000 * (6/12) * (5/100);
                                                   ?>
                                                   <select class="form-control custom-select" name="status" id="example-status" <?php if ($status == 5) { ?> disabled <?php } ?>>
                                                      <option value="">Choose</option>
                                                      <option <?php if ($status == 1) { ?> selected <?php } ?> value="1">Under Review</option>
                                                      <option <?php if ($status == 2) { ?> selected <?php } ?> value="2">Document Pending</option>
                                                      <option <?php if ($status == 3) { ?> selected <?php } ?> value="3">Document Received</option>
                                                      <option <?php if ($status == 4) { ?> selected <?php } ?> value="4">File Submitted</option>
                                                      <option <?php if ($status == 5) { ?> selected <?php } ?> value="5">Approved</option>
                                                      <option <?php if ($status == 6) { ?> selected <?php } ?> value="6">Rejected</option>
                                                   </select>
                                                </div>
                                             </div>

                                             <div id="display_textarea" style="display: <?php if ($status == 1) { ?> block <?php } else { ?> none <?php } ?>;">
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <div class="marg-btom25"></div>
                                                      <label for="example-select">Pending Document List</label>
                                                   </div>
                                                   <div class="col-md-8">
                                                      <div class="marg-btom25"></div>
                                                      <textarea name="" id="pending_doc_list" cols="30" rows="10" class="form-control" <?php if (!empty($data['pending_doclist']) && $status == 1) {
                                                                                                                                       } else {
                                                                                                                                          echo "required";
                                                                                                                                       } ?>><?php if (!empty($data['pending_doclist']) && $status == 1) {
                                                                                                                                                echo $data['pending_doclist'];
                                                                                                                                             } ?></textarea>
                                                   </div>
                                                </div>
                                             </div>


                                             <div id="update_acceptstatus" style="display: <?php if ($status == 5) { ?> block <?php } else { ?> none <?php } ?>;">
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <div class="marg-btom25"></div>
                                                      <label for="example-select">How much Amount</label>
                                                   </div>
                                                   <div class="col-md-8">
                                                      <div class="marg-btom25"></div>
                                                      <input type="number" class="form-control" id="approve_amount" value="<?php if (!empty($data['approve_amount']) && $status == 5) {
                                                                                                                              echo $data['approve_amount'];
                                                                                                                           } ?>" <?php if (!empty($data['approve_amount']) && $status == 5) {
                                                                                                                                    echo "readonly";
                                                                                                                                 } else {
                                                                                                                                    echo "required";
                                                                                                                                 } ?>>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <div class="marg-btom25"></div>
                                                      <label for="example-select">Rate of Interest</label>
                                                   </div>
                                                   <div class="col-md-8">
                                                      <div class="marg-btom25"></div>
                                                      <input type="number" class="form-control" id="interest" value="<?php if (!empty($data['interest']) && $status == 5) {
                                                                                                                        echo $data['interest'];
                                                                                                                     } ?>" <?php if (!empty($data['interest']) && $status == 5) {
                                                                                                                              echo "readonly";
                                                                                                                           } else {
                                                                                                                              echo "required";
                                                                                                                           } ?>>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <div class="marg-btom25"></div>
                                                      <label for="example-select">Tenure</label>
                                                   </div>
                                                   <div class="col-md-8">
                                                      <div class="marg-btom25"></div>
                                                      <input type="number" class="form-control" id="tenure" value="<?php if (!empty($data['tenure']) && $status == 5) {
                                                                                                                        echo $data['tenure'];
                                                                                                                     } ?>" <?php if (!empty($data['tenure']) && $status == 5) {
                                                                                                                              echo "readonly";
                                                                                                                           } else {
                                                                                                                              echo "required";
                                                                                                                           } ?>>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <div class="marg-btom25"></div>
                                                      <label for="example-select">Conditions</label>
                                                   </div>
                                                   <div class="col-md-8">
                                                      <div class="marg-btom25"></div>
                                                      <textarea name="" id="conditions" cols="30" rows="10" class="form-control" <?php if (!empty($data['conditions']) && $status == 5) {
                                                                                                                                    echo "readonly";
                                                                                                                                 } else {
                                                                                                                                    echo "required";
                                                                                                                                 } ?>><?php if (!empty($data['conditions']) && $status == 5) {
                                                                                                                                          echo $data['conditions'];
                                                                                                                                       } ?></textarea>
                                                   </div>
                                                </div>

                                                <!-- card will go here -->
                                                <!-- class="<?php echo $balance != 0 ? 'd-none' : ''; ?>" -->
                                                <div id="cardRow" class="d-none">
                                                   <div class="row">
                                                      <div class="col-12">
                                                         <div class="marg-btom25"></div>
                                                         <div class="text-danger text-center">You don't have enaough balance to transfer funds.</div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-4">
                                                         <div class="marg-btom25"></div>
                                                         <label for="cardNumber">Card number</label>
                                                      </div>
                                                      <div class="col-md-8">
                                                         <div class="marg-btom25"></div>
                                                         <div id="card-number" class="form-control"></div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-4">
                                                         <div class="marg-btom25"></div>
                                                         <label><span class="hidden-xs">Expiration</span></label>
                                                      </div>
                                                      <div class="col-md-8">
                                                         <div class="marg-btom25"></div>
                                                         <div id="card_expiry" class="form-control"></div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-4">
                                                         <div class="marg-btom25"></div>
                                                         <label data-toggle="tooltip" title="Three-digits code on the back of your card">CVV
                                                            <i class="fa fa-question-circle"></i>
                                                         </label>
                                                      </div>
                                                      <div class="col-md-8">
                                                         <div class="marg-btom25"></div>
                                                         <div id="card-cvc" class="form-control"></div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12 text-center">
                                                         <div id="card-errors" class="text-danger"></div>
                                                         <div class="marg-btom25"></div>
                                                         <button type="buton" id="payBtn" class="subscribe btn btn-primary waves-effect waves-light"> Confirm </button>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- card end -->
                                             </div>


                                             <?php if ($status != 5) {
                                             ?>
                                                <div class="row">
                                                   <input id="stripeToken" type="hidden" name="stripeToken" value="">
                                                   <div class="col-md-12 text-center">
                                                      <div id="errorShow" class="alert alert-danger mt-3 d-none"></div>
                                                      <div class="marg-btom25"></div>
                                                      <button type="button" id="submitbutton" class="btn btn-primary waves-effect waves-light mb-2" onclick="submit_form1()">Submit</button>
                                                   </div>
                                                </div>
                                             <?php
                                             }
                                             ?>

                                          </div>
                                       </div>
                                       <!-- end card-body -->
                                    </div>

                                    <!-- end card-->
                                 </div>
                              </div>
                           </form>
                        </div>




                        <div class="tab-pane fade" id="overvew-tb" role="tabpanel" aria-labelledby="overview-tab">
                           <div class="card virtual-left">
                              <div class="card-body">
                                 <div id="cardCollpase4" class="collapse pt-3 show">

                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="blue-gray">
                                             <div class="col-md-8 mx-auto">
                                                <div class="row align-center">
                                                   <div class="col-md-4">
                                                      <label for="example-select marg-top10">Status</label>
                                                   </div>

                                                   <div class="col-md-8">

                                                      <select class="form-control custom-select" onchange="submit_form2();" name="status" id="exampleselect123">
                                                         <option value="1" <?php if ($$status == 1) {
                                                                              echo "selected";
                                                                           } ?>>Under Review</option>
                                                         <option value="2" <?php if ($$status == 1) {
                                                                              echo "selected";
                                                                           } ?>>Document Pending</option>
                                                         <option value="3" <?php if ($status == 3) {
                                                                              echo "selected";
                                                                           } ?>>Document Received</option>
                                                         <option value="4" <?php if ($status == 4) {
                                                                              echo "selected";
                                                                           } ?>>File Submitted</option>
                                                         <option value="5" <?php if ($status == 5) {
                                                                              echo "selected";
                                                                           } ?>>Approved</option>
                                                         <option value="6" <?php if ($status == 6) {
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
                                             <section id="tabs">
                                                <nav>
                                                   <div class="nav nav-tabs nav-fill" id="nav-tab1" role="tablist">
                                                      <!--    <a class="nav-item nav-link" id="Add-Note-tab" data-toggle="tab" href="#Add-Note" role="tab" aria-controls="Add-Note" aria-selected="false">Add Note</a>
                                                      
                                        <a class="nav-item nav-link" id="send-email-tab" data-toggle="tab" href="#send-email" role="tab" aria-controls="send-email" aria-selected="false">Send Email</a>-->
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
                                                                  <form method="post" action="<?php echo base_url() . 'admin/note' ?>">
                                                                     <input type="hidden" id="last" name="last" value="<?php foreach ($data as $row) {
                                                                                                                           echo $row->id;
                                                                                                                        } ?>" />

                                                                     <div class="form-group">
                                                                        <label for="sel1">Status:</label>
                                                                        <select class="form-control" name="status" id="sel1">
                                                                           <option>Under Review</option>
                                                                           <option>Document Pending</option>
                                                                           <option>Document Received</option>
                                                                           <option>File Submitted</option>
                                                                           <option>Approved</option>
                                                                           <option>Rejected</option>
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
                                                      <?php foreach ($mes as $r) { ?>
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                               <div class="card">
                                                                  <div class="card-body">
                                                                     <h5><b>Status: <span class="blu-text"><?php echo $r->status_m ?></span></b></h5>
                                                                     <p><?php echo $r->message ?></p>
                                                                     <h5><b>Writer: <?php echo $r->msg_sub_by; ?></b></h5>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      <?php } ?>


                                                   </div>
                                                   <div class="tab-pane fade" id="send-email" role="tabpanel" aria-labelledby="send-email-tab">
                                                      <div class="inbox-rightbar">
                                                         <div class="mt-4">
                                                            <form method="post" action="<?php echo base_url() . 'admin/mail' ?>">
                                                               <input type="hidden" id="last" name="last" value="<?php foreach ($data as $row) {
                                                                                                                     echo $row->id;
                                                                                                                  } ?>" />
                                                               <div class="form-group">
                                                                  <input type="email" name="to" class="form-control" placeholder="To">
                                                               </div>
                                                               <div class="form-group">
                                                                  <input type="text" name="subject" class="form-control" placeholder="Subject">
                                                               </div>
                                                               <div class="form-group">
                                                                  <div class="summernote" style="display: none;">

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

                                                                        <div class="form-group" style="height: 230px;"><textarea rows="12" cols="57" name="messagebody"></textarea>

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

                                                      <div class="form-group">

                                                         <label for="sel1">Uploaded Documents List:</label>

                                                         <?php
                                                         foreach ($docs as $row) { ?>



                                                            <p>
                                                               <a href="<?php echo base_url(); ?>uploads/<?php echo $row->file_path; ?>" download><?php echo $row->file_path; ?></a>
                                                            </p>



                                                         <?php } ?>


                                                      </div>



                                                      <!--   <form  method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                                         data-upload-preview-template="#uploadPreviewTemplate">-->
                                                      <center>
                                                         <br />
                                                         <form id="doc_admin_upload" action="<?php echo base_url() . 'admin/do_upload_doc' ?>" enctype="multipart/form-data" method="post">
                                                            <input type="hidden" name="status" value="<?php echo $status; ?>">
                                                            <input type="hidden" name="app_id" value="<?php echo $app_no; ?>">
                                                            <div class="form-group">
                                                               <label for="sel1">Upload Document</label>
                                                            </div>
                                                            <div class="fallback">
                                                               <input name="files" type="file" required multiple />
                                                            </div>


                                                            <div class="marg-btom25"></div>
                                                            <div class="form-group text-center">

                                                            </div>
                                                            <div class="marg-btom25"></div>
                                                            <div class="form-group text-center">

                                                               <button type="submit" class="btn btn-primary">Submit</button>
                                                            </div>
                                                         </form>
                                                      </center>
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
                              <div class="nav nav-tabs nav-fill " id="nav-tab" role="tablist">

                                 <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Notes</a>
                                 <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Email</a>
                              </div>
                           </nav>
                           <div class="tab-content py-3 px-3 px-sm-0 active" id="nav-tabContent">

                              <div class="tab-pane fade acive" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                 <div class="row">
                                    <div class="col-md-6">
                                       Internal Notes and Messages Among Trainers:
                                    </div>
                                    <div class="col-md-6 text-right">
                                       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Add New Mote</button>
                                    </div>
                                 </div>

                                 <div class="marg-btom25"></div>
                                 <?php foreach ($notes as $r) { ?>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="card">
                                             <div class="card-body">
                                                <h5><b>Status: <span class="blu-text"><?php


                                                                                       if ($r->status == 1) {
                                                                                          echo "Under Review";
                                                                                       } else if ($r->status == 2) {
                                                                                          echo "Document Pending";
                                                                                       } else if ($r->status == 3) {
                                                                                          echo "Document Received";
                                                                                       } else if ($r->status == 4) {
                                                                                          echo "File Submitted";
                                                                                       } else if ($r->status == 5) {

                                                                                          echo "Accepted";
                                                                                       } else if ($r->status == 6) {
                                                                                          echo "Rejected";
                                                                                       }
                                                                                       ?></span></b></h5>
                                                <p><?php echo $r->note; ?></p>
                                                <h5><b>Writer: <?php echo $r->created_by; ?></b></h5>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 <?php } ?>


                              </div>


                              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                 <div class="inbox-rightbar">
                                    <div class="mt-4">
                                       <form method="post" action="<?php echo base_url() . 'admin/mail_send' ?>">
                                          <input type="hidden" id="last" name="last" value="<?php foreach ($data as $row) {
                                                                                                echo $row->id;
                                                                                             } ?>" />
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

                                                <!-- <textarea class="note-codable" role="textbox" aria-multiline="true"></textarea>-->
                                                <div class="note-editable card-block" class="form-control" style="height: 230px;"><textarea rows="10" cols="24" placeholder="Type Your message" name="messagebody"></textarea>
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
                                          <!--  <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="mdi mdi-content-save-outline"></i></button>-->
                                          <!--  <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="mdi mdi-delete"></i></button>-->

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
   <?php include('footer.php'); ?>
   <!-- end Footer -->
   <!-- Vendor js -->
   <script src="<?php echo base_url(); ?>assets/admin/js/vendor.min.js"></script>
   <!-- Third Party js-->
   <script src="<?php echo base_url(); ?>assets/admin/libs/peity/jquery.peity.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/admin/libs/apexcharts/apexcharts.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/admin/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/admin/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js"></script>
   <!-- Dashboard init -->
   <script src="<?php echo base_url(); ?>assets/admin/js/pages/dashboard-1.init.js"></script>
   <!-- App js-->
   <script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script>
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
   <script src="<?php echo base_url(); ?>assets/admin/libs/dropzone/dropzone.min.js"></script>
   <!-- Init js-->
   <script src="<?php echo base_url(); ?>assets/admin/js/pages/form-fileuploads.init.js"></script>
   <!-- App js-->
   <div class="modal" id="myModal1">
      <div class="modal-dialog">
         <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
               <h2 class="modal-title">Add New Note</h2>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->

            <div class="modal-body">
               <form method="post" action="<?php echo base_url() . 'admin/note' ?>">


                  <input type="hidden" name="app_id" value="<?php echo $app_no; ?>">
                  <div class="form-group">
                     <label for="sel1">Status:</label>
                     <select class="form-control" name="status" id="sel1">
                        <option value="1" <?php if ($$status == 1) {
                                             echo "selected";
                                          } ?>>Under Review</option>
                        <option value="2" <?php if ($$status == 1) {
                                             echo "selected";
                                          } ?>>Document Pending</option>
                        <option value="3" <?php if ($status == 3) {
                                             echo "selected";
                                          } ?>>Document Received</option>
                        <option value="4" <?php if ($status == 4) {
                                             echo "selected";
                                          } ?>>File Submitted</option>
                        <option value="5" <?php if ($status == 5) {
                                             echo "selected";
                                          } ?>>Approved</option>
                        <option value="6" <?php if ($status == 6) {
                                             echo "selected";
                                          } ?>>Rejected</option>
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

   <script src="https://js.stripe.com/v3/"></script>
   <script>
      var stripe = Stripe('<?php echo $stripe_key; ?>');
      var elements = stripe.elements();

      // Custom styling can be passed to options when creating an Element.
      var style = {
         base: {
            fontWeight: 400,
            fontSize: '16px',
            lineHeight: '1.4',
            color: '#555',
            backgroundColor: '#fff',
            '::placeholder': {
               color: '#888',
            },
         },
         invalid: {
            color: '#eb1c26',
         }
      };
      var cardElement = elements.create('cardNumber', {
         style: style
      });
      cardElement.mount('#card-number');

      var exp = elements.create('cardExpiry', {
         'style': style
      });
      exp.mount('#card_expiry');

      var cvc = elements.create('cardCvc', {
         'style': style
      });
      cvc.mount('#card-cvc');

      // Validate input of the card elements
      var resultContainer = document.getElementById('card-errors');

      cardElement.addEventListener('change', function(event) {
         if (event.error) {
            resultContainer.innerHTML = '<p class="text-danger">' + event.error.message + '</p>';
         } else {
            resultContainer.innerHTML = '';
         }
      });

      // Create a token or display an error when the form is submitted.
      var confirmButton = document.getElementById('payBtn');
      confirmButton.addEventListener('click', function(event) {
         $('#payBtn').attr('disabled', 'disabled').text('Please Wait');
         event.preventDefault();

         stripe.createToken(cardElement).then(function(result) {
            if (result.error) {
               // Inform the customer that there was an error.
               var errorElement = document.getElementById('card-errors');
               errorElement.textContent = result.error.message;
               $('#payBtn').removeAttr('disabled').text('Confirm');
            } else {
               // Send the token to your server.
               stripeTokenHandler(result.token);
            }
         });
      });

      function stripeTokenHandler(token) {
         document.getElementById('stripeToken').value = token.id;
         $('#submitbutton').removeAttr('disabled');
         $('#payBtn').text('Done');

         // Insert the token ID into the form so it gets submitted to the server
         // var hiddenInput = document.createElement('input');
         // hiddenInput.setAttribute('type', 'hidden');
         // hiddenInput.setAttribute('name', 'stripeToken');
         // hiddenInput.setAttribute('value', token.id);

         // var cardRow = document.getElementById('cardRow');
         // cardRow.appendChild(hiddenInput);

      }
   </script>

   <script>
      $("#approve_amount").on('change', function(e) {
         if (e.target.value > <?php echo $balance; ?>) {
            $('#cardRow').removeClass('d-none');
            $('#submitbutton').attr('disabled', 'disabled');
         } else {
            $('#cardRow').addClass('d-none');
            $('#submitbutton').removeAttr('disabled');
         }
      });

      function submit_form1() {
         $('#submitbutton').attr('disabled', 'disabled').text('Please Wait');
         var status = $("#example-status").val();
         var app_id = <?php echo $data['app_no']; ?>;
         var approve_amount = $("#approve_amount").val();
         var interest = $("#interest").val();
         var tenure = $("#tenure").val();
         var conditions = $("#conditions").val();
         var stripeToken = $("#stripeToken").val();

         var pending_doclist = $("#pending_doc_list").val();
         $.ajax({
            type: 'post',
            url: '<?php echo base_url(); ?>steps/update_app_id_status/' + app_id + '/' + status,
            data: {
               'stripeToken': stripeToken,
               'amount': approve_amount
            },
            dataType: "json",
            success: function(res) {
               if (res.status) {
                  $('#errorShow').addClass('d-none');
                  if (status == '5') {
                     $.ajax({
                        url: '<?php echo base_url(); ?>steps/approve_app_id_status',
                        data: {
                           "app_id": app_id,
                           "approve_amount": approve_amount,
                           "interest": interest,
                           "tenure": tenure,
                           "conditions": conditions,
                           'charge_id': res.charge_id
                        },
                        dataType: "json",
                        type: "post",
                        success: function(data) {
                           console.log(data);
                        }
                     });
                  }
                  if (status == '1') {
                     $.ajax({
                        url: '<?php echo base_url(); ?>steps/update_pending_doclist',
                        data: {
                           "app_id": app_id,
                           "pending_doclist": pending_doclist
                        },
                        dataType: "json",
                        type: "post",
                        success: function(data) {}
                     });
                  }
                  window.location.href = '<?php echo base_url(); ?>admin/application';

                  // setTimeout(function() {
                  //    window.location.href = '<?php echo base_url(); ?>admin/application';
                  // }, 1000);
               } else {
                  $('#errorShow').removeClass('d-none').text(res.message);
                  $('#submitbutton').removeAttr('disabled').text('Submit');
               }
            }
         });
      }

      function submit_form2() {

         var status = $("#exampleselect123").val();
         var app_id = <?php echo $data['app_no']; ?>;

         $.ajax({
            type: 'post',
            url: '<?php echo base_url(); ?>steps/update_app_id_status/' + app_id + '/' + status,
            success: function(data) {
               setTimeout(function() {
                  window.location.href = '<?php echo base_url(); ?>admin/application';
               }, 3000);
            }

         });
      }
   </script>
   <script>
      $(document).ready(function() {
         if ($('#example-status').val() == '') {
            $('#submitbutton').hide();
         }
      });
      $('#example-status').change(function() {
         $('#submitbutton').removeAttr('disabled');
         $('#onboardingError').addClass('d-none');
         var status = $('#example-status').val();
         if (status == '1') {
            $("#display_textarea").show();
            $("#update_acceptstatus").hide();
            $('#submitbutton').show();
         } else if (status == '5') {
            // if user has not completed stripe onboarding process then disabled button
            if ('<?php echo $completed_onboarding; ?>' === 'false') {
               $('#onboardingError').removeClass('d-none');
               $('#submitbutton').attr('disabled', 'disabled');
            }

            $("#update_acceptstatus").show();
            $("#display_textarea").hide();
            $('#submitbutton').show();

         } else if (status == '') {
            $('#submitbutton').hide();
            $("#update_acceptstatus").hide();
            $("#display_textarea").hide();
         } else {
            $("#update_acceptstatus").hide();
            $("#display_textarea").hide();
            $('#submitbutton').show();

         }

      });
   </script>
</body>

</html>