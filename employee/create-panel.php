<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Keeninsite-CRM</title>
<?php include_once("common/head.php");
include_once("php/config.php"); ?>
<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/plugins/summernote/summernote-lite.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<body>

<div class="main-wrapper">
<?php include_once("common/preloader.php"); ?>

<?php include_once("common/header.php") ?>


<?php include_once("common/sidebar.php") ?>

<div class="page-wrapper">
<div class="content">
<div class="row">
<div class="col-md-12">

<div class="page-header">
<div class="row align-items-center">
<div class="col-8">
<h4 class="page-title">Total Panel<span class="count-title">
	<?php
$sql_panel = "SELECT * FROM admin";
$result_panel = mysqli_query($conn, $sql_panel);
$total_panel = mysqli_num_rows($result_panel);
echo $total_panel;
	 ?>
</span></h4>
</div>
<div class="col-4 text-end">
<div class="head-icons">
<a href="contacts.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
</div>
</div>
</div>
</div>

<div class="card main-card">
<div class="card-body">

<div class="search-section">
<div class="row">
<div class="col-md-5 col-sm-4">
<div class="form-wrap icon-form">
<span class="form-icon"><i class="ti ti-search"></i></span>
<input type="text" class="form-control" id="live_search" placeholder="Search Panel">
</div>
</div>
<div class="col-md-7 col-sm-8">
<div class="export-list text-sm-end">
<ul>
<li>
<div class="export-dropdwon">
<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-package-export"></i>Export</a>
<div class="dropdown-menu  dropdown-menu-end">
<ul>
<li>
<a href="javascript:void(0);"><i class="ti ti-file-type-pdf text-danger"></i>Export as PDF</a>
</li>
<li>
<a href="javascript:void(0);"><i class="ti ti-file-type-xls text-green"></i>Export as Excel </a>
</li>
</ul>
</div>
</div>
</li>
<li>
<a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i>Create Panel</a>
</li>
</ul>
</div>
</div>
</div>
</div>




<div class="table-responsive custom-table">
<table class="table">
<thead class="thead-light">
<tr>
<th>Image</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>

<th>Location</th>


<th>Contact </th>
<th>Status</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody id="searchresult">
	<?php 
	$users_select = "SELECT * FROM admin";
	$re = mysqli_query($conn, $users_select);
	while ($user_row= mysqli_fetch_assoc($re)) {
	 	// code...
	
	?>
	<tr class="odd">
		
		
		<td>
			<a href="#" class="avatar"><img class="avatar-img" src="php/<?php echo $user_row["profile"] ?>" alt="User Image"></a>
</td>
<td><h2 class="table-avatar d-flex align-items-center">
			<a href="#" class="profile-split d-flex flex-column"><?php echo $user_row["name"] ?> <span><?php echo $user_row["job_title"] ?></span></a></h2>
		</td>
		<td><?php echo $user_row["phone"] ?></td>
		<td><?php echo $user_row["email"] ?></td>
		
		<td><?php echo $user_row["street"] ?> <?php echo $user_row["city"] ?> <?php echo $user_row["state"] ?></td>
		
		
		<td><ul class="social-links d-flex align-items-center"><li><a href="#"><i class="ti ti-mail"></i></a></li><li><a href="#"><i class="ti ti-phone-check"></i></a></li><li><a href="#"><i class="ti ti-message-circle-share"></i></a></li><li><a href="#"><i class="ti ti-brand-skype"></i></a></li><li><a href="#"><i class="ti ti-brand-facebook "></i></a></li></ul></td>
		<td><span class="badge badge-pill badge-status bg-success">Active</span></td>
		<td>
			<div class="dropdown table-action">
				<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
			<i class="fa fa-ellipsis-v"></i></a>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item edit-popup" 
data-bs-toggle="modal" 
data-bs-target="#edit-po"  
data-userid="<?php echo $user_row["id"] ?>"
data-name="<?php echo $user_row["name"] ?>"
data-lname="<?php echo $user_row["lname"] ?>"
data-username="<?php echo $user_row["username"] ?>"
data-password="<?php echo $user_row["password"] ?>"
data-email="<?php echo $user_row["email"] ?>"
data-skype="<?php echo $user_row["skype"] ?>"
data-phone="<?php echo $user_row["phone"] ?>"
data-bio="<?php echo $user_row["bio"] ?>"
data-role="<?php echo $user_row["role"] ?>"
data-jobtitle="<?php echo $user_row["job_title"] ?>"
data-phone2="<?php echo $user_row["phone2"] ?>"
data-fax="<?php echo $user_row["fax"] ?>"
data-team="<?php echo $user_row["team_leader"] ?>"
data-description="<?php echo $user_row["description"] ?>"
data-street="<?php echo $user_row["street"] ?>"
data-address="<?php echo $user_row["address"] ?>"
data-city="<?php echo $user_row["city"] ?>"
data-state="<?php echo $user_row["state"] ?>"
data-country="<?php echo $user_row["country"] ?>"
data-zipcode="<?php echo $user_row["zipcode"] ?>"
data-profile="<?php echo $user_row["profile"] ?>"
>
					<i class="ti ti-edit text-blue"></i> Edit</a>
					<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact" data-userid="<?php echo $user_row["id"] ?>" data-username="<?php echo $user_row["name"] ?>"><i class="ti ti-trash text-danger"></i> Delete</a>
					<a class="dropdown-item" href="contact-details.html"><i class="ti ti-eye text-blue-light"></i> Preview</a></div></div></td>
	</tr>
<?php }; ?>
</tbody>
</table>
</div>
<div class="row align-items-center">
<div class="col-md-6">
<div class="datatable-length"></div>
</div>
<div class="col-md-6">
<div class="datatable-paginate"></div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>


<div class="toggle-popup">
<div class="sidebar-layout">
<div class="sidebar-header">
<h4>Create New Panel</h4>
<a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
<div class="pro-create">
<form action="php/create-panel.php" method="POST" enctype="multipart/form-data">
<div class="accordion-lists" id="list-accord">

<div class="user-accordion-item">
<a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#basic"><span><i class="ti ti-user-plus"></i></span>Basic Info</a>
<div class="accordion-collapse collapse show" id="basic" data-bs-parent="#list-accord">
<div class="content-collapse">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<div class="profile-upload">
<div class="profile-upload-img">
<span><i class="ti ti-photo"></i></span>
<img src="assets/img/profiles/avatar-20.jpg" alt="img" class="preview1">
<button type="button" class="profile-remove">
<i class="ti ti-x"></i>
</button>
</div>
<div class="profile-upload-content">
<label class="profile-upload-btn">
<i class="ti ti-file-broken"></i> Upload File
<input type="file" class="input-img" name="fileToUpload">
</label>
<p>JPG, GIF or PNG. Max size of 800K</p>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">First Name <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="fname">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Last Name <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="lname">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">UserName <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="username">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Password <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="password" >
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Job Title <span class="text-danger">*</span></label>
<input type="text" class="form-control"name="job_title">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Fax <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="fax">
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<div class="d-flex justify-content-between align-items-center">
<label class="col-form-label">Email <span class="text-danger">*</span></label>
<div class="status-toggle small-toggle-btn d-flex align-items-center">
<span class="me-2 label-text">Email Opt Out</span>
<input type="checkbox" id="user" class="check" checked>
<label for="user" class="checktoggle"></label>
</div>
</div>
<input type="text" class="form-control" name="email">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Phone 1 <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="phone">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Phone 2</label>
<input type="text" class="form-control" name="phone1">
</div>
</div>


<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Date of Birth</label>
<div class="icon-form-end">
<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
<input type="text" class="form-control datetimepicker" name="dob">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-wrap">
<label class="col-form-label">Role/Position</label>
<select class="select" name="role">
<option>Choose</option>
<?php 
$sql = "SELECT * FROM role";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num>0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<option value=".$row["role_id"].">";
		echo $row["role_name"];
		echo "</option>";
	}
}
 ?>
</select>
</div>
</div>


<div class="col-md-12">
<div class="form-wrap mb-0">
<label class="col-form-label">Description <span class="text-danger">*</span></label>
<textarea class="form-control" rows="5" name="description"></textarea>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="user-accordion-item">
<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#address"><span><i class="ti ti-map-pin-cog"></i></span>Address Info</a>
<div class="accordion-collapse collapse" id="address" data-bs-parent="#list-accord">
<div class="content-collapse">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Street Address </label>
<input type="text" class="form-control" name="street">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">City </label>
<input type="text" class="form-control" name="city">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">State / Province </label>
<input type="text" class="form-control" name="state">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-wrap">
<label class="col-form-label">Country</label>
<select class="select" name="country">
<option>Choose</option>
<option value="India">India</option>
<option value="USA">USA</option>
<option value="France">France</option>
<option value="UK">UK</option>
<option value="UAE">UAE</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-0">
<label class="col-form-label">Zipcode </label>
<input type="text" class="form-control" name="zipcode">
</div>
</div>
</div>
</div>
</div>
</div>


<div class="user-accordion-item">
<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#social"><span><i class="ti ti-social"></i></span>Social Profile</a>
<div class="accordion-collapse collapse" id="social" data-bs-parent="#list-accord">
<div class="content-collapse">
<div class="row">
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Facebook</label>
<input type="text" class="form-control" name="facebook">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Skype </label>
<input type="text" class="form-control" name="skype">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Linkedin </label>
<input type="text" class="form-control" name="linkedin">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Twitter</label>
<input type="text" class="form-control" name="twitter">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-wrap">
<label class="col-form-label">Whatsapp</label>
<input type="text" class="form-control" name="whatsapp">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-0">
<label class="col-form-label">Instagram</label>
<input type="text" class="form-control" name="instagram">
</div>
</div>
</div>
</div>
</div>
</div>



</div>
<div class="submit-button text-end">
<a href="#" class="btn btn-light sidebar-close">Cancel</a>
<button type="submit" name="submit" class="btn btn-primary">Create</a>
</div>
</form>
</div>
</div>
</div>
</div>
<?php include_once("common/edit-panel.php") ?>


<div class="toggle-popup2">
<div class="sidebar-layout">
<div class="sidebar-header">
<h4>Add New Deals</h4>
<a href="#" class="sidebar-close2 toggle-btn"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
<form action="contacts.html" class="toggle-height">
<div class="pro-create">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Deal Name <span class="text-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<div class="d-flex align-items-center justify-content-between">
<label class="col-form-label">Pipeine <span class="text-danger">*</span></label>
</div>
<select class="select2">
<option>Choose</option>
<option>Sales</option>
<option>Marketing</option>
<option>Calls</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Status <span class="text-danger">*</span></label>
<select class="select2">
<option>Choose</option>
<option>Open</option>
<option>Lost</option>
<option>Won</option>
</select>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-wrap">
<label class="col-form-label">Deal Value<span class="text-danger"> *</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-wrap">
<label class="col-form-label">Currency <span class="text-danger">*</span></label>
<select class="select">
<option>Select</option>
<option>$</option>
<option>€</option>
</select>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-wrap">
<label class="col-form-label">Period <span class="text-danger">*</span></label>
<select class="select">
<option>Choose</option>
<option>Days</option>
<option>Month</option>
</select>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-wrap">
<label class="col-form-label">Period Value <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Contact <span class="text-danger">*</span></label>
<select class="multiple-img" multiple="multiple">
<option data-image="assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
</select>
</div>
<div class="form-wrap">
<label class="col-form-label">Project <span class="text-danger">*</span></label>
<select class="select" multiple="multiple">
<option selected>Devops Design</option>
<option selected>MargrateDesign</option>
<option selected>UI for Chat</option>
<option>Web Chat</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
<div class="icon-form">
<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
<input type="text" class="form-control datetimepicker" placeholder>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Expected Closing Date <span class="text-danger">*</span></label>
<div class="icon-form">
<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
<input type="text" class="form-control datetimepicker" placeholder>
</div>
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Assignee <span class="text-danger">*</span></label>
<select class="multiple-img" multiple="multiple">
<option data-image="assets/img/profiles/avatar-19.jpg">Darlee Robertson</option>
<option data-image="assets/img/profiles/avatar-20.jpg" selected>Sharon Roy</option>
<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Follow Up Date <span class="text-danger">*</span></label>
<div class="icon-form">
<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
<input type="text" class="form-control datetimepicker" placeholder>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Source <span class="text-danger">*</span></label>
<select class="select">
<option>Select</option>
<option>Google</option>
<option>Social Media</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Tags <span class="text-danger">*</span></label>
<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label" value="Collab, Rated">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Priority <span class="text-danger">*</span></label>
<select class="select">
<option>Select</option>
<option>Highy</option>
<option>Low</option>
<option>Medium</option>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="form-wrap">
<label class="col-form-label">Description <span class="text-danger">*</span></label>
<div class="summernote"></div>
</div>
</div>
</div>
<div class="submit-button text-end">
<a href="#" class="btn btn-light sidebar-close2">Cancel</a>
<button type="submit" name="submit" class="btn btn-primary">Create</button>
</div>
</div>
</form>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="delete_contact" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header border-0 m-0 justify-content-end">
<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
<i class="ti ti-x"></i>
</button>
</div>
<div class="modal-body">
<div class="success-message text-center">
<div class="success-popup-icon">
<i class="ti ti-trash-x"></i>
</div>
<h3>Remove Contacts?</h3>
<p class="del-info">Are you sure you want to remove contact you selected.</p>
<div class="col-lg-12 text-center modal-btn">
	<form action="php/panel_delete.php" method="POST">
	<input type="text" name="user_id" value="">


<input type="text" class="form-control" name="user_name" value="">
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<button type="submit" name="submit" class="btn btn-danger">Yes, Delete it</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="create_contact" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header border-0 m-0 justify-content-end">
<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
<i class="ti ti-x"></i>
</button>
</div>
<div class="modal-body">
<div class="success-message text-center">
<div class="success-popup-icon bg-light-blue">
<i class="ti ti-user-plus"></i>
</div>
<h3>Contact Created Successfully!!!</h3>
<p>View the details of contact, created</p>
<div class="col-lg-12 text-center modal-btn">
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<a href="contact-details.html" class="btn btn-primary">View Details</a>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="save_view" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add New View</h5>
<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
<i class="ti ti-x"></i>
</button>
</div>
<div class="modal-body">
<form action="contacts.html">
<div class="form-wrap">
<label class="col-form-label">View Name</label>
<input type="text" class="form-control">
</div>
<div class="modal-btn text-end">
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<button type="submit" class="btn btn-danger">Save</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="access_view" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Access For</h5>
<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
<i class="ti ti-x"></i>
</button>
</div>
<div class="modal-body">
<form action="contacts.html">
<div class="form-wrap icon-form">
<span class="form-icon"><i class="ti ti-search"></i></span>
<input type="text" class="form-control" placeholder="Search">
</div>
<div class="access-wrap">
<ul>
<li class="select-people-checkbox">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
<span class="people-profile">
<img src="assets/img/profiles/avatar-19.jpg" alt>
<a href="#">Darlee Robertson</a>
</span>
</label>
</li>
<li class="select-people-checkbox">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
<span class="people-profile">
<img src="assets/img/profiles/avatar-20.jpg" alt>
<a href="#">Sharon Roy</a>
</span>
</label>
</li>
<li class="select-people-checkbox">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
<span class="people-profile">
<img src="assets/img/profiles/avatar-21.jpg" alt>
<a href="#">Vaughan</a>
</span>
</label>
</li>
<li class="select-people-checkbox">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
<span class="people-profile">
<img src="assets/img/profiles/avatar-01.jpg" alt>
<a href="#">Jessica</a>
</span>
</label>
</li>
<li class="select-people-checkbox">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
<span class="people-profile">
<img src="assets/img/profiles/avatar-16.jpg" alt>
<a href="#">Carol Thomas</a>
</span>
</label>
</li>
<li class="select-people-checkbox">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
<span class="people-profile">
<img src="assets/img/profiles/avatar-22.jpg" alt>
<a href="#">Dawn Mercha</a>
</span>
</label>
</li>
</ul>
</div>
<div class="modal-btn text-end">
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<button type="submit" class="btn btn-primary">Confirm</button>
</div>
</form>
</div>
</div>
</div>
</div>

</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#live_search").keyup(function(){
			var input = $(this).val();
			// alert(input);
			if (input != "") {
				$.ajax({
					url:"php/panellist.php",
					method:"POST",
					data:{input:input},

					success:function(data){
						$("#searchresult").html(data);
					}
				})
			}else{
				$.ajax({
					url:"php/all_panellist.php",
					method:"POST",
					data:{input:input},

					success:function(data){
						$("#searchresult").html(data);
					}
				})
			}
		})
	})
</script>
<script type="text/javascript">
	$('#delete_contact').on('show.bs.modal', function(e) {
    var userid = $(e.relatedTarget).data('userid');
    $(e.currentTarget).find('input[name="user_id"]').val(userid);
});
</script>
<script type="text/javascript">
	$('#delete_contact').on('show.bs.modal', function(e) {
    var username = $(e.relatedTarget).data('username');
    $(e.currentTarget).find('input[name="user_name"]').val(username);
});
</script>

<script type="text/javascript">
	$('#edit-po').on('show.bs.modal', function(e) {
    var userid = $(e.relatedTarget).data('userid');
    $(e.currentTarget).find('input[name="user_id"]').val(userid);
});
</script>
<script type="text/javascript">
	$('#edit-po').on('show.bs.modal', function(e) {
    var name = $(e.relatedTarget).data('name');
     var lname = $(e.relatedTarget).data('lname');
    var username = $(e.relatedTarget).data('username');
    var password = $(e.relatedTarget).data('password');
    var email = $(e.relatedTarget).data('email');
    var skype = $(e.relatedTarget).data('skype');
    var phone = $(e.relatedTarget).data('phone');
    var bio = $(e.relatedTarget).data('bio');
    var role = $(e.relatedTarget).data('role');
    var jobtitle = $(e.relatedTarget).data('jobtitle');
    var phone2 = $(e.relatedTarget).data('phone2');
    var fax = $(e.relatedTarget).data('fax');
    var team = $(e.relatedTarget).data('team');
    var description = $(e.relatedTarget).data('description');
    var street = $(e.relatedTarget).data('street');
    var address = $(e.relatedTarget).data('address');
    var city = $(e.relatedTarget).data('city');
    var state = $(e.relatedTarget).data('state');
    var country = $(e.relatedTarget).data('country');
    var zipcode = $(e.relatedTarget).data('zipcode');
    var profile = $(e.relatedTarget).data('profile');

    $(e.currentTarget).find('input[name="name"]').val(name);
    $(e.currentTarget).find('input[name="lname"]').val(lname);
    $(e.currentTarget).find('input[name="username"]').val(username);
    $(e.currentTarget).find('input[name="password"]').val(password);
    $(e.currentTarget).find('input[name="email"]').val(email);
    $(e.currentTarget).find('input[name="skype"]').val(skype);
    $(e.currentTarget).find('input[name="phone"]').val(phone);
    $(e.currentTarget).find('input[name="bio"]').val(bio);
    $(e.currentTarget).find('input[name="role"]').val(role);
    $(e.currentTarget).find('input[name="jobtitle"]').val(jobtitle);
    $(e.currentTarget).find('input[name="phone2"]').val(phone2);
    $(e.currentTarget).find('input[name="fax"]').val(fax);
    $(e.currentTarget).find('input[name="team"]').val(team);
    $(e.currentTarget).find('textarea[name="description"]').val(description);
    $(e.currentTarget).find('input[name="street"]').val(street);
    $(e.currentTarget).find('input[name="address"]').val(address);
    $(e.currentTarget).find('input[name="city"]').val(city);
    $(e.currentTarget).find('input[name="state"]').val(state);
    $(e.currentTarget).find('div[class="country"]').val(country);
    $(e.currentTarget).find('input[name="zipcode"]').val(zipcode);
    $(e.currentTarget).find('input[name="profile"]').val(profile);
});
</script>

<script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>

<script src="assets/js/feather.min.js" type="text/javascript"></script>

<script src="assets/js/jquery.slimscroll.min.js" type="text/javascript"></script>

<script src="assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="assets/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>

<script src="assets/js/moment.min.js" type="text/javascript"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

<script src="assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>

<script src="assets/plugins/summernote/summernote-lite.min.js" type="text/javascript"></script>

<script src="assets/js/profile-upload.js" type="text/javascript"></script>

<script src="assets/js/jsonscript.js" type="text/javascript"></script>
</body>
</html>