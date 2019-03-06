<?php
session_start();
$con=mysqli_connect("localhost","root","","task");
 // print_r($_POST);
// die;
$a=$_POST['fullname'];
$b=$_POST['add'];
$c=$_POST['city'];
$e=$_POST['contact'];
$f=$_POST['pincode'];
$name=$_POST['file'];
$g=$_POST['gender'];
// print_r($_POST);
// die;

$tmp_name=$_POST['file']['tmp_name'];
  // echo $name;
  // die;
$new=time().rand(100,1000);
$arr=explode(".", $name);
$ext=end($arr);
$x=($new.".".$ext);
// // $si=$_FILES["file"]["size"];

// // $err=$_FILES["file"]["error"];
// // // echo $err;
// echo $x;
// die;
move_uploaded_file($tmp_name, "upload/".$x);

$u=$_POST['pid'];
$query="UPDATE user SET fullname='$a',address='$b',city='$c',contact='$e',pincode='$f',gender='$g', image='$x' WHERE id='$u'";
// echo $query;
mysqli_query($con,$query);
header("location:myprofile.php");

?>