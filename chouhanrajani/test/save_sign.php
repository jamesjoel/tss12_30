<?php
// include("connect.php");
$con=mysqli_connect("localhost","root","password","task");

$a=$_POST['fullname'];
$b=$_POST['username'];
$c=$_POST['pass'];
$d=$_POST['add'];
$e=$_POST['city'];
$f=$_POST['gender'];
$g=$_POST['contact'];
$h=$_POST['pincode'];
 // print_r($_POST);
 // die;
$name=$_FILES['profile_file']['name'];

$tmp_name=$_FILES['profile_file']['tmp_name'];
$new=time().rand(100,1000);
$arr=explode(".", $name);
$ext=end($arr);
$x=($new.".".$ext);
move_uploaded_file($tmp_name, "upload/".$x);




$query="INSERT INTO user(fullname,username,image,password,address,city,gender,contact,pincode)VALUES('$a','$b','$x','$c','$d','$e','$f','$g','$h')";

mysqli_query($con,$query);
header("location:login.php");


 // echo $query;

 ?>