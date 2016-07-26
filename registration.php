<?php include 'header.php';
      include 'functions.php';
?>
	<section class="registration">
	   <form name="reg" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Full Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Website</td>
				<td><input type="text" name="website"></td>
			</tr>
			<tr>
			    <td></td>
				<td> 
				<input type="reset" name="reset" value="Reset">
				<input type="submit" name="register" value="Submit">
				</td>
			</tr>
		</table>
		</from>
	</section>

<?php include 'footer.php';
