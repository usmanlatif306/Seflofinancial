
 
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
                          
                        </div>
                     </nav>
                     <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="View-App" role="tabpanel" aria-labelledby="View-App-tab">
                           <div class="card virtual-left">
                              <div class="card-body">
							  <center>
							  <img src="/home/briskloanz/public_html/assets/homeweb/images/logo.png">
							 
							  </center>
							  <br/>
                                 <?php 
								  // if($data['purpose']=="Business" || $data['purpose']=="Commercial"){
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
                                              <?php
                                            for ($i = 1; $i <= 33 ; ++$i){
                                            ?>
                                            <li>
                                                <p><b><?php echo $answers[$i]['question']; ?></b></p>
                                                 <?php if(!empty($answers[$i]['answer'])){
                                             ?>
                                                <p><?php echo $answers[$i]['answer']; ?></p>
                                                <?php
                                             }else{
                                             echo "<p> <b>---</b> </p>";
                                             }
                                             ?> 
                                             </li>
                                            <?php    
                                            }
                                            ?>
                                             <li hidden>
                                                <p><b>Purpose </b></p>
                                                <p><?php echo $data['purpose']; ?></p>
                                             </li>
                                          </ul>
                                       </div>
                                      <?php 
                                       if($data['app_status']=='Accepted'){
                                       ?>
                                        <div class="col-md-12">
                                          <div class="login-or">
                                             <hr class="hr-or">
                                             <span class="span-or">Notes</span>
                                          </div>
                                       </div>
                                       
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b>How much Amount</b></p>
                                                <p><?php echo $data['approve_amount']; ?></p>
                                             </li>
                                             <li>
                                                <p><b>Rate of Interest</b></p>
                                                <p><?php echo $data['interest']; ?></p>
                                             </li>
                                             <li>
                                                <p><b>Tenure</b></p>
                                                <p><?php echo $data['tenure']; ?></p>
                                             </li>
                                             <li>
                                                <p><b>Conditions</b></p>
                                                <p><?php echo $data['conditions']; ?></p>
                                             </li>
                                             <li>
                                                <p><b>Final Amount</b></p>
                                                <p><?php echo $data['final_amount']; ?></p>
                                             </li>
                                          </ul>
                                       </div>
                                       <?php
                                       }
                                       ?>
                                       
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
                                       <?php  } ?>
                                       
                                       <?php if($status==1 ){ ?>
                                <hr>
                                        <div class="col-md-12">
                                          <div class="login-or">
                                             <hr class="hr-or">
                                             <span class="span-or">Pending Documents</span>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <ul class="list-line">
                                             <li>
                                                <p><b>LIST</b></p>
                                                <p><?php echo $data['pending_doclist']; ?></p>
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
                           <!-- end card-->

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