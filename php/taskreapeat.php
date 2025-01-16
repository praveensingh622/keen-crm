<?php
ob_start();
function repeatTasks($conn) {
    $current_date = date('Y-m-d H:i:s');
    $sql = "SELECT * FROM tasks WHERE next_run_date <= ? AND status = 'pending'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $current_date);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($task = $result->fetch_assoc()) {
        $new_next_run_date = date('Y-m-d H:i:s', strtotime($task['next_run_date'] . " + {$task['repeat_interval']} days"));

        // Insert repeated task
        $insert_sql = "INSERT INTO tasks (task_name, description, assigned_to, start_date, repeat_interval, next_run_date, status) 
                       VALUES (?, ?, ?, ?, ?, ?, 'pending')";
        $insert_stmt = $conn->prepare($insert_sql);
        $insert_stmt->bind_param(
            "ssisis",
            $task['task_name'],
            $task['description'],
            $task['assigned_to'],
            $task['next_run_date'],
            $task['repeat_interval'],
            $new_next_run_date
        );
        $insert_stmt->execute();

        // Mark current task as completed
        $update_sql = "UPDATE tasks SET status = 'completed' WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("i", $task['id']);
        $update_stmt->execute();
    }
}
?>
