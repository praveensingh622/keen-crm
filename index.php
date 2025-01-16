<?php
ob_start();
session_start();
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Keeninsite-CRM</title>
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
<div class="row align-items-center ">
<div class="col-md-4">
<h3 class="page-title">Deals Dashboard</h3>
</div>
<div class="col-md-8 float-end ms-auto">
<div class="d-flex title-head">
<div class="daterange-picker d-flex align-items-center justify-content-center">
<div class="form-sort me-2">
<i class="ti ti-calendar"></i>
<input type="text" class="form-control  date-range bookingrange">
</div>
<div class="head-icons mb-0">
<a href="index.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 d-flex">
<div class="card flex-fill">
<div class="card-body">
<div class="statistic-header">
<h4><i class="ti ti-grip-vertical me-1"></i>Recently Created Leads</h4>
<div class="dropdown statistic-dropdown">
<div class="card-select">
<ul>
<li>
<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
<i class="ti ti-calendar-check me-2"></i>Last 30 days
</a>
<div class="dropdown-menu dropdown-menu-end">
<a href="javascript:void(0);" class="dropdown-item">
Last 15 days
</a>
<a href="javascript:void(0);" class="dropdown-item">
Last 30 days
</a>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="table-responsive">
<div class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row dt-row"><div class="col-sm-12 table-responsive"><table class="table dataTable no-footer"  style="width: 470px;">
<thead class="thead-light">
<tr><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 74px;">Leads Name</th>
	<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 88px;">Value</th>
	<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 72px;">Source</th>
	<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 73px;">Date</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 43px;">Owner</th>
</tr>
</thead>
<tbody>
	<?php 
	include_once("php/config.php");

$sql = "SELECT * FROM leads ORDER by leads_id DESC LIMIT 5";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result)){
	?>

<tr class="odd">
	<td><?=$row["leads_name"]?></td>
	<td><?=$row["leads_value"]?></td>
	<td><?=$row["leads_source"]?></td>
	<td><?=$row["leads_date"]?></td>
	<td><span class="badge badge-pill  bg-danger"><?=$row["leads_owner"]?></span></td>
</tr>
<?php }; ?>

</tbody>
</table></div></div><div class="row"><div class="col-sm-12 col-md-5"></div><div class="col-sm-12 col-md-7"></div></div></div>
</div>
</div>
</div>
</div>
<div class="col-md-6 d-flex">
<div class="card flex-fill">
<div class="card-body">
<div class="statistic-header">
<h4><i class="ti ti-grip-vertical me-1"></i>Recently Created Task</h4>
<div class="dropdown statistic-dropdown">
<div class="card-select">
<ul>
<li>
<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
<i class="ti ti-calendar-check me-2"></i>Last 30 days
</a>
<div class="dropdown-menu dropdown-menu-end">
<a href="javascript:void(0);" class="dropdown-item">
Last 15 days
</a>
<a href="javascript:void(0);" class="dropdown-item">
Last 30 days
</a>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="table-responsive">
<div class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row dt-row"><div class="col-sm-12 table-responsive"><table class="table dataTable no-footer"  style="width: 470px;">
<thead class="thead-light">
<tr><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 74px;">Task Name</th>
	<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 88px;">Asign To</th>
	<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 72px;">Priorty</th>
	<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 73px;">Date</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 43px;">Status</th>
</tr>
</thead>
<tbody>
	<?php 
	include_once("php/config.php");

$sql1 = "SELECT * FROM task ORDER BY 
        task_id DESC  
    LIMIT 5";
$result1 = mysqli_query($conn, $sql1);
while($row1=mysqli_fetch_assoc($result1)){
	?>

<tr class="odd">
	<td><?=$row1["title"]?></td>
	<td>
		<?php
$ticket = $row1["task_ticket"];
$sql2 = "SELECT * FROM assign_task where task_ticket= '$ticket'  ";
$result2 = mysqli_query($conn, $sql2);
$i= 01;
while ($row2=mysqli_fetch_assoc($result2)) {
	$user_id = $row2["emp_id"];
	$sql3 = "SELECT * FROM admin where id = '$user_id'";
	$result3 = mysqli_query($conn, $sql3);
	$row3 = mysqli_fetch_assoc($result3);
	echo $i++ . " ". $row3["name"] ." ". $row3["lname"]. "</br>";
}
		 ?>
	</td>
	<td><?=$row1["priority"]?></td>
	<td><?=$row1["due_date"]?></td>
	<td><span class="badge badge-pill  bg-danger"><?=$row1["status"]?></span></td>
</tr>
<?php }; ?>

</tbody>
</table></div></div><div class="row"><div class="col-sm-12 col-md-5"></div><div class="col-sm-12 col-md-7"></div></div></div>
</div>
</div>
</div>
</div>
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
<script src="assets/plugins/apexchart/apexcharts.min.js" type="text/javascript"></script>
<script src="assets/plugins/apexchart/chart-data.js" type="text/javascript"></script>
<script src="assets/js/jsonscript.js" type="text/javascript"></script>

</body>
</html>