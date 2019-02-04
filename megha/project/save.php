<?php
$con=mysqli_connect("localhost","root","","megha");
// print_r($_POST);die;
$a=$_POST['firstname'];
$b=$_POST['lastname'];
$c=$_POST['password'];
$pass = md5($c);
$d=$_POST['gender'];
$e=$_POST['address'];
$f=$_POST['city'];
$g=$_POST['contact'];
$h=$_POST['pincode'];

$query="INSERT INTO user(firstname,lastname,password,gender,address,city,contact,pincode)VALUES('$a','$b','$pass','$d','$e','$f','$g','$h')";
echo $query;
mysqli_query($con,$query);
header("location:login.php");
?>