<?php 
  //connecting to the database
  $connection = mysqli_connect('localhost','root','','news');
  //checking the connection
  if (!$connection) {
    die("Error - Database Connection failed");
  }

 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 	<style type="text/css">
 		div.login {
 			justify-content: space-between;
 			margin-top: 30px;
 			border-style: solid;
 			border-radius: 3px;
 			width: 600px;
 			margin: auto;
 			border: 1 solid #eee;
 		}
 	</style>
 </head>
 <body>
 	<div class="login">
 		<form action="post">
 			<h3>LOGIN</h3>
 			<table>
 				<tr>
 					<th>Username</th>
 					<th> <input type="text"></th>
 				</tr>
 				<tr>
 					<th>Password</th>
 					<th><input type="Password"></th>
 				</tr>
 			</table>
 				<input type="submit" name="login">
 		</form>
 	</div>
 </body>
 </html>