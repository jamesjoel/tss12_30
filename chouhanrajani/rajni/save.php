<?php
include("connect.php");
// print_r($_POST);
// print_r($_FILES);
// die;
$a=$_POST['fullname'];
$b=$_POST['username'];
$c=$_POST['pass'];
$d=$_POST['add'];
$e=$_POST['city'];
$f=$_POST['hobby'];
$g=$_POST['gender'];
$h=$_POST['contact'];
$i=$_POST['pincode'];
// $j=$_FILES['file'];
$name=$_FILES['file']['name'];
// echo $name;
// die;
$tmp_name=$_FILES['file']['tmp_name'];
$new=time().rand(100,1000);
$arr=explode(".", $name);
$ext=end($arr);
// echo $ext;
// die;
$u=$new."." .$ext;
// echo $u;
// die;

move_uploaded_file($tmp_name, "upload/".$u);



$query="INSERT INTO user(fullname,username,password,address,city,hobby,gender,contact,pincode,image)VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$u')";
mysqli_query($con,$query);
header("location:login.php");
?>