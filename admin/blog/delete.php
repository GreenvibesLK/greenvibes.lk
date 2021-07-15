<?php  
	require_once('inc/connection.php');
	$sql = "DELETE FROM {$table} WHERE blog_id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>