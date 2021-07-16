<?php  
require_once('inc/connection.php');
$sql = "INSERT INTO {$table}(, blog_title, blog_short_title) VALUES('".$_POST["blog_title"]."', '".$_POST["blog_short_title"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>