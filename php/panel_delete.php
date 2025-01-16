<?php
ob_start();
include_once("config.php");
if (isset($_POST['submit'])) {
	$id = $_POST['user_id'];
$sql = "DELETE FROM admin where id= '$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
	header("Location:../create-panel.php");
}

}

if (isset($_POST["submit_leads_delete"])) {
	$id = $_POST['user_id'];
	$sql = "DELETE FROM leads where leads_id = '$id'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
	header("Location:../leads.php");
}
}


?>