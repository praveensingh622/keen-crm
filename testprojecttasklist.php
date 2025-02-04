<?php
    include_once("php/config.php");

// Query to get tasks grouped by category
$sql = "SELECT category, title 
        FROM task 
        ORDER BY category, title";

$result = $conn->query($sql);

// Display the tasks by category
$current_category = '';

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if ($row['category'] != $current_category) {
            // Print category name when it changes
            if ($current_category != '') {
                echo "</ul>"; // Close previous category list
            }
            $current_category = $row['category'];
            echo "<h3>" . $current_category . "</h3><ul>"; // Print category title
        }
        echo "<li>" . $row['task_name'] . "</li>"; // Print task name
    }
    echo "</ul>"; // Close last category list
} else {
    echo "No tasks found.";
}

// Close connection
$conn->close();
?>
