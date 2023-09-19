<?php $this->load->view('userpanel/header');  ?>



<?php include('navbar.php'); ?>

 
<!DOCTYPE html>
<html lang="en">
   <!-- Header Begins -->
   
  
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
   <link href="https://briskloanz.com/assets/admin/css/custom.css" rel="stylesheet" type="text/css" />
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
     
      <!-- End Navigation Bar-->
      <div class="wrapper">
      <div class="container-fluid">
         <!-- start page title -->
      
         <!-- end page title --> 
         <div class="page-4">
            <div class="row">
			  <div class="col-md-2"></div>
               <div class="col-md-8">
                  <section id="tabs">
                     <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab1" role="tablist">
                           <a class="nav-item nav-link active" id="View-App-tab" data-toggle="tab" href="#View-App" role="tab" aria-controls="View-App" aria-selected="false">View Application</a>
                          
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
									   <a href="<?php echo base_url(); ?>steps/dashboard" type="button" class="btn btn-default">Back </a>
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
									    <a href="<?php echo base_url(); ?>steps/dashboard" type="button" class="btn btn-default">Back </a>
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
									    <a href="<?php echo base_url(); ?>steps/dashboard" type="button" class="btn btn-default">Back </a>
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
							  <div class="col-md-2"></div>
									
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
									    <a href="<?php echo base_url(); ?>steps/dashboard" type="button" class="btn btn-default">Back </a>
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
                                                <p>$<?php echo $answers[5]['answer']; ?></p>
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
												</li>
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
                                                <p><b><?php //echo //$answers[15]['question']; ?></b></p>
                                                <p><?php //echo //$answers[15]['answer']; ?></p>
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

                        </div>
						
				
                     </div>
                  </section>
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
         alert();
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
         alert();
          	setTimeout(function() {
	              window.location.href='<?php echo base_url();?>admin/application';
	        }, 3000);
        }

    });
 	}
      </script>
   </body>
</html>

<?php include('footer.php'); ?>