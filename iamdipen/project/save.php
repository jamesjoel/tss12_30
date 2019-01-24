<?php
// print_r($_POST);

$a=$_POST['fullname'];

$b=$_POST['email'];

$c=$_POST['password'];

$d=$_POST['number'];

$e=$_POST['city'];

$f=$_POST['pincode'];

include("connect.php");
$query="insert into signup (full_name,email,password,number,city,pincode) values('$a','$b','$c','$d','$e','$f')";
mysqli_query($con, $query);	

header("location:login.php");
?>