<!DOCTYPE html>
<html lang="en">
   <!-- Header Begins -->
   
   <?php include('header.php');?>
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
         if($data['app_status']=='Pending'){
             $status=1;
         }else if($data['app_status']=='Document Recieved'){
             $status=2;
         }else if($data['app_status']=='File Submitted'){
             $status=3;
         }else if($data['app_status']=='Under Review'){
             $status=4;
         }else if($data['app_status']=='Accepted'){
             $status=5;
         }
         
         else if($data['app_status']=='Rejected'){
             $status=6;
         }
        ?>
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
								   if($data['purpose']=="Business" || $data['purpose']=="Commercial"){
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
                                                   <p><?php echo $data['submission_date'];?></p>
                                                </li>
                                               
                                                <li>
                                                   <p><b>Name</b></p>
                                                   <p><?php echo $data['userdetails']->name;?></p>
                                                </li>
                                                <li>
                                                   <p><b>Mobile</b></p>
                                                   <p><?php echo $data['userdetails']->mobile;?></p>
                                                </li>
                                                <li>
                                                   <p><b>Email</b></p>
                                                   <p><?php echo $data['userdetails']->email;?></p>
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
                                             <li>
                                                <div class="widlft50">
                                                   <p><b>Funding Purpose:</b></p>
                                                   <p><?php echo $data['purpose']; ?></p>
                                                </div>
                                               
                                             </li>
                                             <li>
                                                
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
                                                <p><b><?php echo $answers[1]['question']; ?></b></p>
                                                <p><?php echo $answers[1]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[2]['question']; ?></b></p>
                                                <p><?php echo $answers[2]['answer']." ".$answers[3]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[4]['question']; ?></b></p>
                                                <p><?php if(!empty($answers[4]['answer'])){
                                                   if(!empty($answers[5]['answer'])){
                                                      echo $answers[4]['answer'].",".$answers[5]['answer'];
                                                    }else{
                                                      echo $answers[4]['answer'];
                                                    }}else{
                                                      echo $answers[5]['answer'];
                                                    } ?>
                                                </p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[6]['question']; ?></b></p>
                                                <p><?php echo $answers[6]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[7]['question']; ?></b></p>
                                                <p><?php echo $answers[7]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[8]['question']; ?></b></p>
                                                <p><?php echo $answers[8]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[9]['question']; ?></b></p>
                                                <p><?php echo $answers[9]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[10]['question']; ?></b></p>
                                                <p><?php if(!empty($answers[10]['answer'])){
                                                 if(!empty($answers[10]['answer'])){
                                                   echo $answers[10]['answer'].",".$answers[11]['answer'];
                                                 }else{
                                                   echo $answers[10]['answer'];
                                                 }}else{
                                                   echo $answers[11]['answer'];
                                                 } ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[12]['question']; ?></b></p>
                                                <p><?php echo $answers[12]['answer']; ?></p>
                                             <li>
                                                <p><b><?php echo $answers[13]['question']; ?></b></p>
                                                <p><?php echo $answers[13]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b>Purose </b></p>
                                                <p><?php echo $data['purpose']; ?></p>
                                             </li>
                                          </ul>
                                       </div>
                                       <?php //JUST ME contact info
                                       $acc_type = trim($answers[13]['answer']);
                                       if(strcmp($acc_type,'Just me')==0){?>
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
                                       <?php }else if($answers[13]['answer']=='I and my client'){ ?>
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

                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="login-or">
                                             <hr class="hr-or">
                                             <span class="span-or">Owner Information</span>
                                          </div>
                                       </div>
                                    </div>
									
									 
                                    <div class="row">
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b><?php echo $answers[20]['question']; ?></b></p>
                                                <p><?php echo $answers[20]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[21]['question']; ?></b></p>
                                                <p><?php echo $answers[21]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[22]['question']; ?></b></p>
                                                <p><?php echo $answers[22]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[23]['question']; ?></b></p>
                                                <p><?php echo $answers[23]['answer']; ?></p>
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
                                                <p><b><?php echo $answers[26]['question']; ?></b></p>
                                                <p><?php echo $answers[26]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[27]['question']; ?></b></p>
                                                <p><?php if(!empty($answers[27]['answer'])){
                                                   if(!empty($answers[28]['answer'])){
                                                     echo $answers[27]['answer'].",".$answers[28]['answer'];
                                                   }else{
                                                     echo $answers[27]['answer'];
                                                   }}else{
                                                     echo $answers[28]['answer'];
                                                   } ?></p>
                                             </li>
                                          </ul>
                                       </div>
                                       <!--<div class="col-md-12">
                                          <div class="labelcss">
                                             <label>FULL ADDRESS OF THE BUSINESS</label>
                                          </div>
                                       </div>-->
									   
									    <div class="col-md-12">
                                          <div class="login-or">
                                             <hr class="hr-or">
                                             <span class="span-or">FULL ADDRESS OF THE BUSINESS</span>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b><?php echo $answers[29]['question']; ?></b></p>
                                                <p><?php echo $answers[29]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[30]['question']; ?></b></p>
                                                <p><?php echo $answers[30]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[31]['question']; ?></b></p>
                                                <p><?php echo $answers[31]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[32]['question']; ?></b></p>
                                                <p><?php echo $answers[32]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[33]['question']; ?></b></p>
                                                <p><?php echo $answers[33]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[34]['question']; ?></b></p>
                                                <p><?php echo $answers[34]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[35]['question']; ?></b></p>
                                                <p><?php echo $answers[35]['answer']; ?></p>
                                             </li>
                                          </ul>
                                       </div>
									   
									   <div class="col-md-12">
                                          <div class="login-or">
                                             <hr class="hr-or">
                                             <span class="span-or">INDUSTRY CLASSIFICATION AND SUB-CLASSIFICATION</span>
                                          </div>
                                       </div>
									   
									   
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b><?php echo $answers[36]['question']; ?></b></p>
                                                <p><?php 
                                                   $category = $this->Admin_model->fetchValue('industry_categories','cat_name',array('cat_id' => $answers[36]['answer']));
                                                   echo $category; 
                                                   ?>
                                                </p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[37]['question']; ?></b></p>
                                                <p><?php 
                                                   $subcategory = $this->Admin_model->fetchValue('industry_subcategories','sub_name',array('sub_id' => $answers[37]['answer']));
                                                   echo $subcategory;  
                                                   ?>
                                                </p>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b><?php echo $answers[38]['question']; ?></b></p>
                                                <p><?php echo $answers[38]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[39]['question']; ?></b></p>
                                                <p><?php echo $answers[39]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[40]['question']; ?></b></p>
                                                <p><?php echo $answers[40]['answer']; ?></p>
                                             </li>
                                             <?php if($answers[40]['answer'] == 'Yes'): ?>
                                             <li>
                                                <p><b><?php echo $answers[41]['question']; ?></b></p>
                                                <p><?php echo $answers[41]['answer']; ?></p>
                                             </li>
                                             <?php endif; ?>
                                             <li>
                                                <p><b><?php echo $answers[42]['question']; ?></b></p>
                                                <p><?php echo $answers[42]['answer']; ?></p>
                                             </li>
                                             <?php if($answers[42]['answer'] == 'Yes'): ?>
                                             <li>
                                                <p><b><?php echo $answers[43]['question']; ?></b></p>
                                                <p><?php echo $answers[43]['answer']; ?></p>
                                             </li>
                                             <?php endif; ?>
                                          </ul>
                                       </div>
                                       <!--<div class="col-md-12">
                                          <div class="labelcss">
                                             <label>PERSONAL INFORMATION OF OWNER(S)</label>
                                             <p><b>BUSINESS INFO</b></p>
                                          </div>
                                       </div>-->
									   <div class="col-md-12">
                                          <div class="login-or">
                                             <hr class="hr-or">
                                             <span class="span-or">PERSONAL INFORMATION OF OWNER(S)<Br/>
											 <b>BUSINESS INFO</b>
											 </span>
                                          </div>
                                       </div>
									   
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b><?php echo $answers[44]['question']; ?></b></p>
                                                <p><?php echo $answers[44]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[45]['question']; ?></b></p>
                                                <p><?php echo $answers[45]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[46]['question']; ?></b></p>
                                                <p><?php echo $answers[46]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[47]['question']; ?></b></p>
                                                <p><?php echo $answers[47]['answer']; ?></p>
                                             </li>
                                          </ul>
                                       </div>
                                      
									 <div class="col-md-12">
                                          <div class="login-or">
                                             <hr class="hr-or">
                                             <span class="span-or">PRIMARY OWNER</span>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b><?php echo $answers[48]['question']; ?></b></p>
                                                <p><?php echo $answers[48]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[49]['question']; ?></b></p>
                                                <p><?php echo $answers[49]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[50]['question']; ?></b></p>
                                                <p><?php echo $answers[50]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[51]['question']; ?></b></p>
                                                <p><?php echo $answers[51]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[52]['question']; ?></b></p>
                                                <p><?php echo $answers[52]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[53]['question']; ?></b></p>
                                                <p><?php echo $answers[53]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[54]['question']; ?></b></p>
                                                <p><?php echo $answers[54]['answer']; ?></p>
                                             </li>
                                          </ul>
                                       </div>
                                       <!--<div class="col-md-12">
                                          <div class="labelcss">
                                             <label>SECONDARY OWNER</label>
                                          </div>
                                       </div> -->

                                  <div class="col-md-12">
                                          <div class="login-or">
                                             <hr class="hr-or">
                                             <span class="span-or">SECONDARY OWNER</span>
                                          </div>
                                       </div>									   
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b><?php echo $answers[55]['question']; ?></b></p>
                                                <p><?php echo $answers[55]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[56]['question']; ?></b></p>
                                                <p><?php echo $answers[56]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[57]['question']; ?></b></p>
                                                <p><?php echo $answers[57]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[58]['question']; ?></b></p>
                                                <p><?php echo $answers[58]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[59]['question']; ?></b></p>
                                                <p><?php echo $answers[59]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[60]['question']; ?></b></p>
                                                <p><?php echo $answers[60]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[61]['question']; ?></b></p>
                                                <p><?php echo $answers[61]['answer']; ?></p>
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
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="login-or">
                                             <hr class="hr-or">
                                             <span class="span-or">Documents Submission</span>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b><?php echo $answers[62]['question']; ?></b></p>
                                                <p><?php echo $answers[62]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[63]['question']; ?></b></p>
                                                <p><?php echo $answers[63]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[64]['question']; ?></b></p>
                                                <p><?php echo $answers[64]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[65]['question']; ?></b></p>
                                                <p><?php echo $answers[65]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[66]['question']; ?></b></p>
                                                <p><?php echo $answers[66]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[67]['question']; ?></b></p>
                                                <p><?php echo $answers[67]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[68]['question']; ?></b></p>
                                                <p><?php echo $answers[68]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[69]['question']; ?></b></p>
                                                <p><?php echo $answers[69]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[70]['question']; ?></b></p>
                                                <p><?php echo $answers[70]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[71]['question']; ?></b></p>
                                                <p><?php echo $answers[71]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[72]['question']; ?></b></p>
                                                <p><?php echo $answers[72]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[73]['question']; ?></b></p>
                                                <p><?php echo $answers[73]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[74]['question']; ?></b></p>
                                                <p><?php echo $answers[74]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[75]['question']; ?></b></p>
                                                <p><?php echo $answers[75]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[76]['question']; ?></b></p>
                                                <p><?php echo $answers[76]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[77]['question']; ?></b></p>
                                                <p><?php echo $answers[77]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[78]['question']; ?></b></p>
                                                <p><?php echo $answers[78]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[79]['question']; ?></b></p>
                                                <p><?php echo $answers[79]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[80]['question']; ?></b></p>
                                                <p><?php echo $answers[80]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[81]['question']; ?></b></p>
                                                <p><?php echo $answers[81]['answer']; ?></p>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                  
                                 </div>
                                 <!-- end card-->   
                              </div>
                           </div>
						   
						   <?php 
						   
						   }else if($data['purpose']=="Mortgage"){ ?>
						   
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
                                                   <p><?php echo $data['submission_date'];?></p>
                                                </li>
                                               
                                                <li>
                                                   <p><b>Name</b></p>
                                                   <p><?php echo $data['userdetails']->name;?></p>
                                                </li>
                                                <li>
                                                   <p><b>Mobile</b></p>
                                                   <p><?php echo $data['userdetails']->mobile;?></p>
                                                </li>
                                                <li>
                                                   <p><b>Email</b></p>
                                                   <p><?php echo $data['userdetails']->email;?></p>
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
                                             <li>
                                                <div class="widlft50">
                                                   <p><b>Funding Purpose:</b></p>
                                                   <p><?php echo $data['purpose']; ?></p>
                                                </div>
                                               
                                             </li>
                                             <li>
                                                
                                             </li>
                                             <div class="clear"></div>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="login-or">
                                             <hr class="hr-or">
                                             <span class="span-or">Mortgage/Home Loan Information</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b><?php echo $answers[1]['question']; ?></b></p>
                                                <p><?php echo $answers[1]['answer']; ?></p>
                                             </li>
											 
											 <li>
                                                <p><b><?php echo $answers[2]['question']; ?></b></p>
                                                <p><?php echo $answers[2]['answer']; ?></p>
                                             </li>
											 
											  <li>
                                                <p><b><?php echo $answers[3]['question']; ?></b></p>
                                                <p><?php echo $answers[3]['answer']; ?></p>
                                             </li>
                                              
                                              
											  <li>
                                                <p><b><?php echo $answers[4]['question']; ?></b></p>
                                                <p><?php echo $answers[4]['answer']; ?></p>
                                             </li>
                                            
											
											 <li>
                                                <p><b><?php echo $answers[5]['question']; ?></b></p>
                                                <p><?php echo $answers[5]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[6]['question']; ?></b></p>
                                                <p><?php echo $answers[6]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[7]['question']; ?></b></p>
                                                <p><?php echo $answers[7]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[8]['question']; ?></b></p>
                                                <p><?php echo $answers[8]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[9]['question']; ?></b></p>
                                                <p><?php echo $answers[9]['answer']; ?></p>
                                             </li>
											 
											  <li>
                                                <p><b><?php echo $answers[10]['question']; ?></b></p>
                                                <p><?php echo $answers[10]['answer']; ?></p>
                                             </li>
											 
											  <li>
                                                <p><b><?php echo $answers[11]['question']; ?></b></p>
                                                <p><?php echo $answers[11]['answer']; ?></p>
                                             </li>
                                           
                                             <li>
                                                <p><b><?php echo $answers[12]['question']; ?></b></p>
                                                <p><?php echo $answers[12]['answer']; ?></p>
                                             <li>
                                                <p><b><?php echo $answers[13]['question']; ?></b></p>
                                                <p><?php echo $answers[13]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b>Purose </b></p>
                                                <p><?php echo $data['purpose']; ?></p>
                                             </li>
											 
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
											 
											   <li>
                                                <p><b><?php echo $answers[20]['question']; ?></b></p>
                                                <p><?php echo $answers[20]['answer']; ?></p>
                                             </li>
											 
											   <li>
                                                <p><b><?php echo $answers[21]['question']; ?></b></p>
                                                <p><?php echo $answers[21]['answer']; ?></p>
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
                           
						   
						   <?php } 
						   else if($data['purpose']=="Insurance"){ ?>
						   
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
                                                   <p><?php echo $data['submission_date'];?></p>
                                                </li>
                                               
                                                <li>
                                                   <p><b>Name</b></p>
                                                   <p><?php echo $data['userdetails']->name;?></p>
                                                </li>
                                                <li>
                                                   <p><b>Mobile</b></p>
                                                   <p><?php echo $data['userdetails']->mobile;?></p>
                                                </li>
                                                <li>
                                                   <p><b>Email</b></p>
                                                   <p><?php echo $data['userdetails']->email;?></p>
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
                                             <li>
                                                <div class="widlft50">
                                                   <p><b>Funding Purpose:</b></p>
                                                   <p><?php echo $data['purpose']; ?></p>
                                                </div>
                                               
                                             </li>
                                             <li>
                                                
                                             </li>
                                             <div class="clear"></div>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="login-or">
                                             <hr class="hr-or">
                                             <span class="span-or">Insurance Loan Information</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b><?php echo $answers[1]['question']; ?></b></p>
                                                <p><?php echo $answers[1]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[2]['question']; ?></b></p>
                                                <p><?php echo $answers[2]['answer']." ".$answers[3]['answer']; ?></p>
                                             </li>
                                              
											  <li>
                                                <p><b><?php echo $answers[4]['question']; ?></b></p>
                                                <p><?php echo $answers[4]['answer']; ?></p>
                                             </li>
                                            
											
											 <li>
                                                <p><b><?php echo $answers[5]['question']; ?></b></p>
                                                <p><?php echo $answers[5]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[6]['question']; ?></b></p>
                                                <p><?php echo $answers[6]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[7]['question']; ?></b></p>
                                                <p><?php echo $answers[7]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[8]['question']; ?></b></p>
                                                <p><?php echo $answers[8]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[9]['question']; ?></b></p>
                                                <p><?php echo $answers[9]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[10]['question']; ?></b></p>
                                                <p><?php if(!empty($answers[10]['answer'])){
                                                 if(!empty($answers[10]['answer'])){
                                                   echo $answers[10]['answer'].",".$answers[11]['answer'];
                                                 }else{
                                                   echo $answers[10]['answer'];
                                                 }}else{
                                                   echo $answers[11]['answer'];
                                                 } ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[12]['question']; ?></b></p>
                                                <p><?php echo $answers[12]['answer']; ?></p>
                                             <li>
                                                <p><b><?php echo $answers[13]['question']; ?></b></p>
                                                <p><?php echo $answers[13]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b>Purose </b></p>
                                                <p><?php echo $data['purpose']; ?></p>
                                             </li>
											 
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
											 
											   <li>
                                                <p><b><?php echo $answers[20]['question']; ?></b></p>
                                                <p><?php echo $answers[20]['answer']; ?></p>
                                             </li>
											 
											   <li>
                                                <p><b><?php echo $answers[21]['question']; ?></b></p>
                                                <p><?php echo $answers[21]['answer']; ?></p>
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
                           
						   
						   <?php }
						   
						   
						   else if($data['purpose']=="Personal"){ ?>
						   
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
                                                   <p><?php echo $data['submission_date'];?></p>
                                                </li>
                                               
                                                <li>
                                                   <p><b>Name</b></p>
                                                   <p><?php echo $data['userdetails']->name;?></p>
                                                </li>
                                                <li>
                                                   <p><b>Mobile</b></p>
                                                   <p><?php echo $data['userdetails']->mobile;?></p>
                                                </li>
                                                <li>
                                                   <p><b>Email</b></p>
                                                   <p><?php echo $data['userdetails']->email;?></p>
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
                                             <li>
                                                <div class="widlft50">
                                                   <p><b>Funding Purpose:</b></p>
                                                   <p><?php echo $data['purpose']; ?></p>
                                                </div>
                                               
                                             </li>
                                             <li>
                                                
                                             </li>
                                             <div class="clear"></div>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="login-or">
                                             <hr class="hr-or">
                                             <span class="span-or">Personal Loan Information</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b><?php echo $answers[1]['question']; ?></b></p>
                                                <p><?php echo $answers[1]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[2]['question']; ?></b></p>
                                                <p><?php echo $answers[2]['answer']." ".$answers[3]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[4]['question']; ?></b></p>
                                                <p><?php if(!empty($answers[4]['answer'])){
                                                   if(!empty($answers[5]['answer'])){
                                                      echo $answers[4]['answer'].",".$answers[5]['answer'];
                                                    }else{
                                                      echo $answers[4]['answer'];
                                                    }}else{
                                                      echo $answers[5]['answer'];
                                                    } ?>
                                                </p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[6]['question']; ?></b></p>
                                                <p><?php echo $answers[6]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[7]['question']; ?></b></p>
                                                <p><?php echo $answers[7]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[8]['question']; ?></b></p>
                                                <p><?php echo $answers[8]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[9]['question']; ?></b></p>
                                                <p><?php echo $answers[9]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[10]['question']; ?></b></p>
                                                <p><?php if(!empty($answers[10]['answer'])){
                                                 if(!empty($answers[10]['answer'])){
                                                   echo $answers[10]['answer'].",".$answers[11]['answer'];
                                                 }else{
                                                   echo $answers[10]['answer'];
                                                 }}else{
                                                   echo $answers[11]['answer'];
                                                 } ?></p>
                                             </li>
                                             <li>
                                                <p><b><?php echo $answers[12]['question']; ?></b></p>
                                                <p><?php echo $answers[12]['answer']; ?></p>
                                             <li>
                                                <p><b><?php echo $answers[13]['question']; ?></b></p>
                                                <p><?php echo $answers[13]['answer']; ?></p>
                                             </li>
                                             <li>
                                                <p><b>Purose </b></p>
                                                <p><?php echo $data['purpose']; ?></p>
                                             </li>
											 
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
											 
											   <li>
                                                <p><b><?php echo $answers[20]['question']; ?></b></p>
                                                <p><?php echo $answers[20]['answer']; ?></p>
                                             </li>
											 
											   <li>
                                                <p><b><?php echo $answers[21]['question']; ?></b></p>
                                                <p><?php echo $answers[21]['answer']; ?></p>
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
                           
						   
						   <?php }
						   
						   ?>
<form class="msform" method="post">
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
                                                <select class="form-control custom-select" name="status" id="example-status">
                                                   <option <?php if($status==1){ ?> selected <?php } ?> value="1">Documents Pending</option>
                                                   <option <?php if($status==2){ ?> selected <?php } ?> value="2">Documents Received</option>
                                                   <option <?php if($status==3){ ?> selected <?php } ?> value="3">File Submitted</option>
                                                   <option <?php if($status==4){ ?> selected <?php } ?> value="4">Under Review</option>
                                                   <option <?php if($status==5){ ?> selected <?php } ?> value="5">Accepted</option>
                                                   <option <?php if($status==6){ ?> selected <?php } ?> value="6">Rejected</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12 text-center">
                                                <div class="marg-btom25"></div>
                                                <button type="button" class="btn btn-primary waves-effect waves-light mb-2" onclick="submit_form1()">Submit</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end card-body -->
                                 </div>
                              
                                 <!-- end card-->   
                              </div>
                           </div></form>
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
                                                         <option value="1"  <?php if($$status==1 ){
                                                            echo "selected";
                                                         } ?>>Documents Pending</option>
                                                         <option value="2" <?php if($$status==1){
                                                            echo "selected";
                                                         } ?>>Documents Received</option>
                                                         <option value="3" <?php if($status ==3){
                                                            echo "selected";
                                                         } ?>>File Submitted</option>
                                                         <option value="4" <?php if($status ==4){
                                                            echo "selected";
                                                         } ?>>Under Review</option>
                <option value="5"  <?php if($status ==5){
                                                            echo "selected";
                                                         } ?>>Accepted</option>
                <option value="6" <?php if($status ==6){
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
                                                                  <form method="post" action="<?php echo base_url() . 'admin/note'?>">
                     <input type="hidden" id="last" name="last" value="<?php foreach($data as $row){echo $row->id; }?>"/>

                                                                     <div class="form-group">
                                                                        <label for="sel1">Status:</label>
                                                                        <select class="form-control" name="status" id="sel1">
                                                                           <option>Reviewing Application2</option>
                                                                           <option>In Progress2</option>
                                                                           <option>Pending2</option>
                                                                           <option>Approved2</option>
                                                                           <option>Declined2</option>
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
                                                                      
                                                                        <div  class="form-group"  style="height: 230px;"><textarea rows="12" cols="57" name="messagebody" ></textarea>
                                                                       
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
                                foreach($docs as $row){ ?>
                           
                           
                                                                
                                      <p>
     <a href="<?php echo base_url();?>uploads/<?php echo $row->file_path; ?>" download><?php echo $row->file_path; ?></a>
                                      </p>  
                                      
                                      
                                                                
                                          <?php } ?>
                                                      
                                                        
                                                         </div>
                                                        
                                                     
                                                      
                                                   <!--   <form  method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                                         data-upload-preview-template="#uploadPreviewTemplate">-->
                                                         <center>
                                                             <br/>
                                                      <form action="<?php echo base_url() . 'admin/do_upload_doc' ?>"  enctype="multipart/form-data" method="post">
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
                                                   </form></center>
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
                                
                                 <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                                    aria-controls="nav-profile" aria-selected="false">Notes</a>
                                 <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" 
                                    aria-controls="nav-contact" aria-selected="false">Email</a>
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
                                 <?php foreach($notes as $r){?>
                                                      <div class="row">
                                                         <div class="col-md-12">
                                                            <div class="card">
                                                               <div class="card-body">
                                                                  <h5><b>Status: <span class="blu-text"><?php
                                                               
                                                                  
                                                            if($r->status==1){
                                                echo "Pending";
                                        }else if($r->status==2){
                                           echo "Document Recieved ";                    
                                                            }
                                                            else if($r->status==3){
                                         echo "File Submitted";
                                                                
                                                            }
                                                            
                                                            else if($r->status==4){
                                            echo "Under Review";
                                                                
                                                            }
                                                            
                                        else if($r->status==5){
                                            
                                             echo "Accepted";
                                                                
                                                            }
                                                            
                                                            
                                        else if($r->status==6){
                                             echo "Rejected";
                                                                
                                                            }
                                                                  ?></span></b></h5>
                                                                  <p><?php echo $r->note; ?></p>
                                                                  <h5><b>Writer: <?php echo $r->created_by;?></b></h5>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   <?php } ?>
                              
                                
                              </div>
                 
                               
                              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                 <div class="inbox-rightbar">
                                    <div class="mt-4">
                                       <form method="post" action="<?php echo base_url() . 'admin/mail_send'?>">
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
                                              
                                                  <!-- <textarea class="note-codable" role="textbox" aria-multiline="true"></textarea>-->
                                                   <div class="note-editable card-block"  class="form-control"  style="height: 230px;" ><textarea rows="10" cols="24" placeholder=
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
      <?php include('footer.php');?>
      <!-- end Footer -->
      <!-- Vendor js -->
      <script src="<?php echo base_url();?>assets/admin/js/vendor.min.js"></script>
      <!-- Third Party js-->
      <script src="<?php echo base_url();?>assets/admin/libs/peity/jquery.peity.min.js"></script>
      <script src="<?php echo base_url();?>assets/admin/libs/apexcharts/apexcharts.min.js"></script>
      <script src="<?php echo base_url();?>assets/admin/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="<?php echo base_url();?>assets/admin/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js"></script>
      <!-- Dashboard init -->
      <script src="<?php echo base_url();?>assets/admin/js/pages/dashboard-1.init.js"></script>
      <!-- App js-->
      <script src="<?php echo base_url();?>assets/admin/js/app.min.js"></script>
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
      <script src="<?php echo base_url();?>assets/admin/libs/dropzone/dropzone.min.js"></script>
      <!-- Init js-->
      <script src="<?php echo base_url();?>assets/admin/js/pages/form-fileuploads.init.js"></script>
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
                                       
                                     
                                            <input type="hidden" name="app_id" value="<?php echo $app_no; ?>">                             
                             <div class="form-group">
                                                                        <label for="sel1">Status:</label>
                     <select class="form-control" name="status" id="sel1">
                                                                           <option value="1"  <?php if($$status==1 ){
                                                            echo "selected";
                                                         } ?>>Documents Pending</option>
                                                         <option value="2" <?php if($$status==1){
                                                            echo "selected";
                                                         } ?>>Documents Received</option>
                                                         <option value="3" <?php if($status ==3){
                                                            echo "selected";
                                                         } ?>>File Submitted</option>
                                                         <option value="4" <?php if($status ==4){
                                                            echo "selected";
                                                         } ?>>Under Review</option>
                <option value="5"  <?php if($status ==5){
                                                            echo "selected";
                                                         } ?>>Accepted</option>
                <option value="6" <?php if($status ==6){
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
     
      <script>
          	function submit_form1(){
 	    var status=$("#example-status").val();
 	    var app_id=<?php echo $data['app_no']; ?>;
 	   
 	      
 	      $.ajax({
        type: 'post',
        url: '<?php echo base_url();?>steps/update_app_id_status/'+app_id+'/'+status,
        success: function(data) {
        
          	setTimeout(function() {
	              window.location.href='<?php echo base_url();?>admin/application';
	        }, 3000);
        }

    });
 	}
 	
 		function submit_form2(){
 		  
 	    var status=$("#exampleselect123").val();
 	    var app_id=<?php echo $data['app_no']; ?>;
 	   
 	      $.ajax({
        type: 'post',
        url: '<?php echo base_url();?>steps/update_app_id_status/'+app_id+'/'+status,
        success: function(data) {
          	setTimeout(function() {
	              window.location.href='<?php echo base_url();?>admin/application';
	        }, 3000);
        }

    });
 	}
      </script>
   </body>
</html>