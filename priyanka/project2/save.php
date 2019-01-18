<?php
//print_r($_POST);

include("connect.php");

$fullname = $_POST["full_name"];
$username = $_POST["username"];
$password = $_POST["pass"];

$d = md5($password);

$gender = $_POST["gender"];
$address = $_POST["add"];
$city = $_POST["city"];
$contact = $_POST["contact"];
$pincode = $_POST["pincode"];

 $sql = "insert into user (fullname,username,password,gender,address,city,contact,pincode) values('$fullname','$username','$password','$gender','$address','$city','$contact','$pincode')";

 mysqli_query($con,$sql);

 header("location:signup.php");

?>