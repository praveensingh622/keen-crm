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
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Keeninsite-CRM</title>
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/summernote/summernote-lite.min.css">

<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<?php include_once("common/head.php") ?>
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
<div class="col-4">

</div>
<div class="col-8 text-end">
<div class="head-icons">
<a href="tasks.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh">
<i class="ti ti-refresh-dot"></i>
</a>
<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
<i class="ti ti-chevrons-up"></i>
</a>
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
<input type="text" class="form-control" placeholder="Search Task">
</div>
</div>
<div class="col-md-7 col-sm-8">
<div class="export-list text-sm-end">
<ul>
<li>
<a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i>Add New Task</a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="filter-section">
<div class="row align-items-center">
<div class="col-md-4">
<div class="sortby-list">
<ul>
<li>
<div class="sort-dropdown drop-down task-drops">
<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown">All Tasks </a>
<div class="dropdown-menu  dropdown-menu-start">
<ul>
<li>
<a href="tasks.html">
<i class="ti ti-dots-vertical"></i>All Tasks
</a>
</li>
<li>
<a href="tasks-important.html">
<i class="ti ti-dots-vertical"></i>Important
</a>
</li>
<li>
<a href="tasks-completed.html">
<i class="ti ti-dots-vertical"></i>Completed
</a>
</li>
</ul>
</div>
</div>
</li>
</ul>
</div>
</div>
<div class="col-md-8">
<div class="filter-list">
<ul class="justify-content-md-end">
<li class="all-read">
<label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span>Mark all as read</label>
</li>
<li>
<div class="sort-dropdown drop-down">
<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-sort-ascending-2"></i>Sort </a>
<div class="dropdown-menu  dropdown-menu-start">
<ul>
<li>
<a href="javascript:void(0);">
<i class="ti ti-dots-vertical"></i>Ascending
</a>
</li>
<li>
<a href="javascript:void(0);">
<i class="ti ti-dots-vertical"></i>Descending
</a>
</li>
<li>
<a href="javascript:void(0);">
<i class="ti ti-dots-vertical"></i>Recently Viewed
</a>
</li>
<li>
<a href="javascript:void(0);">
<i class="ti ti-dots-vertical"></i>Recently Added
</a>
</li>
</ul>
</div>
</div>
</li>
<li>
<div class="form-wrap icon-form mb-0">
<span class="form-icon"><i class="ti ti-calendar"></i></span>
<input type="text" class="form-control bookingrange" placeholder>
</div>
</li>
<li>
<div class="form-sorts dropdown">
<a href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="false"><i class="ti ti-filter-share"></i>Filter</a>
<div class="filter-dropdown-menu dropdown-menu  dropdown-menu-md-end">
<div class="filter-set-view">
<div class="filter-set-head">
<h4><i class="ti ti-filter-share"></i>Filter</h4>
</div>
<div class="accordion" id="accordionExample">
<div class="filter-set-content">
<div class="filter-set-content-head">
<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Task Name</a>
</div>
<div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
<div class="filter-content-list">
<div class="form-wrap icon-form">
<span class="form-icon"><i class="ti ti-search"></i></span>
<input type="text" class="form-control" placeholder="Search Task">
</div>
<ul>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox" checked>
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>Add a form to Update Task</h5>
</div>
</li>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>Add a form to Update Task</h5>
</div>
</li>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>Update orginal content</h5>
</div>
</li>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>Use only component colours</h5>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="filter-set-content">
<div class="filter-set-content-head">
<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner"> Task Type</a>
</div>
<div class="filter-set-contents accordion-collapse collapse" id="owner" data-bs-parent="#accordionExample">
<div class="filter-content-list">
<ul>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox" checked>
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>Meeting</h5>
</div>
</li>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>Calls</h5>
</div>
</li>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>Task</h5>
</div>
</li>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>Email</h5>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="filter-set-content">
<div class="filter-set-content-head">
<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapsestatus" aria-expanded="false" aria-controls="collapsestatus">Tags</a>
</div>
<div class="filter-set-contents accordion-collapse collapse" id="collapsestatus" data-bs-parent="#accordionExample">
<div class="filter-content-list">
<ul>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox" checked>
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>Collab</h5>
</div>
</li>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>Rated</h5>
</div>
</li>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>Promotion</h5>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="filter-set-content">
<div class="filter-set-content-head">
<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#Status" aria-expanded="false" aria-controls="Status">Created Date</a>
</div>
<div class="filter-set-contents accordion-collapse collapse" id="Status" data-bs-parent="#accordionExample">
<div class="filter-content-list">
<div class="form-wrap icon-form">
<span class="form-icon"><i class="ti ti-search"></i></span>
<input type="text" class="form-control" placeholder="Search Date">
</div>
<ul>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox" checked>
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>23 Oct 2023 </h5>
</div>
</li>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>29 Sep 2023</h5>
</div>
</li>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>24 Oct 2023 </h5>
</div>
</li>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>25 Oct 2023 </h5>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="filter-set-content">
<div class="filter-set-content-head">
<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Created By</a>
</div>
<div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
<div class="filter-content-list">
<ul>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox" checked>
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>Hendry</h5>
</div>
</li>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>Monty Beer</h5>
</div>
</li>
<li>
<div class="filter-checks">
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</div>
<div class="collapse-inside-text">
<h5>Bradtke</h5>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="filter-reset-btns">
<div class="row">
<div class="col-6">
<a href="#" class="btn btn-light">Reset</a>
</div>
<div class="col-6">
<a href="tasks.html" class="btn btn-primary">Filter</a>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="task-wrapper">
<a href="#" class="task-accordion" data-bs-toggle="collapse" data-bs-target="#recent">
<h4>Recent<span>24</span></h4>
</a>
<div class="tasks-activity tasks collapse show" id="recent">
<ul>
	<?php 
	$get_id = $_GET['id'];
	include_once("php/config.php");
$sql21 = "SELECT * FROM task WHERE project_id='$get_id'";
$result21 = mysqli_query($conn, $sql21);
// if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result21)) {
		
	 ?>
<li class="task-wrap pending">
<div class="task-info">
<span class="task-icon"><i class="ti ti-grip-vertical"></i></span>
<div class="task-checkbox">
<label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
</div>
<div class="set-star rating-select">
<i class="fa fa-star"></i>
</div>
<p><a href="task-details.php?ticket=<?=$row["task_ticket"]?>"><?php echo $row["title"] ?></a></p>

<span class="badge badge-pill badge-status bg-green"></i><?php echo $row["priority"] ?></span>
<span class="badge badge-tag bg-pending"><?php echo $row["status"] ?></span>
</div>
<div class="task-actions">
<ul>
<li class="task-time">
<span class="badge badge-tag badge-purple-light"><?php 
$cat_id= $row["project_id"];
$cat_find = "SELECT * FROM projects where project_id='$cat_id'";
$cat_result = mysqli_query($conn, $cat_find);
$row_cat = mysqli_fetch_array($cat_result);
echo $row_cat["project_name"];
 ?></span>
</li>
<li class="task-date">
<i class="ti ti-calendar-exclamation"></i><?php echo $row["start_date"] ?>
</li>
<li class="task-owner">
<div class="task-user">
	<?php
	$task_tikets = $row["task_ticket"] ;
$find_user = "SELECT * FROM assign_task where task_ticket='$task_tikets'";
$result = mysqli_query($conn,$find_user);
while ($row_find_user=mysqli_fetch_assoc($result)) {
	$emp_ids = $row_find_user["emp_id"];
	$find_emp_name = "SELECT * FROM admin where id= '$emp_ids'";
	$find_emp_name_result = mysqli_query($conn, $find_emp_name);
	$find_name_rows = mysqli_fetch_assoc($find_emp_name_result);

	?>

<img src="assets/img/profiles/avatar-14.jpg" alt="img" title="<?php echo $find_name_rows["name"] ?>">
<?php }; ?>

</div>
<div class="dropdown table-action">
<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
<i class="fa fa-ellipsis-v"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#" data-bs-toggle="modal" data-taskid="<?=$row["task_id"] ?>" data-taskticket="<?=$row["task_ticket"] ?>" data-taskname="<?=$row["title"]?>" data-bs-target="#delete_activity"><i class="ti ti-trash text-danger"></i> Delete</a>
</div>
</div>
</li>
</ul>
</div>
</li>
<?php };?>
<!-- }else{
	echo "No Result Found";
}; ?> -->
</ul>
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
<h4>Add New Task</h4>
<a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
<form action="php/task.php" class="toggle-height" method="POST">
<div class="pro-create">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Title <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="title">
</div>
<div class="form-wrap">
<label class="col-form-label">Project</label>
<select class="select" name="project">
<option>Choose</option>
<?php 
include_once("php/config.php");
$sql = "SELECT * FROM projects";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num>0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<option value=".$row["project_id"].">";
		echo $row["project_name"];
		echo "</option>";
	}
}
 ?>
</select>
</div>
<div class="form-wrap">
<label class="col-form-label">Responsible Persons <span class="text-danger">*</span></label>
<select class="multiple-img" multiple  name="user_assign[]" >
	<?php 
include_once("php/config.php");
$sql1 = "SELECT * FROM admin";
$result1 = mysqli_query($conn, $sql1);
$num1 = mysqli_num_rows($result1);
if ($num1>0) {
	while ($row1 = mysqli_fetch_assoc($result1)) {
		echo "<option data-image='php/".$row1["profile"]."' value=".$row1["id"].">";
		echo $row1["name"];
		echo "</option>";
	}
}
 ?>

</select>
</div>
</div>
<div class="col-md-6">
<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
<div class="form-wrap icon-form">
<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
<input type="text" class="form-control datetimepicker" name="start_date">
</div>
</div>
<div class="col-md-6">
<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
<div class="form-wrap icon-form">
<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
<input type="text" class="form-control datetimepicker" name="due_date">
</div>
</div>
<!-- <div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Tags <span class="text-danger">*</span></label>
<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label" value="Promotion, Collab">
</div>
</div> -->
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Priority</label>
<div class="select-priority">
<span class="select-icon"><i class="ti ti-square-rounded-filled"></i></span>
<select class="select" name="priority">
<option>Select</option>
<option value="High">High</option>
<option value="Low">Low</option>
<option value="Medium">Medium</option>
</select>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Status</label>
<select class="select" name="status">
<option value="Active" selected>Active</option>
<option value="Inactive">Inactive</option>
</select>
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Description <span class="text-danger">*</span></label>
<textarea class="form-control" name="description"></textarea>
</div>
</div>
</div>
</div>
<div class="submit-button text-end">
<a href="#" class="btn btn-light sidebar-close">Cancel</a>
<button type="submit" name="submit" class="btn btn-primary">Create</button>
</div>
</form>
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
<form action="tasks.html" class="toggle-height">
<div class="pro-create">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Title <span class="text-danger">*</span></label>
<input type="text" class="form-control" value="Add a form to Update Task">
</div>
<div class="form-wrap">
<label class="col-form-label">Category</label>
<select class="select">
<option>Choose</option>
<option>Calls</option>
<option>Email</option>
<option>Email</option>
<option>Meeting</option>
</select>
</div>
<div class="form-wrap">
<label class="col-form-label">Responsible Persons <span class="text-danger">*</span></label>
<select class="multiple-img" multiple="multiple">
<option data-image="assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
</select>
</div>
</div>
<div class="col-md-6">
<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
<div class="form-wrap icon-form">
<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
<input type="text" class="form-control datetimepicker" value="27-10-2024">
</div>
</div>
<div class="col-md-6">
<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
<div class="form-wrap icon-form">
<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
<input type="text" class="form-control datetimepicker" value="29-10-2024">
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Tags <span class="text-danger">*</span></label>
<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label" value="Promotion, Collab">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Priority</label>
<div class="select-priority">
<span class="select-icon"><i class="ti ti-square-rounded-filled"></i></span>
<select class="select">
<option selected>High</option>
<option>Low</option>
<option>Medium</option>
</select>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Status</label>
<select class="select">
<option selected>Active</option>
<option>Inactive</option>
</select>
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Description <span class="text-danger">*</span></label>
<div class="summernote"></div>
</div>
</div>
</div>
</div>
<div class="submit-button text-end">
<a href="#" class="btn btn-light sidebar-close1">Cancel</a>
<button type="submit" class="btn btn-primary">Save Changes</button>
</div>
</form>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="delete_activity" role="dialog">
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
<p class="del-info">Are you sure you want to remove task <span id="taskname"></span>?</p>
<div class="col-lg-12 text-center modal-btn">
	<form action="php/delete_task.php" method="POST">
		<input type="hidden" name="taskid" value="">
		<input type="hidden" name="taskticket" value="">
	
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<button type="submit" name="submit" class="btn btn-danger">Yes, Delete it</a>
</form>
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
<form action="campaign.html">
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

</div>
<script type="text/javascript">
	$('#delete_activity').on('show.bs.modal', function(e) {
    var taskid = $(e.relatedTarget).data('taskid');
    var taskticket = $(e.relatedTarget).data('taskticket');
    var taskname = $(e.relatedTarget).data('taskname');
    document.getElementById("taskname").innerHTML= taskname;

    $(e.currentTarget).find('input[name="taskid"]').val(taskid);
    $(e.currentTarget).find('input[name="taskticket"]').val(taskticket);
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

<script src="assets/js/jsonscript.js" type="text/javascript"></script>
</body>
</html>