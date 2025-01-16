<?php
ob_start();

if (isset($_SESSION['name'])) {
  
 } else{
//   header("Location:login.php");
  echo "Session not set";
  echo "<script>";
  echo "window.location.href = 'login.php'";
  echo "</script>";
 }

 ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="CRMS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
<meta name="author" content="Dreams technologies - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">


<script src="assets/js/jquery-3.7.1.min.js" type="text/javascript"></script>

<script src="assets/js/theme-script.js" type="text/javascript"></script>
<script src="assets/js/script.js" type="text/javascript"></script>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>