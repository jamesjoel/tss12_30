<?php
// print_r($_POST);
// die;
$con=mysqli_connect("localhost","root","password","task");
$a=$_POST['fullname'];
$b=$_POST['username'];
$c=$_POST['pass'];
$d=$_POST['repass'];
$e=$_POST['add'];
$f=$_POST['city'];
$g=$_POST['contact'];
$h=$_POST['pincode'];
$i=$_POST['gender'];

// $con=mysqli_connect("localhost","root","","task");
$query="INSERT INTO user (fullname,username,password,address,city,gender,contact,pincode)VALUES('$a','$b','$c','$e','$f','$g','$h','$i')";
mysqli_query($con,$query);
header("location:signup.php");


 ?>