<?php
if (isset($_POST['submit'])) {
$taskid = $_POST['taskid'];
$taskticket = $_POST['taskticket'];

include_once("config.php");

$sql = "DELETE FROM task WHERE task_ticket = '$taskticket'";
$result = mysqli_query($conn, $sql);



$sql1 = "DELETE FROM assign_task WHERE task_ticket= '$taskticket'";

$result1 = mysqli_query($conn, $sql1);
if ($result1) {
	header("Location:../task.php");
}

}

?>