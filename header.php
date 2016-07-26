<?php
    include_once 'functions.php';

    session_start();
	$uid   = $_SESSION['uid'];
	$uname = $_SESSION['uname'];
	if (!$system_obj->get_session()) {
      	header('Location: login.php');
      	exit();
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login || Registration System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="body">
	<section class="header">
		<h2>Login || Registration System</h2>
	</section>
	<section class="menu">
		<ul>
		<?php if ($system_obj->get_session()) { ?>
			<li><a href="index.php">Home</a></li>
			<li>Show Profile</li>
			<li>Update Profile</li>
			<li>Logout</li>
			<?php } else{?>
			<li><a href="login.php">Login</a></li>
			<li><a href="registration.php">Registration</a></li>
			<?php } ?>
		</ul>
	</section>
	<section class="user">
	   <div class="uname">
		<h3>Welcome 
         <?php 
         if (isset($uname)) {
         	echo $uname;
         }else{
         	echo "GUST";
         	} ?>
		</h3>
	   </div>	
	</section>