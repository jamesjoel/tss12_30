<?php
include("../connect.php");
  // print_r($_POST);
$a = $_POST['name'];
$b = $_POST['price'];
$c = $_POST['details'];
$d = $_POST['category'];
$e = $_POST['discount'];

$query = "INSERT INTO add_product (name, price, details, category, discount) VALUES('$a', $b,'$c', '$d', $e)";

mysqli_query($con,$query) ;

 // header("location:addproduct.php");
?>
