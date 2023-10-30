<?php 
	include_once("includes/system_header.php");
	include_once("includes/system_main_wraper.php");
?>

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
<a href="activities.html">
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
<a href="activities.html">
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
<a href="activities.html">
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
<a href="activities.html">
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
<a href="activities.html">
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
<a href="activities.html">View all Notifications</a>
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
<a class="dropdown-item" href="profile.html"><i data-feather="user" class="mr-1"></i> Profile</a>
<a class="dropdown-item" href="settings.html"><i data-feather="settings" class="mr-1"></i> Settings</a>
<a class="dropdown-item" href="login.html"><i data-feather="log-out" class="mr-1"></i> Logout</a>
</div>
</li>

</ul>
<div class="dropdown mobile-user-menu show">
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right ">
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="settings.html">Settings</a>
<a class="dropdown-item" href="login.html">Logout</a>
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
<a href="index.html"><img src="assets/img/home.svg" alt="sidebar_img"> <span>Dashboard</span></a>
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
<li class="active">
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
<li class="breadcrumb-item"><a href="index.html"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb">Home</a>
</li>
<li class="breadcrumb-item active"> Reports</li>
</ul>
<h3>Reports	</h3>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">
<ul>
<li><a href="report.html">Team Reports</a></li>
<li><a href="leave-report.html">Leave Reports</a></li>
<li><a href="payroll-report.html">Payroll Reports</a></li>
<li><a href="contact-report.html">Contact Reports</a></li>
<li><a href="email-report.html">Email Reports</a></li>
<li><a href="security-report.html">Security Reports</a></li>
<li><a class="active" href="#">W F H Reports</a></li>
</ul>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="form-set">
<div class="row">
<div class="col-xl-3 col-sm-6 col-12 ">
<div class="form-group">
<input type="text" placeholder="start Date">
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="form-group">
<input type="text" placeholder="From">
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 ">
<div class="form-group">
<input type="text" placeholder="To">
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 ">
<a class="btn btn-save">Apply Filter</a>
</div>
</div>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="table-responsive">
<table class="table  custom-table  no-footer">
<thead>
<tr>
<th>Team Member	</th>
<th>Email</th>
<th>Working From Home (This Year)</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="table-img">
<img src="assets/img/profiles/avatar-15.jpg" alt="profile" class="img-table"><label>Danny Ward</label>
</div>
</td>
<td><label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f397929d8a84928197b3968b929e839f96dd909c9e">[email&#160;protected]</a> </label></td>
<td><label>5</label></td>
</tr>
<tr>
<td>
<div class="table-img">
<img src="assets/img/profiles/avatar-16.jpg" alt="profile" class="img-table"><label>Graciella Relevo
</label>
</div>
</td>
<td><label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9cf0f5f2f8fdffeefdeaf9eedcf9e4fdf1ecf0f9b2fff3f1">[email&#160;protected]</a></label></td>
<td><label>3</label></td>
</tr>
<tr>
<td>
<div class="table-img">
<img src="assets/img/profiles/avatar-17.jpg" alt="profile" class="img-table"><label>Jenni Sims</label>
</div>
</td>
<td><label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97fdf2f9f9fee4fefae4d7f2eff6fae7fbf2b9f4f8fa">[email&#160;protected]</a></label></td>
<td><label>4</label></td>
</tr>
<tr>
<td>
<div class="table-img">
<img src="assets/img/profiles/avatar-14.jpg" alt="profile" class="img-table"><label>Maria Cottons	</label>
</div>
</td>
<td><label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="acc1cddec5cdcfc3d8d8c3c2ecc9d4cdc1dcc0c982cfc3c1">[email&#160;protected]</a></label></td>
<td><label>6</label></td>
</tr>
<tr>
<td>
<div class="table-img">
<img src="assets/img/profiles/avatar-18.jpg" alt="profile" class="img-table"><label>John Gibbs	</label>
</div>
</td>
<td><label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e2888d8a8c86909b9186838e87a2879a838f928e87cc818d8f">[email&#160;protected]</a></label></td>
<td><label>7</label></td>
</tr>
</tbody>
</table>
</div>
<div class="btn-set">
<a class="btn btn-dwnd mt-3 mb-3">Download Report</a>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>