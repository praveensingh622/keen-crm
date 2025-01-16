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
<div class="row align-items-center">
<form action="php/task.php" class="toggle-height" method="POST"  enctype="multipart/form-data">
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
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Time Interval</label>
<div class="select-priority">

<select class="select" name="interval">
<option selected>No Interval</option>
<option value="7">7 Days</option>
<option value="15">15 Days</option>
<option value="30">30 Days</option>
</select>
</div>
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
	<option value="Revision Needed" selected>Revision Needed</option>
<option value="Active" >Active</option>
<option value="Inactive">Inactive</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap">
<label class="col-form-label">Task Category</label>
<select class="select" name="task_cateogry">
<option>Choose</option>
<?php 
include_once("php/config.php");
$sql = "SELECT * FROM task_category";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num>0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<option value=".$row["id"].">";
		echo $row["cat_name"];
		echo "</option>";
	}
}
 ?>
</select>
</div>
</div>
<div class="col-md-12">
<div class="form-wrap">
<label class="col-form-label">Description <span class="text-danger">*</span></label>
<!-- <textarea class="form-control" name="description"></textarea> -->
 <!-- TinyMCE Editor Textarea -->
    <textarea id="editor" name="description"></textarea>

    <!-- Form for file upload (hidden for TinyMCE) -->
    </div>
 <label for="fileUpload">Select image or PDF:</label>
  
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
    <script>
        tinymce.init({
            selector: '#editor',
            height: 400,
            plugins: 'image link media',
            toolbar: 'undo redo | styleselect | bold italic | link image | uploadfile',
            images_upload_handler: function (blobInfo, success, failure) {
                var formData = new FormData();
                formData.append('file', blobInfo.blob());

                // Send the file to the server using AJAX
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'output.php', true);
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.location) {
                            success(response.location); // Insert the image URL into the editor
                        } else {
                            failure('Failed to upload image');
                        }
                    } else {
                        failure('HTTP Error: ' + xhr.status);
                    }
                };
                xhr.onerror = function () {
                    failure('Request failed');
                };
                xhr.send(formData);
            },
            file_picker_callback: function (callback, value, meta) {
                if (meta.filetype === 'file' || meta.filetype === 'image') {
                    document.getElementById('fileInput').click();
                    document.getElementById('fileInput').onchange = function () {
                        var fileInput = document.getElementById('fileInput');
                        var formData = new FormData();
                        formData.append('file', fileInput.files[0]);

                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', 'output.php', true);
                        xhr.onload = function () {
                            if (xhr.status === 200) {
                                var response = JSON.parse(xhr.responseText);
                                if (response.location) {
                                    callback(response.location); // Insert the file or image URL
                                } else {
                                    alert('Failed to upload file');
                                }
                            }
                        };
                        xhr.send(formData);
                    };
                }
            }
        });
    </script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#live_search").keyup(function(){
			var input = $(this).val();
			// alert(input);
			if (input != "") {
				$.ajax({
					url:"php/tasklist.php",
					method:"POST",
					data:{input:input},

					success:function(data){
						$("#searchresult").html(data);
					}
				})
			}else{
				$.ajax({
					url:"php/all_tasklist.php",
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