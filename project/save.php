<?php
// print_r($_POST);
include("connect.php");


$a = $_POST['full_name'];
$b = $_POST['username'];

$c = $_POST['pass'];

$x = md5($c);

$d = $_POST['gender'];
$e = $_POST['add'];
$f = $_POST['city'];
$g = $_POST['contact'];
$h = $_POST['pincode'];



$query="INSERT INTO user (full_name, username, password, gender, address, city, contact, pincode) VALUES ('$a', '$b', '$x', '$d', '$e', '$f', '$g', '$h')";

mysqli_query($con, $query);

header("location:login.php");

?>