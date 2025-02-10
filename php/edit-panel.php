<?php
// ob_start();
// if (isset($_POST['submit'])) {

// 	include_once("config.php");
// $fname = $_POST['name'];
// $lname = $_POST['lname'];
// $username = $_POST["username"];
// $password = $_POST['password'];
// $job_title = $_POST['jobtitle'];
// $fax = $_POST['fax'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $phone1 = $_POST['phone1'];
// $dob = $_POST['dob'];
// $description = $_POST['description'];
// $street = $_POST['street'];
// $city = $_POST['city'];
// $state = $_POST['state'];
// $country = $_POST['country'];
// $zipcode = $_POST['zipcode'];
// $facebook = $_POST['facebook'];
// $skype = $_POST['skype'];
// $linkedin = $_POST['linkedin'];
// $twitter = $_POST['twitter'];
// $whatsapp = $_POST['whatsapp'];
// $instagram = $_POST['instagram'];
// $role = $_POST['role'];
// $user_ids = $_POST['user_id'];
// $status = $_POST['status'];

// $sql = "UPDATE `admin` SET `name` = '$fname', `lname` = '$lname', `username` = '$username', `password` = '$password', `email` = '$email', `skype` = '$skype', `phone` = '$phone', `bio` = '$bio', `job_title` = '$job_title', `phone2` = '$phone1', `fax` = '$fax', `description` = '$description', `street` = '$street', `city` = '$city', `state` = '$state', `zipcode` = '$zipcode', `status`='$status' WHERE `admin`.`id` = '$user_ids'";
//   $result = mysqli_query($conn, $sql);
//   if ($result) {
//     header("Location:../create-panel.php");
//   }
// }

?>



<?php
ob_start();
if (isset($_POST['submit'])) {
    include_once("config.php");

    // Form Data
    $fname = $_POST['name'];
    $lname = $_POST['lname'];
    $username = $_POST["username"];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $job_title = $_POST['jobtitle'] ?? '';
    $fax = $_POST['fax'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $phone1 = $_POST['phone2'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $description = $_POST['description'] ?? '';
    $street = $_POST['street'] ?? '';
    $city = $_POST['city'] ?? '';
    $state = $_POST['state'] ?? '';
    $country = $_POST['country'] ?? '';
    $zipcode = $_POST['zipcode'] ?? '';
    $facebook = $_POST['facebook'] ?? '';
    $skype = $_POST['skype']?? '';
    $linkedin = $_POST['linkedin'] ?? '';
    $twitter = $_POST['twitter'] ?? '';
    $whatsapp = $_POST['whatsapp'] ?? '';
    $instagram = $_POST['instagram'] ?? '';
    $role = $_POST['role'] ?? '';
    $subrole = $_POST['subrole'] ?? ''; 
    $user_ids = $_POST['user_id'];
    $status = $_POST['status'] ?? '';

  
    if (!empty($_FILES['image']['name'])) {
        $target_dir = "uploads/"; 
        $image = basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $image;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $allowed = array("jpg", "jpeg", "png");
        if (in_array($imageFileType, $allowed)) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
               
            } else {
                echo "Image upload failed!";
                exit;
            }
        } else {
            echo "Only JPG, JPEG, PNG files are allowed!";
            exit;
        }


      
    $sql = "UPDATE `admin` SET 
        `name` = '$fname', 
        `lname` = '$lname', 
        `username` = '$username', 
        `password` = '$hashed_password', 
        `email` = '$email', 
        `skype` = '$skype', 
        `phone` = '$phone', 
        `job_title` = '$job_title', 
        `phone2` = '$phone1', 
        `fax` = '$fax', 
        `description` = '$description', 
        `street` = '$street', 
        `city` = '$city', 
        `state` = '$state', 
        `zipcode` = '$zipcode', 
        `status`='$status',
        `subrole`='$subrole',  
        `profile`='$target_file'      
        WHERE `admin`.`id` = '$user_ids'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location:../create-panel.php");
    } else {
        echo "Update Failed: " . mysqli_error($conn);
    };
    } 

    $sql = "UPDATE `admin` SET `name` = '$fname', `lname` = '$lname', `username` = '$username', `password` = '$hashed_password', `email` = '$email', `skype` = '$skype', `phone` = '$phone', `job_title` = '$job_title', `phone2` = '$phone1', `fax` = '$fax', `description` = '$description', `street` = '$street', `city` = '$city', `state` = '$state', `zipcode` = '$zipcode', `status`='$status' WHERE `admin`.`id` = '$user_ids'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location:../create-panel.php");
    } else {
        echo "Update Failed: " . mysqli_error($conn);
    }
}
?>
