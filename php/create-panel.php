<?php
ob_start();
if (isset($_POST['submit'])) {

    include_once("config.php");
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST["username"];
    $password = $_POST['password'];
    $job_title = $_POST['job_title'];
    $fax = $_POST['fax'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $phone1 = $_POST['phone1'];
    $dob = $_POST['dob'];
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
    $role = $_POST['role'];
    $assignable = $_POST['assignable'];

    // Check if the username or email already exists in the database
    $checkQuery = "SELECT * FROM admin WHERE username = '$username' OR email = '$email'";
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if (mysqli_num_rows($checkResult) > 0) {
        echo "Error: The username or email is already taken. Please choose a different one.";
        exit(); // Stop further script execution
    }

    // Default value for profile picture
    $target_file = '';

    // Check if a file is uploaded
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["name"] != '') {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a valid image
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
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
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // If everything is ok, upload the file
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            // If upload failed, set $target_file to an empty string to skip storing image
            $target_file = '';
        }
    }

    // Insert data into the database, even if no file is uploaded
    $sql = "INSERT INTO admin (`name`, `lname`, `username`, `password`, `email`, `skype`, `phone`, `role`, `job_title`, `phone2`, `fax`, `description`, `street`, `city`, `state`, `country`, `zipcode`, `profile`, `subrole`) 
            VALUES ('$fname', '$lname', '$username', '$password', '$email', '$skype', '$phone', '$role', '$job_title', '$phone1', '$fax', '$description', '$street', '$city', '$state', '$country', '$zipcode', '$target_file', '$assignable')";
    
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        header("Location:../create-panel.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
ob_flush();
?>
