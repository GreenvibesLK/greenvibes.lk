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
	<form action="blog/index.php" method="post"><div class="admin-btn" align="center">
				<button type="submit" name="table" class="btn btn-success btn-lg" value="blog">GREENVIBES</button><br><br>

				<button type="submit" name="tabel" class="btn btn-success btn-lg" value="pblog">PLANTING</button> <br><br>

				<button type="submit" name="tabel" class="btn btn-success btn-lg" value="iblog">INNOVATION</button> <br><br>

				<button type="submit" name="table"class="btn btn-success btn-lg">MYMEAL</button> <br><br>

				<button type="submit" name="table" class="btn btn-success btn-lg">AYOGO</button> <br><br>

				<button type="submit" name="table" class="btn btn-success btn-lg" value="eblog">EDU</button> <br><br>
				<button type="submit" name="table" class="btn btn-success btn-lg" value="eblog">ENDLESS</button> <br><br></div>
			</div></form>



			
 <?php require_once('inc/footer.php'); ?>