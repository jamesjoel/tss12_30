<?php
include("connect.php");

// $a=$_POST("id");
$a=$_POST("full_name");
$b=$_POST("user");
$c=$_POST("age");
$d=$_POST("mail");
$e=$_POST("pass");
$f=$_POST("gender");
$g=$_POST("pro_name");
$h=$_FILS['pro_name']['name'];

$tmp=$_FILS['pro_name']['tmp_name'];
$x=explode(".",$h);
$y=end($x);
$z=time().rand(10000, 100000).".".$y;
move_uploaded_file($tmp,"img/".$z);

$q=$_POST["add"];
$q=$_POST["pincode"];

$query="INSERT INTO product_name(full_name, user, age, mail, pass, gender, pro_name)values ('$a', '$b', '$c','$d', '$e', '$f', '$g')";
mysqli_query($con,$query);

header("location:view_all.php");
?>
