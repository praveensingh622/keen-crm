<?php

// Define allowed file types for images and PDFs
$allowed = ['image/jpeg', 'image/png', 'image/gif', 'application/pdf'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    // Check if the file type is allowed
    if (in_array($fileType, $allowed)) {
        // Check if the file was uploaded without errors
        if ($fileError === 0) {
            // Check file size (5MB max)
            if ($fileSize < 5000000) {
                // Generate a unique file name to avoid overwriting
                $fileNameNew = uniqid('', true) . "." . strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                $fileDestination = 'uploads/' . $fileNameNew;

                // Move the uploaded file to the server's 'uploads' directory
                if (move_uploaded_file($fileTmpName, $fileDestination)) {
                    // Determine if it's an image or PDF and return appropriate response
                    $fileType = getimagesize($fileDestination) ? 'image' : 'pdf';
                    echo json_encode(['location' => $fileDestination, 'type' => $fileType]);
                } else {
                    echo json_encode(['error' => 'Error moving the file']);
                }
            } else {
                echo json_encode(['error' => 'File is too large']);
            }
        } else {
            echo json_encode(['error' => 'There was an error uploading the file']);
        }
    } else {
        echo json_encode(['error' => 'Invalid file type']);
    }
} else {
    echo json_encode(['error' => 'No file uploaded']);
}
?>
