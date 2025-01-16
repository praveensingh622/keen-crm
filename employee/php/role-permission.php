<?php
include_once("config.php");
if (isset($_POST['submit'])) {
	$role = $_POST['role'];
	$date = date("d/m/Y");
	echo $date;
	$sql = "INSERT INTO role (`role_name`, `date`) VALUES ('$role', '$date')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("Location:../roles-permissions.php?status=201");
	}else{
		header("Location:../roles-permissions.php?status=201");
	}
}


?>