<?php
session_start();
ob_start();

if (isset($_SESSION['name'])) {
  
 } else{
//   header("Location:login.php");
  echo "Session not set";
  echo "<script>";
  echo "window.location.href = 'login.php'";
  echo "</script>";
 }

 ?>
<?php

include_once("php/config.php");
		$ticket = $_GET['ticket'];
		$sql = "SELECT * FROM task WHERE task_ticket='$ticket'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Keeninsite | Add Client</title>
<?php include_once("common/head.php");
include_once("php/config.php");  ?>
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


<?php include_once("common/sidebar.php");
 ?>

<div class="page-wrapper">
<div class="content">
<div class="row">
<div class="col-md-12">

<div class="page-header">
<div class="row align-items-center">
<div class="col-sm-4">
<h4 class="page-title">Project Overview</h4>
</div>
<div class="col-sm-8 text-sm-end">
<div class="head-icons">
<a href="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="row">
<div class="col-md-12">

<div class="contact-head">
<div class="row align-items-center">
<div class="col-sm-6">
<ul class="contact-breadcrumb">
<li><a href=""><i class="ti ti-arrow-narrow-left"></i>Project</a></li>
<li><?=$row["title"]?></li>
</ul>
</div>
<div class="col-sm-6 text-sm-end">
<!-- <div class="contact-pagination">
<p>1 of 40</p>
<ul>
<li>
<a href=""><i class="ti ti-chevron-left"></i></a>
</li>
<li>
<a href=""><i class="ti ti-chevron-right"></i></a>
</li>
</ul>
</div> -->
</div>
</div>
</div>
<div class="contact-wrap">
<div class="contact-profile">
<!-- <div class="avatar company-avatar">
<img src="assets/img/priority/project-03.svg" alt="Image">
</div> -->
<div class="name-user">
<h5><?=$row["title"]?></h5>
<p>Project Id :<?=$row["task_ticket"]?></p>
<span class="priority badge badge-tag badge-danger-light"><i class="ti ti-square-rounded-filled"></i><?=$row["priority"]?></span>
<span class="badge badge-pill badge-status bg-success1"><?=$row["status"]?></span>
</div>
</div>
<div class="contacts-action">
<!-- <span class="badge badge-light"><i class="ti ti-lock"></i>Private</span> -->
<select class="form-control" name="status" id="change_status">
	<option id="change_status_option" value="<?=$row["status"]?>"><?=$row["status"]?></option>
	
	<option value="Active">Active</option>
	<option value="Revision Needed">Revision Needed</option>
	<option value="Working On It">Working On It</option>
	<option value="Pending">Pending</option>
	<option value="Close">Close</option>
	<option value="completed">Completed</option>
</select>
<input type="hidden" name="ticket" id="task_ticket" value="<?=$row["task_ticket"]?>">
</div>
</div>

</div>

<div class="col-xl-3 theiaStickySidebar">
<div class="contact-sidebar">
<h6>Project Information</h6>
<ul class="other-info">
<li><span class="other-title">Start Date</span><span><?=$row["start_date"]?> </span></li>
<li><span class="other-title">Due Date </span><span><?=$row["due_date"]?> </span></li>

<li><span class="other-title">Assign User</span><span><?php 
$tick = $row["task_ticket"];
$dql = "SELECT * FROM  assign_task where task_ticket='$tick'";
$redult = mysqli_query($conn, $dql);
while($emp = mysqli_fetch_assoc($redult)) {
	$dis= $emp["emp_id"];
	$empscl = "SELECT * FROM admin where id='$dis'";
	$emp_result = mysqli_query($conn, $empscl);
	$emp_name_row = mysqli_fetch_assoc($emp_result);
	echo  $emp_name_row["name"] . "<br/>";
}

 ?></span></li>
</ul>
<!-- <div class="con-sidebar-title">
<h6>Client</h6>
<a href="javascript:void(0);" class="com-add"><i class="ti ti-circle-plus me-1"></i>Add New</a>
</div> -->
<!-- <ul class="company-info com-info">
<li>
<span>
<img src="assets/img/icons/company-icon-08.svg" alt="Image">
</span>
<div>
<p>Harbor View</p>
</div>
</li>
</ul> -->
<div class="con-sidebar-title">
<h6>Responsible Persons</h6>
<a href="javascript:void(0);" class="com-add" data-bs-toggle="modal" data-bs-target="#access_view"><i class="ti ti-circle-plus me-1"></i>Add New</a>
</div>
<ul class="project-mem">

<?php 
$tick = $row["task_ticket"];
$dql = "SELECT * FROM  assign_task where task_ticket='$tick'";
$redult = mysqli_query($conn, $dql);
$total_emp_share = mysqli_num_rows($redult);
while($emp = mysqli_fetch_assoc($redult)) {
	$dis= $emp["emp_id"];
	$empscl = "SELECT * FROM admin where id='$dis'";
	$emp_result = mysqli_query($conn, $empscl);
	$emp_name_row = mysqli_fetch_assoc($emp_result);
	
	

 ?>


<li>
<a href="#">
<img src="php/<?php echo  $emp_name_row["profile"]; ?>" alt="img">
</a>
</li>
<?php }; ?>


<li class="more-set">
<a href="#"><?=$total_emp_share?></a>
</li>
</ul>

<div class="con-sidebar-title border-line">
<h6>Priority</h6>
<span class="priority badge badge-tag badge-danger-light"><i class="ti ti-square-rounded-filled"></i><?=$row["priority"]?></span>
</div>


</div>
</div>


<div class="col-xl-9">
	<div class="contact-tab-view">
		<?php 
		

		echo "<h3 class='pt-5 pb-5'>". $row["title"] . "</h3>";
		echo "<p>" . $row["description"] . "</h3>";
		?>
	</div>
<div class="contact-tab-view">
	<?php


		$sql1 = "SELECT * FROM task_comment WHERE task_ticket='$ticket'";
		$result1 = mysqli_query($conn, $sql1);
		while ($row1 = mysqli_fetch_assoc($result1)) { ?>
			<div class="comment-section">
		<p class="font20"><?=$row1["comment"]?></p>
		<p class="byuser"><?php 
		$id = $row1["task_user_id"]; 
		$sql2 = "SELECT * FROM admin where id='$id'";
		$result2 = mysqli_query($conn, $sql2);
		$rows2 = mysqli_fetch_array($result2);
		echo "By:<span class='username'> " . $rows2["name"] . "</span>"



	?> </p>
	</div>

		<?php
		}

		 ?>
		 <div class="pt-3 col-sm-12">
		 	<form action="php/add-comment.php" method="POST">
		 <textarea name="comment" style="width: 100%;height: 200px;"></textarea>
		 <input type="hidden" name="taskticket" value="<?=$ticket?>">
		 <button class="btn bg-danger" type="submit" name="submit">Submit</button>
		</form>
		 </div>

	</div>
</div>

</div>
</div>
</div>


<div class="modal custom-modal fade" id="delete_task" role="dialog">
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
<h3>Remove Task?</h3>
<p class="del-info">Task "Design description" from your Account</p>
<div class="col-lg-12 text-center modal-btn">
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<a href="" class="btn btn-danger">Yes, Delete it</a>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade modal-padding" id="add_notes" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add New Notes</h5>
<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body p-0">
<form action="">
<div class="form-wrap">
<label class="col-form-label">Title <span class="text-danger"> *</span></label>
<input class="form-control" type="text">
</div>
<div class="form-wrap">
<label class="col-form-label">Note <span class="text-danger"> *</span></label>
<textarea class="form-control" rows="4"></textarea>
</div>
<div class="form-wrap">
<label class="col-form-label">Attachment <span class="text-danger"> *</span></label>
<div class="drag-attach">
<input type="file">
<div class="img-upload">
<i class="ti ti-file-broken"></i>Upload File
</div>
</div>
</div>
<div class="form-wrap">
<label class="col-form-label">Uploaded Files</label>
<div class="upload-file">
<h6>Projectneonals teyys.xls</h6>
<p>4.25 MB</p>
<div class="progress">
<div class="progress-bar bg-success1" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p class="black-text">45%</p>
</div>
<div class="upload-file upload-list">
<div>
<h6>tes.txt</h6>
<p>4.25 MB</p>
</div>
<a href="javascript:void(0);" class="text-danger"><i class="ti ti-trash-x"></i></a>
</div>
</div>
<div class="col-lg-12 text-end modal-btn">
<a class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<button class="btn btn-primary" type="submit">Confirm</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade modal-padding" id="create_call" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Create Call Log</h5>
<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body p-0">
<form action="">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Status <span class="text-danger"> *</span></label>
<select class="select">
<option>Busy</option>
<option>Unavailable</option>
<option>No Answer</option>
<option>Wrong Number</option>
<option>Left Voice Message</option>
<option>Moving Forward</option>
</select>
</div>
<div class="form-wrap">
<label class="col-form-label">Follow Up Date <span class="text-danger"> *</span></label>
<div class="icon-form">
<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
<input type="text" class="form-control datetimepicker" placeholder>
</div>
</div>
<div class="form-wrap">
<label class="col-form-label">Note <span class="text-danger"> *</span></label>
<textarea class="form-control" rows="4" placeholder="Add text"></textarea>
</div>
<div class="form-wrap">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span> Create a followup task
</label>
</div>
<div class="text-end modal-btn">
<a class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<button class="btn btn-primary" type="submit">Confirm</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade custom-modal-two modal-padding" id="new_file" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Create New File</h5>
<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body p-0">
<div class="add-info-fieldset">
<div class="add-details-wizard">
<ul class="progress-bar-wizard">
<li class="active">
<span><i class="ti ti-file"></i></span>
<div class="multi-step-info">
<h6>Basic Info</h6>
</div>
</li>
<li>
<span><i class="ti ti-circle-plus"></i></span>
<div class="multi-step-info">
<h6>Add Recipient</h6>
</div>
</li>
</ul>
</div>
<fieldset id="first-field-file">
<form action="">
<div class="contact-input-set">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Choose Deal <span class="text-danger">*</span></label>
<select class="select">
<option>Select</option>
<option>Collins</option>
<option>Wisozk</option>
<option>Walter</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Document Type <span class="text-danger">*</span></label>
<select class="select">
<option>Select</option>
<option>Contract</option>
<option>Proposal</option>
<option>Quote</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Owner <span class="text-danger">*</span></label>
<select class="select">
<option>Select</option>
<option>Admin</option>
<option>Jackson Daniel</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Title <span class="text-danger"> *</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Locale <span class="text-danger">*</span></label>
<select class="select">
<option>Select</option>
<option>en</option>
<option>es</option>
<option>ru</option>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="signature-wrap">
<h4>Signature</h4>
<ul class="nav sign-item">
<li class="nav-item">
<span class=" mb-0" data-bs-toggle="tab" data-bs-target="#nosign">
<input type="radio" class="status-radio" id="sign1" name="email">
<label for="sign1"><span class="sign-title">No Signature</span>This document does not require a signature before acceptance.</label>
</span>
</li>
<li class="nav-item">
<span class="active mb-0" data-bs-toggle="tab" data-bs-target="#use-esign">
<input type="radio" class="status-radio" id="sign2" name="email" checked>
<label for="sign2"><span class="sign-title">Use e-signature</span>This document require e-signature before acceptance.</label>
</span>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane show active" id="use-esign">
<div class="input-block mb-0">
<label class="col-form-label">Document Signers <span class="text-danger">*</span></label>
</div>
<div class="sign-content">
<div class="row">
<div class="col-md-6">
<div class="form-wrap">
<input class="form-control" type="text" placeholder="Enter Name">
</div>
</div>
<div class="col-md-6">
<div class="d-flex align-items-center">
<div class="float-none form-wrap me-3 w-100">
<input class="form-control" type="text" placeholder="Email Address">
</div>
<div class="input-btn form-wrap">
<a href="javascript:void(0);" class="add-sign"><i class="ti ti-circle-plus"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="input-block mb-3">
<label class="col-form-label">Content <span class="text-danger"> *</span></label>
<textarea class="form-control" rows="3" placeholder="Add Content"></textarea>
</div>
</div>
<div class="col-lg-12 text-end form-wizard-button modal-btn">
<button class="btn btn-light" type="reset">Reset</button>
<button class="btn btn-primary wizard-next-btn" type="button">Next</button>
</div>
</div>
</div>
</form>
</fieldset>
<fieldset>
<form action="">
<div class="contact-input-set">
<div class="row">
<div class="col-lg-12">
<div class="signature-wrap">
<h4 class="mb-2">Send the document to following signers</h4>
<p>In order to send the document to the signers</p>
<div class="input-block mb-0">
<label class="col-form-label">Recipients (Additional recipients)</label>
</div>
<div class="sign-content">
<div class="row">
<div class="col-md-6">
<div class="form-wrap">
<input class="form-control" type="text" placeholder="Enter Name">
</div>
</div>
<div class="col-md-6">
<div class="d-flex align-items-center">
<div class="float-none form-wrap me-3 w-100">
<input class="form-control" type="text" placeholder="Email Address">
</div>
<div class="input-btn form-wrap">
<a href="javascript:void(0);" class="add-sign"><i class="ti ti-circle-plus"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-wrap">
<label class="col-form-label">Message Subject <span class="text-danger"> *</span></label>
<input class="form-control" type="text" placeholder="Enter Subject">
</div>
<div class="form-wrap">
<label class="col-form-label">Message Text <span class="text-danger"> *</span></label>
<textarea class="form-control" rows="3" placeholder="Your document is ready"></textarea>
</div>
<button class="btn btn-light mb-3">Send Now</button>
<div class="send-success">
<p><i class="ti ti-circle-check"></i> Document sent successfully to the selected recipients</p>
</div>
</div>
<div class="col-lg-12 text-end form-wizard-button modal-btn">
<button class="btn btn-light" type="reset">Cancel</button>
<button class="btn btn-primary" type="button" data-bs-dismiss="modal">Save & Next</button>
</div>
</div>
</div>
</form>
</fieldset>
</div>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="create_email" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Connect Account</h5>
<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body p-0">
<div class="form-wrap">
<label class="col-form-label">Account type <span class="text-danger"> *</span></label>
<select class="select">
<option>Gmail</option>
<option>Outlook</option>
<option>Imap</option>
</select>
</div>
<div class="form-wrap">
<h5 class="form-title">Sync emails from</h5>
<div class="sync-radio">
<div class="radio-item">
<input type="radio" class="status-radio" id="test1" name="radio-group" checked>
<label for="test1">Now</label>
</div>
<div class="radio-item">
<input type="radio" class="status-radio" id="test2" name="radio-group">
<label for="test2">1 Month Ago</label>
</div>
<div class="radio-item">
<input type="radio" class="status-radio" id="test3" name="radio-group">
<label for="test3">3 Month Ago</label>
</div>
<div class="radio-item">
<input type="radio" class="status-radio" id="test4" name="radio-group">
<label for="test4">6 Month Ago</label>
</div>
</div>
</div>
<div class="col-lg-12 text-end modal-btn">
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<button class="btn btn-primary" data-bs-target="#success_mail" data-bs-toggle="modal" data-bs-dismiss="modal">Connect Account</button>
</div>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="success_mail" role="dialog">
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
<i class="ti ti-mail-opened"></i>
</div>
<h3>Email Connected Successfully!!!</h3>
<p>Email Account is configured with “<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c4a1bca5a9b4a8a184a1bca5a9b4a8a1eaa7aba9">[email&#160;protected]</a>”. Now you can access email.</p>
<div class="col-lg-12 text-center modal-btn">
<a href="" class="btn btn-primary">Go to email</a>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="access_view" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Responsible Persons</h5>
<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
<i class="ti ti-x"></i>
</button>
</div>
<div class="modal-body">
<form action="">
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


<div class="modal custom-modal fade" id="add_compose" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Compose</h5>
<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
<i class="ti ti-x"></i>
</button>
</div>
<div class="modal-body p-0">
<form action="#">
<div class="form-wrap">
<input type="email" placeholder="To" class="form-control">
</div>
<div class="row">
<div class="col-md-6">
<div class="form-wrap">
<input type="email" placeholder="Cc" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<input type="email" placeholder="Bcc" class="form-control">
</div>
</div>
</div>
<div class="form-wrap">
<input type="text" placeholder="Subject" class="form-control">
</div>
<div class="form-wrap">
<div class="summernote"></div>
</div>
<div class="form-wrap">
<div class="text-center">
<button class="btn btn-primary"><span>Send</span><i class="fa-solid fa-paper-plane ms-1"></i></button>
<button class="btn btn-primary" type="button"><span>Draft</span> <i class="fa-regular fa-floppy-disk ms-1"></i></button>
<button class="btn btn-primary" type="button"><span>Delete</span> <i class="fa-regular fa-trash-can ms-1"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="toggle-popup">
<div class="sidebar-layout">
<div class="sidebar-header">
<h4>Add New Task</h4>
<a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
<div class="pro-create">
<form action="">
<div class="row">
<div class="col-md-12">
<div class="project-name">
<p>Project Name</p>
<h4><?=$row["title"] ?></h4>
</div>
<div class="form-wrap">
<label class="col-form-label">Task Name <span class="text-danger">*</span></label>
<input type="text" class="form-control">
</div>
<div class="form-wrap">
<label class="col-form-label">Category <span class="text-danger">*</span></label>
<select class="select2">
<option>Choose</option>
<option>Sales</option>
<option>Marketing</option>
<option>Calls</option>
</select>
</div>
<div class="form-wrap">
<label class="col-form-label">Total Hours</label>
<input type="text" class="form-control">
</div>
<div class="form-wrap">
<label class="col-form-label">Responsible Persons <span class="text-danger">*</span></label>
<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label" value="Darlee Robertson">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
<div class="icon-form">
<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
<input type="text" class="form-control datetimepicker" value="29-02-2020">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
<div class="icon-form">
<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
<input type="text" class="form-control datetimepicker" value="29-02-2020">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Priority <span class="text-danger">*</span></label>
<div class="select-priority">
<span class="select-icon"><i class="ti ti-square-rounded-filled"></i></span>
<select class="select">
<option>Select</option>
<option>High</option>
<option>Low</option>
<option>Medium</option>
</select>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Status <span class="text-danger">*</span></label>
<select class="select2">
<option>Choose</option>
<option>Active</option>
<option>Inactive</option>
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
<a href="#" class="btn btn-light sidebar-close">Cancel</a>
<button type="submit" class="btn btn-primary">Create</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="toggle-popup1">
<div class="sidebar-layout">
<div class="sidebar-header">
<h4>Edit Task</h4>
<a href="#" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
<div class="pro-create">
<form action="">
<div class="row">
<div class="col-md-12">
<div class="project-name">
<p>Project Name</p>
<h4><?=$row["title"]?></h4>
</div>
<div class="form-wrap">
<label class="col-form-label">Task Name <span class="text-danger">*</span></label>
<input type="text" class="form-control" value="New Task">
</div>
<div class="form-wrap">
<label class="col-form-label">Category <span class="text-danger">*</span></label>
<select class="select2">
<option>Choose</option>
<option>Mobile App</option>
<option>Meeting</option>
</select>
</div>
<div class="form-wrap">
<label class="col-form-label">Total Hours</label>
<input type="text" class="form-control" value="65">
</div>
<div class="form-wrap">
<label class="col-form-label">Responsible Persons <span class="text-danger">*</span></label>
<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label" value="Darlee Robertson">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
<div class="icon-form">
<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
<input type="text" class="form-control datetimepicker" value="29-02-2020">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
<div class="icon-form">
<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
<input type="text" class="form-control datetimepicker" value="29-02-2020">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Priority <span class="text-danger">*</span></label>
<div class="select-priority">
<span class="select-icon"><i class="ti ti-square-rounded-filled"></i></span>
<select class="select">
<option>Select</option>
<option selected>High</option>
<option>Low</option>
<option>Medium</option>
</select>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Status <span class="text-danger">*</span></label>
<select class="select2">
<option>Choose</option>
<option selected>Active</option>
<option>Inactive</option>
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
<a href="#" class="btn btn-light sidebar-close1">Cancel</a>
<button type="submit" class="btn btn-primary">Create</button>
</div>
</form>
</div>
</div>
</div>
</div>

</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#change_status").on('change', function(){
			var input = $('#change_status').val();
			var ticket = $('#task_ticket').val();
			 
			if (input != "") {
				$.ajax({
					url:"php/change_status.php",
					method:"POST",
					data:{input:input,ticket:ticket},

					success:function(data){
						$("#change_status_option").html(data);
					}
				})
			}
		})
	})
</script>

<script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>

<script src="assets/js/feather.min.js" type="text/javascript"></script>

<script src="assets/js/jquery.slimscroll.min.js" type="text/javascript"></script>

<script src="assets/js/moment.min.js" type="text/javascript"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

<script src="assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>

<script src="assets/plugins/summernote/summernote-lite.min.js" type="text/javascript"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="text/javascript"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="text/javascript"></script>
</body>
</html>