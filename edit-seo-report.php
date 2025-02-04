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
<script src="https://cdn.tiny.cloud/1/v6edcpl9bl0acbvq9pl684uq2qeh0ienjq9istj802ofpl78/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>


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
<div class="col-md-10 mx-auto">

<div class="page-header">
    <h3 class="text-center pt-5 pb-5">Edit SEO Projects</h3>
<div class="row align-items-center">
<form action="php/add-seo-projects.php" class="toggle-height" method="POST"  enctype="multipart/form-data">
<div class="pro-create">
<div class="row">

<div class="col-md-6">
<label class="col-form-label">Account <span class="text-danger">*</span></label>
<div class="form-wrap icon-form">
<span class="form-icon"></span>
<input type="text" class="form-control" name="account">
</div>
</div>
<div class="col-md-6">
<label class="col-form-label">Analyst<span class="text-danger">*</span></label>
<div class="form-wrap icon-form">
<span class="form-icon"></span>
<input type="text" class="form-control" name="analyst">
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">On-site
Maintinance
Performed</label>
<div class="form-wrap icon-form">
<span class="form-icon"></span>
<input type="text" class="form-control" name="onsite_maintinance">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">On-site Maintinance Performed Status</label>
<div class="select-priority">
<div class="form-wrap">
<select class="multiple-img" multiple  name="maintinance[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="2"></option>
   <option data-image="assets/img/flags/maintinance.png" value="3"></option>
   <option data-image="assets/img/flags/danger.png" value="4"></option>
</select>
</div>

</div>
</div>
</div>






<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Account Review</label>
<div class="form-wrap icon-form">
<span class="form-icon"></span>
<input type="text" class="form-control" name="account_review">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Account Review Status</label>
<div class="select-priority">
<div class="form-wrap">
<select class="multiple-img" multiple  name="account_review_status[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="2"></option>
   <option data-image="assets/img/flags/maintinance.png" value="3"></option>
   <option data-image="assets/img/flags/danger.png" value="4"></option>
</select>
</div>

</div>
</div>
</div>




<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Keyword Research</label>
<div class="form-wrap icon-form">
<span class="form-icon"></span>
<input type="text" class="form-control" name="keyword_research">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Keyword Research Status</label>
<div class="select-priority">
<div class="form-wrap">
<select class="multiple-img" multiple  name="keyword_research_status[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="2"></option>
   <option data-image="assets/img/flags/maintinance.png" value="3"></option>
   <option data-image="assets/img/flags/danger.png" value="4"></option>
</select>
</div>

</div>
</div>
</div>




<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Intro Call</label>
<div class="form-wrap icon-form">
<span class="form-icon"></span>
<input type="text" class="form-control" name="introcall">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Intro Call Status</label>
<div class="select-priority">
<div class="form-wrap">
<select class="multiple-img" multiple  name="introcall_status[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="2"></option>
   <option data-image="assets/img/flags/maintinance.png" value="3"></option>
   <option data-image="assets/img/flags/danger.png" value="4"></option>
</select>
</div>

</div>
</div>
</div>




<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Analytics Tracking</label>
<div class="form-wrap icon-form">
<span class="form-icon"></span>
<input type="text" class="form-control" name="analytics_tacking">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Analytics Tracking Status</label>
<div class="select-priority">
<div class="form-wrap">
<select class="multiple-img" multiple  name="analytics_tacking_status[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="2"></option>
   <option data-image="assets/img/flags/maintinance.png" value="3"></option>
   <option data-image="assets/img/flags/danger.png" value="4"></option>
</select>
</div>

</div>
</div>
</div>





<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Campaign Deliverable
Audit Performed</label>
<div class="form-wrap icon-form">
<span class="form-icon"></span>
<input type="text" class="form-control" name="campaign_deliverable">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Campaign Deliverable
Audit Performed Status</label>
<div class="select-priority">
<div class="form-wrap">
<select class="multiple-img" multiple  name="campaign_deliverable_status[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="2"></option>
   <option data-image="assets/img/flags/maintinance.png" value="3"></option>
   <option data-image="assets/img/flags/danger.png" value="4"></option>
</select>
</div>

</div>
</div>
</div>





<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">KW Approval</label>
<div class="form-wrap icon-form">
<span class="form-icon"></span>
<input type="text" class="form-control" name="kw_approval">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">KW Approval Status</label>
<div class="select-priority">
<div class="form-wrap">
<select class="multiple-img" multiple  name="kw_approval_status[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="2"></option>
   <option data-image="assets/img/flags/maintinance.png" value="3"></option>
   <option data-image="assets/img/flags/danger.png" value="4"></option>
</select>
</div>

</div>
</div>
</div>





<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Report Creation</label>
<div class="form-wrap icon-form">
<span class="form-icon"></span>
<input type="text" class="form-control" name="report_creation">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Report Creation Status</label>
<div class="select-priority">
<div class="form-wrap">
<select class="multiple-img" multiple  name="report_creation_status[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="2"></option>
   <option data-image="assets/img/flags/maintinance.png" value="3"></option>
   <option data-image="assets/img/flags/danger.png" value="4"></option>
</select>
</div>

</div>
</div>
</div>



<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Monthly Followup</label>
<div class="form-wrap icon-form">
<span class="form-icon"></span>
<input type="text" class="form-control" name="monthly_followup">
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Monthly Followup Status</label>
<div class="select-priority">
<div class="form-wrap">
<select class="multiple-img" multiple  name="monthly_followup_status[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="2"></option>
   <option data-image="assets/img/flags/maintinance.png" value="3"></option>
   <option data-image="assets/img/flags/danger.png" value="4"></option>
</select>
</div>

</div>
</div>
</div>





</div>
</div>
<div class="submit-button text-end">
<a href="#" class="btn btn-light sidebar-close">Cancel</a>
<button type="submit" name="submit" class="btn btn-primary">Create</button>
</div>
</form>
<form id="uploadForm" enctype="multipart/form-data">
        <input type="file" name="file" id="fileInput" style="display: none;" />
    </form>
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