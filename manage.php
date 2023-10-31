<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>PROGREEN WebRevamp</title>

	<link rel="shortcut icon" href="assets/img/favicon.png">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<link rel="stylesheet" href="assets/css/style.css">
	<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>

	<div class="main-wrapper">

		<div class="header">

			<div class="header-left">
				<a href="index.php" class="logo">
					<img src="assets/img/logo_0.png" alt="Logo">
				</a>
				<a href="index.php" class="logo logo-small">
					<img src="assets/img/logo (1).png" alt="Logo" width="30" height="30">
				</a>
				<a href="javascript:void(0);" id="toggle_btn">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
			</div>




			<div class="top-nav-search">
				<form>
					<input type="text" class="form-control" placeholder="">
					<button class="btn" type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>


			<a class="mobile_btn" id="mobile_btn">
				<i class="fas fa-bars"></i>
			</a>


			<ul class="nav user-menu">

				<li class="nav-item dropdown">
					<a href="#" class="dropdown-toggle nav-link pr-0" data-toggle="dropdown">
						<i data-feather="bell"></i> <span class="badge badge-pill"></span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All</a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="activities.php">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-02.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.php">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-03.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.php">
										<div class="media">
											<div class="avatar avatar-sm">
												<span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
											</div>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">New user registered</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.php">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-04.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.php">
										<div class="media">
											<div class="avatar avatar-sm">
												<span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
											</div>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">You have received a new message</span></p>
												<p class="noti-time"><span class="notification-time">2 days ago</span></p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="activities.php">View all Notifications</a>
						</div>
					</div>
				</li>


				<li class="nav-item dropdown has-arrow main-drop">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<span class="user-img">
							<img src="assets/img/profile.jpg" alt="">
							<span class="status online"></span>
						</span>
						<span>John Paul Bayoneto</span>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.php"><i data-feather="user" class="mr-1"></i> Profile</a>
						<a class="dropdown-item" href="settings.php"><i data-feather="settings" class="mr-1"></i> Settings</a>
						<a class="dropdown-item" href="login.php"><i data-feather="log-out" class="mr-1"></i> Logout</a>
					</div>
				</li>

			</ul>
			<div class="dropdown mobile-user-menu show">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
				<div class="dropdown-menu dropdown-menu-right ">
					<a class="dropdown-item" href="profile.php">My Profile</a>
					<a class="dropdown-item" href="settings.php">Settings</a>
					<a class="dropdown-item" href="login.php">Logout</a>
				</div>
			</div>

		</div>


		<?php
		include("includes/sidebar.php");
		?>


		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="row">
					<div class="col-xl-12 col-sm-12 col-12">
						<div class="breadcrumb-path mb-4">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb" />Home</a>
								</li>
								<li class="breadcrumb-item active"> Manage</li>
							</ul>
							<h3>Manage</h3>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="head-link-set">
							<ul>
								<li><a class="active" href="#">Account Roles</a></li>
								<li><a href="leadership-manage.php">Leadership Roles</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="card grid-views">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-6 col-sm-12 col-12">
										<div class="card">
											<div class="card-header">
												<div class="employee-head">
													<h2>Super Admin</h2>
													<ul>
														<li><img src="assets/img/profiles/avatar-15.jpg" alt="profile" class="img-table" /></li>
													</ul>
												</div>
											</div>
											<div class="card-body">
												<div class="employee-contents">
													<p>They can see and do everything – best not to have many with this role.</p>
													<a class="btn-addmembers" href="super-admin.php">View Permission</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-sm-12 col-12">
										<div class="card">
											<div class="card-header">
												<div class="employee-head">
													<h2> Admin</h2>
													<ul>
														<li><img src="assets/img/profiles/avatar-14.jpg" alt="profile" class="img-table" /></li>
													</ul>
												</div>
											</div>
											<div class="card-body">
												<div class="employee-contents">
													<p>Admin to help sort stuff, but have less access to confidential information like salaries.</p>
													<a class="btn-addmembers" href="super-admin.php">View Permission</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6 col-sm-12 col-12">
										<div class="card">
											<div class="card-header">
												<div class="employee-head">
													<h2>Payroll Admin</h2>
													<ul>
														<li><img src="assets/img/profiles/avatar-10.jpg" alt="profile" class="img-table" /></li>
													</ul>
												</div>
											</div>
											<div class="card-body">
												<div class="employee-contents">
													<p>They sort out your payroll and have access to everyone's salary information.</p>
													<a class="btn-addmembers" href="super-admin.php">View Permission</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-sm-12 col-12">
										<div class="card">
											<div class="card-header">
												<div class="employee-head">
													<h2>Team Member</h2>
													<ul>
														<li><img src="assets/img/profiles/avatar-15.jpg" alt="profile" class="img-table" /></li>
													</ul>
												</div>
											</div>
											<div class="card-body">
												<div class="employee-contents">
													<p>Team Members have the most limited access – most people should have this role.</p>
													<a class="btn-addmembers" href="super-admin.php">View Permission</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="customize_popup">
			<div class="modal fade" id="addteam" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lgs">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel">Create New Team</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class=" col-md-12 p-0">
								<div class=" form-popup">
									<label>Team Name</label>
									<input type="text">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary">Add</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>


	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script src="assets/js/feather.min.js"></script>

	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
	<script src="assets/plugins/apexchart/chart-data.js"></script>

	<script src="assets/js/script.js"></script>
</body>

</html>