<?php
ob_start();
	include_once("config.php");
if (isset($_POST['edit_client'])) {
	$id = $_POST['clientid'];
	$company_name = $_POST['company'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$alt_phone = $_POST['altphone'];
	$website = $_POST['website'];
	$rating = $_POST['rating'];
	$owner = $_POST['username'];
	$source = $_POST['source'];

	$amount = $_POST['amount'];
	$description = $_POST['description'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$zipcode = $_POST['zipcode'];
	$facebook = $_POST['facebook'];
	$skype = $_POST['skype'];
	$linkedin = $_POST['linkedin'];
	$twitter = $_POST['twitter'];
	$whatsapp = $_POST['whatsapp'];
	$instagram = $_POST['instagram'];
$target_file = '';



$target_dir = "uploads/";
$rand = rand(10000, 10000000);
$target_file = $target_dir .$rand. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



if(isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }


// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
echo "hi";
$sql = "UPDATE `clients` SET `username` = '$owner', `email` = '$email', `phone` = '$phone', `altphone` = '$alt_phone', `website` = '$website', `source` = '$source', `amount` = '$amount', `rating` = '$rating', `company` = '$company_name', `street` = '$street', `city` = '$city', `state` = '$state', `country` = '$country', `zipcode` = '$zipcode', `facebook` = '$facebook', `skype` = '$skype', `linkedin` = '$linkedin', `twitter` = '$twitter', `whatsapp` = '$whatsapp', `instagram` = '$instagram', `description` = '$description', `pic` = '$target_file' WHERE `clients`.`id` = '$id'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location:../client.php");
  }
  else{
  	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
	}else{
$sql = "UPDATE `clients` SET `username` = '$owner', `email` = '$email', `phone` = '$phone', `altphone` = '$alt_phone', `website` = '$website', `source` = '$source', `amount` = '$amount', `rating` = '$rating', `company` = '$company_name', `street` = '$street', `city` = '$city', `state` = '$state', `country` = '$country', `zipcode` = '$zipcode', `facebook` = '$facebook', `skype` = '$skype', `linkedin` = '$linkedin', `twitter` = '$twitter', `whatsapp` = '$whatsapp', `instagram` = '$instagram', `description` = '$description' WHERE `clients`.`id` = '$id'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location:../client.php");
  }
  else{
  	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
}
?>