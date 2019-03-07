<?php
  // print_r($_FILES);
 // die;
$con=mysqli_connect("localhost","root","password","task");
$a=$_POST['fullname'];
$b=$_POST['username'];
$c=$_POST['pass'];

$e=$_POST['add'];
$f=$_POST['city'];
$g=$_POST['contact'];
$h=$_POST['pincode'];
$i=$_POST['gender'];
$d=$_POST['file'];
// print_r($_FILES);
// die;

$name=$_FILES['file']['name'];

$tmp_name=$_FILES['file']['tmp_name'];
// // echo $tmp_name;
// // die;
$new=time().rand(100,1000);
$arr=explode(".", $name);
$ext=end($arr);
$x=($new.".".$ext);
// $si=$_FILES["file"]["size"];

// $err=$_FILES["file"]["error"];
// // echo $err;
// // echo $x;
// // die;
move_uploaded_file($tmp_name, "upload/".$x);
$query="INSERT INTO user(fullname,username,password,address,city,gender,contact,pincode,image )VALUES('$a','$b','$c','$e','$f','$i','$g','$h','$x')";
// echo $query;
// die;
mysqli_query($con,$query);
 // echo $query;
 // die;
 header("location:login.php");


 ?>