    <div class="container page__container pt-4">

        <div class="row">

            <div class="col-md-3">

                <?php include('profile_sidebar.php')  ?>

            </div>

            <div class="col-md-9 main-tiles">

                <div class="row">

                    <div class="col-md-4">

                        <div class="card card-body">

                            <div class="d-flex align-items-center">



                                <div class="avatar avatar-lg">

                                    <span class="bg-soft-primary avatar-title rounded-circle text-center text-primary">

                                        <i class="fa fa-check"></i>
                                    </span>

                                </div>

                                <div>

                                    <a href="<?php echo base_url() . 'Userpanel' ?>" class="text-muted mb-2">Applications Submitted</a>

                                    <h4 class="m-0 bold">14</h4>

                                </div>



                            </div>

                        </div>

                    </div><!-- End col -->

                    <div class="col-md-4">

                        <div class="card card-body">

                            <div class="d-flex align-items-center">



                                <div class="avatar avatar-lg">

                                    <span class="bg-soft-success avatar-title rounded-circle text-center text-success">

                                        <i class="fa fa-check-circle"></i>

                                    </span>

                                </div>

                                <div>

                                    <a href="<?php echo base_url() . 'Userpanel/approved' ?>" class="text-muted mb-2">Applications Approved</a>

                                    <h4 class="m-0 bold">592</h4>

                                </div>



                            </div>

                        </div>

                    </div><!-- End col -->

                    <div class="col-md-4">

                        <div class="card card-body">

                            <div class="d-flex align-items-center">



                                <div class="avatar avatar-lg">

                                    <span class="bg-soft-warning avatar-title rounded-circle text-center text-warning">

                                        <i class="fa fa-spinner"></i>

                                    </span>

                                </div>

                                <div>

                                    <a href="<?php echo base_url() . 'Userpanel/process' ?>" class="text-muted mb-2">Applications Under Process</a>

                                    <h4 class="m-0 bold">6</h4>

                                </div>



                            </div>

                        </div>

                    </div><!-- End col -->

                    <div class="col-md-12">

                        <div class="card pb-3">

                            <div class="card-header card-header-large bg-light d-flex align-items-center">
                                <div class="flex">
                                    <h4 class="card-header__title">Applications Approved</h4>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">

                                <div class="form-group d-flex  ml-3 mt-3">

                                    <label class="mt-1 mr-1" for="">Show</label>

                                    <select id="select02" data-toggle="select" data-minimum-results-for-search="-1" class="form-control">

                                        <option data-avatar-src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg">

                                            10 Entries

                                        </option>

                                        <option data-avatar-src="assets/images/avatar/demi.png">

                                            10 Entries

                                        </option>

                                        <option data-avatar-src="assets/images/avatar/green.svg">

                                            10 Entries

                                        </option>

                                    </select>

                                </div>

                                <div class="search-form search-form--light m-3">

                                    <input type="text" class="form-control search" placeholder="Search">

                                    <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>

                                </div>

                            </div>

                            <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                                <table class="table mb-0 thead-border-top-0">

                                    <thead>

                                        <tr>

                                            <th>Name</th>

                                            <th style="width: 120px;">Loan Type</th>

                                            <th style="width: 120px;">Purpose</th>

                                            <th style="width: 160px;">Amount Requested</th>

                                            <th style="width: 160px;">Application Date</th>

                                            <th>Status</th>

                                        </tr>

                                    </thead>

                                    <tbody class="list" id="staff02">

                                        <tr>
                                            <td>
                                                <span class="js-lists-values-employee-name">Michael Smith</span>
                                            </td>

                                            <td><span class="badge badge-warning">ADMIN</span></td>

                                            <td><small class="text-muted">New york</small></td>

                                            <td>27</td>

                                            <td>2020/06/23</td>
                                            <td>

                                                <a href="" class="text-muted"><i class="material-icons">remove_red_eye</i></a>

                                                <a href="" class="btn btn-light">

                                                    <i class="material-icons">edit</i>

                                                </a>

                                            </td>

                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="js-lists-values-employee-name">Michael Smith</span>
                                            </td>

                                            <td><span class="badge badge-warning">ADMIN</span></td>

                                            <td><small class="text-muted">New york</small></td>

                                            <td>27</td>

                                            <td>2020/06/23</td>
                                            <td>

                                                <a href="" class="text-muted"><i class="material-icons">remove_red_eye</i></a>

                                                <a href="" class="btn btn-light">

                                                    <i class="material-icons">edit</i>

                                                </a>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="js-lists-values-employee-name">Michael Smith</span>
                                            </td>

                                            <td><span class="badge badge-warning">ADMIN</span></td>

                                            <td><small class="text-muted">New york</small></td>

                                            <td>27</td>

                                            <td>2020/06/23</td>
                                            <td>

                                                <a href="" class="text-muted"><i class="material-icons">remove_red_eye</i></a>

                                                <a href="" class="btn btn-light">

                                                    <i class="material-icons">edit</i>

                                                </a>

                                            </td>

                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="js-lists-values-employee-name">Michael Smith</span>
                                            </td>

                                            <td><span class="badge badge-warning">ADMIN</span></td>

                                            <td><small class="text-muted">New york</small></td>

                                            <td>27</td>

                                            <td>2020/06/23</td>
                                            <td>

                                                <a href="" class="text-muted"><i class="material-icons">remove_red_eye</i></a>

                                                <a href="" class="btn btn-light">

                                                    <i class="material-icons">edit</i>

                                                </a>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="js-lists-values-employee-name">Michael Smith</span>
                                            </td>

                                            <td><span class="badge badge-warning">ADMIN</span></td>

                                            <td><small class="text-muted">New york</small></td>

                                            <td>27</td>

                                            <td>2020/06/23</td>
                                            <td>

                                                <a href="" class="text-muted"><i class="material-icons">remove_red_eye</i></a>

                                                <a href="" class="btn btn-light">

                                                    <i class="material-icons">edit</i>

                                                </a>

                                            </td>

                                        </tr>
                                    </tbody>

                                </table>

                            </div>

                            <!-- pagination -->

                            <ul class="pagination m-0 mr-3  justify-content-end">

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

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>