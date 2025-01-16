<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Keeninsite- Roles Permission</title>
<?php include_once("common/head.php");
include_once("php/config.php"); ?>
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
<h4 class="page-title">Roles</h4>
</div>
<div class="col-4 text-end">
<div class="head-icons">
<a href="roles-permissions.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
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
<input type="text" class="form-control" placeholder="Search Roles">
</div>
</div>
<div class="col-md-7 col-sm-8">
<div class="export-list text-sm-end">
<ul>
<li>
<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_role"><i class="ti ti-square-rounded-plus"></i>Add New Role</a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="table-responsive custom-table">
<table class="table" id="roles_list">
<thead class="thead-light">
<tr>

<th>Role Name</th>
<th>Created at</th>
<th class="no-sort">Action</th>
</tr>
</thead>
<tbody>
	<?php 
		$sql = "SELECT * FROM role";
		$result = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($result);
		if($num>0){
			while($row = mysqli_fetch_assoc($result)){
		
        echo '<tr>';
		
		echo "<td>".$row['role_name']."</td>";
		echo "<td>".$row['date']."</td>";
		echo '<td>';
		echo '<div class="dropdown table-action">';
		echo '<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">';
		echo '<i class="fa fa-ellipsis-v">';
		echo '</i>';
	    echo '</a>';
	    echo '<div class="dropdown-menu dropdown-menu-right">';
	    echo '<a class="dropdown-item edit-popup" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_role" data-userid="'.$row['role_id'].'" data-username="'.$row['role_name'].'">';
	    echo '<i class="ti ti-edit text-blue">';
	    echo '</i>';
	    echo "Edit";
	echo '</a>';
	echo '<a class="dropdown-item" href="permission.html">';
	echo '<i class="ti ti-shield text-success">';
	echo '</i>';
echo 'Permission';
echo '</a>';
echo '</div>';
echo '</div>';
echo '</td>';
	echo '</tr>';
		
		};

		}
		else{
echo "No Result Found";
		}

	?>
	
</tbody>
</table>
</div>
<div class="row align-items-center">
<div class="col-md-6">
<!-- <div class="datatable-length"></div> -->
</div>
<div class="col-md-6">
<!-- <div class="datatable-paginate"></div> -->
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="add_role" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Role</h5>
<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
<i class="ti ti-x"></i>
</button>
</div>
<div class="modal-body">
<form action="php/role-permission.php" method="POST">
<div class="form-wrap">
<label class="col-form-label">Role Name <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="role" required>
</div>
<div class="modal-btn">
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<button type="submit" name="submit" class="btn btn-primary">Create</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="edit_role" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Edit Role</h5>
<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
<i class="ti ti-x"></i>
</button>
</div>
<div class="modal-body">
<form action="roles-permissions.php" method="POST">
<div class="form-wrap">
<label class="col-form-label">Role Name <span class="text-danger">*</span></label>

<input type="hidden" name="user_id" value="">


<input type="text" class="form-control" name="user_name" >

</div>
<div class="modal-btn">
<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
<button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
</div>
</form>
<?php
	if(isset($_POST["submit"])){
		$id = $_POST["user_id"];
		$na = $_POST["user_name"];
$uprole = "UPDATE `role` SET `role_name` = '$na' WHERE `role`.`role_id` ='$id'";
$upresult = mysqli_query($conn,$uprole);
if($upresult){
	echo "<script >";
	echo "window.location.href = 'roles-permissions.php'";
echo '</script>';
}

}
?>

</div>
</div>
</div>
</div>

</div>

<script type="text/javascript">
	$('#edit_role').on('show.bs.modal', function(e) {
    var userid = $(e.relatedTarget).data('userid');
    $(e.currentTarget).find('input[name="user_id"]').val(userid);
});
</script>
<script type="text/javascript">
	$('#edit_role').on('show.bs.modal', function(e) {
    var username = $(e.relatedTarget).data('username');
    $(e.currentTarget).find('input[name="user_name"]').val(username);
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