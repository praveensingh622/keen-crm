<?php 
include_once("config.php");
if (isset($_POST['submit_leads_delete'])) {
echo "button is clicked";
	$id = $_POST['user_id'];
	echo $id;
	$dlt = "DELETE FROM clients WHERE `clients`.`id` = '$id'";
	$result = mysqli_query($conn, $dlt);
	if($result){
		echo "company Is Deleted";
		header("Location:../client.php");
	} else{
  	echo "Error: " . $dlt . "<br>" . mysqli_error($conn);
  }

}




?>