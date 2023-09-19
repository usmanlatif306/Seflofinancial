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
<link href="<?php echo base_url(); ?>/assets/admin/css/custom.css" rel="stylesheet" type="text/css" />
<!-- Header Ends -->

<body>

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

                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade active show" id="View-App" role="tabpanel" aria-labelledby="View-App-tab">
                                    <div class="card virtual-left">
                                        <div class="card-body">

                                            <div id="cardCollpase4" class="collapse pt-3 show">
                                                <div class="row align-center">

                                                </div>
                                                <!-- end row-->
                                                <div class="marg-btom25"></div>

                                                <div class="alert alert-success col-12 alert-dismissible" role="alert" style="display: none;" id="smessage">
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                    <span></span>
                                                </div>

                                                <div class="alert alert-danger col-12 alert-dismissible" role="alert" style="display: none;" id="emessage">
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                    <span></span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <form action="" method="post" id="profile" enctype="multipart/form-data">
                                                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>

                                                            <div class="row">
                                                                <?php if (isset($_GET['status']) and $_GET['status'] == 'failure') { ?>
                                                                    <div class="col-md-12">
                                                                        <div class="alert alert-danger">
                                                                            <strong>Failure!</strong> Bank Account is not verified.
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                                <?php if (isset($_GET['status']) and $_GET['status'] == 'success') { ?>
                                                                    <div class="col-md-12">
                                                                        <div class="alert alert-success">
                                                                            <strong>Completed!</strong> Bank Account is verified.
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="firstname">First Name</label>
                                                                        <input type="text" class="form-control" placeholder="Enter first name" value="<?php echo  $details->name; ?>" id="name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="lastname">Last Name</label>
                                                                        <input type="text" class="form-control" placeholder="Enter last name" value="<?php echo  $details->lname; ?>" id="lname">
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="firstname">Mobile</label>
                                                                        <input type="number" class="form-control" placeholder="Enter Mobile" value="<?php echo  $details->mobile; ?>" id="mobile">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="useremail">Email Address</label>
                                                                        <input type="email" class="form-control" placeholder="Enter email" value="<?php echo  $details->email; ?>" readonly>

                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="address">Address</label>
                                                                        <input type="text" class="form-control" placeholder="Enter Address" value="<?php echo  $details->address; ?>" id="address" name="address">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="city">City</label>
                                                                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter City" value="<?php echo  $details->city; ?>">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="address">State</label>
                                                                        <select name="state" id="state" class="form-control">
                                                                            <option value="" <?php if ($details->state == "") {
                                                                                                    echo "selected";
                                                                                                } ?>>Select State</option>
                                                                            <option value="Alabama" <?php if ($details->state == "Alabama") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Alabama</option>
                                                                            <option value="Alaska" <?php if ($details->state == "Alaska") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Alaska</option>
                                                                            <option value="Arizona" <?php if ($details->state == "Arizona") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Arizona</option>
                                                                            <option value="Arkansas" <?php if ($details->state == "Arkansas") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Arkansas</option>
                                                                            <option value="California" <?php if ($details->state == "California") {
                                                                                                            echo "selected";
                                                                                                        } ?>>California</option>
                                                                            <option value="Colorado" <?php if ($details->state == "Colorado") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Colorado</option>
                                                                            <option value="Connecticut" <?php if ($details->state == "Connecticut") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Connecticut</option>
                                                                            <option value="Delaware" <?php if ($details->state == "Delaware") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Delaware</option>
                                                                            <option value="District of Columbia" <?php if ($details->state == "District of Columbia") {
                                                                                                                        echo "selected";
                                                                                                                    } ?>>District of Columbia</option>
                                                                            <option value="Florida" <?php if ($details->state == "Florida") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Florida</option>
                                                                            <option value="Georgia" <?php if ($details->state == "Georgia") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Georgia</option>
                                                                            <option value="Hawaii" <?php if ($details->state == "Hawaii") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Hawaii</option>
                                                                            <option value="Idaho" <?php if ($details->state == "Idaho") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Idaho</option>
                                                                            <option value="Illinois" <?php if ($details->state == "Illinois") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Illinois</option>
                                                                            <option value="Indiana" <?php if ($details->state == "Indiana") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Indiana</option>
                                                                            <option value="Iowa" <?php if ($details->state == "Iowa") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Iowa</option>
                                                                            <option value="Kansas" <?php if ($details->state == "Kansas") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Kansas</option>
                                                                            <option value="Kentucky" <?php if ($details->state == "Kentucky") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Kentucky</option>
                                                                            <option value="Louisiana" <?php if ($details->state == "Louisiana") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Louisiana</option>
                                                                            <option value="Maine" <?php if ($details->state == "Maine") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Maine</option>
                                                                            <option value="Maryland" <?php if ($details->state == "Maryland") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Maryland</option>
                                                                            <option value="Massachusetts" <?php if ($details->state == "Massachusetts") {
                                                                                                                echo "selected";
                                                                                                            } ?>>Massachusetts</option>
                                                                            <option value="Michigan" <?php if ($details->state == "Michigan") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Michigan</option>
                                                                            <option value="Minnesota" <?php if ($details->state == "Minnesota") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Minnesota</option>
                                                                            <option value="Mississippi" <?php if ($details->state == "Mississippi") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Mississippi</option>
                                                                            <option value="Missouri" <?php if ($details->state == "Missouri") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Missouri</option>
                                                                            <option value="Montana" <?php if ($details->state == "Montana") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Montana</option>
                                                                            <option value="Nebraska" <?php if ($details->state == "Nebraska") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Nebraska</option>
                                                                            <option value="Nevada" <?php if ($details->state == "Nevada") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Nevada</option>
                                                                            <option value="New Hampshire" <?php if ($details->state == "New Hampshire") {
                                                                                                                echo "selected";
                                                                                                            } ?>>New Hampshire</option>
                                                                            <option value="New Jersey" <?php if ($details->state == "New Jersey") {
                                                                                                            echo "selected";
                                                                                                        } ?>>New Jersey</option>
                                                                            <option value="New Mexico" <?php if ($details->state == "New Mexico") {
                                                                                                            echo "selected";
                                                                                                        } ?>>New Mexico</option>
                                                                            <option value="New York" <?php if ($details->state == "New York") {
                                                                                                            echo "selected";
                                                                                                        } ?>>New York</option>
                                                                            <option value="North Carolina" <?php if ($details->state == "North Carolina") {
                                                                                                                echo "selected";
                                                                                                            } ?>>North Carolina</option>
                                                                            <option value="North Dakota" <?php if ($details->state == "North Dakota") {
                                                                                                                echo "selected";
                                                                                                            } ?>>North Dakota</option>
                                                                            <option value="Ohio" <?php if ($details->state == "Ohio") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Ohio</option>
                                                                            <option value="Oklahoma" <?php if ($details->state == "Oklahoma") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Oklahoma</option>
                                                                            <option value="Oregon" <?php if ($details->state == "Oregon") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Oregon</option>
                                                                            <option value="Pennsylvania" <?php if ($details->state == "Pennsylvania") {
                                                                                                                echo "selected";
                                                                                                            } ?>>Pennsylvania</option>
                                                                            <option value="Rhode Island" <?php if ($details->state == "Rhode Island") {
                                                                                                                echo "selected";
                                                                                                            } ?>>Rhode Island</option>
                                                                            <option value="South Carolina" <?php if ($details->state == "South Carolina") {
                                                                                                                echo "selected";
                                                                                                            } ?>>South Carolina</option>
                                                                            <option value="South Dakota" <?php if ($details->state == "South Dakota") {
                                                                                                                echo "selected";
                                                                                                            } ?>>South Dakota</option>
                                                                            <option value="Tennessee" <?php if ($details->state == "Tennessee") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Tennessee</option>
                                                                            <option value="Texas" <?php if ($details->state == "Texas") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Texas</option>
                                                                            <option value="Utah" <?php if ($details->state == "Utah") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Utah</option>
                                                                            <option value="Vermont" <?php if ($details->state == "Vermont") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Vermont</option>
                                                                            <option value="Virginia" <?php if ($details->state == "Virginia") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Virginia</option>
                                                                            <option value="Washington" <?php if ($details->state == "Washington") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Washington</option>
                                                                            <option value="West Virginia" <?php if ($details->state == "West Virginia") {
                                                                                                                echo "selected";
                                                                                                            } ?>>West Virginia</option>
                                                                            <option value="Wisconsin" <?php if ($details->state == "Wisconsin") {
                                                                                                            echo "selected";
                                                                                                        } ?>>Wisconsin</option>
                                                                            <option value="Wyoming" <?php if ($details->state == "Wyoming") {
                                                                                                        echo "selected";
                                                                                                    } ?>>Wyoming</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="zipcode">Zip Code</label>
                                                                        <input type="text" class="form-control" placeholder="Enter Zipcode" value="<?php echo  $details->zipcode; ?>" name="zipcode" id="zipcode">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="userpassword">Password</label>
                                                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" value="">

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="userpassword">Retype Password</label>
                                                                        <input type="password" class="form-control" id="cpassword" placeholder="Re Type password" value="">
                                                                        <span class="form-text text-muted"></span>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->


                                                            <div class="text-right">
                                                                <button type="button" onclick="submit_form2();" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                                            </div>
                                                            <?php if ($userdetail->bank_name != '') { ?>

                                                                <div class="text-left">
                                                                    <a class="btn btn-lg btn-primary mt-2" style="color:white;" disabled><?php echo '********' . $userdetail->last4 . '- ' . $userdetail->bank_name; ?></a> &nbsp; &nbsp;
                                                                    <a href="https://www.seflofinancial.com/admin/steps/verification" class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Reverify Your Bank...</a>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="text-left">
                                                                    <!-- <a href="https://www.seflofinancial.com/admin/steps/verification" class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Verify Your Bank...</a> -->
                                                                    <a href="<?php echo base_url('/steps/verification')  ?>" class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Verify Your Bank...</a>
                                                                </div>
                                                            <?php } ?>

                                                        </form>
                                                    </div>

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

    <!-- Plugins js -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/dropzone/dropzone.min.js"></script>
    <!-- Init js-->
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/form-fileuploads.init.js"></script>
    <!-- App js-->


    <script>
        function submit_form2() {
            var name = $('#name').val();
            var lname = $('#lname').val();
            var mobile = $('#mobile').val();
            var pwd = $("#password").val();
            var npwd = $("#cpassword").val();
            var address = $("#address").val();
            var city = $("#city").val();
            var state = $("#state").val();
            var zipcode = $("#zipcode").val();
            console.log(pwd.localeCompare(npwd));
            //length 6 opr greater
            if (pwd.length >= 6) { //&& npwd.length >= 6
                if ((pwd.localeCompare(npwd)) == 0) {
                    $.ajax({
                        type: 'post',
                        url: '<?php echo base_url() ?>' + 'Steps/update_profile',
                        data: {
                            'name': name,
                            'lname': lname,
                            'mobile': mobile,
                            'password': pwd,
                            'address': address,
                            'city': city,
                            'state': state,
                            'zipcode': zipcode
                        },
                        success: function(data) {
                            console.log('data:');
                            console.log(data);
                            var obj = $.parseJSON(data);
                            if (obj.status == 'success') {

                                $('#smessage').css('display', 'block');
                                $('#emessage').css('display', 'none');
                                $('#smessage').find('span').html('Details Changed successfully!');

                            } else {
                                $('#emessage').css('display', 'block');
                                $('#smessage').css('display', 'none');
                                $('#emessage').find('span').html('Something went wrong!');
                            }
                        }

                    });
                } else {
                    $('#emessage').css('display', 'block');
                    $('#smessage').css('display', 'none');
                    $('#emessage').closest('div').find('span').html('Password doesn\'t match');
                }
            } else {
                $('#emessage').css('display', 'block');
                $('#smessage').css('display', 'none');
                $('#emessage').closest('div').find('span').html('Password length should be greater than equal to 6!');

            }
            setTimeout(function() {
                $('#emessage').css('display', 'none');
                $('#smessage').css('display', 'none');
                $('#emessage').closest('div').find('span').html('');
            }, 3000);

        }
    </script>
</body>

</html>

<?php include('footer.php'); ?>