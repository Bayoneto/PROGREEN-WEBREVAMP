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
<a href="index.html" class="logo">
<img src="assets/img/logo_0.png" alt="Logo">
</a>
<a href="index.html" class="logo logo-small">
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


<?php 
	include("includes/sidebar.php");
?>


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
<li><a class="active" href="#">Team Reports</a></li>
<li><a href="leave-report.html">Leave Reports</a></li>
<li><a href="payroll-report.html">Payroll Reports</a></li>
<li><a href="contact-report.html">Contact Reports</a></li>
<li><a href="email-report.html">Email Reports</a></li>
<li><a href="security-report.html">Security Reports</a></li>
<li><a href="wfh-report.html">W F H Reports</a></li>
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
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">
<ul>
<li><a class="active" href="#">Offical Reports</a></li>
<li><a href="personal-report.html">Personal Reports</a></li>
</ul>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12">
<div class="card">
<div class="table-responsive">
<table class="table  custom-table  no-footer">
<thead>
<tr>
<th>Reviewers</th>
<th>Active	</th>
<th>Employment</th>
<th>Email</th>
<th>Job Title	</th>
<th>Line Manager	</th>
<th>Team Name	</th>
<th>Start Date	</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="table-img">
<a href="profile.html"><img src="assets/img/profiles/avatar-10.jpg" alt="profile" class="img-table"></a>
<label>Danny Ward</label>
</div>
</td>
<td class="tab-select">
<select class="select">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</td>
<td>
<label>Permanent</label>
</td>
<td><label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1276737c6b6573607652776a737f627e773c717d7f">[email&#160;protected]</a> </label></td>
<td><label>Team Lead</label></td>
<td><label>Richard Wilson	</label></td>
<td><label>Designing</label></td>
<td>
<label>Designing</label>
</td>
</tr>
<tr>
<td>
<div class="table-img">
<a href="profile.html"><img src="assets/img/profiles/avatar-17.jpg" alt="profile" class="img-table"></a>
<label>Graciella Relevo
</label>
</div>
</td>
<td class="tab-select">
<select class="select">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</td>
<td>
<label>Permanent</label>
</td>
<td><label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="167a7f78727775647760736456736e777b667a733875797b">[email&#160;protected]</a></label></td>
<td><label>Team Lead</label></td>
<td><label>Richard Wilson	</label></td>
<td><label>Designing</label></td>
<td>
<label>Designing</label>
</td>
</tr>
<tr>
<td>
<div class="table-img">
<a href="profile.html"><img src="assets/img/profiles/avatar-19.jpg" alt="profile" class="img-table"></a>
<label>Jenni Sims</label>
</div>
</td>
<td class="tab-select">
<select class="select">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</td>
<td>
<label>Permanent</label>
</td>
<td><label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="18727d7676716b71756b587d60797568747d367b7775">[email&#160;protected]</a></label></td>
<td><label>Team Lead</label></td>
<td><label>Richard Wilson	</label></td>
<td><label>Designing</label></td>
<td>
<label>Designing</label>
</td>
</tr>
<tr>
<td>
<div class="table-img">
<a href="profile.html"><img src="assets/img/profiles/avatar-14.jpg" alt="profile" class="img-table"></a>
<label>Maria Cotton</label>
</div>
</td>
<td class="tab-select">
<select class="select">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</td>
<td>
<label>Permanent</label>
</td>
<td><label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bad7dbc8d3dbd9d5ceced5d4fadfc2dbd7cad6df94d9d5d7">[email&#160;protected]</a></label></td>
<td><label>Team Lead</label></td>
<td><label>Richard Wilson	</label></td>
<td><label>Designing</label></td>
<td>
<label>Designing</label>
</td>
</tr>
<tr>
<td>
<div class="table-img">
 <a href="profile.html"><img src="assets/img/profiles/avatar-18.jpg" alt="profile" class="img-table"></a>
<label>John Gibbs</label>
</div>
</td>
<td class="tab-select">
<select class="select">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</td>
<td>
<label>Permanent</label>
</td>
<td><label><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3c56535452584e454f585d50597c59445d514c5059125f5351">[email&#160;protected]</a></label></td>
<td><label>Team Lead</label></td>
<td><label>Richard Wilson	</label></td>
<td><label>Designing</label></td>
<td>
<label>Designing</label>
</td>
</tr>
</tbody>
</table>
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

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>