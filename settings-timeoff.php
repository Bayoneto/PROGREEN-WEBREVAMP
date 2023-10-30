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
<li>
<a href="report.html"><img src="assets/img/report.svg" alt="sidebar_img"><span>Report</span></a>
</li>
<li>
<a href="manage.html"><img src="assets/img/manage.svg" alt="sidebar_img"> <span>Manage</span></a>
</li>
<li class="active">
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
<div class="col-xl-12 col-sm-12 col-12">
<div class="breadcrumb-path mb-4">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb" />Home</a>
</li>
<li class="breadcrumb-item active"> Settings</li>
</ul>
<h3>Settings</h3>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">
<ul>
<li><a href="settings.html">General</a></li>
<li><a class="active" href="#">Time Off</a></li>
</ul>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="row">
<div class="col-xl-6 col-sm-12 col-12  d-flex">
<div class="card card-lists flex-fill">
<div class="card-header ">
<h2 class="card-titles">Company Default</h2>
<a data-toggle="modal" data-target="#add_company" class="edit-link"> <i data-feather="edit"></i></a>
</div>
<div class="card-body">
<div class="default-set">
<ul>
<li><label>Allowance</label></li>
<li><span>25 Days</span></li>
<li><label>Year Start</label></li>
<li><span>01 January</span></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 d-flex">
<div class="card card-lists flex-fill">
<div class="card-header ">
<h2 class="card-titles">Working Week<span>Set the dates that your company works.</span></h2>
<a data-toggle="modal" data-target="#edit_working" class="edit-link"> <i data-feather="edit"></i></a>
</div>
<div class="card-body">
<div class="form-week">
<ul>
<li><a class="active">Mon</a></li>
<li><a class="active">Tue</a></li>
<li><a class="active">Wed</a></li>
<li><a class="active">Thur</a></li>
<li><a class="active">Fri</a></li>
<li><a class="inactive">Sat</a></li>
<li><a class="inactive">Sun</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="row">
<div class="col-xl-6 col-sm-12 col-12 d-flex">
<div class="card card-lists flex-fill">
<div class="card-header ">
<h2 class="card-titles">Working From Home<span>Reflect your company's working from home policy by editing the approval process or disabling the feature entirely.</span></h2>
</div>
<div class="card-body">
<div class="working-set">
<span>25 Days</span>
<label class="switch">
<input type="checkbox" checked>
<span class="slider"></span>
</label>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-sm-12 col-12 d-flex">
<div class="card card-lists flex-fill">
<div class="card-header ">
<h2 class="card-titles">Focus Technologies</h2>
</div>
<div class="card-body p-0">
<div class="table-responsive">
<table class="table  custom-table  no-footer">
<thead>
<tr>
<th>Team Member	</th>
<th>Allowance</th>
<th>Days Used</th>
<th>Approvers</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="table-img">
<img src="assets/img/profiles/avatar-15.jpg" class="img-table" alt="profile"><label>Danny Ward</label>
</div>
</td>
<td><label>25</label></td>
<td><label>20 </label></td>
<td><label>Robert Wilson</label></td>
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
</div>
</div>


<div class="customize_popup">
<div class="modal fade" id="add_company" tabindex="-1" aria-labelledby="staticBackdropLabeladd" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="staticBackdropLabeladd">Company Default</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class=" col-md-12 p-0">
<div class=" form-popup">
<label>Time Off Allowance</label>
<input type="text" placeholder="" value="25 days">
</div>
<div class=" form-popup">
<label>Year Start</label>
<input type="text" placeholder="" value="01-01-2021">
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-add">Apply</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>
</div>


<div class="customize_popup">
<div class="modal fade" id="edit_working" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="staticBackdropLabel">Edit Working Week</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class=" col-md-12 p-0">
<div class="checkworking">
<ul>
<li>
<input type="checkbox" id="mon" checked>
<label for="mon">Mon</label>
</li>
<li>
<input type="checkbox" id="tue" checked>
<label for="tue">Tue</label>
</li>
<li>
<input type="checkbox" id="wed" checked>
<label for="wed">Wed</label>
</li>
<li>
<input type="checkbox" id="thur" checked>
<label for="thur">Thur</label>
</li>
<li>
<input type="checkbox" id="fri" checked>
<label for="fri">Fri</label>
</li>
<li>
<input type="checkbox" id="sat">
<label for="sat">Sat</label>
</li>
<li>
<input type="checkbox" id="sun">
<label for="sun">Sun</label>
</li>
</ul>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-add">Add</button>
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