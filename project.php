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
<div class="col-4">
<h4 class="page-title">Projects<span class="count-title">
	<?php
$sql_panel = "SELECT * FROM projects";
$result_panel = mysqli_query($conn, $sql_panel);
$total_panel = mysqli_num_rows($result_panel);
echo $total_panel;
	 ?>
</span></h4>
</div>
<div class="col-8 text-end">
<div class="head-icons">
<a href="projects.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh">
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
<input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Search Project">
</div>
</div>
<div class="col-md-7 col-sm-8">
<div class="export-list text-sm-end">
<ul>
<li>
<a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i>Add New Project</a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="filter-section filter-flex">

<div class="filter-list">
<ul>
<li>
<div class="manage-dropdwon">
<a href="javascript:void(0);" class="btn btn-purple-light" data-bs-toggle="dropdown" data-bs-auto-close="false"><i class="ti ti-columns-3"></i>Manage Columns</a>
<div class="dropdown-menu  dropdown-menu-xl-end">
<h4>Want to manage datatables?</h4>
<p>Please drag and drop your column to reorder your table and enable see option as you want.</p>
<ul>
<li>
<p><i class="ti ti-grip-vertical"></i>Name</p>
<div class="status-toggle">
<input type="checkbox" id="col-name" class="check">
<label for="col-name" class="checktoggle"></label>
</div>
</li>
<li>
<p><i class="ti ti-grip-vertical"></i>Client</p>
<div class="status-toggle">
<input type="checkbox" id="col-phone" class="check">
<label for="col-phone" class="checktoggle"></label>
</div>
</li>
<li>
<p><i class="ti ti-grip-vertical"></i>Priority</p>
<div class="status-toggle">
<input type="checkbox" id="col-email" class="check">
<label for="col-email" class="checktoggle"></label>
</div>
</li>
<li>
<p><i class="ti ti-grip-vertical"></i>Start Date</p>
<div class="status-toggle">
<input type="checkbox" id="col-tag" class="check">
<label for="col-tag" class="checktoggle"></label>
</div>
</li>
<li>
<p><i class="ti ti-grip-vertical"></i>Due Date</p>
<div class="status-toggle">
<input type="checkbox" id="col-loc" class="check">
<label for="col-loc" class="checktoggle"></label>
</div>
</li>
<li>
<p><i class="ti ti-grip-vertical"></i>Type</p>
<div class="status-toggle">
<input type="checkbox" id="col-rate" class="check">
<label for="col-rate" class="checktoggle"></label>
</div>
</li>
<li>
<p><i class="ti ti-grip-vertical"></i>Pipeline Stage</p>
<div class="status-toggle">
<input type="checkbox" id="col-owner" class="check">
<label for="col-owner" class="checktoggle"></label>
</div>
</li>
<li>
<p><i class="ti ti-grip-vertical"></i>Status</p>
<div class="status-toggle">
<input type="checkbox" id="col-contact" class="check" checked>
<label for="col-contact" class="checktoggle"></label>
</div>
</li>
<li>
<p><i class="ti ti-grip-vertical"></i>Action</p>
<div class="status-toggle">
<input type="checkbox" id="col-action" class="check">
<label for="col-action" class="checktoggle"></label>
</div>
</li>
</ul>
</div>
</div>
</li>
<li>
<div class="form-sorts dropdown">
<a href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="false"><i class="ti ti-filter-share"></i>Filter</a>
<div class="filter-dropdown-menu dropdown-menu  dropdown-menu-xl-end">
<div class="filter-set-view">
<div class="filter-set-head">
<h4><i class="ti ti-filter-share"></i>Filter</h4>
</div>
<div class="accordion" id="accordionExample">
<div class="filter-set-content">
<div class="filter-set-content-head">
<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Project Name</a>
</div>
<div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
<div class="filter-content-list">
<div class="form-wrap icon-form">
<span class="form-icon"><i class="ti ti-search"></i></span>
<input type="text" class="form-control" placeholder="Search Name">
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
<h5>Truelysell</h5>
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
<h5>Dreamschat</h5>
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
<h5>Servbook</h5>
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
<h5>Doccure</h5>
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
<h5>Dreamsports</h5>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="filter-set-content">
<div class="filter-set-content-head">
<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseclient" aria-expanded="false" aria-controls="collapseclient">Client Name</a>
</div>
<div class="filter-set-contents accordion-collapse collapse" id="collapseclient" data-bs-parent="#accordionExample">
<div class="filter-content-list">
<div class="form-wrap icon-form">
<span class="form-icon"><i class="ti ti-search"></i></span>
<input type="text" class="form-control" placeholder="Search Client">
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
<h5>NovaWave LLC</h5>
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
<h5>BlueSky Industries</h5>
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
<h5>Silver Hawk</h5>
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
<h5>Summit Peak</h5>
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
<h5>CoastalStar Co.</h5>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="filter-set-content">
<div class="filter-set-content-head">
<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner">Type</a>
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
<h5>Web App</h5>
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
<h5>Mobile App</h5>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="filter-set-content">
<div class="filter-set-content-head">
<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#Status" aria-expanded="false" aria-controls="Status">Start Date </a>
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
<h5>25 Sep 2023</h5>
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
<h5>05 Oct 2023</h5>
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
<h5>14 Oct 2023</h5>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="filter-set-content">
<div class="filter-set-content-head">
<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">End Date</a>
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
<h5>19 Oct 2023</h5>
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
<h5>23 Nov 2023</h5>
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
<h5>14 Dec 2023</h5>
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
<h5>09 Dec 2023</h5>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="filter-set-content">
<div class="filter-set-content-head">
<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapsestage" aria-expanded="false" aria-controls="collapsestage">Pipeline Stage</a>
</div>
<div class="filter-set-contents accordion-collapse collapse" id="collapsestage" data-bs-parent="#accordionExample">
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
<h5>Plan</h5>
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
<h5>Develop</h5>
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
<h5>Completed</h5>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="filter-set-content">
<div class="filter-set-content-head">
<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapsestatus" aria-expanded="false" aria-controls="collapsestatus">Status</a>
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
<h5>Active</h5>
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
<h5>Inactive</h5>
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
<a href="projects.html" class="btn btn-primary">Filter</a>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li>
<div class="view-icons">
<a href="projects.html" class="active"><i class="ti ti-list-tree"></i></a>
<a href="project-grid.html"><i class="ti ti-grid-dots"></i></a>
</div>
</li>
</ul>
</div>
</div>


<div class="table-responsive custom-table">
<table class="table">
<thead class="thead-light">
<tr>
<th class="no-sort">
<label class="checkboxs"><input type="checkbox" ><span class="checkmarks"></span></label>
</th>
<th></th>
<th>Name</th>
<th>Client</th>
<th>Priority</th>
<th>Start Date</th>
<th>End Date</th>
<th>Type</th>

<th>Status</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody id="searchresult">
	<?php 
	include_once("php/config.php");
	$sql = "SELECT * FROM projects";
	$result = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($result)) {
		// code...
	
	?>
	<tr class="odd">
		<td class="sorting_1">
			<label class="checkboxs">
				<input type="checkbox">
				<span class="checkmarks"></span>
			</label>
		</td>
		<td>
			<div class="set-star rating-select">
				<i class="fa fa-star"></i>
			</div>
		</td>
		<td>
			
				
				<a href="project-task-list.php?id=<?=$row["project_id"]?>" class="profile-split d-flex flex-column"><?= $row["project_name"]?></a>
			
		</td>
		<td>
			<h2 class="table-avatar d-flex align-items-center">
				
				<a href="#" class="profile-split d-flex flex-column"><?php 
$cidsjs = $row["client_name"];
$fetchcli = "SELECT * FROM clients where id='$cidsjs'";
$clie_result_show = mysqli_query($conn,$fetchcli);
$clitiprow = mysqli_fetch_assoc($clie_result_show) ;
echo $clitiprow["company"];
				 ?></a>
			</h2>
		</td>
		<td>
			<span class="priority badge badge-tag badge-danger-light">
				<i class="ti ti-square-rounded-filled"></i><?= $row["priority"]?>
			</span>
		</td>
		<td><?= $row["start_date"]?></td>
		<td><?= $row["due_date"]?></td>
		<td><?= $row["project_type"]?></td>
		
		<td>
			<span class="badge badge-pill badge-status bg-success1"><?= $row["status"]?></span>
		</td>
		<td>
			<div class="dropdown table-action">
				<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
				<div class="dropdown-menu dropdown-menu-right">
					<!-- <a class="dropdown-item edit-popup" 
					data-bs-toggle="modal" 
data-bs-target="#edit-po"  
data-projectid="<?php echo $row["project_id"] ?>"
data-projectname="<?php echo $row["project_name"] ?>"
data-projectno="<?php echo $row["project_no"] ?>"
data-projecttype="<?php echo $row["project_type"] ?>"
data-clientname="<?php echo $row["client_name"] ?>"
data-clientid="<?php echo $row["client_id"] ?>"
data-projecttiming="<?php echo $row["project_timing"] ?>"
data-price="<?php echo $row["price"] ?>"
data-amount="<?php echo $row["amount"] ?>"
data-total="<?php echo $row["total"] ?>"
data-responsibleperson="<?php echo $row["responsible_person"] ?>"

data-teamleader="<?php echo $row["team_leader"] ?>"
data-startdate="<?php echo $row["start_date"] ?>"
data-duedate="<?php echo $row["due_date"] ?>"
data-status="<?php echo $row["status"] ?>"
data-description="<?php echo $row["description"] ?>"

					><i class="ti ti-edit text-blue"></i> Edit</a> -->
					<a class="dropdown-item" href="#" data-bs-toggle="modal" data-projectid="<?php echo $row["project_id"] ?>" data-projectname="<?php echo $row["project_name"] ?>" data-bs-target="#delete_contact" ><i class="ti ti-trash text-danger"></i> Delete</a>
					
					<!-- <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-subtask"></i> Add New Task</a> -->
				</div>
			</div>
		</td>
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
<h4>Add New Project</h4>
<a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
<div class="toggle-height">
<div class="pro-create">
	<form action="php/create-project.php" method="POST">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Name <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="project_name">
</div>
</div>
<!-- <div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Project ID<span class="text-danger"> *</span></label>
<input class="form-control" type="text" name="project_id">
</div>
</div> -->
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Project Type <span class="text-danger">*</span></label>
<select class="select2" name="project_type">
<option>Choose</option>
<option value="mobile app">Mobile App</option>
<option value="Meeting">Meeting</option>
<option value="social Media"></option>
<option value="Web Development">Web Development</option>
<option value="web designing">Web Designing</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Client <span class="text-danger">*</span></label>
<select class="select" name="project_client">
<option>Select</option>
<?php 
$client = "SELECT * FROM clients";
$client_result = mysqli_query($conn, $client);
while ($client_row = mysqli_fetch_assoc($client_result)) {
	echo "<option value='" . $client_row['id'] . "'>" . $client_row['company'] . "</option>";
}
?>

</select>
</div>
</div>
<!-- <div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Category <span class="text-danger">*</span></label>
<select class="select" name="category">
<option>Select</option>
<option>Harbor View</option>
<option>LLC</option>
</select>
</div>
</div> -->
<div class="col-lg-3 col-md-6">
<div class="form-wrap">
<label class="col-form-label">Project Timing <span class="text-danger">*</span></label>
<select class="select" name="project_timing">
<option value="">Select</option>
<option value="Hourly">Hourly</option>
<option value="Weekly">Weekly</option>
<option value="Monthly">Monthly</option>
<option value="Less then 1 month">Less than 1 Month</option>
<option value="Less then 3 months">Less than 3 months</option>
</select>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-wrap">
<label class="col-form-label">Price <span class="text-danger">*</span></label>
<input class="form-control" type="text" name="price">
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-wrap">
<label class="col-form-label">Amount <span class="text-danger">*</span></label>
<input class="form-control" type="text" name="amount">
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-wrap">
<label class="col-form-label">Total <span class="text-danger">*</span></label>
<input class="form-control" type="text" name="total">
</div>
</div>
<!-- <div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Responsible Persons <span class="text-danger">*</span></label>
<select class="multiple-img" multiple="multiple" name="responsible">
<option data-image="assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
</select>
</div>
</div> -->
<!-- <div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Team Leader <span class="text-danger">*</span></label>
<select class="multiple-img" multiple="multiple" name="team_leader">
<option data-image="assets/img/profiles/avatar-19.jpg">Darlee Robertson</option>
<option data-image="assets/img/profiles/avatar-20.jpg" selected>Sharon Roy</option>
<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
</select>
</div>
</div> -->
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
<div class="icon-form">
<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
<input type="text" class="form-control datetimepicker" value="29-02-2020" name="start_date">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
<div class="icon-form">
<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
<input type="text" class="form-control datetimepicker" value="29-02-2020" name="due_date">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Priority</label>
<select class="select" name="priority">
<option>Select</option>
<option value="High">High</option>
<option value="Low">Low</option>
<option value="Medium">Medium</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Status</label>
<select class="select" name="status">
<option>Select</option>
<option value="Active">Active</option>
<option value="Inactive">Inactive</option>
</select>
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Description <span class="text-danger">*</span></label>
<textarea class="form-control" rows="4" name="description"></textarea>
</div>
</div>
</div>
</div>
<div class="submit-button text-end">
<a href="#" class="btn btn-light sidebar-close">Cancel</a>
<button class="btn btn-primary" name="submit" type="submit">Create</button>
</div>
</div>
</div>
</div>
</div>
</form>



<div class="toggle-popup1" id="edit-po">
<div class="sidebar-layout">
<div class="sidebar-header">
<h4>Edit Project</h4>
<a href="#" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
<form class="toggle-height">
<div class="pro-create">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Name <span class="text-danger">*</span></label>
<input type="text" name="projectname" class="form-control">
</div>
</div>
<!-- <div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Project ID<span class="text-danger"> *</span></label>
<input class="form-control" name="projectid" type="text" value="12">
</div>
</div> -->
<!-- <div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Project Type <span class="text-danger">*</span></label>
<select class="select2">
<option>Choose</option>
<option>Mobile App</option>
<option selected name="projecttype">Meeting</option>
</select>
</div>
</div> -->
<!-- <div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Client <span class="text-danger">*</span></label>
<select class="select">
<option>Select</option>
<option selected>NovaWave LLC</option>
<option>Silver Hawk</option>
<option>Harbor View</option>
</select>
</div>
</div> -->
<!-- <div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Category <span class="text-danger">*</span></label>
<select class="select">
<option>Select</option>
<option selected>Harbor View</option>
<option>LLC</option>
</select>
</div>
</div> -->
<!-- <div class="col-lg-3 col-md-6">
<div class="form-wrap">
<label class="col-form-label">Project Timing <span class="text-danger">*</span></label>
<select class="select">
<option>Select</option>
<option selected>Hourly</option>
<option>Weekly</option>
<option>Monthly</option>
<option>Less than 1 Month</option>
<option>Less than 3 months</option>
</select>
</div>
</div> -->
<div class="col-lg-3 col-md-6">
<div class="form-wrap">
<label class="col-form-label">Price <span class="text-danger">*</span></label>
<input class="form-control" name="price" type="text">
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-wrap">
<label class="col-form-label">Amount <span class="text-danger">*</span></label>
<input class="form-control" name="amount" type="text">
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-wrap">
<label class="col-form-label">Total <span class="text-danger">*</span></label>
<input class="form-control" name="total" type="text">
</div>
</div>
<!-- <div class="col-md-6">
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
</div> -->
<!-- <div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Team Leader <span class="text-danger">*</span></label>
<select class="multiple-img" multiple="multiple">
<option data-image="assets/img/profiles/avatar-19.jpg">Darlee Robertson</option>
<option data-image="assets/img/profiles/avatar-20.jpg" selected>Sharon Roy</option>
<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
</select>
</div>
</div> -->
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
<div class="icon-form">
<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
<input type="text" name="startdate" class="form-control datetimepicker" value="29-02-2020">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
<div class="icon-form">
<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
<input type="text" name="duedate" class="form-control datetimepicker" value="29-02-2020">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Priority</label>
<select class="select">
<option>Select</option>
<option selected>High</option>
<option>Low</option>
<option>Medium</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Status</label>
<select class="select">
<option>Select</option>
<option selected>Active</option>
<option>Inactive</option>
</select>
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Description <span class="text-danger">*</span></label>
<textarea class="form-control" rows="4"></textarea>
</div>
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
<p class="del-info">Remove Contact <span id="projectname"></span> from your Account.</p>
<div class="col-lg-12 text-center modal-btn">
	<form action="php/project_delete.php" method="POST">
	<input type="hidden" name="projectid" value="">


<input type="hidden" class="form-control" name="leadsname" value="">
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<button type="submit" name="submit" class="btn btn-danger">Yes, Delete it</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="create_project" role="dialog">
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
<i class="ti ti-atom-2"></i>
</div>
<h3>Project Created Successfully!!!</h3>
<p>View the details of project, created</p>
<div class="col-lg-12 text-center modal-btn">
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<a href="/project-details.html" class="btn btn-primary">View Details</a>
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
<form action="projects.html">
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
	$('#delete_contact').on('show.bs.modal', function(e) {
    var projectid = $(e.relatedTarget).data('projectid');
    var projectname = $(e.relatedTarget).data('projectname')
    document.getElementById("projectname").innerHTML= projectname;

    $(e.currentTarget).find('input[name="projectid"]').val(projectid);
    $(e.currentTarget).find('input[name="projectname"]').val(projectname);
});
</script>

<script type="text/javascript">
	$('#edit-po').on('show.bs.modal', function(e) {
		var projectid = $(e.relatedTarget).data('projectid');
		var projectname = $(e.relatedTarget).data('projectname');
    var projecttype = $(e.relatedTarget).data('projecttype');
     var clientname = $(e.relatedTarget).data('clientname');
    var projecttiming = $(e.relatedTarget).data('projecttiming');
    var price = $(e.relatedTarget).data('price');
    var amount = $(e.relatedTarget).data('amount');
    var total = $(e.relatedTarget).data('total');
    var responsibleperson = $(e.relatedTarget).data('responsibleperson');
    var teamleader = $(e.relatedTarget).data('teamleader');
    var startdate = $(e.relatedTarget).data('startdate');
    var duedate = $(e.relatedTarget).data('duedate');
    var status = $(e.relatedTarget).data('status');
    var description = $(e.relatedTarget).data('description');
    
    
     $(e.currentTarget).find('input[name="projectid"]').val(projectid);
     $(e.currentTarget).find('input[name="projectname"]').val(projectname);
    $(e.currentTarget).find('input[name="projecttype"]').val(projecttype);
    $(e.currentTarget).find('input[name="clientname"]').val(clientname);
     $(e.currentTarget).find('input[name="projecttiming"]').val(projecttiming);
     $(e.currentTarget).find('input[name="price"]').val(price);
    $(e.currentTarget).find('input[name="amount"]').val(amount);
    $(e.currentTarget).find('input[name="total"]').val(total);
    $(e.currentTarget).find('input[name="responsibleperson"]').val(responsibleperson);
    $(e.currentTarget).find('input[name="teamleader"]').val(teamleader);
    $(e.currentTarget).find('input[name="startdate"]').val(startdate);
    $(e.currentTarget).find('input[name="duedate"]').val(duedate);
    $(e.currentTarget).find('input[name="status"]').val(status);
    $(e.currentTarget).find('input[name="description"]').val(description);
    
   
   
});
</script>


<script type="text/javascript">
	$(document).ready(function(){
		$("#live_search").keyup(function(){
			var input = $(this).val();
			// alert(input);
			if (input != "") {
				$.ajax({
					url:"php/projects_fetch.php",
					method:"POST",
					data:{input:input},

					success:function(data){
						$("#searchresult").html(data);
					}
				})
			}else{
				$.ajax({
					url:"php/all_projects.php",
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