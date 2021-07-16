<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php 	if (!isset($_SESSION['user_id'])) {
		header('Location: index.php');
	} ?>
<?php require_once('inc/header.php') ?>
	<main>
		<h1>Add New User<span><a href="users.php"> < Back to User List</a></span></h1>

		<form action="add-user.php" method="post" class="userform">
			
			<p>
				<label for="">First Name:</label>
				<input type="text" name="first_name" required>
			</p>

			<p>
				<label for="">Last Name:</label>
				<input type="text" name="last_name" required>
			</p>

			<p>
				<label for="">Email Address:</label>
				<input type="email" name="email" required>
			</p>

			<p>
				<label for="">New Password:</label>
				<input type="password" name="password" required>
			</p>

			<p>
				<label for="">&nbsp;</label>
				<button type="submit" name="submit">Save</button>
			</p>
		</form>
	</main>
</body>
</html>