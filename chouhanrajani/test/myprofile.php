<?php 
include("connect.php");
session_start();

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>my profile</title>
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <body>
 <h2><?php echo $_SESSION['name'] ?></h2>
 <table class="table">
 	<tr><td>fullname</td>
 		<td><?php echo $data['fullname']?></td></tr>
 		<tr><td>fullname</td>
 		<td><?php echo $data['username']?></td></tr>
 		<tr><td>fullname</td>
 		<td><?php echo $data['address']?></td></tr>
 		<tr><td>fullname</td>
 		<td><?php echo $data['contact']?></td></tr>
 		<tr><td>fullname</td>
 		<td><?php echo $data['pincode']?></td></tr>
 	
 </table>
 </body>
 </html>