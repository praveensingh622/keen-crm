<?php
// $localhost = "localhost";
// $user = "root";
// $pass = "";
// $db_name = "keen_crm";

// $conn = mysqli_connect($localhost, $user, $pass, $db_name);

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
//     echo "not connect";
// }
// else{
//     echo "";
// }


?>
<?php
$username = "uziw4ais8741z";
$password = '@e21tgf+$Dll';
$host = "localhost";
$database = "dbetgylgkg8sbd";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected successfully";
}
?>