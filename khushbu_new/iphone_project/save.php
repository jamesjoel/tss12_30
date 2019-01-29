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

$query="INSERT INTO user(firstname,username,password,gender,address,city,contact,pincode)VALUES('$a','$b','$x','$d','$e','$f','$g','$h')";
echo $query;
mysqli_query($con,$query);
<<<<<<< HEAD
header("location:login.php");
<<<<<<< HEAD
=======
header("location:login.php");
?>
>>>>>>> 6dfe53d594dfb2e6d7e3a195fc10320b1cd3edeb
=======
?>
>>>>>>> c38ac84a220a4610d43c7f2abc25d6ac7d07ee22
