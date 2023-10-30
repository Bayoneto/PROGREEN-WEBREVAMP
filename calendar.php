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

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.min.css">

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


<div class="page-wrapper calendar_page">
<div class="content container-fluid">

<div class="row">
<div class="col-xl-12 col-sm-12 col-12  mb-4">
<div class="breadcrumb-path">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb">Home</a>
</li>
<li class="breadcrumb-item active"> Calendar</li>
</ul>
<h3>Calendar</h3>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-3 col-md-4">
<div class="card">
<div class="card-body">
<h2 class="calendar_head">Calendar</h2>
</div>
<div class="calendar_events">
<h4 class="card-title">Drag and drop your event or click in the calendar</h4>
<div id="calendar-events" class="mb-3">
<div class="calendar-events" data-class="bg-info"><i class="fas fa-square bg-primary"></i> New Theme Release</div>
<div class="calendar-events" data-class="bg-success"><i class="fas fa-square bg-success"></i>My Event</div>
<div class="calendar-events" data-class="bg-danger"><i class="fas fa-square bg-warning"></i> Meet Manager</div>
<div class="calendar-events" data-class="bg-warning"><i class="fas fa-square bg-secondary"></i> Create New theme</div>
</div>
<div class="checkbox  mb-3">
<input id="drop-remove" type="checkbox">
<label for="drop-remove">
Remove after drop
</label>
</div>
<a href="#" data-toggle="modal" data-target="#add_new_event" class="btn mb-3 btn-primary btn-block">
<i class="fas fa-plus"></i> Create New
</a>
</div>
</div>
</div>
<div class="col-lg-9 col-md-8">
<div class="card bg-white">
<div class="card-body">
<div id="calendar"></div>
</div>
</div>
 </div>
</div>

<div class="customize_popup">
<div class="modal fade" id="add_event" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelevent" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="staticBackdropLabelevent">Add New Event</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class=" col-md-12 p-0">
<div class=" form-popup">
<label>Event Name</label>
<input type="text" placeholder="Insert Event Name">
</div>
<div class=" form-popup">
<label>Category Color</label>
<select name="Danger">
<option value="Danger">Danger</option>
<option value="Success">Success</option>
<option value="Warning">Warning</option>
</select>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-apply">Apply</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>
</div>


<div class="customize_popup">
<div class="modal fade" id="my_event" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabeladd" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="staticBackdropLabeladd">Add New Event</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class=" col-md-12 p-0">
<div class=" form-popup">
<label>Event Name</label>
<input type="text" placeholder="Insert Event Name">
</div>
<div class=" form-popup">
<label>Category Color</label>
<select name="Danger">
<option value="Danger">Danger</option>
<option value="Success">Success</option>
<option value="Warning">Warning</option>
</select>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-apply">Apply</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>
</div>


<div class="customize_popup">
<div class="modal fade" id="add_new_event" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="staticBackdropLabel">Add a category</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class=" col-md-12 p-0">
<div class=" form-popup">
<label>Category Name</label>
<input type="text" placeholder="Enter Name">
</div>
<div class=" form-popup">
<label>Choose Category Color</label>
<select name="Success">
<option value="Success">Success</option>
<option value="Cancel">Danger</option>
<option value="Cancel">Warning</option>
</select>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-apply">Apply</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/plugins/fullcalendar/jquery.fullcalendar.js"></script>
<script src="js/activePage.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>