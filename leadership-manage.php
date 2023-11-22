<?php
	include_once("includes/system_header.php");
	include_once("includes/system_main_wraper.php");
	include_once("includes/system_navbar.php");
?>

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
								<a href="review.php"><img src="assets/img/review.svg" alt="sidebar_img"><span>Attendance</span></a>
							</li>
							<li>
								<a href="report.php"><img src="assets/img/report.svg" alt="sidebar_img"><span>Report</span></a>
							</li>
							<li class="active">
								<a href="manage.php"><img src="assets/img/manage.svg" alt="sidebar_img"> <span>Manage</span></a>
							</li>
							<li>
								<a href="settings.php"><img src="assets/img/settings.svg" alt="sidebar_img"><span>Settings</span></a>
							</li>
							<li>
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
								<li><a href="manage.php">Account Roles</a></li>
								<li><a class="active" href="#">Leadership Roles</a></li>
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
													<h2>Line Manager</h2>
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
													<h2>Team Lead</h2>
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
													<h2>Time Off Approver</h2>
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

	<script src="assets/js/script.js"></script>
</body>

</html>