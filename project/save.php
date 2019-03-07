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




$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];


$arr = explode(".", $name);

$new_name = time().rand(1000, 10000).".".end($arr);





$link = str_shuffle("abcdefghijk").time().rand(10000, 100000).str_shuffle("abcdefghijk");

move_uploaded_file($tmp_name, "user_image/".$new_name);

$query="INSERT INTO user (full_name, username, password, gender, address, city, contact, pincode, status, check_status_link, image) VALUES ('$a', '$b', '$x', '$d', '$e', '$f', '$g', '$h', 1, '$link', '$new_name')";

mysqli_query($con, $query);

header("location:login.php");

?>