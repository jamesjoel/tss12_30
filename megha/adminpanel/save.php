<?php
// print_r($_POST);
include("connect.php");


$u = $_POST['username']; // abc
$p = $_POST['password'];

$x = md5($p);

$d = $_POST['gender'];
$e = $_POST['add'];
$f = $_POST['city'];
$g = $_POST['contact'];
$h = $_POST['pincode'];



$link = str_shuffle("abcdefghijk").time().rand(10000, 100000).str_shuffle("abcdefghijk");



$query="INSERT INTO user (full_name, username, password, gender, address, city, contact, pincode, status, check_status_link) VALUES ('$a', '$b', '$x', '$d', '$e', '$f', '$g', '$h', 0, '$link')";

mysqli_query($con, $query);

header("location:login.php");

?>