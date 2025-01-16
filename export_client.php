<?php
ob_start();
include 'php/config.php'; // Database connection script

// Set headers for file download
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=client_export.csv');

// Open a file pointer in memory
$output = fopen('php://output', 'w');

// Add column headers (modify as per your database table)
fputcsv($output, ['username', 'password', 'email', 'phone', 'altphone', 'website', 'source', 'amount', 'rating', 'location', 'company', 'status', 'street', 'city', 'state', 'country', 'zipcode', 'facebook', 'skype', 'linkedin', 'twitter', 'whatsapp', 'instagram', 'description']);

// Fetch data from database
$sql = "SELECT `username`, `password`, `email`, `phone`, `altphone`, `website`, `source`, `amount`, `rating`, `location`, `company`, `status`, `street`, `city`, `state`, `country`, `zipcode`, `facebook`, `skype`, `linkedin`, `twitter`, `whatsapp`, `instagram`, `description` FROM  clients";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, $row); // Write each row to CSV
    }
} else {
    echo "Error fetching data: " . mysqli_error($conn);
}

// Close file pointer
fclose($output);
// header("Location:client.php");
// Close database connection
mysqli_close($conn);
ob_flush();
?>
