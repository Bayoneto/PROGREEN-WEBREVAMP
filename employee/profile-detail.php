<?php
include("database/dbcon.php");
	include_once("includes/system_header.php");
	include_once("includes/system_main_wraper.php");
	include_once("includes/system_navbar.php");
// Assuming you have a database connection, fetch image data from the database
$sql = "SELECT ProfilePicture FROM UserProfile WHERE UserID = ?"; // Replace with your actual query
$stmt = $con->prepare($sql);

// Assuming you have a valid user ID stored in the session
$userID = $_SESSION['user_id']; // Replace with your actual session variable

$stmt->bind_param("i", $userID);
$stmt->execute();
$result = $stmt->get_result();

// Check if a row is returned
if ($row = $result->fetch_assoc()) {
		$imageData = $row['ProfilePicture'];
		$_SESSION['imageData'] = $imageData; // Store the image data in the session for future use
} else {
		// Display a default image if no image is available
		$imageData = null;
}
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
								<a href="index-employee.php"><img src="assets/img/home.svg" alt="sidebar_img"> <span>Dashboard</span></a>
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
								<a href="profile.php"><img src="assets/img/profile.svg" alt="sidebar_img"> <span>Profile</span></a>
							</li>
						</ul>
						<ul class="logout">
							<li>
								<a href="../login.php"><img src="assets/img/logout.svg" alt="sidebar_img"><span>Log out</span></a>
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
								<li><a class="active" href="#">Detail</a></li>
								<li><a href="profile-document.php">Document</a></li>
								<li><a href="profile-payroll.php">Payroll</a></li>
								<li><a href="profile-timeoff.php">Timeoff</a></li>
								<li><a href="profile-review.php">Reviews</a></li>
								<li><a href="profile-setting.php">Settings</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 col-12 ">
						<div class="row">
							<div class="col-xl-4 col-sm-12 col-12 d-flex">
								<div class="card card-lists flex-fill">
									<div class="card-header">
										<h2 class="card-titles">Basic Information</h2>
										<ul>
											<li><a class="add-link" data-toggle="modal" data-target="#editinformation"><i data-feather="plus"></i></a></li>
											<li><a class="delete-link" data-toggle="modal" data-target="#delete"><i data-feather="trash-2"></i></a></li>
										</ul>
									</div>
									<div class="card-body">
										<div class="member-info">
											<ul>
												<li>
													<label>Preferred Name </label>
													<span><?php echo $_SESSION['user_preferredName'] ?></span>
												</li>
												<li>
													<label>First Name </label>
													<span><?php echo $_SESSION['user_firstname'] ?></span>
												</li>
												<li>
													<label>Last Name </label>
													<span><?php echo $_SESSION['user_lastname'] ?></span>
												</li>
												<li>
													<label>Nationality </label>
													<span><?php echo $_SESSION['nationality'] ?></span>
												</li>
												<li>
													<label>Date of Birth </label>
													<span><?php echo $_SESSION['dateOfBirth'] ?></span>
												</li>
												<li>
													<label>Gender </label>
													<span><?php echo $_SESSION['gender']  ?></span>
												</li>
												<li>
													<label>Blood Group</label>
													<span><?php echo $_SESSION['bloodgroup'] ?></span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-12 col-12 d-flex">
								<div class="card card-lists flex-fill">
									<div class="card-header">
										<h2 class="card-titles">Basic Information</h2>
										<ul>
											<li><a class="add-link" data-toggle="modal" data-target="#editinformations"><i data-feather="plus"></i></a></li>
											<li><a class="delete-link" data-toggle="modal" data-target="#delete"><i data-feather="trash-2"></i></a></li>
										</ul>
									</div>
									<div class="card-body">
										<div class="member-info">
											<ul>
												<li>
													<label>Phone Number </label>
													<span><?php echo $_SESSION['phoneNumber'] ?></span>
												</li>
												<li>
													<label>Personal Email</label>
													<span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7815190a11191b170c0c1716381d00191508141d561b1715">[email&#160;protected]</a></span>
												</li>
												<li>
													<label>Secondary Number </label>
													<span><?php echo $_SESSION['secondaryNumber'] ?></span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-12 col-12 ">
							<form id="uploadForm" action="upload.php" onsubmit="validateForm(event)" method="post" enctype="multipart/form-data">
    <div class="card card-lists flex-fill">
        <div id="alertContainer"></div> <!-- Container for the alert -->
        <div class="card-header">
            <h2 class="card-titles">Profile Picture</h2>
						<button type="submit" class="btn my-3 btn-primary w-50">Upload</button>
            <!-- Use a button type "button" instead of "submit" to allow custom validation -->
        </div>
        <div class="card-body">
            <div class="company-logo" style="position: relative;">
                <label class="logo-upload" for="edit_img">
                    <input type="file" name="edit_img" id="edit_img" onchange="previewImage(this)" />
                    <a style="position: absolute; top: 0; left: 0;"><i data-feather="edit"></i></a>
                </label>
                <div id="imagePreview">
                    <?php
                    // Display the image if available
                    if (isset($imageData)) {
                        echo '<img style="max-width: 100%; max-height: 200px;" src="data:image/jpeg;base64,' . base64_encode($imageData) . '" alt="profile_picture" />';
                    } else {
                        // Display a default image if no image is available
                        echo '<img style="max-width: 100%; max-height: 200px;" src="img/default_profile_picture.png" alt="default_profile_picture" />';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    function previewImage(input) {
        var preview = document.getElementById('imagePreview');
        var file = input.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.innerHTML = '<img style="max-width: 100%; max-height: 200px;" src="' + reader.result + '" alt="preview_image" />';
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.innerHTML = '';
        }
    }

    function removeAlert() {
        document.getElementById('alertContainer').innerHTML = '';  // Clear the content of the alert container
    }

    function validateForm(event) {
        event.preventDefault();  // Prevent the default form submission behavior

        var fileInput = document.getElementById('edit_img');
        if (fileInput.files.length === 0) {
            // If no file is selected, display a Bootstrap danger alert above the card header
            var alertHtml = '<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
                'Please select a file for upload.' +
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                '<span aria-hidden="true">&times;</span>' +
                '</button>' +
                '</div>';
            document.getElementById('alertContainer').innerHTML = alertHtml;

            // Remove the alert after 5 seconds
            setTimeout(removeAlert, 5000);
        } else {
            // If a file is selected, submit the form
            var formData = new FormData(document.getElementById('uploadForm'));

            fetch('upload.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // If upload is successful, display a Bootstrap success alert
                        var successAlertHtml = '<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                            'Upload successful!' +
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                            '<span aria-hidden="true">&times;</span>' +
                            '</button>' +
                            '</div>';
                        document.getElementById('alertContainer').innerHTML = successAlertHtml;

                        setTimeout(removeAlert, 3000);
                    } else {
                        // If upload is unsuccessful, display a Bootstrap danger alert
                        var dangerAlertHtml = '<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
                            'Upload failed. Please try again.' +
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                            '<span aria-hidden="true">&times;</span>' +
                            '</button>' +
                            '</div>';
                        document.getElementById('alertContainer').innerHTML = dangerAlertHtml;

                        setTimeout(removeAlert, 3000);
                    }
                });
        }
    }
</script>




									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="customize_popup">
			<div class="modal fade" id="editinformation" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel">Basic Information</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class=" col-md-12 p-0">
								<div class=" form-popup">
									<input type="text" placeholder="Add Preferred Name">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="First Name">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="Last Name">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="Add Nationality">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="Add Date of Birth">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="Add Gender">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="Add Blood Group">
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

		<div class="customize_popup">
			<div class="modal fade" id="editinformations" tabindex="-1" aria-labelledby="staticBackdropLabels" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabels">Add Contact</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class=" col-md-12 p-0">
								<div class=" form-popup">
									<input type="text" placeholder="Add Phone Number">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="Login Email">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="Add Personal Email">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="Add Secondary Phone Number">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="Add Web Site">
								</div>
								<div class=" form-popup">
									<input type="text" placeholder="Connect Your Linkedin">
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


	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script src="assets/js/feather.min.js"></script>

	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script src="assets/js/script.js"></script>
</body>

</html>