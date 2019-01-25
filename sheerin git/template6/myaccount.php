<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

</body>
</html>
<?php
// echo"welcome";
include("connection.php");

 if(! isset($_SESSION["user_loged_in"]))
 { //not open myaccount page when not login through login page and redirect to login.
 	header("location:login.php");
 }
include("header.php");
include("menu.php");
?>