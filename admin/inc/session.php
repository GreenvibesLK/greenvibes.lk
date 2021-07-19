<?php require_once('connection.php'); ?>
<?php require_once('functions.php'); ?>
<?php 
	// checking if a user is logged in
	if (!isset($_SESSION['user_id'])) {
		header('Location: index.php');
	}
 ?>
