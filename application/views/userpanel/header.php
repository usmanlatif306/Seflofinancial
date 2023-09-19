  <!DOCTYPE html>

  <html lang="en" dir="ltr">



  <head>

      <meta charset="utf-8">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Seflo Financial</title>



      <!-- Prevent the demo from appearing in search engines -->

      <meta name="robots" content="noindex">



      <!-- Perfect Scrollbar -->

      <link type="text/css" href="<?php echo base_url() . 'assets/userpanel/vendor/perfect-scrollbar.css' ?>" rel="stylesheet">



      <!-- App CSS -->

      <link type="text/css" href="<?php echo base_url() . 'assets/userpanel/css/app.css' ?>" rel="stylesheet">

      <link type="text/css" href="<?php echo base_url() . 'assets/userpanel/css/app.rtl.css' ?>" rel="stylesheet">



      <!-- Material Design Icons -->

      <link type="text/css" href="<?php echo base_url() . 'assets/userpanel/css/vendor-material-icons.css' ?>" rel="stylesheet">

      <link type="text/css" href="<?php echo base_url() . 'assets/userpanel/css/vendor-material-icons.rtl.css' ?>" rel="stylesheet">



      <!-- Font Awesome FREE Icons -->

      <link type="text/css" href="<?php echo base_url() . 'assets/userpanel/css/vendor-fontawesome-free.css' ?>" rel="stylesheet">

      <link type="text/css" href="<?php echo base_url() . 'assets/userpanel/css/vendor-fontawesome-free.rtl.css' ?>" rel="stylesheet">



      <!-- ion Range Slider -->

      <link type="text/css" href="<?php echo base_url() . 'assets/userpanel/css/vendor-ion-rangeslider.css' ?>" rel="stylesheet">

      <link type="text/css" href="<?php echo base_url() . 'assets/userpanel/css/vendor-ion-rangeslider.rtl.css' ?>" rel="stylesheet">

      <link type="text/css" href="<?php echo base_url() . 'assets/userpanel/css/custom_style.css' ?>" rel="stylesheet">



      <!-- Select2 -->

      <link type="text/css" href="<?php echo base_url() . 'assets/userpanel/css/vendor-select2.css' ?>" rel="stylesheet">

      <link type="text/css" href="<?php echo base_url() . 'assets/userpanel/css/vendor-select2.rtl.css' ?>" rel="stylesheet">

      <link type="text/css" href="<?php echo base_url() . 'assets/userpanel/vendor/select2/select2.min.css' ?>" rel="stylesheet">
      <style>
          .main-tiles {
              margin-top: 5%;
          }

          @media (max-width: 991px) {
              .main-tiles {
                  margin-top: 10%;
              }
          }

          @media (max-width: 767px) {
              .main-tiles {
                  margin-top: 25%;
              }
          }

          @media (max-width: 430px) {
              .main-tiles {
                  margin-top: 30%;
              }
          }

          @media (max-width: 340px) {
              .main-tiles {
                  margin-top: 40%;
              }
          }

          @media (max-width: 250px) {
              .main-tiles {
                  margin-top: 50%;
              }
          }
      </style>
  </head>


  <body class="layout-fixed layout-sticky-subnav">
      <!-- <div class="preloader"></div> -->
      <!-- Header Layout -->

      <div class="mdk-header-layout js-mdk-header-layout">
          <!-- Header -->
          <div id="header" class="mdk-header bg-dark js-mdk-header m-0" data-fixed data-effects="waterfall">
              <div class="mdk-header__content">

                  <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-primary pl-md-0 pr-0" id="navbar" data-primary>

                      <div class="container">


                          <div class="dropdown w-100">

                              <a href="https://seflofinancial.com/" class="navbar-toggler-dashboard border-left d-flex align-items-center ml-navbar float-left">

                                  <img src="https://www.seflofinancial.com/wp-content/uploads/2023/01/Seflofinanciallogo2.png" class="rounded-circle" height="30" alt="Frontted">
                              </a>

                              <!-- <div class="popup-btn">
                                  <a id="pop-btn" class="raven-button raven-button-widget-normal-effect-none raven-button-text-align-center raven-button-link elementor-animation-none"></a> -->
                              <a href="#" id="company_menu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle navbar-toggler navbar-toggler-dashboard border-left d-flex align-items-center ml-navbar float-right">
                                  <span class="d-flex-inline">
                                      <!-- <button class="text-white mr-2 btn btn-primary" data-toggle="modal" data-target="#payLoanModal">Pay Loan</button> -->
                                      <span class="text-light" style="color:black !important"><?php echo $userdetail->name; ?></span>
                                  </span>
                              </a>
                              <?php if (!$userdetail->completed_stripe_onboarding || $userdetail->completed_stripe_onboarding === "0") : ?>
                                  <a href="<?php echo base_url('steps/stripe/redirect') ?>" class="dropdown-toggle navbar-toggler navbar-toggler-dashboard border-left d-flex align-items-center ml-navbar float-right">
                                      <span class="d-flex-inline">
                                          <span class="text-light" style="color:black !important">Connect with Stripe</span>
                                      </span>
                                  </a>
                              <?php else : ?>
                                  <a href="<?php echo base_url('steps/stripe/redirect') ?>" class="dropdown-toggle navbar-toggler navbar-toggler-dashboard border-left d-flex align-items-center float-right">
                                      <span class="d-flex-inline">
                                          <span class="text-light" style="color:black !important">View Stripe Account</span>
                                      </span>
                                  </a>
                                  <a href="javascript:void(0)" class="dropdown-toggle navbar-toggler navbar-toggler-dashboard border-left d-flex align-items-center ml-navbar float-right">
                                      <span class="d-flex-inline">
                                          <span class="text-light" style="color:black !important">Balance: $<?php echo $balance; ?></span>
                                      </span>
                                  </a>
                              <?php endif; ?>

                              <div id="company_menu" class="dropdown-menu dropdown-menu-right navbar-company-menu">
                                  <div class="dropdown-item d-flex align-items-center py-2 navbar-company-info py-3">
                                      <span class="mr-3">
                                          <!--<img src="assets/images/frontted-logo-blue.svg" width="43" height="43" alt="avatar">-->
                                      </span>

                                      <span class="flex d-flex flex-column">
                                          <strong class="h5 m-0"><?php echo $userdetail->name; ?></strong>
                                          <!-- <small class="text-muted text-uppercase">STUDENT</small>-->
                                      </span>
                                  </div>

                                  <div class="dropdown-divider"></div>


                                  <a class="dropdown-item d-flex align-items-center py-2" href="<?php echo base_url() . 'steps/dashboard'; ?>">

                                      <span class="material-icons mr-2">exit_to_app</span> Dashboard

                                  </a>

                                  <a href="<?php echo base_url(); ?>steps" class="dropdown-item d-flex align-items-center py-2">
                                      <span class="material-icons mr-2">exit_to_app</span>Apply Now
                                  </a>

                                  <a href="<?php echo base_url(); ?>steps/profilesetting" class="dropdown-item d-flex align-items-center py-2">
                                      <span class="material-icons mr-2">exit_to_app</span>Settings
                                  </a>
                                  <a class="dropdown-item d-flex align-items-center py-2" href="<?php echo base_url() . 'steps/logout'; ?>">
                                      <span class="material-icons mr-2">exit_to_app</span> Logout

                                  </a>
                              </div>
                              <!-- </div> -->




                          </div>
                      </div>
                  </div>

              </div>

          </div>

      </div>



      <!-- // END Header -->
      <!-- pay loan model start -->
      <div class="modal fade" id="payLoanModal" tabindex="-1" role="dialog" aria-labelledby="payLoanModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="payLoanModalLabel">Make A Payment</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form action="<?php echo base_url() . 'steps/stripe/pay_loan'; ?>" method="post" id="payLoanForm">
                          <div class="form-group">
                              <label for="payType">Select Pay Type</label>
                              <select class="form-control" name="pay_type" id="payType" onchange="typeSelected(this.value)">
                                  <option value="">Select Type</option>
                                  <option value="one">One Time</option>
                                  <option value="subscription">Pay Off Loan</option>
                              </select>
                          </div>
                          <input type="hidden" name="price_id" id="priceId">

                          <div id="oneTime" class="text-center d-none">
                              <div class="btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-primary d-block">
                                      <input type="checkbox" class="price-field" value="<?php echo $one_time; ?>"> Make A Payment
                                  </label>
                              </div>
                          </div>

                          <div id="subscription" class="text-center d-none">
                              <div class="btn-group-toggle mb-2" data-toggle="buttons">
                                  <label class="btn btn-primary d-block">
                                      <input type="checkbox" class="price-field" value="<?php echo $subscription_1; ?>"> $34.01/Month For $100
                                  </label>
                              </div>
                              <div class="btn-group-toggle mb-2" data-toggle="buttons">
                                  <label class="btn btn-primary d-block">
                                      <input type="checkbox" class="price-field" value="<?php echo $subscription_2; ?>"> $71.79/Month For $250
                                  </label>
                              </div>
                              <div class="btn-group-toggle mb-2" data-toggle="buttons">
                                  <label class="btn btn-primary d-block">
                                      <input type="checkbox" class="price-field" value="<?php echo $subscription_3; ?>"> $134.78/Month For $500
                                  </label>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <!-- pay loan model end -->


      <div class="mdk-header-layout__content page"><!-- style="padding-top: 60px;" -->

          <style>
              [dir="ltr"] .bg-primary {
                  background-color: #fff !important;

              }

              [dir="ltr"] .text-light {
                  color: black !important;
              }
          </style>
          <script>
              function typeSelected(value) {
                  let oneTime = document.getElementById("oneTime");
                  let subscription = document.getElementById("subscription");

                  if (value === 'one') {
                      oneTime.classList.remove("d-none");
                      subscription.classList.add("d-none");
                  } else if (value === 'subscription') {
                      oneTime.classList.add("d-none");
                      subscription.classList.remove("d-none");
                  } else {
                      oneTime.classList.add("d-none");
                      subscription.classList.add("d-none");
                  }
              }
          </script>