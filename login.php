<?php include 'header.php';
      include 'functions.php';
?>
	<section class="registration">
	   <form action="" method="POST">
		<table>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
			    <td></td>
				<td> 
				<input type="reset" name="reset" value="Reset">
				<input type="submit" name="login" value="Submit">
				</td>
			</tr>
		</table>
		</from>
	</section>

<?php include 'footer.php';
