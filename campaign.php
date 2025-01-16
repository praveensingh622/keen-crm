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
<h4 class="page-title">Campaign<span class="count-title">123</span></h4>
</div>
<div class="col-8 text-end">
<div class="head-icons">
<a href="campaign.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh">
<i class="ti ti-refresh-dot"></i>
</a>
<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
<i class="ti ti-chevrons-up"></i>
</a>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-xl-3 col-lg-6">
<div class="campaign-box bg-danger-light">
<div class="campaign-img">
<span>
<i class="ti ti-brand-campaignmonitor"></i>
</span>
<p>Campaign</p>
</div>
<h2>474</h2>
</div>
</div>
<div class="col-xl-3 col-lg-6">
<div class="campaign-box bg-warning-light">
<div class="campaign-img">
<span>
<i class="ti ti-send"></i>
</span>
<p>Sent</p>
</div>
<h2>454</h2>
</div>
</div>
<div class="col-xl-3 col-lg-6">
<div class="campaign-box bg-purple-light">
<div class="campaign-img">
<span>
<i class="ti ti-brand-feedly"></i>
</span>
<p>Opened</p>
</div>
<h2>658</h2>
</div>
</div>
<div class="col-xl-3 col-lg-6">
<div class="campaign-box bg-success-light">
<div class="campaign-img">
<span>
<i class="ti ti-brand-pocket"></i>
</span>
<p>Completed</p>
</div>
<h2>747</h2>
</div>
</div>
</div>


<div class="campaign-tab">
<ul class="nav">
<li>
<a href="campaign.html" class="active">Active Campaign<span>24</span></a>
</li>
<li>
<a href="campaign-complete.html">Completed Campaign</a>
</li>
<li>
<a href="campaign-archieve.html">Archived Campaign</a>
</li>
</ul>
</div>

<div class="card main-card">
<div class="card-body">

<div class="search-section">
<div class="row">
<div class="col-md-5 col-sm-4">
<div class="form-wrap icon-form">
<span class="form-icon"><i class="ti ti-search"></i></span>
<input type="text" class="form-control" placeholder="Search Campaign">
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
<a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i>Add New Campaign</a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="filter-section filter-flex">
<div class="sortby-list">
<ul>
<li>
<div class="sort-dropdown drop-down">
<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-sort-ascending-2"></i>Sort </a>
<div class="dropdown-menu  dropdown-menu-start">
<ul>
<li>
<a href="javascript:void(0);">
<i class="ti ti-circle-chevron-right"></i>Ascending
</a>
</li>
<li>
<a href="javascript:void(0);">
<i class="ti ti-circle-chevron-right"></i>Descending
</a>
</li>
<li>
<a href="javascript:void(0);">
<i class="ti ti-circle-chevron-right"></i>Recently Viewed
</a>
</li>
<li>
<a href="javascript:void(0);">
<i class="ti ti-circle-chevron-right"></i>Recently Added
</a>
</li>
</ul>
</div>
</div>
</li>
<li>
<div class="form-wrap icon-form">
<span class="form-icon"><i class="ti ti-calendar"></i></span>
<input type="text" class="form-control bookingrange" placeholder>
</div>
</li>
</ul>
</div>
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
<p><i class="ti ti-grip-vertical"></i>Type</p>
<div class="status-toggle">
<input type="checkbox" id="col-phone" class="check">
<label for="col-phone" class="checktoggle"></label>
</div>
</li>
<li>
<p><i class="ti ti-grip-vertical"></i>Progress</p>
<div class="status-toggle">
<input type="checkbox" id="col-email" class="check">
<label for="col-email" class="checktoggle"></label>
</div>
</li>
<li>
<p><i class="ti ti-grip-vertical"></i>Members</p>
<div class="status-toggle">
<input type="checkbox" id="col-tag" class="check">
<label for="col-tag" class="checktoggle"></label>
</div>
</li>
<li>
<p><i class="ti ti-grip-vertical"></i>Start Date</p>
<div class="status-toggle">
<input type="checkbox" id="col-loc" class="check">
<label for="col-loc" class="checktoggle"></label>
</div>
</li>
<li>
<p><i class="ti ti-grip-vertical"></i>End Date</p>
<div class="status-toggle">
<input type="checkbox" id="col-rate" class="check">
<label for="col-rate" class="checktoggle"></label>
</div>
</li>
<li>
<p><i class="ti ti-grip-vertical"></i>Status</p>
<div class="status-toggle">
<input type="checkbox" id="col-owner" class="check">
<label for="col-owner" class="checktoggle"></label>
</div>
</li>
<li>
<p><i class="ti ti-grip-vertical"></i>Created</p>
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
<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Name</a>
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
<h5>Distribution</h5>
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
<h5>Merchandising</h5>
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
<h5>Pricing</h5>
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
<h5>Increased sales</h5>
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
<h5>Brand recognition</h5>
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
<h5>Public Relations</h5>
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
<h5>Content Marketing</h5>
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
<h5>Brand</h5>
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
<h5>Success</h5>
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
<h5>Pending</h5>
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
<h5>Bounced</h5>
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
<h5>Paused</h5>
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
<a href="campaign.html" class="btn btn-primary">Filter</a>
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


<div class="table-responsive custom-table">
<table class="table" id="campaign-list">
<thead class="thead-light">
<tr>
<th class="no-sort">
<label class="checkboxs"><input type="checkbox" id="select-all"><span class="checkmarks"></span></label>
</th>
<th></th>
<th>Name</th>
<th>Type</th>
<th>Progress</th>
<th>Members</th>
<th>Start Date</th>
<th>End Date</th>
<th>Status</th>
<th>Created</th>
<th class="text-end">Action</th>
</thead>
<tbody>
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
<h4>Add New Campaign</h4>
<a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
<form action="php/campaign.php" class="toggle-height" method="POST">
<div class="pro-create">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Name <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="cam_name">
</div>
<div class="form-wrap">
<label class="col-form-label">Campaign Type <span class="text-danger">*</span></label>
<select class="select2" name="cam_type">
<option>Choose</option>
<option value="Public Relations">Public Relations</option>
<option value="Brand">Brand</option>
<option value="Media">Media</option>
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
<input class="form-control" type="text">
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-wrap">
<label class="col-form-label">Period Value <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-lg-12">
<div class="form-wrap">
<label class="col-form-label">Target Audience <span class="text-danger">*</span></label>
<select class="select" multiple="multiple">
<option selected>Small Business</option>
<option selected>Corporate Companies</option>
<option selected>Urban Apartment</option>
<option>Business</option>
</select>
</div>
<div class="form-wrap">
<label class="col-form-label">Description <span class="text-danger">*</span></label>
<textarea class="form-control" rows="4"></textarea>
</div>
<div class="form-wrap">
<label class="col-form-label">Attachment <span class="text-danger">*</span></label>
<div class="drag-attach">
<input type="file">
<div class="img-upload">
<i class="ti ti-file-broken"></i>Upload File
</div>
</div>
</div>
<div class="form-wrap">
<label class="col-form-label">Uploaded Files</label>
<div class="upload-file upload-list">
<div>
<h6>tes.txt</h6>
<p>4.25 MB</p>
</div>
<a href="javascript:void(0);" class="text-danger"><i class="ti ti-trash-x"></i></a>
</div>
</div>
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


<div class="toggle-popup1">
<div class="sidebar-layout">
<div class="sidebar-header">
<h4>Edit Campaign</h4>
<a href="#" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
<form action="campaign-archieve.html" class="toggle-height">
<div class="pro-create">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Name <span class="text-danger">*</span></label>
<input type="text" class="form-control" value="Enhanced brand">
</div>
<div class="form-wrap">
<label class="col-form-label">Campaign Type <span class="text-danger">*</span></label>
<select class="select2">
<option>Choose</option>
<option>Public Relations</option>
<option>Brand</option>
<option>Media</option>
<option selected>Sales</option>
</select>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-wrap">
<label class="col-form-label">Deal Value<span class="text-danger"> *</span></label>
<input class="form-control" type="text" value="$12,989">
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
<input class="form-control" type="text">
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-wrap">
<label class="col-form-label">Period Value <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-lg-12">
<div class="form-wrap">
<label class="col-form-label">Target Audience <span class="text-danger">*</span></label>
<select class="select" multiple="multiple">
<option selected>Small Business</option>
<option selected>Corporate Companies</option>
<option selected>Urban Apartment</option>
<option>Business</option>
</select>
</div>
<div class="form-wrap">
<label class="col-form-label">Description <span class="text-danger">*</span></label>
<textarea class="form-control" rows="4"></textarea>
</div>
<div class="form-wrap">
<label class="col-form-label">Attachment <span class="text-danger">*</span></label>
<div class="drag-attach">
<input type="file">
<div class="img-upload">
<i class="ti ti-file-broken"></i>Upload File
</div>
</div>
</div>
<div class="form-wrap">
<label class="col-form-label">Uploaded Files</label>
<div class="upload-file upload-list">
<div>
<h6>tes.txt</h6>
<p>4.25 MB</p>
</div>
<a href="javascript:void(0);" class="text-danger"><i class="ti ti-trash-x"></i></a>
</div>
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


<div class="modal custom-modal fade" id="delete_campaign" role="dialog">
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
<h3>Remove Campaign??</h3>
<p class="del-info">Are you sure you want to remove campaign you selected.</p>
<div class="col-lg-12 text-center modal-btn">
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<a href="campaign.html" class="btn btn-danger">Yes, Delete it</a>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="create_pipeline" role="dialog">
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
<i class="ti ti-medal"></i>
</div>
<h3>Campaign Created Successfully!!!</h3>
<p>View the details of campaign, created</p>
<div class="col-lg-12 text-center modal-btn">
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<a href="campaign.html" class="btn btn-primary">View Details</a>
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