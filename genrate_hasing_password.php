<?php
$password = "admin"; 
$hashed_password = password_hash($password, PASSWORD_BCRYPT);
echo "Hashed Password: " . $hashed_password;
?>