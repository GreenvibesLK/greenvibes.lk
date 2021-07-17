<?php  
	require_once('inc/connect.php');
	$sql = "DELETE FROM {$table} WHERE blog_id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>

