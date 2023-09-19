<!DOCTYPE html>
<html lang="en">
<!-- Header Begins -->
<?php include('header.php'); ?>
<!-- Header Ends -->

<body>

  <!-- Navigation Bar-->
  <?php include('header-topbar.php'); ?>
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
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/application">Applications</a></li>
                <li class="breadcrumb-item active">Grid View</li>
              </ol>
            </div>
            <h4 class="page-title">Applications</h4>
          </div>
        </div>
      </div>
      <!-- end page title -->
      <div class="row">
        <div class="col-sm-8">


          <div class="row">

            <div class="form-group col-md-12">
              <h2 class="fs-title text-center" style="margin-bottom: 30px;">Basic Information</h2>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[1]['question']; ?></label>
              <p><?php echo $answers[1]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[2]['question']; ?></label>
              <p><?php echo $answers[2]['answer'] . " " . $answers[3]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[4]['question']; ?></label>
              <p><?php if (!empty($answers[4]['answer'])) {
                    if (!empty($answers[5]['answer'])) {
                      echo $answers[4]['answer'] . "," . $answers[5]['answer'];
                    } else {
                      echo $answers[4]['answer'];
                    }
                  } else {
                    echo $answers[5]['answer'];
                  } ?></p>

            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[6]['question']; ?></label>
              <p><?php echo $answers[6]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[7]['question']; ?></label>
              <p> <?php echo $answers[7]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[8]['question']; ?></label>
              <p><?php echo $answers[8]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[9]['question']; ?></label>
              <p><?php echo $answers[9]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[10]['question']; ?></label>
              <p><?php if (!empty($answers[10]['answer'])) {
                    if (!empty($answers[10]['answer'])) {
                      echo $answers[10]['answer'] . "," . $answers[11]['answer'];
                    } else {
                      echo $answers[10]['answer'];
                    }
                  } else {
                    echo $answers[11]['answer'];
                  } ?></p>
            </div>
            <div class=" col-md-12">
              <div class="row">
                <div class="form-group col-md-12">
                  <label for=""><b><?php echo $answers[12]['question']; ?></b></label>
                  <p><?php echo $answers[12]['answer']; ?></p>
                </div>
                <?php
                if (!empty($answers[13]['answer'])) { ?>
                  <div class="form-group col-md-6">
                    <label for=""><?php echo $answers[13]['question']; ?></label>
                    <p><?php echo $answers[13]['answer']; ?></p>
                  </div>

                  <?php //JUST ME contact info
                  $acc_type = trim($answers[13]['answer']);
                  if (strcmp($acc_type, 'Just me') == 0) { ?>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="form-group col-md-12">
                          <label>CONTACT INFORMATION</label>
                        </div>
                        <div class="form-group col-md-6">
                          <label for=""><?php echo $answers[14]['question']; ?></label>
                          <p><?php echo $answers[14]['answer']; ?></p>
                        </div>
                        <div class="form-group col-md-6">
                          <label for=""><?php echo $answers[15]['question']; ?></label>
                          <p><?php echo $answers[15]['answer']; ?></p>
                        </div>
                        <div class="form-group col-md-6">
                          <label for=""><?php echo $answers[16]['question']; ?></label>
                          <p><?php echo $answers[16]['answer']; ?></p>

                        </div>
                      </div>
                    </div>

                  <?php } else if ($answers[13]['answer'] == 'I and my client') { ?>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="form-group col-md-12">
                          <label>CONTACT INFORMATION</label>
                        </div>
                        <div class="form-group col-md-6">
                          <label for=""><?php echo $answers[17]['question']; ?></label>
                          <p><?php echo $answers[17]['answer']; ?></p>
                        </div>
                        <div class="form-group col-md-6">
                          <label for=""><?php echo $answers[18]['question']; ?></label>
                          <p><?php echo $answers[18]['answer']; ?></p>
                        </div>
                        <div class="form-group col-md-6">
                          <label for=""><?php echo $answers[19]['question']; ?></label>
                          <p><?php echo $answers[19]['answer']; ?></p>

                        </div>
                      </div>
                    </div>
                <?php }
                } ?>
              </div>

            </div>
            <div class="col-md-12">
              <h2 class="fs-title text-center" style="margin-bottom: 30px;">Owner Information</h2>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[20]['question']; ?></label>
              <p><?php echo $answers[20]['answer']; ?></p>

            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[21]['question']; ?></label>
              <p><?php echo $answers[21]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[22]['question']; ?></label>
              <p><?php echo $answers[22]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[23]['question']; ?></label>
              <p><?php echo $answers[23]['answer']; ?></p>
            </div>

            <div class="col-md-12">
              <h2 class="fs-title text-center" style="margin-bottom: 30px;">Business Information </h2>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[26]['question']; ?></label>
              <p><?php echo $answers[26]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[27]['question']; ?></label>
              <p><?php if (!empty($answers[27]['answer'])) {
                    if (!empty($answers[28]['answer'])) {
                      echo $answers[27]['answer'] . "," . $answers[28]['answer'];
                    } else {
                      echo $answers[27]['answer'];
                    }
                  } else {
                    echo $answers[28]['answer'];
                  } ?></p>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for=""><b>FULL ADDRESS OF THE BUSINESS</b></label>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for=""><?php echo $answers[29]['question']; ?></label>
                  <p><?php echo $answers[29]['answer']; ?></p>
                </div>
                <div class="form-group col-md-6">
                  <label for=""><?php echo $answers[30]['question']; ?></label>
                  <p><?php echo $answers[30]['answer']; ?></p>
                </div>
                <div class="form-group col-md-6">
                  <label for=""><?php echo $answers[31]['question']; ?></label>
                  <p><?php echo $answers[31]['answer']; ?></p>
                </div>
                <div class="form-group col-md-6">
                  <label for=""><?php echo $answers[32]['question']; ?></label>
                  <p><?php echo $answers[32]['answer']; ?></p>
                </div>
                <div class="form-group col-md-6">
                  <label for=""><?php echo $answers[33]['question']; ?></label>
                  <p><?php echo $answers[33]['answer']; ?></p>
                </div>
                <div class="form-group col-md-6">
                  <label for=""><?php echo $answers[34]['question']; ?></label>
                  <p> <?php echo $answers[34]['answer']; ?></p>
                </div>
                <div class="form-group col-md-6">
                  <label for=""><?php echo $answers[35]['question']; ?></label>
                  <p> <?php echo $answers[35]['answer']; ?></p>
                </div>
              </div>

            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for=""><b>INDUSTRY CLASSIFICATION AND SUB-CLASSIFICATION</b></label>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for=""><?php echo $answers[36]['question']; ?></label>
                    <p><?php
                        $category = $this->Admin_model->fetchValue('industry_categories', 'cat_name', array('cat_id' => $answers[36]['answer']));
                        echo $category;
                        ?>
                    </p>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for=""><?php echo $answers[37]['question']; ?></label>
                  <p><?php
                      $subcategory = $this->Admin_model->fetchValue('industry_subcategories', 'sub_name', array('sub_id' => $answers[37]['answer']));
                      echo $subcategory;
                      ?>
                  </p>
                </div>
              </div>

            </div>

            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[38]['question']; ?></label>
              <p><?php echo $answers[38]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[39]['question']; ?></label>
              <p><?php echo $answers[39]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[40]['question']; ?></label>
              <p><?php echo $answers[40]['answer']; ?></p>
            </div>
            <?php
            if ($answers[40]['answer'] == 'Yes') :
            ?>
              <div class="form-group col-md-6">
                <label for=""><?php echo $answers[41]['question']; ?></label>
                <p><?php echo $answers[41]['answer']; ?></p>
              </div>
            <?php endif; ?>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[42]['question']; ?></label>
              <p><?php echo $answers[42]['answer']; ?></p>
            </div>
            <?php
            if ($answers[42]['answer'] == 'Yes') :
            ?>
              <div class="form-group col-md-6">
                <label for=""><?php echo $answers[43]['question']; ?></label>
                <p><?php echo $answers[43]['answer']; ?></p>
              </div>
            <?php endif; ?>

            <div class="col-md-12">
              <label for="">PERSONAL INFORMATION OF OWNER(S)</label>
              <p><b>BUSINESS INFO</b></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[44]['question']; ?></label>
              <p><?php echo $answers[44]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[45]['question']; ?></label>
              <p><?php echo $answers[45]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[46]['question']; ?></label>
              <p><?php echo $answers[46]['answer']; ?></p>
            </div>

            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[47]['question']; ?></label>
              <p><?php echo $answers[47]['answer']; ?></p>
            </div>

            <div class="col-md-12">
              <label for="">PRIMARY OWNER</label>

            </div>

            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[48]['question']; ?></label>
              <p><?php echo $answers[48]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[49]['question']; ?></label>
              <p><?php echo $answers[49]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[50]['question']; ?></label>
              <p><?php echo $answers[50]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[51]['question']; ?></label>
              <p><?php echo $answers[51]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[52]['question']; ?></label>
              <p><?php echo $answers[52]['answer']; ?></p>
            </div>

            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[53]['question']; ?></label>
              <p><?php echo $answers[53]['answer']; ?></p>
            </div>

            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[54]['question']; ?></label>
              <p><?php echo $answers[54]['answer']; ?></p>
            </div>

            <div class="col-md-12">
              <label for="">SECONDARY OWNER</label>
            </div>

            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[55]['question']; ?></label>
              <p><?php echo $answers[55]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[56]['question']; ?></label>
              <p><?php echo $answers[56]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[57]['question']; ?></label>
              <p><?php echo $answers[57]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[58]['question']; ?></label>
              <p><?php echo $answers[58]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[59]['question']; ?></label>
              <p><?php echo $answers[59]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[60]['question']; ?></label>
              <p><?php echo $answers[60]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[61]['question']; ?></label>
              <p><?php echo $answers[61]['answer']; ?></p>
            </div>

            <div class="col-md-12">
              <h2 class="fs-title text-center" style="margin-bottom: 30px;">Documents Submission </h2>
            </div>

            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[62]['question']; ?></label>
              <p><?php echo $answers[62]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[63]['question']; ?></label>
              <p><?php echo $answers[63]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[64]['question']; ?></label>
              <p><?php echo $answers[64]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[65]['question']; ?></label>
              <p><?php echo $answers[65]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[66]['question']; ?></label>
              <p><?php echo $answers[66]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[67]['question']; ?></label>
              <p><?php echo $answers[67]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[68]['question']; ?></label>
              <p><?php echo $answers[68]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[69]['question']; ?></label>
              <p><?php echo $answers[69]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[70]['question']; ?></label>
              <p><?php echo $answers[70]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[71]['question']; ?></label>
              <p><?php echo $answers[71]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[72]['question']; ?></label>
              <p><?php echo $answers[72]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[73]['question']; ?></label>
              <p><?php echo $answers[73]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[74]['question']; ?></label>
              <p><?php echo $answers[74]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[75]['question']; ?></label>
              <p><?php echo $answers[75]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[76]['question']; ?></label>
              <p><?php echo $answers[76]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[77]['question']; ?></label>
              <p><?php echo $answers[77]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[78]['question']; ?></label>
              <p><?php echo $answers[78]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[79]['question']; ?></label>
              <p><?php echo $answers[79]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[80]['question']; ?></label>
              <p><?php echo $answers[80]['answer']; ?></p>
            </div>
            <div class="form-group col-md-6">
              <label for=""><?php echo $answers[81]['question']; ?></label>
              <p><?php echo $answers[81]['answer']; ?></p>
            </div>

          </div>






        </div> <!-- end col-->
        <div class="col-sm-4">
          <!-- Portlet card -->
          <div class="card">
            <div class="card-body">

              <h4 class="header-title mb-0">Recent Activities</h4>
              <div class="slimScrollDiv recent-update notification-list">
                <div class="slimscroll noti-scroll">

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
                            background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
              </div>

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
    <?php include('footer.php'); ?>
    <!-- end Footer -->
    <?php include('footerscripts.php'); ?>


</body>

</html>