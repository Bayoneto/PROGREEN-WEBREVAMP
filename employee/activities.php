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
								<a href="dashboard.html"><img src="assets/img/home.svg" alt="sidebar_img"> <span>Dashboard</span></a>
							</li>
							<li>
								<a href="employee.html"><img src="assets/img/employee.svg" alt="sidebar_img"><span> Employees</span></a>
							</li>
							<li>
								<a href="company.html"><img src="assets/img/company.svg" alt="sidebar_img"> <span> Company</span></a>
							</li>
							<li>
								<a href="calendar.html"><img src="assets/img/calendar.svg" alt="sidebar_img"> <span>Calendar</span></a>
							</li>
							<li>
								<a href="leave.html"><img src="assets/img/leave.svg" alt="sidebar_img"> <span>Leave</span></a>
							</li>
							<li>
								<a href="review.html"><img src="assets/img/review.svg" alt="sidebar_img"><span>Review</span></a>
							</li>
							<li>
								<a href="report.html"><img src="assets/img/report.svg" alt="sidebar_img"><span>Report</span></a>
							</li>
							<li>
								<a href="manage.html"><img src="assets/img/manage.svg" alt="sidebar_img"> <span>Manage</span></a>
							</li>
							<li>
								<a href="settings.html"><img src="assets/img/settings.svg" alt="sidebar_img"><span>Settings</span></a>
							</li>
							<li>
								<a href="profile.html"><img src="assets/img/profile.svg" alt="sidebar_img"> <span>Profile</span></a>
							</li>
						</ul>
						<ul class="logout">
							<li>
								<a href="login.html"><img src="assets/img/logout.svg" alt="sidebar_img"><span>Log out</span></a>
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
								<li class="breadcrumb-item"><a href="index.html">Home</a>
								</li>
								<li class="breadcrumb-item active"> Activities</li>
							</ul>
							<h3>Activities</h3>
						</div>
					</div>
					<div class="col-md-12">
						<div class="activity">
							<div class="activity-box">
								<ul class="activity-list">
									<li>
										<div class="activity-user">
											<a href="profile.html" title="" data-toggle="tooltip" class="avatar" data-original-title="Lesley Grauer">
												<img alt="Lesley Grauer" src="assets/img/user.jpg" class="img-fluid rounded-circle">
											</a>
										</div>
										<div class="activity-content">
											<div class="timeline-content">
												<a href="profile.html" class="name">Lesley Grauer</a> buy new coin <a href="#">BTC</a>
												<span class="time">4 mins ago</span>
											</div>
										</div>
										<a class="activity-delete" href="" title="Delete">×</a>
									</li>
									<li>
										<div class="activity-user">
											<a href="profile.html" title="" data-toggle="tooltip" class="avatar" data-original-title="Lesley Grauer">
												<img alt="Lesley Grauer" src="assets/img/profiles/avatar-02.jpg" class="img-fluid rounded-circle">
											</a>
										</div>
										<div class="activity-content">
											<div class="timeline-content">
												<a href="profile.html" class="name">Jeffery Lalor</a> added <a href="profile.html" class="name">Loren Gatlin</a> and <a href="profile.html" class="name">Tarah Shropshire</a> to project <a href="#">Crypto</a>
												<span class="time">6 mins ago</span>
											</div>
										</div>
										<a class="activity-delete" href="" title="Delete">×</a>
									</li>
									<li>
										<div class="activity-user">
											<a href="profile.html" title="" data-toggle="tooltip" class="avatar" data-original-title="Lesley Grauer">
												<img alt="Lesley Grauer" src="assets/img/profiles/avatar-04.jpg" class="img-fluid rounded-circle">
											</a>
										</div>
										<div class="activity-content">
											<div class="timeline-content">
												<div class="timeline-content">
													<a href="profile.html" class="name">Catherine Manseau</a> completed task <a href="#">Crypto coin sell with payment gateway</a>
													<span class="time">12 mins ago</span>
												</div>
											</div>
										</div>
										<a class="activity-delete" href="" title="Delete">×</a>
									</li>
									<li>
										<div class="activity-user">
											<a href="profile.html" title="" data-toggle="tooltip" class="avatar" data-original-title="Lesley Grauer">
												<img alt="Lesley Grauer" src="assets/img/user.jpg" class="img-fluid rounded-circle">
											</a>
										</div>
										<div class="activity-content">
											<div class="timeline-content">
												<a href="profile.html" class="name">Lesley Grauer</a> buy new coin <a href="#">BTC</a>
												<span class="time">4 mins ago</span>
											</div>
										</div>
										<a class="activity-delete" href="" title="Delete">×</a>
									</li>
									<li>
										<div class="activity-user">
											<a href="profile.html" title="" data-toggle="tooltip" class="avatar" data-original-title="Lesley Grauer">
												<img alt="Lesley Grauer" src="assets/img/profiles/avatar-05.jpg" class="img-fluid rounded-circle">
											</a>
										</div>
										<div class="activity-content">
											<div class="timeline-content">
												<a href="profile.html" class="name">Jeffery Lalor</a> added <a href="profile.html" class="name">Loren Gatlin</a> and <a href="profile.html" class="name">Tarah Shropshire</a> to project <a href="#">Crypto</a>
												<span class="time">6 mins ago</span>
											</div>
										</div>
										<a class="activity-delete" href="" title="Delete">×</a>
									</li>
									<li>
										<div class="activity-user">
											<a href="profile.html" title="" data-toggle="tooltip" class="avatar" data-original-title="Lesley Grauer">
												<img alt="Lesley Grauer" src="assets/img/profiles/avatar-07.jpg" class="img-fluid rounded-circle">
											</a>
										</div>
										<div class="activity-content">
											<div class="timeline-content">
												<div class="timeline-content">
													<a href="profile.html" class="name">Catherine Manseau</a> completed task <a href="#">Crypto coin sell with payment gateway</a>
													<span class="time">12 mins ago</span>
												</div>
											</div>
										</div>
										<a class="activity-delete" href="" title="Delete">×</a>
									</li>
								</ul>
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

	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<script src="assets/js/script.js"></script>
</body>

</html>