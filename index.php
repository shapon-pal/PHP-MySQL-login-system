<?php include_once 'header.php';
      include_once 'functions.php';
?>
	<section class="users">
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>View Details</th>
		</tr>
		<?php 
           $allusers = $system_obj->getAllUser();
           foreach ( $allusers as $user) {   
		?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><a href="profile.php?id=<?php echo $user['id']; ?>">View Details</a></td>
		</tr>
		<?php  } ?>
	</table>   
	</section>

<?php include 'footer.php';
