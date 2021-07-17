<?php  
require_once('inc/connect.php');
$blog_short_title = substr($_POST["blog_title"] , 0,100);
$sql = "INSERT INTO {$table}( blog_title, blog_short_title) VALUES('".$_POST["blog_title"]."', '".$blog_short_title."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>