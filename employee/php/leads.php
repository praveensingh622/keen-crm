<?php
if (isset($_POST['submit'])) {
	$leads_name = $_POST['leads_name'];
	$leads_type = $_POST['leads_type'];
	 $leads_company_name = $_POST['leads_company_name'];
	 // $leads_company_id = $_POST['leads_company_id'];
	$leads_value = $_POST['leads_value'];
	$leads_currency = $_POST['leads_currency'];
	$leads_phone_type = $_POST['leads_phone_type'];
	$leads_phone = $_POST['leads_phone'];
	$leads_source = $_POST['leads_source'];
	$leads_industry = $_POST['leads_industry'];
	$leads_owner = $_POST['leads_owner'];
	$leads_description = $_POST['leads_description'];
	$leads_status = $_POST['leads_status'];
	$email = $_POST['email'];
	$date = date("d-m-Y");
	echo $date;


	include_once("config.php");

	$sql = "INSERT INTO `leads` (`leads_id`, `leads_name`, `leads_type`, `leads_company_name`, `leads_company_id`, `leads_value`, `leads_currency`, `leads_phone`, `leads_phone_type`, `leads_source`, `leads_industry`, `leads_owner`, `leads_description`, `leads_status`, `leads_email`, `leads_date`) VALUES (NULL, '$leads_name', '$leads_type', '$leads_company_name', '', '$leads_value', '$leads_currency', '$leads_phone', '$leads_phone_type', '$leads_source', '$leads_industry', '$leads_owner', '$leads_description', '$leads_status', '$email', '$date')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("Location:../leads.php");
	}
}


?>