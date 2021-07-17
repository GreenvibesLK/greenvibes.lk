<?php
	if(isset($_POST['table'])){
       $table = $_POST['table'];
        } 
    $table = 'pblog';  
	$connect = mysqli_connect("localhost", "root", "", "blog");
 ?>