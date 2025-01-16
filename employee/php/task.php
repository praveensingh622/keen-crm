<?php
session_start();
$id = $_SESSION['user_id'];
$name = $_SESSION['name'];

include_once("config.php");
$task= rand(1000000,9999999999);
if (isset($_POST['submit'])) {
	
	$title = $_POST['title'];
	$project = $_POST['project'];
	$start_date = $_POST['start_date'];
	$due_date = $_POST['due_date'];
	$priority = $_POST['priority'];
	// $user_assign = $_POST['user_assign'];
	$status = $_POST['status'];
	$description = $_POST['description'];
	$user_assign = count($_POST['user_assign']);
	// echo $description;
for ($i=0; $i<$user_assign ; $i++) 
{

	$assigntous = $_POST['user_assign'][$i];
	// echo $assigntous;
	$sql = "INSERT INTO assign_task (`task_ticket`,`emp_id`) VALUES ('$task','$assigntous')";
	$result = mysqli_query($conn, $sql);
	
}
$sql1 = "INSERT INTO task (`project_id`,`start_date`,`due_date`,`priority`,`status`,`description`,`title`,`task_ticket`,`task_created_by`,`task_created_by_id`) VALUES ('$project','$start_date','$due_date','$priority','$status','$description','$title','$task','$name','$id')";
	$result1 = mysqli_query($conn, $sql1);
	if ($result1) {
		header("Location:../task.php");
	}
}

?>