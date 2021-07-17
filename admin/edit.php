<?php  
	require_once('inc/connection.php');
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE {$table} SET ".$column_name."='".$text."' WHERE blog_id='".$id."'";
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Post Updated';  
	}  
 ?>