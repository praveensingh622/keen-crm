<?php
    include_once("php/config.php");
$sql = "SELECT category, title 
        FROM task 
        ORDER BY category, title";

$result = $conn->query($sql);

$current_category = '';

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if ($row['category'] != $current_category) {
            if ($current_category != '') {
                echo "</ul>";
            }
            $current_category = $row['category'];
            echo "<h3>" . $current_category . "</h3><ul>"; 
        }
        echo "<li>" . $row['task_name'] . "</li>"; 
    }
    echo "</ul>"; 
} else {
    echo "No tasks found.";
}

$conn->close();
?>
