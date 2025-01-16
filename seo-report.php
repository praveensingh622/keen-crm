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
<style type="text/css">
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
   
    display: block !important;
    
}
</style>

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
<div class="col-md-12 mx-auto">

<div class="page-header">
<div class="row align-items-center">
<div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Default Datatable</h4>
                                <p class="card-text">
                                    This is the most basic example of the datatables with zero configuration. Use the
                                    <code>.datatable</code> class to initialize datatables.
                                </p>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table  datanew ">
                                        <thead>
                                            <tr>
                                                <th>Account</th>
                                                <th>Analyst</th>
                                                <th>On-site <br> Maintinance <br> Performed</th>
                                                <th>Account <br>Review</th>
                                                <th>Keyword <br>Research</th>
                                                <th>Intro <br>Call</th>
                                                <th>Analytics <br>Tracking</th>
                                                <th>Campaign <br>Deliverable<br> Audit<br> Performed</th>
                                                <th>KW<br> Approval</th>
                                                <th>Report<br> Creation</th>
                                                <th>Monthly<br> Followup</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td><form><div class="row"><div class="col-6 p-0 m-0">

<input type="text" name="" class="form-control">
</div>
<div class="col-6 p-0 m-0">
                                       <div class="form-wrap">
<select class="multiple-img" multiple  name="user_assign[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="1"></option>
   <option data-image="assets/img/flags/maintinance.png" value="1"></option>
   <option data-image="assets/img/flags/danger.png" value="1"></option>
</select>
</div></div></div></form></td>
                                                <td><form><div class="row"><div class="col-6 p-0 m-0">

<input type="text" name="" class="form-control">
</div>
<div class="col-6 p-0 m-0">
                                       <div class="form-wrap">
<select class="multiple-img" multiple  name="user_assign[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="1"></option>
   <option data-image="assets/img/flags/maintinance.png" value="1"></option>
   <option data-image="assets/img/flags/danger.png" value="1"></option>
</select>
</div></div></div></form></td>
                                                <td><form><div class="row"><div class="col-6 p-0 m-0">

<input type="text" name="" class="form-control">
</div>
<div class="col-6 p-0 m-0">
                                       <div class="form-wrap">
<select class="multiple-img" multiple  name="user_assign[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="1"></option>
   <option data-image="assets/img/flags/maintinance.png" value="1"></option>
   <option data-image="assets/img/flags/danger.png" value="1"></option>
</select>
</div></div></div></form></td>
                                                <td><form><div class="row"><div class="col-6 p-0 m-0">

<input type="text" name="" class="form-control">
</div>
<div class="col-6 p-0 m-0">
                                       <div class="form-wrap">
<select class="multiple-img" multiple  name="user_assign[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="1"></option>
   <option data-image="assets/img/flags/maintinance.png" value="1"></option>
   <option data-image="assets/img/flags/danger.png" value="1"></option>
</select>
</div></div></div></form></td>


<td><form><div class="row"><div class="col-6 p-0 m-0">

<input type="text" name="" class="form-control">
</div>
<div class="col-6 p-0 m-0">
                                       <div class="form-wrap">
<select class="multiple-img" multiple  name="user_assign[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="1"></option>
   <option data-image="assets/img/flags/maintinance.png" value="1"></option>
   <option data-image="assets/img/flags/danger.png" value="1"></option>
</select>
</div></div></div></form></td>



<td><form><div class="row"><div class="col-6 p-0 m-0">

<input type="text" name="" class="form-control">
</div>
<div class="col-6 p-0 m-0">
                                       <div class="form-wrap">
<select class="multiple-img" multiple  name="user_assign[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="1"></option>
   <option data-image="assets/img/flags/maintinance.png" value="1"></option>
   <option data-image="assets/img/flags/danger.png" value="1"></option>
</select>
</div></div></div></form></td>



<td><form><div class="row"><div class="col-6 p-0 m-0">

<input type="text" name="" class="form-control">
</div>
<div class="col-6 p-0 m-0">
                                       <div class="form-wrap">
<select class="multiple-img" multiple  name="user_assign[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="1"></option>
   <option data-image="assets/img/flags/maintinance.png" value="1"></option>
   <option data-image="assets/img/flags/danger.png" value="1"></option>
</select>
</div></div></div></form></td>



<td><form><div class="row"><div class="col-6 p-0 m-0">

<input type="text" name="" class="form-control">
</div>
<div class="col-6 p-0 m-0">
                                       <div class="form-wrap">
<select class="multiple-img" multiple  name="user_assign[]" >
   <option data-image="assets/img/flags/flag_green.png" value="1"></option>
   <option data-image="assets/img/flags/flag_red.png" value="1"></option>
   <option data-image="assets/img/flags/maintinance.png" value="1"></option>
   <option data-image="assets/img/flags/danger.png" value="1"></option>
</select>
</div></div></div></form></td>



                                            </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
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