<?php
ob_start();
session_start();
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
<div class="col-4">
<h4 class="page-title">Leads<span class="count-title">
<?php
$sql_panel = "SELECT * FROM leads";
$result_panel = mysqli_query($conn, $sql_panel);
$total_panel = mysqli_num_rows($result_panel);
echo $total_panel;
	 ?></span></h4>
</div>
<div class="col-8 text-end">
<div class="head-icons">
<a href="leads.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh">
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
<input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Search Companies">
</div>
</div>
<div class="col-md-7 col-sm-8">
<div class="export-list text-sm-end">
<ul>
<li>
<!-- <div class="export-dropdwon">
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
</div> -->
</li>
<li>
<a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i>Add Leads</a>
</li>
</ul>
</div>
</div>
</div>
</div>




<div class="table-responsive custom-table">
	<div id="companieslist_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
<table class="table" >
<thead class="thead-light">
<tr>
<th class="no-sort">
<label class="checkboxs"><input type="checkbox" id="select-all"><span class="checkmarks"></span></label>
</th>
<th class="no-sort"></th>
<th>Lead Name</th>
<th>Company Name</th>
<th>Phone</th>
<th>Email</th>
<th>Lead Status</th>
<th>Created Date</th>
<th>Lead Owner</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody id="searchresult">
<?php include_once("php/config.php");
$sql = "SELECT * FROM leads";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
	$index = 0;

	while ($row = mysqli_fetch_assoc($result)) {
		$class = ($index % 2 == 0) ? 'even' : 'odd';
		 // Output the div with the appropriate class

		?>

<tr class="<?php echo $class ?>" >
<td class="sorting_1">
	<label class="checkboxs">
		<input type="checkbox">
		<span class="checkmarks"></span>
	</label>
</td>
<td>
	<div class="set-star rating-select">
		<i class="fa fa-star"></i></div>
	</td>
	<td><?php echo $row["leads_name"] ?></td>
	<td><?php echo $row["leads_company_name"] ?></td>
	<td><?php echo $row["leads_phone"] ?></td>
	<td><?php echo $row["leads_email"] ?></td>
	<td><span class="badge badge-pill badge-status bg-success"><?php echo $row["leads_status"] ?></span></td>
	<td><?php echo $row["leads_date"] ?></td>
	<td><span class="title-name"><?php echo $row["leads_owner"] ?></span></td>
	<td><div class="dropdown table-action"><a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		<div class="dropdown-menu dropdown-menu-right">
		<a class="dropdown-item edit-popup"

data-bs-toggle="modal" 
data-bs-target="#edit-po"  
data-leadsemail="<?php echo $row["leads_email"] ?>"
data-leadsid="<?php echo $row["leads_id"] ?>"
data-leadsname="<?php echo $row["leads_name"] ?>"
data-leadstype="<?php echo $row["leads_type"] ?>"
data-leadscompanyname="<?php echo $row["leads_company_name"] ?>"
data-leadscompanyid="<?php echo $row["leads_company_id"] ?>"
data-leadsvalue="<?php echo $row["leads_value"] ?>"
data-leadscurrency="<?php echo $row["leads_currency"] ?>"
data-leadsource="<?php echo $row["leads_source"] ?>"
data-leadsphone="<?php echo $row["leads_phone"] ?>"

data-leadsindustry="<?php echo $row["leads_industry"] ?>"
data-leadsowner="<?php echo $row["leads_owner"] ?>"
data-leadsdescription="<?php echo $row["leads_description"] ?>"
data-leadsstatus="<?php echo $row["leads_status"] ?>"
data-leadstags="<?php echo $row["leads_tags"] ?>"



		><i class="ti ti-edit text-blue"></i> Edit</a>
		<a class="dropdown-item" href="#" data-bs-toggle="modal" data-userid="<?php echo $row["leads_id"] ?>" data-leadsname="<?php echo $row["leads_name"] ?>" data-bs-target="#delete_contact">
				<i class="ti ti-trash text-danger"></i> Delete
			</a>

		</div></div>
	</td>
</tr>

		<?php
        // echo "<div class='$class'>" . $row['leads_name'] . "</div>";

        // Increment the index
        $index++;
	}
}else
{
	 echo "No results found.";
}


	 



 ?>



</tbody>
</table>
</div>
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
<h4>Add New Lead</h4>
<a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
<div class="pro-create">
<form action="php/leads.php" method="POST">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Lead Name <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="leads_name" placeholder="leads name">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Company Name <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="leads_company_name" placeholder="leads name">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Lead Owner Name <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="leads_owner" placeholder="Owner Name">
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<div class="radio-wrap">
<label class="col-form-label">Lead Type</label>
<div class="d-flex flex-wrap">
<div class="radio-btn">
<input type="radio" class="status-radio" id="person" name="leads_type" value="Person" >
<label for="person">Person</label>
</div>
<div class="radio-btn">
<input type="radio" class="status-radio" id="org"  name="leads_type" value="Organization">
<label for="org">Organization</label>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
	<div class="form-wrap">
<label class="col-form-label">Email <span class="text-danger">*</span></label>
<input type="email"  class="form-control" name="email" placeholder="abc@example.com" required>
</div>
</div>

<!-- <div class="col-md-12">
<div class="form-wrap">
<div class="d-flex justify-content-between align-items-center">
<label class="col-form-label">Company <span class="text-danger">*</span></label>
<a href="#" class="add-new add-new-company add-popups"><i class="ti ti-square-rounded-plus me-2"></i>Add New</a>
</div>
<select class="select">
<option>Choose</option>
<option>NovaWave LLC</option>
<option>Silver Hawk</option>
<option>Summit Peak</option>
<option>RiverStone Ventur</option>
</select>
</div>
</div> -->
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Value <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="leads_value">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Currency <span class="text-danger">*</span></label>
<select class="select" name="leads_currency">
<option>Choose</option>
<option value="$">$</option>
<option value="€">€</option>
</select>
</div>
</div>
<div class="col-md-12">
<div class="row align-items-end">
<div class="col-md-8">
<div class="form-wrap">
<label class="col-form-label">Phone <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="leads_phone">
</div>
</div>
<div class="col-md-4 d-flex align-items-center">
<div class="form-wrap w-100">
<select class="select" name="leads_phone_type">
<option>Choose</option>
<option value="Work">Work</option>
<option value="Home">Home</option>
</select>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Source <span class="text-danger">*</span></label>
<select class="select2" name="leads_source">
<option>Choose</option>
<option value="Phone Calls">Phone Calls</option>
<option value="Social Media">Social Media</option>
<option value="Referral Sites">Referral Sites</option>
<option value="Web Analytics">Web Analytics</option>
<option value="Previous Purchases">Previous Purchases</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Industry <span class="text-danger">*</span></label>
<select class="select" name="leads_industry">
<option>Choose</option>
<option value="Retail Industry">Retail Industry</option>
<option value="Banking">Banking</option>
<option value="Hotels">Hotels</option>
<option value="Financial Services">Financial Services</option>
<option value="Insurance">Insurance</option>
</select>
</div>
</div>
<!-- <div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Owner</label>
<select class="multiple-img">
<option data-image="assets/img/profiles/avatar-14.jpg" selected>Jerald</option>
<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Tags </label>
<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label" value="Rated">
</div>
</div> -->
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Description <span class="text-danger">*</span></label>
<textarea class="form-control" rows="5" name=""></textarea>
</div>
</div>
<div class="col-md-12">
<div class="radio-wrap form-wrap">
<label class="col-form-label">Visibility</label>
<div class="d-flex flex-wrap">
<div class="radio-btn">
<input type="radio" class="status-radio" id="public1" name="visible">
<label for="public1">Public</label>
</div>
<div class="radio-btn">
<input type="radio" class="status-radio" id="private1" name="visible">
<label for="private1">Private</label>
</div>
<div class="radio-btn" data-bs-toggle="modal" data-bs-target="#access_view">
<input type="radio" class="status-radio" id="people1" name="visible">
<label for="people1">Select People</label>
</div>
</div>
</div>
<div class="radio-wrap form-wrap">
<label class="col-form-label">Status</label>
<div class="d-flex flex-wrap">
<div class="radio-btn">
<input type="radio" class="status-radio" id="active1" name="leads_status" value="Active" checked>
<label for="active1">Active</label>
</div>
<div class="radio-btn">
<input type="radio" class="status-radio" id="inactive1" name="leads_status" value="Inactive">
<label for="inactive1">Inactive</label>
</div>
</div>
</div>
</div>
</div>
<div class="submit-button text-end">
<a href="#" class="btn btn-light sidebar-close">Cancel</a>
<button class="btn btn-primary" type="submit" name="submit">Create</button>
</div>
</form>
</div>
</div>
</div>
</div>

<?php include_once("common/edit-leads.php") ?>





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
<p class="del-info">Remove Contact <span id="leadsname"></span> from your Account.</p>
<div class="col-lg-12 text-center modal-btn">
	<form action="php/leads_delete.php" method="POST">
	<input type="hidden" name="user_id" value="">


<input type="hidden" class="form-control" name="leadsname" value="">
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<button type="submit" name="submit_leads_delete" class="btn btn-danger">Yes, Delete it</button>
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
<i class="ti ti-building"></i>
</div>
<h3>Leads Created Successfully!!!</h3>
<p>View the details of Lead, created</p>
<div class="col-lg-12 text-center modal-btn">
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<a href="leads-details.html" class="btn btn-primary">View Details</a>
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
<form action="leads.html">
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
<form action="leads.html">
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


<div class="toggle-popup2">
<div class="sidebar-layout">
<div class="sidebar-header">
<h4>Add New Company</h4>
<a href="#" class="sidebar-close2 toggle-btn"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
<div class="pro-create">
<form action="leads.html">
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
<img src="assets/img/icons/company-icon-03.svg" alt="img" class="preview1">
<button type="button" class="profile-remove">
<i class="ti ti-x"></i>
</button>
</div>
<div class="profile-upload-content">
<label class="profile-upload-btn">
<i class="ti ti-file-broken"></i> Upload File
<input type="file" class="input-img">
</label>
<p>JPG, GIF or PNG. Max size of 800K</p>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Company Name</label>
<input type="text" class="form-control">
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
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Phone 1 <span class="text-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Phone 2</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Fax <span class="text-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Website <span class="text-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Ratings </label>
<div class="icon-form-end">
<span class="form-icon"><i class="ti ti-star"></i></span>
<input type="text" class="form-control" placeholder="4.2">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Owner</label>
<select class="multiple-img">
<option data-image="assets/img/profiles/avatar-18.jpg" selected>Jerald</option>
<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Tags </label>
<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label" value="Collab">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<div class="d-flex align-items-center justify-content-between">
<label class="col-form-label">Deals</label>
</div>
<select class="select2">
<option>Choose</option>
<option>Collins</option>
<option>Konopelski</option>
<option>Adams</option>
<option>Schumm</option>
<option>Wisozk</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Source <span class="text-danger">*</span></label>
<select class="select2">
<option>Choose</option>
<option>Phone Calls</option>
<option>Social Media</option>
<option>Referral Sites</option>
<option>Web Analytics</option>
<option>Previous Purchases</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Industry <span class="text-danger">*</span></label>
<select class="select">
<option>Choose</option>
<option>Retail Industry</option>
<option>Banking</option>
<option>Hotels</option>
<option>Financial Services</option>
<option>Insurance</option>
</select>
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Contact <span class="text-danger">*</span></label>
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
<label class="col-form-label">Currency <span class="text-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Language <span class="text-danger">*</span></label>
<select class="select">
<option>Choose</option>
<option>English</option>
<option>Arabic</option>
<option>Chinese</option>
<option>Hindi</option>
</select>
</div>
</div>
<div class="col-md-12">
<div class="form-wrap mb-0">
<label class="col-form-label">Description <span class="text-danger">*</span></label>
<textarea class="form-control" rows="5"></textarea>
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
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">City </label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">State / Province </label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-wrap">
<label class="col-form-label">Country</label>
<select class="select">
<option>Choose</option>
<option>India</option>
<option>USA</option>
<option>France</option>
<option>UK</option>
<option>UAE</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-wrap">
<label class="col-form-label">Zipcode </label>
<input type="text" class="form-control">
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
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Skype </label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Linkedin </label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Twitter</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-wrap">
<label class="col-form-label">Whatsapp</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-wrap">
<label class="col-form-label">Instagram</label>
<input type="text" class="form-control">
</div>
</div>
</div>
</div>
</div>
</div>


<div class="user-accordion-item">
<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#access"><span><i class="ti ti-accessible"></i></span>Access</a>
<div class="accordion-collapse collapse" id="access" data-bs-parent="#list-accord">
<div class="content-collapse">
<div class="row">
<div class="col-md-12">
<div class="radio-wrap form-wrap">
<label class="col-form-label">Visibility</label>
<div class="d-flex flex-wrap">
<div class="radio-btn">
<input type="radio" class="status-radio" id="public" name="visible">
<label for="public">Public</label>
</div>
<div class="radio-btn">
<input type="radio" class="status-radio" id="private" name="visible">
<label for="private">Private</label>
</div>
<div class="radio-btn" data-bs-toggle="modal" data-bs-target="#access_view">
<input type="radio" class="status-radio" id="people" name="visible">
<label for="people">Select People</label>
</div>
</div>
</div>
<div class="radio-wrap">
<label class="col-form-label">Status</label>
<div class="d-flex flex-wrap">
<div class="radio-btn">
<input type="radio" class="status-radio" id="active" name="status" checked>
<label for="active">Active</label>
</div>
<div class="radio-btn">
<input type="radio" class="status-radio" id="inactive" name="status">
<label for="inactive">Inactive</label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="submit-button text-end">
<a href="#" class="btn btn-light sidebar-close2">Cancel</a>
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
		$("#live_search").keyup(function(){
			var input = $(this).val();
			// alert(input);
			if (input != "") {
				$.ajax({
					url:"php/leads_fetch.php",
					method:"POST",
					data:{input:input},

					success:function(data){
						$("#searchresult").html(data);
					}
				})
			}else{
				$.ajax({
					url:"php/all_leads.php",
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
    var leadsname = $(e.relatedTarget).data('leadsname')
    document.getElementById("leadsname").innerHTML= leadsname;

    $(e.currentTarget).find('input[name="user_id"]').val(userid);
    $(e.currentTarget).find('input[name="leadsname"]').val(leadsname);
});
</script>

<script type="text/javascript">
	$('#edit-po').on('show.bs.modal', function(e) {
		var leadsemail = $(e.relatedTarget).data('leadsemail');
    var leadsid = $(e.relatedTarget).data('leadsid');
     var leadsname = $(e.relatedTarget).data('leadsname');
    var leadstype = $(e.relatedTarget).data('leadstype');
    var leadscompanyname = $(e.relatedTarget).data('leadscompanyname');
    var leadscompanyid = $(e.relatedTarget).data('leadscompanyid');
    var leadsvalue = $(e.relatedTarget).data('leadsvalue');
    var leadscurrency = $(e.relatedTarget).data('leadscurrency');
    var leadsphone = $(e.relatedTarget).data('leadsphone');
    var leadsphoneType = $(e.relatedTarget).data('leadsphonetype');
    var leadsource = $(e.relatedTarget).data('leadsource');
    var leadsindustry = $(e.relatedTarget).data('leadsindustry');
    var leadsowner = $(e.relatedTarget).data('leadsowner');
    var leadsdescription = $(e.relatedTarget).data('leadsdescription');
    var leadsstatus = $(e.relatedTarget).data('leadsstatus');
    var leadstags = $(e.relatedTarget).data('leadstags');
    
     $(e.currentTarget).find('input[name="leadsindustry"]').val(leadsindustry);
    $(e.currentTarget).find('input[name="leadsowner"]').val(leadsowner);
    $(e.currentTarget).find('textarea[name="leadsdescription"]').val(leadsdescription);
     $(e.currentTarget).find('input[name="leadsource"]').val(leadsource);
     $(e.currentTarget).find('input[name="leadsemail"]').val(leadsemail);
    $(e.currentTarget).find('input[name="leadsid"]').val(leadsid);
    $(e.currentTarget).find('input[name="leadsname"]').val(leadsname);
    $(e.currentTarget).find('input[name="leadstype"]').val(leadstype);
    $(e.currentTarget).find('input[name="leadscompanyname"]').val(leadscompanyname);
    $(e.currentTarget).find('input[name="leadscompanyid"]').val(leadscompanyid);
    $(e.currentTarget).find('input[name="leadsvalue"]').val(leadsvalue);
    $(e.currentTarget).find('input[name="leadscurrency"]').val(leadscurrency);
    $(e.currentTarget).find('input[name="leadsphone"]').val(leadsphone);
    $(e.currentTarget).find('input[name="leadsphonetype"]').val(leadsphonetype);
    
    
    $(e.currentTarget).find('input[name="leadsstatus"]').val(leadsstatus);
    $(e.currentTarget).find('input[name="leadstags"]').val(leadstags);
   
   
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