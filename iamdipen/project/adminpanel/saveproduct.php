<?php
include("../connect.php");
  // print_r($_POST);

$a = $_POST['name'];
$b = $_POST['price'];
$c = $_POST['details'];
$d = $_POST['category'];
$e = $_POST['discount'];

$f=$_FILES['pro_name']['name'];
$tmp=$_FILES['pro_name']['tmp_name'];


$x=explode(".",$f);
$y=end($x);
$n=time().rand(1000,10000).".".$y;
move_uploaded_file($tmp,"upload/".$n);

$query = "INSERT INTO add_product (name, price, image, details, category, discount) VALUES('$a', '$b', '$n','$c', '$d', '$e')";

mysqli_query($con, $query);
// header("location:viewproduct.php");
?>