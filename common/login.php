<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="CRMS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
<meta name="author" content="Dreams technologies - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Keen Insites CRM</title>

<script src="assets/js/jquery-3.7.1.min.js" type="text/javascript"></script>

<script src="assets/js/script.js" type="text/javascript"></script>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="account-page">

<div class="main-wrapper">
<div class="account-content">
<div class="login-wrapper account-bg">
<div class="login-content">
<form action="login.php" method="POST">
<div class="login-user-info">
<div class="login-logo">
<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
</div>
<div class="login-heading">
	<?php
	include_once("php/config.php"); ?>
<h4>Sign In</h4>
<p>Access the Keen Insites using your email and passcode.</p>
</div>
<div class="form-wrap">
<label class="col-form-label">Email Address</label>
<div class="form-wrap-icon">
<input type="text" class="form-control" name="email">
<i class="ti ti-mail"></i>
</div>
</div>
<div class="form-wrap">
<label class="col-form-label">Password</label>
<div class="pass-group">
<input type="password" class="pass-input form-control" name="password">
<span class="ti toggle-password ti-eye-off"></span>
</div>
</div>
<div class="form-wrap form-wrap-checkbox">
<div class="custom-control custom-checkbox">
<label class="check">
<input type="checkbox">
<span class="box"></span> Remember Me
</label>
</div>
<div class="text-end">
<a href="forgot-password.html" class="forgot-link">Forgot Password?</a>
</div>
</div>
<div class="form-wrap">
<button type="submit" class="btn btn-primary" name="submit">Sign In</button>
</div>
<?php
if (isset($_GET['status'])) {
	$sa = $_GET['status'];
	if ($sa==1) {
	echo "<p style='text-align:center;color:red'>Wrong password</p>";
	}
}
?>
<div class="login-social-link">
<div class="copyright-text">
<p>Copyright &copy;2024 - CRMS</p>
</div>
</div>
</div>

</form>
<?php
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	
	$sql = "SELECT * FROM admin WHERE email = '$email' || username = '$email' && password='$password'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$num = mysqli_num_rows($result);


	if ($row["role"]==1) {
		session_start();
		$_SESSION['name']= $row["name"];
		$_SESSION['email'] = $row["email"];
		$_SESSION['admin'] = $row["name"];
		header("Location:index.php");
	}
	elseif ($row["role"]==2) {
		session_start();
		$_SESSION['name']= $row["name"];
		$_SESSION['email'] = $row["email"];
		$_SESSION['user_id'] = $row["id"];
		header("Location:employee/index.php");
	}
	else{
		header("Location:login.php?status=1");
	}
}
?>
</div>
</div>
</div>
</div>


<script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>

<script src="assets/js/feather.min.js" type="text/javascript"></script>

<script src="assets/js/jquery.slimscroll.min.js" type="text/javascript"></script>

</body>
</html>
<?php

ob_flush();
?>