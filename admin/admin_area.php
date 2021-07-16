<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php 
	// checking if a user is logged in
	if (!isset($_SESSION['user_id'])) {
		header('Location: index.php');
	}
 ?>
 <?php require_once('inc/header.php'); ?>
	<header>
		<div class="navigation">
			<div class="appname">Admin Area</div>
				<div class="loggedin">Welcome <?php echo $_SESSION['first_name']; ?>! <a href="logout.php">Log Out</a>
				</div>
			</div>
	</header>
<div class="container">
</div>
 <?php require_once('inc/footer.php'); ?>