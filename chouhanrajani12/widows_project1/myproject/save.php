<?php
include("connect.php");
// print_r($_POST);
$a=$_POST['fullname'];
$b=$_POST['username'];
$c=$_POST['pass'];
// $m=md5($c);
$d=$_POST['gender'];
$e=$_POST['add'];
$f=$_POST['city'];
$g=$_POST['contact'];
$h=$_POST['pincode'];



// $con=mysqli_connect("localhost","root","","rajni");
$query="INSERT INTO user(fullname,username,password,gender,address ,city,contact,pincode)VALUES('$a','$b','$c','$d','$e','$f','$g','$h')";
echo $query;
mysqli_query($con,$query);

header("location:login.php");
?>