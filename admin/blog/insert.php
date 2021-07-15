<?php  
require_once('inc/connection.php');
$sql = "INSERT INTO {$table}(blog_date, blog_title) VALUES('".$_POST["blog_date"]."', '".$_POST["blog_title"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>