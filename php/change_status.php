<?php
ob_start();
include_once("config.php");

if (isset($_POST['input'])) {

$staus = $_POST['input'];
$ticket = $_POST['ticket'];
$sql = "UPDATE `task` SET `status` = '$staus' WHERE `task`.`task_ticket` = '$ticket'";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo $staus;
}
};

?>