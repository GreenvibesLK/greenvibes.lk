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
 <?php require_once('inc/navi.php'); ?>
<div class="container">



</div>
 <?php require_once('inc/footer.php'); ?>