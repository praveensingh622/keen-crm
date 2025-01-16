<?php
ob_start();
include 'php/config.php'; // Database connection script

// Set headers for file download
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=leads_export.csv');

// Open a file pointer in memory
$output = fopen('php://output', 'w');

// Add column headers (modify as per your database table)
fputcsv($output, ['leads_name', 'leads_type', 'leads_company_name', 'leads_company_id','leads_value','leads_currency','leads_phone','leads_phone_type','leads_source','leads_industry','leads_owner','leads_description','leads_status','leads_tags','leads_email','leads_date']);

// Fetch data from database
$sql = "SELECT leads_name, leads_type, leads_company_name, leads_company_id,leads_value, leads_currency,  leads_phone, leads_phone_type, leads_source, leads_industry, leads_owner, leads_description, leads_status, leads_tags, leads_email, leads_date FROM  leads";
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
