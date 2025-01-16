<?php
include 'php/config.php'; // Database connection script

// Set headers for file download
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=leads_export.csv');

// Open a file pointer in memory
$output = fopen('php://output', 'w');

// Add column headers (modify as per your database table)
fputcsv($output, ['Leads Name', 'Leads Type', 'Leads Value', 'Leads Phone']);

// Fetch data from database
$sql = "SELECT leads_name, leads_type, leads_value, leads_phone FROM  leads";
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

// Close database connection
mysqli_close($conn);
?>
