<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Admin Contents</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="active" href="<?php echo base_url();?>Admin/index" data-toggle="collapse" data-target="#dashboard_dr">
						<div class="pull-left">
							<i class="zmdi zmdi-landscape mr-20"></i>
							<span class="right-nav-text">Dashboard</span>
						</div>
						<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
						<div class="clearfix"></div></a>
					<ul id="dashboard_dr" class="collapse collapse-level-1">
						
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr">
						<div class="pull-left">
							<i class="zmdi zmdi-apps mr-20"></i>
							<span class="right-nav-text">Applications</span>
						</div>
						<div class="pull-right">
							<i class="zmdi zmdi-caret-down"></i>
						</div>
						<div class="clearfix"></div>
					</a>
					<ul id="app_dr" class="collapse collapse-level-1">
						<li>
							<a href="<?php echo base_url();?>Admin/pendingdocument">Pending</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>Admin/completeddocument">Completed</a>
						</li>						
					</ul>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>Admin Settings</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr">
						<div class="pull-left">
							<i class="zmdi zmdi-smartphone-setup mr-20"></i>
							<span class="right-nav-text">Settings</span>
						</div>
						<div class="pull-right">
							<i class="zmdi zmdi-caret-down"></i>
						</div>
						<div class="clearfix"></div>
					</a>
					<ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="<?php echo base_url();?>Admin/profile_admin">Profile</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>