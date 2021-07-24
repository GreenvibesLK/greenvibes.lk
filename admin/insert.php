<?php  
require_once('inc/connect.php');
$blog_short_title = substr($_POST["blog_title"] , 0,100);
$date = date("Y-m-d");
$sql = "INSERT INTO {$table}( blog_title, blog_short_title, online, blog_date) VALUES('".$_POST["blog_title"]."', '".$blog_short_title."', false, '{$date}' )"; 

echo $sql;
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>