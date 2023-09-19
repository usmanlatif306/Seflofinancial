<!DOCTYPE html>
<html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->

<head>
  <title>Steps Seflo Financial </title>
  <?php include('top.php'); ?>
  <style>
    .radio-group.step02 label {
      display: table;
      height: 80px;
    }

    .radio-group.step02 label span {
      display: table-cell;
      vertical-align: middle;
    }

    .error {
      color: red;
      display: none;
    }

    .msform {
      width: 50% !important;
      margin: 0 auto;
      text-align: left;
      position: relative;
      min-height: 30vh;
      /* overflow-y: scroll; */
      height: 600px;

    }

    .msform fieldset {
      box-shadow: none;
    }

    .banner {
      background-image: url(assets/steps/steps-background.jpg);
      background-color: #cccccc;
      background-size: cover;
      /* background-position: center;
    background-repeat: no-repeat;  */
    }

    .previous {
      display: block;
    }

    /* Position text in the middle of the page/image */
    .bg-text {
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/opacity/see-through */
      color: white;
      font-weight: bold;
      border: 3px solid #f1f1f1;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      width: 80%;
      padding: 20px;
      text-align: center;
      display: none;
    }
  </style>
</head>

<body>
  <?php include('step_header.php'); ?>
  <div class="banners divblur">
    <?php if (!$is_bank_verified) { ?>
      <div class="text-center" style="height: 200px;margin-top:1rem;">
        <a href="<?php echo base_url('/steps/verification?redirect=steps')  ?>" class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Verify Your Bank Before Submit Your Application</a>
      </div>
    <?php } else { ?>
      <!-- multistep form -->
      <form class="msform" id="step1form" enctype="multipart/form-data">

        <!-- have not changed the name -->
        <fieldset>
          <div class="step1">
            <h2 class="fs-title"><?php echo $questions[0]['question']; ?> *</h2>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
              <?php $question_id = $questions[0]['question_id']; ?>
              <input type='number' class="form-control nub restrictnumber" name="<?php echo $question_id; ?>" placeholder="Enter amount ($)" id="bs11amount" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" required />
            </div>
            <span id="bs1amount" class="error">This field is required.</span>
          </div>
          <hr>

          <div class="step02">
            <h2 class="fs-title"><?php echo $questions[1]['question']; ?> *</h2>
            <div class="form-group text-left">
              <?php
              $question_id = $questions[1]['question_id'];
              $js = 'id="purpose_sec" class="form-control" ';
              $options = array(
                'Emergency cash'  => 'Emergency cash',
                'Purchase'  => 'Purchase',
                'Other'   => 'Other',
              );
              echo form_dropdown($question_id, $options, set_value($question_id, $answers[$question_id]['answer']), $js);
              ?>
            </div>
          </div>
          <hr>

          <div class="step2">
            <h2 class="fs-title"><?php echo $questions[2]['question']; ?> *</h2>
            <div class="form-group">
              <?php $question_id = $questions[2]['question_id'];
              if (!empty($_SESSION['username'])) {
              ?>
                <input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter name" id="my_username" value="<?php echo $_SESSION['username']; ?>" readonly />
              <?php
              } else {
              ?>
                <input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter name" id="my_username" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" required />
              <?php
              }
              ?>
            </div>
            <span id="my_username_error" class="error">This field is required.</span>
          </div>
          <hr>

          <div class="step3">
            <h2 class="fs-title"><?php echo $questions[3]['question']; ?> *</h2>
            <div class="form-group">
              <?php $question_id = $questions[3]['question_id'];
              if (!empty($_SESSION['userlastname'])) {
              ?>
                <input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter name" id="my_last_name" value="<?php echo $_SESSION['userlastname']; ?>" readonly />
              <?php
              } else {
              ?>
                <input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter name" id="my_last_name" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" required />
              <?php
              }
              ?>
            </div>
            <span id="my_last_name_error" class="error">This field is required.</span>
          </div>
          <hr>

          <div class="step4">
            <h2 class="fs-title"><?php echo $questions[4]['question']; ?> *</h2>
            <?php
            $question_id = $questions[4]['question_id'];
            $js = 'id="gender_sec" class="form-control" ';
            $options = array(
              'Male'  => 'Male',
              'Female'  => 'Female',
            );
            echo form_dropdown($question_id, $options, set_value($question_id, $answers[$question_id]['answer']), $js);
            ?>
            <span id="bs2cscore" class="error">This field is required.</span>
          </div>
          <hr>

          <input type="button" id="b1form" onclick="b_form1(this.id)" name="next" class="next action-button" value="Next">
        </fieldset>

        <fieldset class="">


          <div class="step5">
            <h2 class="fs-title"><?php echo $questions[5]['question']; ?> *</h2>
            <div class="">
              <?php $question_id = $questions[5]['question_id']; ?>
              <input type='date' id="my_dob" class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter Date of Birth" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" required />
              <span id="my_dob_error" class="error">This field is required.</span>
            </div>
          </div>
          <hr>
          <div class="step6">
            <h2 class="fs-title"><?php echo $questions[6]['question']; ?> *</h2>
            <div class="">
              <?php $question_id = $questions[6]['question_id'];
              if (!empty($_SESSION['email'])) {
              ?>
                <input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Email address" id="my_email" value="<?php echo $_SESSION['email']; ?>" readonly />
              <?php
              } else {
              ?>
                <input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Email address" id="my_email" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" required />
              <?php
              }
              ?>
              <span id="my_email_error" class="error">This field is required.</span>
              <span id="my_email_validerror" class="error">Please enter vaild email.</span>
            </div>
          </div>
          <hr>
          <div class="step7">
            <h2 class="fs-title"><?php echo $questions[7]['question']; ?> *</h2>
            <div class="">
              <?php $question_id = $questions[7]['question_id'];
              if (!empty($_SESSION['usermobile'])) {
              ?>
                <input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Phone number" id="my_phone_no" value="<?php echo $_SESSION['usermobile']; ?>" readonly />
              <?php
              } else {
              ?>
                <input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Phone number" id="my_phone_no" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" maxlength=15 required />
              <?php
              }
              ?>
              <span id="my_phone_no_error" class="error">This field is required.</span>
            </div>
          </div>
          <hr>
          <div class="step8">
            <h2 class="fs-title"><?php echo $questions[8]['question']; ?> *</h2>
            <?php
            $question_id = $questions[8]['question_id'];
            $js = 'id="marital_sec" class="form-control" ';
            $options = array(
              'Single'  => 'Single',
              'Married' => 'Married',
              'Divorced'  => 'Divorced',
            );
            echo form_dropdown($question_id, $options, set_value($question_id, $answers[$question_id]['answer']), $js);
            ?>
            <span id="bs2cscore" class="error">This field is required.</span>
          </div>

          <hr>
          <div class="step9">
            <h2 class="fs-title"><?php echo $questions[9]['question']; ?> *</h2>
            <?php $question_id = $questions[9]['question_id']; ?>
            <input type='text' id="my_street_address" class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter Street Address" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" />
            <span id="my_street_address_error" class="error">This field is required.</span>
          </div>
          <hr>
          <input type="button" name="previous" class="previous action-button" value="Previous">
          <input type="button" onclick="b_form2(this.id);" id="b2form" name="next" class="next action-button" value="Next">
        </fieldset>


        <fieldset>
          <div class="step10">
            <h2 class="fs-title"><?php echo $questions[10]['question']; ?> *</h2>
            <?php $question_id = $questions[10]['question_id']; ?>
            <input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter City" id="my_city" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" />
            <span id="my_city_error" class="error">This field is required.</span>
          </div>
          <hr>
          <div class="step11">
            <h2 class="fs-title"><?php echo $questions[11]['question']; ?> *</h2>
            <?php
            $question_id = $questions[11]['question_id'];
            $js = 'id="state_sec" class="form-control" ';
            $options = array(
              'Alabama'  => 'Alabama',
              'Alaska' => 'Alaska',
              'Arizona'  => 'Arizona',
              'Arkansas'  => 'Arkansas',
              'California'  => 'California',
              'Colorado'  => 'Colorado',
              'Connecticut'  => 'Connecticut',
              'Delaware'  => 'Delaware',
              'District of Columbia'  => 'District of Columbia',
              'Florida'  => 'Florida',
              'Georgia'  => 'Georgia',
              'Hawaii'  => 'Hawaii',
              'Idaho'  => 'Idaho',
              'Illinois'  => 'Illinois',
              'Indiana'  => 'Indiana',
              'Iowa'  => 'Iowa',
              'Kansas'  => 'Kansas',
              'Kentucky'  => 'Kentucky',
              'Louisiana'  => 'Louisiana',
              'Maine'  => 'Maine',
              'Maryland'  => 'Maryland',
              'Massachusetts'  => 'Massachusetts',
              'Michigan'  => 'Michigan',
              'Minnesota'  => 'Minnesota',
              'Mississippi'  => 'Mississippi',
              'Missouri'  => 'Missouri',
              'Montana'  => 'Montana',
              'Nebraska'  => 'Nebraska',
              'Nevada'  => 'Nevada',
              'New Hampshire'  => 'New Hampshire',
              'New Jersey'  => 'New Jersey',
              'New Mexico'  => 'New Mexico',
              'New York'  => 'New York',
              'North Carolina'  => 'North Carolina',
              'North Dakota'  => 'North Dakota',
              'Ohio'  => 'Ohio',
              'Oklahoma'  => 'Oklahoma',
              'Oregon'  => 'Oregon',
              'Pennsylvania'  => 'Pennsylvania',
              'Rhode Island'  => 'Rhode Island',
              'South Carolina'  => 'South Carolina',
              'South Dakota'  => 'South Dakota',
              'Tennessee'  => 'Tennessee',
              'Texas'  => 'Texas',
              'Utah'  => 'Utah',
              'Vermont'  => 'Vermont',
              'Virginia'  => 'Virginia',
              'Washington'  => 'Washington',
              'West Virginia'  => 'West Virginia',
              'Wisconsin'  => 'Wisconsin',
              'Wyoming'  => 'Wyoming',
            );
            echo form_dropdown($question_id, $options, set_value($question_id, $answers[$question_id]['answer']), $js);
            ?>
            <span id="bs2cscore" class="error">This field is required.</span>
          </div>
          <hr>
          <div class="step12">
            <h2 class="fs-title"><?php echo $questions[12]['question']; ?> *</h2>
            <?php $question_id = $questions[12]['question_id']; ?>
            <input type='number' class="form-control" name="<?php echo $question_id; ?>" placeholder="Zip Code" id="my_zip_code" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" />
            <span id="my_zip_code_error" class="error">This field is required.</span>
          </div>
          <hr>
          <div class="step13">
            <h2 class="fs-title"><?php echo $questions[13]['question']; ?> *</h2>
            <?php
            $question_id = $questions[13]['question_id'];
            $js = 'id="time_sec" class="form-control" ';
            $options = array(
              '3 or more months'  => '3 or more months',
              'More than 1 year'  => 'More than 1 year',
              '2 or more years' => '2 or more years',
            );
            echo form_dropdown($question_id, $options, set_value($question_id, $answers[$question_id]['answer']), $js);
            ?>
            <span id="bs2cscore" class="error">This field is required.</span>
          </div>
          <hr>
          <div class="step14">
            <h2 class="fs-title"><?php echo $questions[14]['question']; ?> *</h2>
            <?php
            $question_id = $questions[14]['question_id'];
            $js = 'id="residence_type" class="form-control" ';
            $options = array(
              'Rent'  => 'Rent',
              'Own' => 'Own',
              'Other' => 'Other',
            );
            echo form_dropdown($question_id, $options, set_value($question_id, $answers[$question_id]['answer']), $js);
            ?>
            <span id="bs2cscore" class="error">This field is required.</span>
          </div>
          <hr>
          <input type="button" name="previous" class="previous action-button" value="Previous">
          <input type="button" onclick="b_form3(this.id);" id="b3form" name="next" class="next action-button" value="Next">

          <!-- <div class="load_div"><i class="fa fa-spinner" aria-hidden="true"></i></div> -->
          <!-- <div class="success_message">This is a msg</div> -->
          <div class="error_message"></div>
          <!-- <a href="https://www.seflofinancial.com/admin/steps" class="next action-button" type="submit">Next</a> -->

          <!--<input type="button" name="next" class="next action-button" value="Next" /> -->
        </fieldset>
        <fieldset>
          <div class="step15">
            <h2 class="fs-title"><?php echo $questions[15]['question']; ?> *</h2>
            <?php $question_id = $questions[15]['question_id']; ?>
            <input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Monthly rent/mortgage" id="monthly_rent" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" />
            <span id="monthly_rent_error" class="error">This field is required.</span>
          </div>
          <hr>
          <div class="step16">
            <h2 class="fs-title"><?php echo $questions[16]['question']; ?> *</h2>
            <?php $question_id = $questions[16]['question_id']; ?>
            <input type='number' class="form-control" name="<?php echo $question_id; ?>" placeholder="Social Security Number" id="check_ssn" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" />
            <span id="b2ssn" class="error">9 digits are required.</span>
          </div>
          <hr>
          <div class="step17">
            <h2 class="fs-title"><?php echo $questions[17]['question']; ?> *</h2>
            <?php
            $question_id = $questions[17]['question_id'];
            $js = 'id="employment_status" class="form-control" ';
            $options = array(
              'Full Time Employee'  => 'Full Time Employee',
              'Part Time Employee'  => 'Part Time Employee',
              'Contractor Employee' => 'Contractor Employee',
            );
            echo form_dropdown($question_id, $options, set_value($question_id, $answers[$question_id]['answer']), $js);
            ?>
            <span id="bs2cscore" class="error">This field is required.</span>
          </div>
          <hr>
          <div class="step18">
            <h2 class="fs-title"><?php echo $questions[18]['question']; ?> *</h2>
            <?php $question_id = $questions[18]['question_id']; ?>
            <input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter name" id="employer_name" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" />
            <span id="employer_name_error" class="error">This field is required.</span>
          </div>
          <hr>
          <div class="step19">
            <h2 class="fs-title"><?php echo $questions[19]['question']; ?> *</h2>
            <?php $question_id = $questions[19]['question_id']; ?>
            <input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter address" id="employer_address" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" />
            <span id="employer_address_error" class="error">This field is required.</span>
          </div>
          <hr>

          <input type="button" name="previous" class="previous action-button" value="Previous">
          <input type="button" onclick="b_form4(this.id);" id="b4form" name="next" class="next action-button" value="Next">

          <!-- <div class="load_div"><i class="fa fa-spinner" aria-hidden="true"></i></div> -->
          <!-- <div class="success_message">This is a msg</div> -->
          <div class="error_message"></div>
          <!-- <a href="https://finszar.com/webpanel/steps/owner" class="next action-button" type="submit">Next</a> -->

          <!--<input type="button" name="next" class="next action-button" value="Next" /> -->
        </fieldset>

        <!-- have not changed the name -->
        <fieldset>
          <div class="step20">
            <h2 class="fs-title"><?php echo $questions[20]['question']; ?> *</h2>
            <?php
            $question_id = $questions[20]['question_id'];
            $js = 'id="current_employee_sec" class="form-control" ';
            $options = array(
              '3 or more months'  => '3 or more months',
              'More than 1 year'  => 'More than 1 year',
              '2 or more years' => '2 or more years',
            );
            echo form_dropdown($question_id, $options, set_value($question_id, $answers[$question_id]['answer']), $js);
            ?>
            <span id="bs2cscore" class="error">This field is required.</span>
          </div>
          <hr>
          <div class="step21">
            <h2 class="fs-title"><?php echo $questions[21]['question']; ?> *</h2>
            <?php
            $question_id = $questions[21]['question_id'];
            $js = 'id="pay_type" class="form-control" ';
            $options = array(
              'Hourly'  => 'Hourly',
              'Annual salary' => 'Annual salary',
              'Other' => 'Other',
            );
            echo form_dropdown($question_id, $options, set_value($question_id, $answers[$question_id]['answer']), $js);
            ?>
            <span id="bs2cscore" class="error">This field is required.</span>
          </div>
          <hr>
          <div class="step22">
            <h2 class="fs-title"><?php echo $questions[22]['question']; ?> *</h2>
            <?php
            $question_id = $questions[22]['question_id'];
            $js = 'id="pay_type_often" class="form-control" ';
            $options = array(
              'Every week'  => 'Every week',
              'Every other week(bi-weekly)' => 'Every other week(bi-weekly)',
              'Once per month'  => 'Once per month',
            );
            echo form_dropdown($question_id, $options, set_value($question_id, $answers[$question_id]['answer']), $js);
            ?>
            <span id="bs2cscore" class="error">This field is required.</span>
          </div>
          <hr>
          <div class="step23">
            <h2 class="fs-title"><?php echo $questions[23]['question']; ?> *</h2>
            <?php
            $question_id = $questions[23]['question_id'];
            $js = 'id="week_day" class="form-control" ';
            $options = array(
              'Monday'  => 'Monday',
              'Tuesday' => 'Tuesday',
              'Wednesday' => 'Wednesday',
              'Thursday'  => 'Thursday',
              'Friday'  => 'Friday',
              'Saturday'  => 'Saturday',
              'Sunday'  => 'Sunday',
            );
            echo form_dropdown($question_id, $options, set_value($question_id, $answers[$question_id]['answer']), $js);
            ?>
            <span id="bs2cscore" class="error">This field is required.</span>
          </div>
          <hr>
          <div class="step15">
            <h2 class="fs-title"><?php echo $questions[24]['question']; ?> *</h2>
            <?php $question_id = $questions[24]['question_id']; ?>
            <input type='text' class="form-control nub restrictnumber" name="<?php echo $question_id; ?>" placeholder="Enter number" id="work_phone_no" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" />
            <span id="work_phone_no_error" class="error">This field is required.</span>
          </div>
          <hr>



          <input type="button" name="previous" class="previous action-button" value="Previous">
          <input type="button" onclick="b_form5(this.id);" id="b5form" name="next" class="next action-button" value="Next">

          <!-- <div class="load_div"><i class="fa fa-spinner" aria-hidden="true"></i></div> -->
          <!-- <div class="success_message">This is a msg</div> -->
          <div class="error_message"></div>
          <!-- <a href="https://www.seflofinancial.com/admin/steps" class="next action-button" type="submit">Next</a> -->

          <!--<input type="button" name="next" class="next action-button" value="Next" /> -->
        </fieldset>

        <fieldset>
          <div class="step25">
            <h2 class="fs-title"><?php echo $questions[25]['question']; ?> *</h2>
            <?php $question_id = $questions[25]['question_id']; ?>
            <input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Occupation" id="occupation" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" />
            <span id="occupation_error" class="error">This field is required.</span>
          </div>
          <hr>

          <div class="step26">
            <h2 class="fs-title"><?php echo $questions[26]['question']; ?> *</h2>
            <?php $question_id = $questions[26]['question_id']; ?>
            <input type='text' class="form-control nub restrictnumber" name="<?php echo $question_id; ?>" placeholder="Enter income" id="income" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" />
            <span id="income_error" class="error">This field is required.</span>
          </div>
          <hr>


          <div class="step27">
            <h2 class="fs-title"><?php echo $questions[27]['question']; ?> *</h2>
            <?php $question_id = $questions[27]['question_id']; ?>
            <input type='date' class="form-control" name="<?php echo $question_id; ?>" placeholder="Next Pay Date" id="next_pay" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" />
            <span id="next_pay_error" class="error">This field is required.</span>
          </div>
          <hr>
          <div class="step28">
            <h2 class="fs-title"><?php echo $questions[28]['question']; ?> *</h2>
            <?php
            $question_id = $questions[28]['question_id'];
            $js = 'id="account_type" class="form-control" ';
            $options = array(
              'Checking Account'  => 'Checking Account',
              'Saving Account'  => 'Saving Account',
            );
            echo form_dropdown($question_id, $options, set_value($question_id, $answers[$question_id]['answer']), $js);
            ?>
            <span id="bs2cscore" class="error">This field is required.</span>
          </div>
          <hr>
          <div class="step29">
            <h2 class="fs-title"><?php echo $questions[29]['question']; ?> *</h2>
            <?php $question_id = $questions[29]['question_id']; ?>
            <input type='number' class="form-control nub restrictnumber" name="<?php echo $question_id; ?>" placeholder="Routing number" id="routing_no" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" />
            <span id="routing_no_error" class="error">This field is required.</span>
          </div>
          <hr>

          <input type="button" name="previous" class="previous action-button" value="Previous">
          <input type="button" onclick="b_form6(this.id);" id="b6form" name="next" class="next action-button" value="Next">

          <!-- <div class="load_div"><i class="fa fa-spinner" aria-hidden="true"></i></div> -->
          <!-- <div class="success_message">This is a msg</div> -->
          <div class="error_message"></div>
          <!-- <a href="https://www.seflofinancial.com/admin/steps" class="next action-button" type="submit">Next</a> -->

          <!--<input type="button" name="next" class="next action-button" value="Next" /> -->
        </fieldset>

        <fieldset>
          <div class="step30">
            <h2 class="fs-title"><?php echo $questions[30]['question']; ?> *</h2>
            <?php $question_id = $questions[30]['question_id']; ?>
            <input type='text' class="form-control" name="<?php echo $question_id; ?>" placeholder="Enter Bank Name" id="bank_name" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" />
            <span id="bank_name_error" class="error">This field is required.</span>
          </div>
          <hr>

          <div class="step31">
            <h2 class="fs-title"><?php echo $questions[31]['question']; ?> *</h2>
            <?php $question_id = $questions[31]['question_id']; ?>
            <input type='number' class="form-control nub restrictnumber" name="<?php echo $question_id; ?>" placeholder="Account Number" id="account_no" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" />
            <span id="account_no_error" class="error">This field is required.</span>
          </div>
          <hr>


          <div class="step32">
            <h2 class="fs-title"><?php echo $questions[32]['question']; ?> *</h2>
            <?php $question_id = $questions[32]['question_id']; ?>
            <input type='number' class="form-control nub restrictnumber" name="<?php echo $question_id; ?>" placeholder="Confirm account number" id="confirm_account" value="<?php echo $answers[$question_id]['answer'] ? $answers[$question_id]['answer'] : ''; ?>" />
            <span id="confirm_account_error" class="error">This field is required.</span>
          </div>
          <hr>

          <div class="step33">
            <h2 class="fs-title"><?php echo $questions[33]['question']; ?> *</h2>
            <?php $question_id = $questions[33]['question_id']; ?>
            <input name="files[]" type="file" id="file_input" multiple required />
            <span id="file_input_error" class="error">This field is required.</span>
          </div>
          <hr>
          <?php
          if ($docs) { ?>
            <p><b>Uploaded Documents List:</b></p>
            <?php
            foreach ($docs as $row) { ?>
              <p>
                <a href="<?php echo base_url(); ?>uploads/<?php echo $row->file_path; ?>" download><?php echo $row->file_path; ?></a>
              </p>

          <?php }
          } ?>

          <input type="button" name="previous" class="previous action-button" value="Previous">
          <button class="next action-button" type="button" onclick="b_form7(this.id);" id="b7form" name="submit">Submit</button>

          <div class="load_div"><i class="fa fa-spinner" aria-hidden="true"></i></div>
          <div class="success_message"></div>
          <div class="error_message"></div>
          <!-- <a href="https://www.seflofinancial.com/admin/steps" class="next action-button" type="submit">Next</a> -->

          <!--<input type="button" name="next" class="next action-button" value="Next" /> -->
        </fieldset>

      </form>
    <?php } ?>

  </div>

  <div class="bg-text">
    <h2>Please, wait while submitting your application!</h2>
  </div>


  <?php include('footer.php'); ?>
  <script type="text/javascript">
    //$(document).ready(function() {
    $('form#step1form').on('submit', function(e) {
      // function business_first_form_submit(){
      e.preventDefault();
      var filterVal = 'blur(8px)';
      //$('.load_div').css('display','block');
      $('.divblur').css('filter', filterVal);
      $('.bg-text').css('display', 'block');
      var form = $('#step1form').serialize();
      //var image_form = $('input[type="file"]').prop("files")[0];
      var data = new FormData(); // Creating object of FormData class
      var filesLength = document.getElementById('file_input').files.length;
      data.append("form", form);
      for (var i = 0; i < filesLength; i++) {
        data.append("image_form[]", document.getElementById('file_input').files[i]);
      }
      //data.append("image_form", image_form);
      // console.log(data);  

      $.ajax({
        type: 'post',
        url: '<?php echo base_url(); ?>steps/addstep1',
        data: data,
        contentType: false,
        processData: false,
        success: function(data) {
          var obj = JSON.parse(data);
          $('#b7form').prop('disabled', true);
          //console.log(obj);
          if (obj.status == 'success') {
            //
            $('.error_message').css('display', 'none');
            $('.success_message').css('display', 'block');
            $('.success_message').html(obj.message);

            setTimeout(function() {
              $('.load_div').css('display', 'none');
              window.location.href = '<?php echo base_url(); ?>steps/dashboard';
            }, 1000);

          } else {
            // $('.success_message').css('display', 'none'); 
            $('.error_message').css('display', 'block');
            $('.error_message').html(obj.message);
            setTimeout(function() {
              $('.error_message').html('');
            }, 2000);
          }
        }
      });

      //  }

    });
  </script>
</body>

</html>