
<?php
ob_start();
include_once 'php/config.php'; 
use SimpleExcel\SimpleExcel;
if (isset($_POST['importSubmit'])) {

	$target_dir = ""; 
$target_file = $target_dir . basename($_FILES["file"]["name"]); 
	$pks = "/".$target_file;
	echo $pks;
	if (move_uploaded_file($_FILES["file"]["tmp_name"], 
                                            $target_file)) {
		$target_file = $_FILES['file']['name'];
		require_once('SimpleExcel/src/SimpleExcel/SimpleExcel.php'); // load the main class file (if you're not using autoloader)

$excel = new SimpleExcel('csv');                    // instantiate new object (will automatically construct the parser & writer type as XML)

$excel->parser->loadFile($target_file);            // load an XML file from server to be parsed

$foo = $excel->parser->getField();                  // get complete array of the table
$bar = $excel->parser->getRow(3);                   // get specific array from the specified row (3rd row)
$baz = $excel->parser->getColumn(4);                // get specific array from the specified column (4th row)
$qux = $excel->parser->getCell(2,1);                // get specific data from the specified cell (2nd row in 1st column)

$count = 1;

while(count($foo)>$count){

	$title = $foo[$count][0];
	$type = $foo[$count][1];
	$company = $foo[$count][2];
	$lead_source = $foo[$count][3];
	$leads_value = $foo[$count][4];
	$leads_currency = $foo[$count][5];
	$leads_phone = $foo[$count][6];
	$leads_phone_type = $foo[$count][7];
	$leads_industry = $foo[$count][8];
	$leads_owner = $foo[$count][9];
	$leads_description = $foo[$count][10];
	$leads_status = $foo[$count][11];
	$leads_email = $foo[$count][12];
	$leads_date = $foo[$count][13]; 

	$sql = "INSERT INTO leads (`leads_name`,`leads_type`,`leads_company_name`, `leads_source`,`leads_value`, `leads_currency`, `leads_phone`, `leads_phone_type`, `leads_industry`,`leads_owner`,`leads_description`,`leads_status`,`leads_email`,`leads_date`) VALUES ('$title','$type','$company','$lead_source','$leads_value','$leads_currency','$leads_phone','$leads_phone_type','$leads_industry','$leads_owner','$leads_description','$leads_status','$leads_email','$leads_date')";
	$result = mysqli_query($conn,$sql);
$count++;

}

// echo '<pre>';
// print_r($foo);                                      // echo the array
// echo '</pre>';


	}
	  header("Location: leads.php");
        exit();
}

ob_flush();
?>