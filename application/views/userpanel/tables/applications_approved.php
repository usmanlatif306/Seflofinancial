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

                                    <a href="/bookalorry/userpanel/applications_submitted.php" class="text-muted mb-2">Applications Submitted</a>

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

                                    <a href="/bookalorry/userpanel/applications_approved.php" class="text-muted mb-2">Applications Approved</a>

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

                                    <a href="/bookalorry/userpanel/applications_under_process.php" class="text-muted mb-2">Applications Under Process</a>

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
    <div class="container page__heading-container">

        <div class="page__heading d-flex align-items-center justify-content-between">

            <div>

                <h1 class="m-0">Adrian Demian</h1>
            </div>

        </div>

    </div>

    <div class="container page__container">

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

                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="30" height="30">

                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">

                                                <path d="M6.354,8.984C5.64,8.853,4.854,8.75,3.909,8.659C3.497,8.619,3.195,8.252,3.235,7.84c0.04-0.412,0.407-0.714,0.819-0.674 C5.362,7.274,6.66,7.486,7.935,7.8c0.161,0.042,0.332,0.001,0.456-0.109c0.813-0.716,1.755-1.27,2.776-1.633 c0.2-0.071,0.333-0.26,0.333-0.472V2.517c0-0.171-0.088-0.33-0.232-0.422C9.235,0.8,5.417,0.11,1.789,0 C1.32-0.018,0.866,0.16,0.534,0.492C0.193,0.823,0.001,1.278,0,1.753v12.833c0,0.952,0.761,1.729,1.713,1.748 c1.156,0.031,2.309,0.124,3.454,0.279c0.273,0.039,0.526-0.152,0.565-0.425C5.741,16.125,5.738,16.062,5.723,16 C5.575,15.367,5.5,14.72,5.5,14.07c0-0.349,0.021-0.698,0.064-1.045c0.034-0.273-0.159-0.522-0.432-0.557 c-0.379-0.049-0.784-0.094-1.223-0.137c-0.412-0.04-0.714-0.407-0.674-0.819c0.04-0.412,0.407-0.714,0.819-0.674 c0.58,0.056,1.109,0.118,1.6,0.188c0.224,0.031,0.441-0.092,0.529-0.3c0.147-0.344,0.317-0.678,0.508-1 C6.833,9.489,6.755,9.182,6.518,9.04C6.467,9.01,6.411,8.989,6.352,8.978L6.354,8.984z M4.054,3.493 c1.763,0.129,3.504,0.471,5.185,1.02c0.393,0.132,0.604,0.557,0.472,0.95s-0.557,0.604-0.95,0.472 C7.189,5.422,5.559,5.103,3.909,4.986c-0.412-0.04-0.714-0.407-0.674-0.819S3.642,3.453,4.054,3.493z M23.466,0.492 C23.132,0.164,22.679-0.013,22.211,0c-3.628,0.11-7.446,0.8-9.479,2.1C12.588,2.192,12.5,2.351,12.5,2.522v2.603 c-0.002,0.276,0.221,0.501,0.497,0.503c0.019,0,0.039-0.001,0.058-0.003C13.369,5.59,13.684,5.571,14,5.57 c0.165,0,0.329,0,0.492,0.014c0.073,0.004,0.145-0.024,0.195-0.078c0.051-0.053,0.076-0.127,0.067-0.2 c-0.039-0.351,0.173-0.682,0.508-0.794c1.677-0.593,3.416-0.992,5.184-1.19c0.412-0.04,0.779,0.262,0.819,0.674 s-0.262,0.779-0.674,0.819c-1.269,0.135-2.523,0.391-3.743,0.766c-0.132,0.04-0.207,0.179-0.168,0.311 c0.023,0.076,0.081,0.137,0.156,0.164c0.707,0.252,1.378,0.596,1.994,1.024c0.107,0.074,0.239,0.103,0.367,0.082 C19.599,7.094,20.015,7.04,20.446,7c0.411-0.036,0.775,0.264,0.819,0.674c0.046,0.336-0.159,0.655-0.483,0.754 c-0.129,0.049-0.194,0.194-0.145,0.323c0.009,0.024,0.022,0.046,0.038,0.066c1.598,2.025,2.188,4.667,1.605,7.18 c-0.03,0.135,0.054,0.268,0.189,0.299c0.034,0.008,0.07,0.008,0.104,0.001c0.83-0.144,1.434-0.868,1.427-1.711V1.753 C23.999,1.278,23.807,0.823,23.466,0.492z M16,10.751h-4c-0.69,0.001-1.248,0.559-1.25,1.249v0.445 c-0.011,0.414,0.315,0.759,0.729,0.771s0.759-0.315,0.771-0.729c0.007-0.132,0.117-0.236,0.249-0.236H13 c0.138,0,0.25,0.112,0.25,0.25V16c0.001,0.138-0.11,0.249-0.248,0.25c-0.001,0-0.001,0-0.002,0c-0.414,0-0.75,0.336-0.75,0.75 s0.336,0.75,0.75,0.75h2c0.414,0,0.75-0.336,0.75-0.75s-0.336-0.75-0.75-0.75c-0.138,0.001-0.249-0.11-0.25-0.248 c0-0.001,0-0.001,0-0.002v-3.5c0-0.138,0.112-0.25,0.25-0.25h0.5c0.132,0,0.241,0.103,0.249,0.234 c0.011,0.414,0.355,0.741,0.769,0.731c0.414-0.011,0.741-0.355,0.731-0.769V12C17.247,11.311,16.689,10.753,16,10.751z M19.9,18.489c-0.168-0.168-0.195-0.431-0.064-0.629c2.132-3.225,1.245-7.568-1.98-9.699s-7.568-1.245-9.699,1.98 s-1.245,7.568,1.98,9.699c2.341,1.547,5.379,1.547,7.719,0c0.198-0.131,0.461-0.105,0.629,0.063l3.806,3.806 c0.391,0.39,1.024,0.39,1.415,0c0.39-0.391,0.39-1.024-0.001-1.415l0,0L19.9,18.489z M14,19c-2.761,0-5-2.239-5-5s2.239-5,5-5 s5,2.239,5,5C18.997,16.76,16.76,18.997,14,19z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>

                                            </g>

                                        </svg>

                                    </span>

                                </div>

                                <div>

                                    <a href="/bookalorry/userpanel/application_submited.php" class="text-muted mb-2">Applications Submitted</a>

                                    <h4 class="m-0 bold">14</h4>

                                </div>



                            </div>

                        </div>

                    </div><!-- End col -->

                    <div class="col-md-4">

                        <div class="card card-body">

                            <div class="d-flex align-items-center">



                                <div class="avatar avatar-lg">

                                    <span class="bg-soft-warning avatar-title rounded-circle text-center text-warning">

                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="30" height="30">

                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">

                                                <path d="M11.75,4.5C11.888,4.5,12,4.612,12,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75c0-0.138,0.112-0.25,0.25-0.25h1 c0.138,0,0.25,0.112,0.25,0.25v4.7c0,0.135,0.11,0.245,0.246,0.244c0.018,0,0.036-0.002,0.054-0.006 c0.48-0.108,0.969-0.171,1.46-0.188c0.133-0.002,0.239-0.11,0.24-0.243V4.5c0-1.105-0.895-2-2-2h-1.25C14.112,2.5,14,2.388,14,2.25 V1c0-0.552-0.448-1-1-1s-1,0.448-1,1v1.25c0,0.138-0.112,0.25-0.25,0.25h-1.5C10.112,2.5,10,2.388,10,2.25V1c0-0.552-0.448-1-1-1 S8,0.448,8,1v1.25C8,2.388,7.888,2.5,7.75,2.5h-1.5C6.112,2.5,6,2.388,6,2.25V1c0-0.552-0.448-1-1-1S4,0.448,4,1v1.25 C4,2.388,3.888,2.5,3.75,2.5H2c-1.105,0-2,0.895-2,2v13c0,1.105,0.895,2,2,2h7.453c0.135,0,0.244-0.109,0.245-0.243 c0-0.019-0.002-0.038-0.007-0.057c-0.109-0.48-0.173-0.968-0.191-1.46c-0.002-0.133-0.11-0.239-0.243-0.24H2.25 C2.112,17.5,2,17.388,2,17.25V4.75C2,4.612,2.112,4.5,2.25,4.5h1.5C3.888,4.5,4,4.612,4,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1 V4.75C6,4.612,6.112,4.5,6.25,4.5h1.5C7.888,4.5,8,4.612,8,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75 c0-0.138,0.112-0.25,0.25-0.25H11.75z M17.5,11c-3.59,0-6.5,2.91-6.5,6.5s2.91,6.5,6.5,6.5s6.5-2.91,6.5-6.5 C23.996,13.912,21.088,11.004,17.5,11z M17.5,22.5c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S18.052,22.5,17.5,22.5z M18.439,18.327c-0.118,0.037-0.196,0.15-0.189,0.273v0.15c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75V18.2 c0.003-0.588,0.413-1.096,0.988-1.222c0.607-0.131,0.993-0.73,0.862-1.338c-0.131-0.607-0.73-0.993-1.338-0.862 c-0.517,0.112-0.887,0.57-0.887,1.099c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75c0-1.45,1.176-2.625,2.626-2.624 c1.45,0,2.625,1.176,2.624,2.626c0,1.087-0.671,2.062-1.686,2.451V18.327z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>

                                            </g>

                                        </svg>

                                    </span>

                                </div>

                                <div>

                                    <a href="/bookalorry/userpanel/applications_approved.php" class="text-muted mb-2">Applications Approved</a>

                                    <h4 class="m-0 bold">592</h4>

                                </div>



                            </div>

                        </div>

                    </div><!-- End col -->

                    <div class="col-md-4">

                        <div class="card card-body">

                            <div class="d-flex align-items-center">



                                <div class="avatar avatar-lg">

                                    <span class="bg-soft-success avatar-title rounded-circle text-center text-success">

                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="30" height="30">

                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">

                                                <path d="M11.75,4.5C11.888,4.5,12,4.612,12,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75c0-0.138,0.112-0.25,0.25-0.25h1 c0.138,0,0.25,0.112,0.25,0.25v4.7c0,0.135,0.11,0.245,0.246,0.244c0.018,0,0.036-0.002,0.054-0.006 c0.48-0.108,0.969-0.171,1.46-0.188c0.133-0.002,0.239-0.11,0.24-0.243V4.5c0-1.105-0.895-2-2-2h-1.25C14.112,2.5,14,2.388,14,2.25 V1c0-0.552-0.448-1-1-1s-1,0.448-1,1v1.25c0,0.138-0.112,0.25-0.25,0.25h-1.5C10.112,2.5,10,2.388,10,2.25V1c0-0.552-0.448-1-1-1 S8,0.448,8,1v1.25C8,2.388,7.888,2.5,7.75,2.5h-1.5C6.112,2.5,6,2.388,6,2.25V1c0-0.552-0.448-1-1-1S4,0.448,4,1v1.25 C4,2.388,3.888,2.5,3.75,2.5H2c-1.105,0-2,0.895-2,2v13c0,1.105,0.895,2,2,2h7.453c0.135,0,0.244-0.109,0.245-0.243 c0-0.019-0.002-0.038-0.007-0.057c-0.109-0.48-0.173-0.968-0.191-1.46c-0.002-0.133-0.11-0.239-0.243-0.24H2.25 C2.112,17.5,2,17.388,2,17.25V4.75C2,4.612,2.112,4.5,2.25,4.5h1.5C3.888,4.5,4,4.612,4,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1 V4.75C6,4.612,6.112,4.5,6.25,4.5h1.5C7.888,4.5,8,4.612,8,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75 c0-0.138,0.112-0.25,0.25-0.25H11.75z M17.5,11c-3.59,0-6.5,2.91-6.5,6.5s2.91,6.5,6.5,6.5s6.5-2.91,6.5-6.5 C23.996,13.912,21.088,11.004,17.5,11z M17.5,22.5c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S18.052,22.5,17.5,22.5z M18.439,18.327c-0.118,0.037-0.196,0.15-0.189,0.273v0.15c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75V18.2 c0.003-0.588,0.413-1.096,0.988-1.222c0.607-0.131,0.993-0.73,0.862-1.338c-0.131-0.607-0.73-0.993-1.338-0.862 c-0.517,0.112-0.887,0.57-0.887,1.099c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75c0-1.45,1.176-2.625,2.626-2.624 c1.45,0,2.625,1.176,2.624,2.626c0,1.087-0.671,2.062-1.686,2.451V18.327z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>

                                            </g>

                                        </svg>

                                    </span>

                                </div>

                                <div>

                                    <a href="/bookalorry/userpanel/applications_under_process.php" class="text-muted mb-2">Applications Under Process</a>

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

                                <div class="form-group d-flex  ml-1 mt-3">

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