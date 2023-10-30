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
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="breadcrumb-path ">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb">Home</a>
</li>
<li class="breadcrumb-item active"> Reviews</li>
</ul>
<h3>Reviews</h3>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 mb-4">
<div class="head-link-set">
<ul>
<li><a class="active" href="#">Overview</a></li>
<li><a href="review-type.html">Review Types</a></li>
</ul>
<a class="btn-add" href="add-Review.html">Create Review</a>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Leave Details</h2>
</div>
<div class="table-responsive">
<table class="table  custom-table  no-footer">
<thead>
<tr>
<th>Review Name	</th>
<th>Reviewers	</th>
<th>Begin On	</th>
<th>Due By	</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<label>Monthly Review	</label>
</td>
<td>
<div class="table-img">
<a href="profile.html"><img src="assets/img/profiles/avatar-13.jpg" alt="profile" class="img-table"></a>
<label>Arvin Villaluna
</label>
</div>
</td>
<td>
<label>05 Dec 2019 </label>
</td>
<td><label>07 Dec 2019	</label></td>
<td class="tab-select">
<select class="select">
<option value="active">Completed</option>
<option value="inactive">In Progress</option>
</select>
</td>
<td>
<div class="actionset">
<label><a class="action_label5" href="add-Review.html">Edit <i data-feather="edit"></i></a></label>
<label><a class="action_label4" data-toggle="modal" data-target="#delete">Delete <i data-feather="trash-2"></i></a></label>
</div>
</td>
</tr>
<tr>
<td>
<label>Employees Review	</label>
</td>
<td>
<div class="table-img">
<a href="profile.html"><img src="assets/img/profiles/avatar-16.jpg" alt="profile" class="img-table"></a>
<label>Graciella Relevo
</label>
</div>
</td>
<td>
<label>05 Dec 2019 </label>
</td>
<td><label>07 Dec 2019	</label></td>
<td class="tab-select inactive">
<select class="select">
<option value="active">In Progress</option>
<option value="inactive">Completed</option>
</select>
</td>
<td>
<div class="actionset">
<label><a class="action_label5" href="add-Review.html">Edit <i data-feather="edit"></i></a></label>
<label><a class="action_label4" data-toggle="modal" data-target="#delete">Delete <i data-feather="trash-2"></i></a></label>
</div>
</td>
</tr>
<tr>
<td>
<label>Employees Review	</label>
</td>
<td>
<div class="table-img">
<a href="profile.html"><img src="assets/img/profiles/avatar-17.jpg" alt="profile" class="img-table"></a>
<label>Jenni Sims</label>
</div>
</td>
<td>
<label>05 Dec 2019 </label>
</td>
<td><label>07 Dec 2019	</label></td>
<td class="tab-select">
<select class="select">
<option value="active">Completed</option>
<option value="inactive">In Progress</option>
</select>
</td>
<td>
<div class="actionset">
<label><a class="action_label5" href="add-Review.html">Edit <i data-feather="edit"></i></a></label>
<label><a class="action_label4" data-toggle="modal" data-target="#delete">Delete <i data-feather="trash-2"></i></a></label>
</div>
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

<div class="customize_popup">
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="staticBackdropLabels1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header text-centers border-0">
<h5 class="modal-title text-center" id="staticBackdropLabels1">Are You Sure Want to Delete?</h5>
</div>
<div class="modal-footer text-centers">
<button type="button" class="btn btn-primary">Delete</button>
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

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>