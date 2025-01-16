<?php
ob_start();
	include_once("config.php");
if (isset($_POST['edit_client'])) {
  $leads_id = $_POST['leadsid'];
	$leads_name = $_POST['leadsname'];
  $leads_type = $_POST['leave'];
   $leads_company_name = $_POST['leadscompanyname'];
   // $leads_company_id = $_POST['leads_company_id'];
  $leads_value = $_POST['leadsvalue'];
  $leads_currency = $_POST['leadscurrency'];
  $leads_phone_type = $_POST['leadsphonetype'];
  $leads_phone = $_POST['leadsphone'];
  $leads_source = $_POST['leadsource'];
  $leads_industry = $_POST['leadsindustry'];
  $leads_owner = $_POST['leadsowner'];
  $leads_description = $_POST['leadsdescription'];
  $leads_status = $_POST['status'];
  $email = $_POST['leadsemail'];
  $date = date("d-m-Y");
  echo $date;




echo "hi";
$sql = "UPDATE `leads` SET `leads_name` = '$leads_name', `leads_type` = '$leads_type', `leads_company_name` = '$leads_company_name', `leads_value` = ' $leads_value', `leads_currency` = '$leads_currency', `leads_phone` = '$leads_phone', `leads_phone_type` = '$leads_phone_type', `leads_source` = '$leads_source', `leads_industry` = '$leads_industry', `leads_owner` = '$leads_owner', `leads_description` = '$leads_description', `leads_status` = '$leads_status', `leads_email` = '$email', `leads_date` = '$date' WHERE `leads`.`leads_id` = '$leads_id'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location:../leads.php");
  }
  else{
  	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>