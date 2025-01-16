<?php
if (isset($_POST['submit'])) {
$taskid = $_POST['projectid'];

include_once("config.php");

$sql = "DELETE FROM projects WHERE project_id = '$taskid'";
$result = mysqli_query($conn, $sql);

if ($result) {
	header("Location:../project.php");
}

}

?>