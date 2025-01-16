<?php
include_once 'php/config.php'; 
use SimpleExcel\SimpleExcel;

if (isset($_POST['importSubmit'])) {
    // Directory to save uploaded files
    $target_dir = "uploads/client_data/"; // Ensure this directory exists and is writable
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true); // Create directory if not exists
    }

    $target_file = $target_dir . basename($_FILES["file"]["name"]); // Full path
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "File uploaded to: $target_file";

        // Load the SimpleExcel library
        require_once('SimpleExcel/src/SimpleExcel/SimpleExcel.php');
        $excel = new SimpleExcel('csv');

        try {
            // Parse the uploaded CSV file
            $excel->parser->loadFile($target_file);
            $foo = $excel->parser->getField();

            // Database Insertion
            $count = 1; // Assuming the first row contains headers
            while (count($foo) > $count) {
                $username = $foo[$count][0];
                $password = $foo[$count][1];
                $email = $foo[$count][2];
                $phone = $foo[$count][3];
                $altphone = $foo[$count][4];
                $website = $foo[$count][5];
                $source = $foo[$count][6];
                $amount = $foo[$count][7];
                $rating = $foo[$count][8];
                $location = $foo[$count][9];
                $company = $foo[$count][10];
                $status = $foo[$count][11];
                $street = $foo[$count][12];
                $city = $foo[$count][13];
                $state = $foo[$count][14];
                $country = $foo[$count][15];
                $zipcode = $foo[$count][16];
                $facebook = $foo[$count][17];
                $skype = $foo[$count][18];
                $linkedin = $foo[$count][19];
                $twitter = $foo[$count][20];
                $whatsapp = $foo[$count][21];
                $instagram = $foo[$count][22];
                $description = $foo[$count][23];

                $sql = "INSERT INTO `clients` (`username`, `password`, `email`, `phone`, `altphone`, `website`, `source`, `amount`, `rating`, `location`, `company`, `status`, `street`, `city`, `state`, `country`, `zipcode`, `facebook`, `skype`, `linkedin`, `twitter`, `whatsapp`, `instagram`, `description`, `pic`) VALUES ('$username', '$password', '$email', '$phone', '$altphone', '$website', '$source', '$amount', '$rating', '$location', '$company', '$status', '$street', '$city', '$state', '$country', '$zipcode', '$facebook', '$skype', '$linkedin', '$twitter', '$whatsapp', '$instagram', '$description', '');";

                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo "Error inserting row $count: " . mysqli_error($conn);
                }else{
                    header("Location:client.php");
                }
                $count++;
            }

            echo '<pre>';
            print_r($foo); // Display the parsed CSV data
            echo '</pre>';
        } catch (Exception $e) {
            echo "Error loading CSV: " . $e->getMessage();
        }
    } else {
        echo "File upload failed.";
    }
}
?>
