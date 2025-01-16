<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$db_name = "keen_crm";

$conn = mysqli_connect($localhost, $user, $pass, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>