<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DATABASE','keen_crm');

 $conn =  mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

        if($conn->connect_error)
        {
            die ("<h1>Database Connection Failed</h1>");
        }
        // echo "Database Connected Successfully";
        // return $this->conn = $conn;
?>