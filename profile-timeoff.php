<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>PROGREEN WebRevamp</title>

	<link rel="shortcut icon" href="assets/img/favicon.png">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

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


		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div class="sidebar-contents">
					<div id="sidebar-menu" class="sidebar-menu">
						<div class="mobile-show">
							<div class="offcanvas-menu">
								<div class="user-info align-center bg-theme text-center">
									<span class="lnr lnr-cross  text-white" id="mobile_btn_close">X</span>
									<a href="javascript:void(0)" class="d-block menu-style text-white">
										<div class="user-avatar d-inline-block mr-3">
											<img src="assets/img/profiles/avatar-18.jpg" alt="user avatar" class="rounded-circle" width="50">
										</div>
									</a>
								</div>
							</div>
							<div class="sidebar-input">
								<div class="top-nav-search">
									<form>
										<input type="text" class="form-control" placeholder="Search here">
										<button class="btn" type="submit"><i class="fas fa-search"></i></button>
									</form>
								</div>
							</div>
						</div>
						<ul>
							<li>
								<a href="index.php"><img src="assets/img/home.svg" alt="sidebar_img"> <span>Dashboard</span></a>
							</li>
							<li>
								<a href="employee.php"><img src="assets/img/employee.svg" alt="sidebar_img"><span> Employees</span></a>
							</li>
							<li>
								<a href="company.php"><img src="assets/img/company.svg" alt="sidebar_img"> <span> Company</span></a>
							</li>
							<li>
								<a href="calendar.php"><img src="assets/img/calendar.svg" alt="sidebar_img"> <span>Calendar</span></a>
							</li>
							<li>
								<a href="leave.php"><img src="assets/img/leave.svg" alt="sidebar_img"> <span>Leave</span></a>
							</li>
							<li>
								<a href="review.php"><img src="assets/img/review.svg" alt="sidebar_img"><span>Review</span></a>
							</li>
							<li>
								<a href="report.php"><img src="assets/img/report.svg" alt="sidebar_img"><span>Report</span></a>
							</li>
							<li>
								<a href="manage.php"><img src="assets/img/manage.svg" alt="sidebar_img"> <span>Manage</span></a>
							</li>
							<li>
								<a href="settings.php"><img src="assets/img/settings.svg" alt="sidebar_img"><span>Settings</span></a>
							</li>
							<li class="active">
								<a href="profile.php"><img src="assets/img/profile.svg" alt="sidebar_img"> <span>Profile</span></a>
							</li>
						</ul>
						<ul class="logout">
							<li>
								<a href="login.php"><img src="assets/img/logout.svg" alt="sidebar_img"><span>Log out</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>


		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="row">
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="breadcrumb-path mb-4">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb">Home</a>
								</li>
								<li class="breadcrumb-item active"> Profile</li>
							</ul>
							<h3>Profile </h3>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="head-link-set">
							<ul>
								<li><a href="profile.php">Employement</a></li>
								<li><a href="profile-detail.php">Detail</a></li>
								<li><a href="profile-document.php">Document</a></li>
								<li><a href="profile-payroll.php">Payroll</a></li>
								<li><a class="active" href="#">Timeoff</a></li>
								<li><a href="profile-review.php">Reviews</a></li>
								<li><a href="profile-setting.php">Settings</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 mb-4">
						<div class="row">
							<div class="col-xl-6 col-sm-12 col-12 d-flex">
								<div class="card flex-fill">
									<div class="card-header">
										<h2 class="card-titles">Holidays List</h2>
									</div>
									<div class="card-body">
										<div class="col-xl-12 col-sm-12 col-12 mb-5 ">
											<div class="row">
												<div class="col-xl-8 col-sm-12 col-12 p-0">
													<div class="head-link-set">
														<ul>
															<li><a class="active" href="#">Upcoming</a></li>
															<li><a href="#">History</a></li>
														</ul>
													</div>
												</div>
												<div class="col-xl-4 col-sm-12 col-12 p-0 select-path">
													<select class="select">
														<option value="inactive">In Progress</option>
														<option value="active">Completed</option>
													</select>
												</div>
											</div>
										</div>
										<div class="table table-responsive custimze-table">
											<table>
												<thead>
													<tr>
														<th>#</th>
														<th>Date</th>
														<th>Leave Reason</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Mon, 26 Aug 2019</td>
														<td>Bank Holiday</td>
													</tr>
													<tr>
														<td>2</td>
														<td>Wed, 25 Dec 2019</td>
														<td> Christmas Day</td>
													</tr>
													<tr>
														<td>3</td>
														<td>Thu, 26 Dec 2019</td>
														<td>Bank Holiday</td>
													</tr>
													<tr>
														<td>4</td>
														<td>Wed, 1 Jan 2020</td>
														<td>Bank Holiday</td>
													</tr>
													<tr>
														<td>5</td>
														<td>Mon, 1 Jan 2020</td>
														<td> Epiphany</td>
													</tr>
													<tr>
														<td>6</td>
														<td>Fri, 17 Jan 2020 </td>
														<td> Presidents' Day</td>
													</tr>
													<tr>
														<td>7</td>
														<td>Mon, 9 Mar 2020</td>
														<td>Holi</td>
													</tr>
													<tr>
														<td>8</td>
														<td>Wed, 1 Mar 2020 </td>
														<td>Independence Day</td>
													</tr>
													<tr>
														<td>9</td>
														<td>Sat, 4 Jul 2020 </td>
														<td>Bank Holiday</td>
													</tr>
													<tr>
														<td>10</td>
														<td>Mon, 11 Nov 2020 </td>
														<td> Veterans Day</td>
													</tr>
													<tr>
														<td>11</td>
														<td>Fri, 25 Dec 2020</td>
														<td> Christmas Day</td>
													</tr>
													<tr>
														<td>12</td>
														<td>Mon, 1 Jan 2020</td>
														<td> Epiphany</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12 col-12 d-flex">
								<div class="card flex-fill">
									<div class="card-header">
										<h2 class="card-title">Leave Off Details</h2>
									</div>
									<div class="card-body p-0">
										<div class="card-body-inner">
											<h3>Year</h3>
											<label>01 January – 31 December</label>
										</div>
										<div class="card-body-inner">
											<h3>Days Used</h3>
											<div class="card-range">
												<div class="card-set">
													<div class="card-days">5 days</div>
												</div>
											</div>
											<h3>Days</h3>
											<label>5 Used</label>
										</div>
										<div class="card-body-inner">
											<h3>Non Deductible Days</h3>
											<ul>
												<li>
													<a class="btn btn-approved">5 Approved</a>
												</li>
												<li>
													<a class="btn btn-approved">7 Pending</a>
												</li>
											</ul>
										</div>
										<div class="card-body-inner">
											<h3>Attendance</h3>
											<label>3 Sick Days</label>
											<label>2 Working from Home</label>
										</div>
										<div class="card-body-inner select-path border-0">
											<h3>Time Off Approvers</h3>
											<div class="form-group">
												<select class="select">
													<option value="inactive">Choose Approver</option>
													<option value="active">Approved</option>
												</select>
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


	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script src="assets/js/feather.min.js"></script>

	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script src="assets/js/script.js"></script>
</body>

</html>