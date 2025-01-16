<?php
include_once("config.php");
if (isset($_POST['submit'])) {
$project_name = $_POST['project_name'];
$project_id = $_POST['project_id'];
$project_type = $_POST['project_type'];
$project_client = $_POST['project_client'];
// $project_client_id = $_POST['project_client_id'];
$category = $_POST['category'];
$project_timing = $_POST['project_timing'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$total = $_POST['total'];
$responsible = $_POST['responsible'];
$team_leader = $_POST['team_leader'];
$start_date = $_POST['start_date'];
$due_date = $_POST['due_date'];
$priority = $_POST['priority'];
$status = $_POST['status'];
$description = $_POST['description'];

$sql = "INSERT INTO `projects` (`project_id`, `project_name`, `project_no`, `project_type`, `client_name`, `client_id`, `project_timing`, `price`, `amount`, `total`, `responsible_person`, `team_leader`, `start_date`, `due_date`, `priority`, `status`, `description`) VALUES (NULL, '$project_name', '$project_id', '$project_type', '$project_client', '$project_client_id', '$project_timing', '$price', '$amount', '$total', '$responsible', '$team_leader', '$start_date', '$due_date', '$priority', '$status', '$description')";
$result = mysqli_query($conn,$sql);
if ($result) {
	header("Location:../create-panel.php");
}

}

?>