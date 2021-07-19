<?php
    session_start();
    $table = $_SESSION['table'];
	$connect = mysqli_connect("localhost", "root", "", "blog");
 ?>