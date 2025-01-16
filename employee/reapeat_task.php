<?php
include 'php/config.php'; // Database connection script

function repeatTasks($conn) {
    $current_date = date('Y-m-d');
    echo $current_date;
    // Pending tasks fetch karna
    $sql = "SELECT * FROM task WHERE next_run_date = '$current_date'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($task = mysqli_fetch_assoc($result)) {
            // Nayi task ka next_run_date calculate karna
            $new_next_run_date = date('Y-m-d', strtotime($task['next_run_date'] . " + {$task['repeat_interval']} days"));

            echo $new_next_run_date;

           

            // Existing task ka status update karna
            $update_sql = "UPDATE task SET status = 'pending', next_run_date = '$new_next_run_date' WHERE task_id = {$task['task_id']}";
            mysqli_query($conn, $update_sql);
        }
        echo "Tasks repeated successfully!";
    } else {
        echo "No tasks to repeat.";
    }
}

// Example Usage
repeatTasks($conn);
?>
