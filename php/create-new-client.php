<?php
ob_start();
	include_once("config.php");
if (isset($_POST['create_client'])) {
	$company_name = $_POST['company_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$alt_phone = $_POST['alt_phone'];
	$website = $_POST['website'];
	$rating = $_POST['rating'];
	$owner = $_POST['owner'];
	$source = $_POST['source'];
	$industry = $_POST['industry'];
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
	$password = $_POST['password'];
	$stsa = "Active";



$target_dir = "uploads/";
$rand = rand(10000, 10000000);
$target_file = $target_dir .$rand. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
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
$sql = "INSERT INTO `clients` (`username`, `password`, `email`, `phone`, `location`, `company`, `status`, `street`, `city`, `state`, `country`, `zipcode`, `facebook`, `skype`, `linkedin`, `twitter`, `whatsapp`, `instagram`, `description`,`pic`,`altphone`,`website`,`source`,`amount`,`rating`) VALUES ('$owner', '$password', '$email', '$phone', '', '$company_name', '$stsa', '$street', '$city', '$state', '$country', '$zipcode', '$facebook', '$skype', '$linkedin', '$twitter', '$whatsapp', '$instagram', '$description','$target_file','$alt_phone','$website','$source','$amount','$rating')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location:../client.php");
  }
  else{
  	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
	

}

?>