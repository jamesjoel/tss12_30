<?php
$con=mysqli_connect("localhost","root","","ssproject");
// print_r($_POST);die;
$a=$_POST['firstname'];
$b=$_POST['username'];
$c=$_POST['password'];
$x=md5($c);
$d=$_POST['gender'];
$e=$_POST['address'];
$f=$_POST['city'];
$g=$_POST['contact'];
$h=$_POST['pincode'];


$link = str_shuffle("abcdefghijk").time().rand(10000, 100000).str_shuffle("abcdefghijk");

$query="INSERT INTO user(firstname,username,password,gender,address,city,contact,pincode,status,check_status_link)VALUES('$a','$b','$x','$d','$e','$f','$g','$h',0,'$link')";
echo $query;
mysqli_query($con,$query);
header("location:login.php");
?>
