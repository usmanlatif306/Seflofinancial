<header id="topnav">
  <!-- Topbar Start -->
  <div class="navbar-custom">
    <div class="container-fluid">
      <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown notification-list">
          <!-- Mobile menu toggle-->
          <a class="navbar-toggle nav-link">
            <div class="lines">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </a>
          <!-- End mobile menu toggle-->
        </li>

        <li class="d-none d-sm-block">
          <!-- <form class="app-search">
              <div class="app-search-box">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search...">
                  <div class="input-group-append">
                    <button class="btn" type="submit">
                      <i class="fe-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </form>-->
        </li>



        <li class="dropdown notification-list">
          <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <img src="<?php echo base_url(); ?>assets/admin/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
            <span class="pro-user-name ml-1">
              <?php echo $_SESSION['fname']; ?> <i class="mdi mdi-chevron-down"></i>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
            <!-- item-->
            <div class="dropdown-item noti-title">
              <h5 class="m-0">
                Welcome !
              </h5>
            </div>

            <!-- item-->
            <a href="<?php echo base_url(); ?>admin/profilesetting" class="dropdown-item notify-item">
              <i class="fe-settings"></i>
              <span>Settings</span>
            </a>



            <div class="dropdown-divider"></div>

            <!-- item-->
            <a href="<?php echo base_url() . 'admin/logout' ?>" class="dropdown-item notify-item">
              <i class="fe-log-out"></i>
              <span>Logout</span>
            </a>

          </div>
        </li>
      </ul>

      <div class="logo-box">
        <a href="<?php echo base_url(); ?>" class="logo text-center">
          <span class="logo-lg">
            <img src="https://www.seflofinancial.com/wp-content/uploads/2023/01/Seflofinanciallogo2.png" alt="" height="26">
          </span>
          <span class="logo-sm">
            <img src="https://www.seflofinancial.com/wp-content/uploads/2023/01/Seflofinanciallogo2.png" alt="" height="28">
          </span>
        </a>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <!-- end Topbar -->

  <div class="topbar-menu">
    <div class="container-fluid">
      <div id="navigation">
        <!-- Navigation Menu-->
        <ul class="navigation-menu">

          <li>
            <a href="<?php echo base_url(); ?>admin">
              <i class="la la-dashboard"></i>Dashboard</a>

          </li>
          <li>
            <a href="<?php echo base_url(); ?>admin/application">
              <i class="la la-cube"></i>Applications</a>

          </li>

          <li>
            <a href="<?php echo base_url(); ?>admin/reports">
              <i class="la la-cube"></i>Reports</a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="mdi mdi-wallet"></i>Balance: $<?php echo $balance; ?></a>
          </li>
        </ul>
        <!-- End navigation menu -->

        <div class="clearfix"></div>
      </div>
      <!-- end #navigation -->
    </div>
    <!-- end container -->
  </div>
  <!-- end navbar-custom -->

</header>