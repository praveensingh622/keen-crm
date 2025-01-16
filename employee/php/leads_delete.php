<?php 
include_once("config.php");
if (isset($_POST['submit_leads_delete'])) {
echo "button is clicked";
	$id = $_POST['user_id'];
	echo $id;
	$dlt = "DELETE FROM leads WHERE `leads`.`leads_id` = '$id'";
	$result = mysqli_query($conn, $dlt);
	if($result){
		echo "company Is Deleted";
		header("Location:../leads.php");
	} else{
  	echo "Error: " . $dlt . "<br>" . mysqli_error($conn);
  }

}




?>