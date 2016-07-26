<?php
require_once 'database.php';
require_once 'operations.php';
$system_obj = new login_registration();

// Redirect after login
if ($system_obj->get_session()) {
	header('Location : index.php');
	exit();
}
// Catch value for registration
if (basename($_SERVER['PHP_SELF'])=='registration.php'):
#check page because we are doing multi form in one page
	
if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['register'])) 
{

	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$name     = $_POST['name'];
	$email    = $_POST['email'];
	$website  = $_POST['website'];

	if ( empty($username) or empty($password) or empty($name) or empty($email) or empty($website) ) 
	{
		echo "<span class=\"error\">ERROR.. Must Fill all Field</span>";
	}else
	{
		$register = $system_obj->registration($username, $password, $name, $email, $website);
		if ($register) 
		{
			header('Location : index.php'); 
		}else
		{
			echo "<center class=\"error\">ERROR.. Username and Password already taken!</center>";
		}

	}
}
endif; #end Check page

// Login
if (basename($_SERVER['PHP_SELF'])=='login.php'):
 #check page because we are doing multi form in one page
if (isset($_POST['login']) && $_SERVER['REQUEST_METHOD']=='POST') 
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (empty($email) || empty($password)) 
	{
		echo "<center class=\"error\">ERROR.. Must fill all field!!</center>";
	}else
	{   
		$password = md5($password);
		$login = $system_obj->login($email, $password);
		if (!$login) 
		{
			header('Location: index.php');
		}else
		{
			echo "<center class=\"error\">ERROR.. Username and Password not match!</center>";
		}
	}
}
endif;# end check page

// View Profile
if (basename($_SERVER['PHP_SELF'])=='index.php'):
 #check page because we are doing multi form in one page
	

 endif;# end check page    