<?php
ob_start();
include_once("config.php");
if (isset($_POST['submit'])) {
$comment = $_POST['comment'];
$taskticket = $_POST['taskticket'];

	$sql = "INSERT INTO `task_comment` ( `task_ticket`, `comment`, `task_user_id`) VALUES ('$taskticket', '$comment', '7')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("Location:../task-details.php?ticket=$taskticket");
	}
}
ob_flush();
?>