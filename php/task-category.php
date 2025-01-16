<?php
ob_start();
include_once("config.php");
if (isset($_POST['submit'])) {
	$role = $_POST['role'];
	$date = date("d/m/Y");
	echo $date;
	$sql = "INSERT INTO task_category (`cat_name`) VALUES ('$role')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("Location:../task-category.php?status=201");
	}else{
		header("Location:../task-category.php?status=201");
	}
}


?>