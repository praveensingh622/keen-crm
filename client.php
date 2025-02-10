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
<?php
 include_once("common/head.php");
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


<?php include_once("common/sidebar.php");
 ?>


<div class="page-wrapper">
<div class="content">
<div class="row">
<div class="col-md-12">

<div class="page-header">
<div class="row align-items-center">
<div class="col-8">
<h4 class="page-title">Total Clients<span class="count-title">
<?php
$sql_panel = "SELECT * FROM clients";
$result_panel = mysqli_query($conn, $sql_panel);
$total_panel = mysqli_num_rows($result_panel);
echo $total_panel;
	 ?>
</span></h4>
</div>
<div class="col-4 text-end">
<div class="head-icons">
<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
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
<input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Search Companies">
</div>
</div>
<div class="col-md-7 col-sm-8">
<div class="export-list text-sm-end">
<ul>
	<li>
<div class="export-dropdwon">
<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-package-export"></i>Import</a>
<div class="dropdown-menu  dropdown-menu-end">
<ul>

<li>
<form class="row g-3" action="importclientData.php" method="post" enctype="multipart/form-data">
            <div class="col-auto">
                <label for="fileInput" class="visually-hidden">File</label>
                <input type="file" class="form-control" name="file" id="fileInput">
            </div>
            <div class="col-auto">
                <input type="submit" class="btn btn-primary mb-3" name="importSubmit" value="Import">
            </div>
        </form>
</li>
</ul>
</div>
</div>
</li>
<li>
<div class="export-dropdwon">
<a  href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-package-export"></i>Export</a>
<div class="dropdown-menu  dropdown-menu-end">
<ul>

<li>
<a href="export_client.php"><i class="ti ti-file-type-xls text-green"></i>Export as Excel </a>
</li>
</ul>
</div>
</div>
</li>
<li>
<a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i>Add Client</a>
</li>
</ul>
</div>
</div>
</div>
</div>




<div class="">
<table class="table" >
<thead class="thead-light">
<tr>
<th class="no-sort">
<label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
</th>
<th class="no-sort"></th>
<th>Company Name</th>
<th>Phone</th>
<th>Email</th>
<th>Owner</th>
<th>Contact </th>
<th>Invitation</th>
<th>Status</th>
<th class="text-end">Action</th>
</tr>
</thead>

<tbody id="searchresult">
	<?php 
	include_once("php/config.php");
$sql = "SELECT * FROM clients";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
	$index = 0;

	while ($row = mysqli_fetch_assoc($result)) {
		$class = ($index % 2 == 0) ? 'even' : 'odd';
		 // Output the div with the appropriate class

		?>

<tr class="odd" >
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
	<h2 class="table-avatar d-flex align-items-center"><a href="" class="company-img">
		<img class="avatar-img" src="php/<?php echo $row["pic"] ?>" alt="User Image"></a><a href="" class="profile-split d-flex flex-column"><?php echo $row["company"] ?></a></h2>
</td>
<td><?php echo $row["phone"] ?></td>
<td><?php echo $row["email"] ?></td>


<td><?php echo $row["username"] ?></td>
<td>
	<ul class="social-links d-flex align-items-center">
		<li><a href="#"><i class="ti ti-mail"></i></a></li>
		<li><a href="#"><i class="ti ti-phone-check"></i></a></li>
		<li><a href="#"><i class="ti ti-message-circle-share"></i></a></li>
		<li><a href="#"><i class="ti ti-brand-skype"></i></a></li>
		<li><a href="#"><i class="ti ti-brand-facebook "></i></a></li>
	</ul>
</td>
<td><a href="php/client-invitation-email-first-time.php?email=<?=$row["email"]?>&name=<?=$row["username"]?>">Send </a></td>
<td>
	<span class="badge badge-pill badge-status bg-success1"><?php echo $row["status"] ?></span>
</td>
<td>
	<div class="dropdown table-action">
		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
			<i class="fa fa-ellipsis-v"></i>
		</a>
		<div class="dropdown-menu dropdown-menu-right">
			<a class="dropdown-item edit-popup" 
			data-bs-toggle="modal" 
            data-bs-target="#edit-po" 
            data-clientid= "<?php echo $row["id"] ?>"
            data-username="<?php echo $row["username"] ?>"
            data-password="<?php echo $row["password"] ?>"
            data-email="<?php echo $row["email"] ?>"
            data-phone="<?php echo $row["phone"] ?>"
            data-location="<?php echo $row["location"] ?>"
            data-company="<?php echo $row["company"] ?>"
            data-status="<?php echo $row["status"] ?>"
            data-street="<?php echo $row["street"] ?>"
            data-city="<?php echo $row["city"] ?>"
            data-state="<?php echo $row["state"] ?>"
            data-country="<?php echo $row["country"] ?>"
            data-zipcode="<?php echo $row["zipcode"] ?>"
            data-facebook="<?php echo $row["facebook"] ?>"
            data-skype="<?php echo $row["skype"] ?>"
            data-linkedin="<?php echo $row["linkedin"] ?>"
            data-twitter="<?php echo $row["twitter"] ?>"
            data-whatsapp="<?php echo $row["whatsapp"] ?>"
            data-instagram="<?php echo $row["instagram"] ?>"
            data-description="<?php echo $row["description"] ?>"
            data-pic="<?php echo "php/" . $row["pic"] ?>"
            data-altphone="<?php echo $row["altphone"] ?>"
            data-website="<?php echo $row["website"] ?>"
            data-source="<?php echo $row["source"] ?>"`
            data-amount="<?php echo $row["amount"] ?>"
            data-rating="<?php echo $row["rating"] ?>"
            
            >
				<i class="ti ti-edit text-blue"></i> Edit
			</a>
			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-userid="<?php echo $row["id"] ?>" data-leadsname="<?php echo $row["company"] ?>" data-bs-target="#delete_contact">
				<i class="ti ti-trash text-danger"></i> Delete
			</a>
			
		</div>
	</div>
</td>
</tr>
<?php  
}
}else
{
	 echo "No results found.";
}; ?>
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
<h4>Add New Client</h4>

<a href="#" class="sidebar-close toggle-btn  sidebar-close"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
<form action="php/create-new-client.php" method="POST" enctype="multipart/form-data" class="toggle-height">
<div class="pro-create">
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
<img src="assets/img/icons/company-icon-03.svg" class="preview1" alt="img">
<button type="button" class="profile-remove">
<i class="ti ti-x"></i>
</button>
</div>
<div class="profile-upload-content">
<label class="profile-upload-btn">
<i class="ti ti-file-broken"></i> Upload File
<input type="file" name="fileToUpload" class="input-img" required>
</label>
<p>JPG, GIF or PNG. Max size of 800K</p>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Company Name</label>
<input type="text" name="company_name" class="form-control" required>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<div class="d-flex justify-content-between align-items-center">
<label class="col-form-label">Email <span class="text-danger">*</span></label>

</div>
<input type="text" name="email" class="form-control" required>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Phone Number <span class="text-danger">*</span></label>
<input type="text" name="phone" class="form-control" required>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Alternate Phone Number <span class="text-danger">*</span></label>
<input type="text" name="alt_phone" class="form-control" required>
</div>
</div>

<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Website <span class="text-danger">*</span></label>
<input type="text" name="website" class="form-control" required>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Ratings </label>
<div class="icon-form-end">
<span class="form-icon"><i class="ti ti-star"></i></span>
<input type="text" name="rating" class="form-control" placeholder="4.2">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Owner</label>
<input type="text" name="owner" class="form-control" required>


</div>
</div>

<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Source <span class="text-danger">*</span></label>
<select class="select2" name="source">
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
<label class="col-form-label">Amount <span class="text-danger">*</span></label>
<input type="text" name="amount" class="form-control">
</div>
</div>

<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Password <span class="text-danger">*</span></label>
<input type="text" name="password" class="form-control" required>
</div>
</div>




<div class="col-md-12">
<div class="form-wrap mb-0">
<label class="col-form-label">Description <span class="text-danger">*</span></label>
<textarea class="form-control" name="description" rows="5"></textarea>
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
<input type="text" name="street" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">City </label>
<input type="text" name="city" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">State / Province </label>
<input type="text" name="state" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-wrap">
<label class="col-form-label">Country</label>
<select class="select" name="country">
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
<input type="text" name="zipcode" class="form-control">
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
<input type="text" name="facebook" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Skype </label>
<input type="text" name="skype" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Linkedin </label>
<input type="text" name="linkedin" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Twitter</label>
<input type="text" name="twitter" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-wrap">
<label class="col-form-label">Whatsapp</label>
<input type="text" name="whatsapp" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-wrap">
<label class="col-form-label">Instagram</label>
<input type="text" name="instagram" class="form-control">
</div>
</div>
</div>
</div>
</div>
</div>




</div>
</div>
<div class="submit-button text-end">
<a href="#" class="btn btn-light sidebar-close">Cancel</a>
<button type="submit" name="create_client" class="btn btn-primary">Create</button>
</div>
</form>
</div>
</div>
</div>


<div class="toggle-popup1">
<div class="sidebar-layout">
<div class="sidebar-header">
<h4>Edit Company</h4>
<a href="" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
	<div class="pro-create" id="edit-po">

<form action="php/edit-clients.php" method="POST" enctype="multipart/form-data" class="toggle-height">
<div class="accordion-lists" id="list-accords">

<div class="user-accordion-item">
<a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#edit-basic"><span><i class="ti ti-user-plus"></i></span>Basic Info</a>
<div class="accordion-collapse collapse show" id="edit-basic" data-bs-parent="#list-accords">
<div class="content-collapse">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<div class="profile-upload">
<div class="profile-upload-img">
<span><i class="ti ti-photo"></i></span>
<img src="pic" class="preview1 it" alt="img">
<button type="button" class="profile-remove">
<i class="ti ti-x"></i>
</button>
</div>
<div class="profile-upload-content">
<label class="profile-upload-btn">
<i class="ti ti-file-broken"></i> Upload File
<input type="file" name="fileToUpload" class="input-img">
</label>
<p>JPG, GIF or PNG. Max size of 800K</p>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
	<img type="text"  >

<label class="col-form-label">Company Name</label>

<input type="hidden" name="clientid" class="form-control" value="">
<input type="text" name="company" class="form-control" value="">
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<div class="d-flex justify-content-between align-items-center">
<label class="col-form-label">Email <span class="text-danger">*</span></label>

</div>
<input type="text" name="email" class="form-control" value="">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Phone <span class="text-danger">*</span></label>
<input type="text" name="phone" class="form-control" value="">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Phone 2</label>
<input type="text" name="altphone" class="form-control">
</div>
</div>
<!-- <div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Fax <span class="text-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div> -->
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Website <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="website">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Ratings </label>
<div class="icon-form-end">
<span class="form-icon"><i class="ti ti-star"></i></span>
<input type="text" class="form-control" name="rating" placeholder="4.2" value="4.2">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Owner</label>
<input type="text" name="username" class="form-control" value="">
</div>
</div>

<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Source <span class="text-danger">*</span></label>
<input type="text" name="source" class="form-control">
</div>
</div>

<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Amount <span class="text-danger">*</span></label>
<input type="text" name="amount" class="form-control">
</div>
</div>

<div class="col-md-12">
<div class="form-wrap mb-0">
<label class="col-form-label">Description <span class="text-danger">*</span></label>
<textarea class="form-control" name="description" rows="5"></textarea>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="user-accordion-item">
<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#edit-address"><span><i class="ti ti-map-pin-cog"></i></span>Address Info</a>
<div class="accordion-collapse collapse" id="edit-address" data-bs-parent="#list-accords">
<div class="content-collapse">
<div class="row">
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Street Address </label>
<input type="text" name="street" class="form-control" value="22, Ave Street">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">City </label>
<input type="text" name="city" class="form-control" value="Denver">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">State / Province </label>
<input type="text" name="state" class="form-control" value="Colorado">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-wrap">
<label class="col-form-label">Country</label>
<input type="text" name="country" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-0">
<label class="col-form-label">Zipcode </label>
<input type="text" name="zipcode" class="form-control">
</div>
</div>
</div>
</div>
</div>
</div>


<div class="user-accordion-item">
<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#edit-social"><span><i class="ti ti-social"></i></span>Social Profile</a>
<div class="accordion-collapse collapse" id="edit-social" data-bs-parent="#list-accords">
<div class="content-collapse">
<div class="row">
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Facebook</label>
<input type="text" name="facebook" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Skype </label>
<input type="text" name="skype" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Linkedin </label>
<input type="text" name="linkedin" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Twitter</label>
<input type="text" name="twitter" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-wrap">
<label class="col-form-label">Whatsapp</label>
<input type="text" name="whatsapp" class="form-control" value="1234567890">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap mb-0">
<label class="col-form-label">Instagram</label>
<input type="text" name="instagram" class="form-control">
</div>
</div>

</div>
</div>
</div>
</div>


</div>
</div>
<div class="submit-button text-end">
<a href="#" class="btn btn-light sidebar-close1">Cancel</a>
<button type="submit" name="edit_client" class="btn btn-primary">Save Changes</button>
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
<h3>Remove Companies?</h3>
<p class="del-info">Remove Company <span id="leadsname"></span> from your Account.</p>
<div class="col-lg-12 text-center modal-btn">
	<form action="php/company_delete.php" method="POST">
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
<h3>Company Created Successfully!!!</h3>
<p>View the details of company, created</p>
<div class="col-lg-12 text-center modal-btn">
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<a href="" class="btn btn-primary">View Details</a>
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
<form action="#">
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


<div class="toggle-popup2">
<div class="sidebar-layout">
<div class="sidebar-header">
<h4>Add New Deals</h4>
<a href="#" class="sidebar-close2 toggle-btn"><i class="ti ti-x"></i></a>
</div>
<div class="toggle-body">
<form action="" class="toggle-height">
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
<button type="submit" class="btn btn-primary">Create</button>
</div>
</div>
</form>
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
					url:"php/clients.php",
					method:"POST",
					data:{input:input},

					success:function(data){
						$("#searchresult").html(data);
					}
				})
			}else{
				$.ajax({
					url:"php/all_clients.php",
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
	$('#edit-po').on('show.bs.modal', function(e) {
    var clientid = $(e.relatedTarget).data('clientid');
     var username = $(e.relatedTarget).data('username');
    var password = $(e.relatedTarget).data('password');
    var email = $(e.relatedTarget).data('email');
    var phone = $(e.relatedTarget).data('phone');
    var location = $(e.relatedTarget).data('location');
    var company = $(e.relatedTarget).data('company');
    var status = $(e.relatedTarget).data('status');
    var street = $(e.relatedTarget).data('street');
    var city = $(e.relatedTarget).data('city');
    var state = $(e.relatedTarget).data('state');
    var country = $(e.relatedTarget).data('country');
    var zipcode = $(e.relatedTarget).data('zipcode');
    var facebook = $(e.relatedTarget).data('facebook');
    var skype = $(e.relatedTarget).data('skype');
    var linkedin = $(e.relatedTarget).data('linkedin');
    var twitter = $(e.relatedTarget).data('twitter');
    var whatsapp = $(e.relatedTarget).data('whatsapp');
    var instagram = $(e.relatedTarget).data('instagram');
    var description = $(e.relatedTarget).data('description');
    var altphone = $(e.relatedTarget).data('altphone');
    var website = $(e.relatedTarget).data('website');
    var source = $(e.relatedTarget).data('source');
    var amount = $(e.relatedTarget).data('amount');
    var rating = $(e.relatedTarget).data('rating');
    var pic = $(e.relatedTarget).data('pic');
    // var pic1 = $(e.relatedTarget).data('pic');


     $(e.currentTarget).find('input[name="clientid"]').val(clientid);
    $(e.currentTarget).find('input[name="username"]').val(username);
    $(e.currentTarget).find('input[name="password"]').val(password);
    $(e.currentTarget).find('input[name="email"]').val(email);
    $(e.currentTarget).find('input[name="phone"]').val(phone);
    $(e.currentTarget).find('input[name="location"]').val(location);
    $(e.currentTarget).find('input[name="company"]').val(company);
    $(e.currentTarget).find('input[name="status"]').val(status);
    $(e.currentTarget).find('input[name="street"]').val(street);
    $(e.currentTarget).find('input[name="city"]').val(city);
    $(e.currentTarget).find('input[name="state"]').val(state);
    $(e.currentTarget).find('input[name="country"]').val(country);
    $(e.currentTarget).find('input[name="zipcode"]').val(zipcode);
    $(e.currentTarget).find('input[name="facebook"]').val(facebook);
    $(e.currentTarget).find('input[name="skype"]').val(skype);
    $(e.currentTarget).find('input[name="linkedin"]').val(linkedin);
    $(e.currentTarget).find('input[name="twitter"]').val(twitter);
    $(e.currentTarget).find('input[name="whatsapp"]').val(whatsapp);
    $(e.currentTarget).find('input[name="instagram"]').val(instagram);
    $(e.currentTarget).find('textarea[name="description"]').val(description);
    $(e.currentTarget).find('input[name="altphone"]').val(altphone);
    $(e.currentTarget).find('input[name="website"]').val(website);
    $(e.currentTarget).find('input[name="source"]').val(source);
    $(e.currentTarget).find('input[name="amount"]').val(amount);
    $(e.currentTarget).find('input[name="rating"]').val(rating);
    
    $(e.currentTarget).find('img[src="pic"]').attr('src', pic);
});
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