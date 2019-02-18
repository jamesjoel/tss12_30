<?php
  // print_r($_POST);
include("connect.php");

$a=$_POST["full_name"];

$b=$_POST["user"];

$c=$_POST["email"];

$d=$_POST["pass"];

$e=$_POST["gender"];

$f=$_FILES['pro_name']['name'];

$tmp=$_FILES['pro_name']['tmp_name'];
$x=explode(".",$f);
$y=end($x);
$z=time().rand(1000,10000).".".$y;
move_uploaded_file($tmp,"img/".$z);


$g=$_POST["add"];

$h=$_POST["pincode"];


$query = "INSERT INTO product_name (full_name, user, email, pass, gender, pro_name, address, pincode)values ('$a', '$b', '$c', '$d', '$e', '$z', '$g', '$h')";
 mysqli_query($con, $query);


?>