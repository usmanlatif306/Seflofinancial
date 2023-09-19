    <?php
    $not_submitted = 0;
    $pending = 0;
    $accepted = 0;

    foreach ($applications as $key => $value) {

        if ($value['app_status'] == 0)
            $not_submitted++;
        else if ($value['app_status'] != 5)
            $pending++;

        else if ($value['app_status'] == 5)
            $accepted++;
    }

    ?>
    <div class="container page__container pt-4">

        <div class="row">

            <!-- <div class="col-md-3">

                <?php include('profile_sidebar.php')  ?>

            </div>-->

            <div class="col-md-12 main-tiles">

                <div class="row">
                    <div class="col-12">
                        <?php if ($this->session->flashdata('success')) {
                            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                        } ?>
                        <?php if ($this->session->flashdata('error')) {
                            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                        } ?>
                    </div>


                    <div class="col-md-4">

                        <div class="card card-body">

                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-lg">

                                    <span class="bg-soft-primary avatar-title rounded-circle text-center text-primary">

                                        <i class="fa fa-check"></i>
                                    </span>

                                </div>

                                <div>

                                    <a href="#" class="text-muted mb-2">Applications Submitted</a>

                                    <h4 class="m-0 bold"><?php echo     $not_submitted; ?></h4>

                                </div>



                            </div>

                        </div>

                    </div><!-- End col -->

                    <div class="col-md-4">

                        <div class="card card-body">

                            <div class="d-flex align-items-center">



                                <div class="avatar avatar-lg">

                                    <span class="bg-soft-success avatar-title rounded-circle text-center text-success">

                                        <i class=" fa fa-spinner"></i>

                                    </span>

                                </div>

                                <div>

                                    <a href="#" class="text-muted mb-2">Applications Under Process</a>

                                    <h4 class="m-0 bold"><?php echo $pending; ?></h4>

                                </div>



                            </div>

                        </div>

                    </div><!-- End col -->

                    <div class="col-md-4">

                        <div class="card card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-lg">
                                    <span class="bg-soft-warning avatar-title rounded-circle text-center text-warning">
                                        <i class="fa fa-check-circle"></i>
                                    </span>

                                </div>

                                <div>
                                    <!-- <a href="/bookalorry/userpanel/applications_under_process.php" class="text-muted mb-2">Applications Approved </a>-->
                                    <a href="#" class="text-muted mb-2">Applications Approved </a>

                                    <h4 class="m-0 bold"><?php echo $accepted; ?></h4>
                                </div>
                            </div>

                        </div>

                    </div><!-- End col -->

                    <div class="col-md-12">

                        <div class="card pb-3">

                            <div class="card-header card-header-large bg-light">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h4 class="card-header__title mb-0 pb-0">Applications Submitted</h4>
                                    <?php if (user_has_unpaid_approved_application()) {; ?>
                                        <div>
                                            <?php if (user_has_subscription()) {; ?>
                                                <a href="<?php echo base_url() . 'steps/stripe/pay_off_loan'; ?>" class="btn btn-primary">Pay Off Loan</a>
                                            <?php }; ?>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#payLoanModal">Make A Payment</button>
                                        </div>
                                    <?php }; ?>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">

                                <div class="form-group d-flex  ml-3 mt-3">

                                    <label class="mt-1 mr-1" for="">Show</label>

                                    <select id="select02" data-toggle="select" data-minimum-results-for-search="-1" class="form-control">

                                        <option data-avatar-src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg">

                                            10 Entries

                                        </option>


                                    </select>

                                </div>

                                <div class="search-form search-form--light m-3">

                                    <!--<input type="text" class="form-control search" placeholder="Search">

                                            <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>-->
                                </div>

                            </div>

                            <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                                <table class="table mb-0 thead-border-top-0">

                                    <thead>

                                        <tr>

                                            <th style="width: 120px;">Sr No</th>


                                            <th style="width: 120px;">Status</th>



                                            <th style="width: 160px;">Amount Requested</th>

                                            <th style="width: 160px;">Application Date</th>

                                            <th>Action</th>

                                        </tr>

                                    </thead>

                                    <tbody class="list" id="staff02">
                                        <?php
                                        $i = 1;
                                        foreach ($applications_status as $key => $value) { ?>


                                            <tr>
                                                <td><small class="text-muted"><?php echo $i++; ?></small></td> <!-- $value['purpose'] -->

                                                <td>
                                                    <?php if ($value['app_status'] == 'Submitted') { ?>
                                                        <span class="badge badge-pill badge-danger"><?php echo $value['app_status']; ?></span>
                                                    <?php } else if ($value['app_status'] == 'Pending') { ?>

                                                        <span class="badge badge-pill badge-info"><?php echo $value['app_status']; ?></span>

                                                    <?php } else { ?>

                                                        <span class="badge badge-pill badge-success"><?php echo $value['app_status']; ?></span>

                                                    <?php } ?>

                                                </td>



                                                <td>
                                                    <?php
                                                    if ($value['amount_needed'] == 0) {
                                                        echo "NA";
                                                    } else {
                                                        echo '$' . $value['amount_needed'];
                                                    }
                                                    ?>
                                                </td>

                                                <td><?php echo $value['submission_date']; ?></td>
                                                <td>

                                                    <a href="<?php echo base_url(); ?>steps/view_application/<?php echo $value['app_id']; ?>" class="text-muted"><i class="material-icons">remove_red_eye</i></a>

                                                    <a href="<?php echo base_url(); ?>steps/edit_application/<?php echo $value['app_id']; ?>" class="btn btn-light">

                                                        <i class="material-icons">edit</i>

                                                    </a>

                                                </td>

                                            </tr>

                                        <?php } ?>


                                    </tbody>

                                </table>

                            </div>


                            <!-- pagination -->

                            <!-- <ul class="pagination m-0 mr-3  justify-content-end">

                                <li class="page-item disabled">

                                    <a class="page-link" href="#" aria-label="Previous">

                                        <span aria-hidden="true" class="material-icons">chevron_left</span>

                                        <span>Prev</span>

                                    </a>

                                </li>

                                <li class="page-item active">

                                    <a class="page-link" href="#" aria-label="1">

                                        <span>1</span>

                                    </a>

                                </li>

                                <li class="page-item">

                                    <a class="page-link" href="#" aria-label="2">

                                        <span>2</span>

                                    </a>

                                </li>

                                <li class="page-item">

                                    <a class="page-link" href="#" aria-label="Next">

                                        <span>Next</span>

                                        <span aria-hidden="true" class="material-icons">chevron_right</span>

                                    </a>

                                </li>

                            </ul>-->

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <style>
        .b-table-sticky-header>.table,
        .table-responsive>.table,
        [class*="table-responsive-"]>.table {
            width: 100% !important;
        }

        [dir=ltr] .thead-border-top-0 thead th {
            width: 25% !important;
        }
    </style>