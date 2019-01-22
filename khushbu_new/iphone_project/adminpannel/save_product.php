<?php

// include("../connact.php");
$con=mysqli_connect("localhost","root","","ssproject");
// print_r($_POST);
$a = $_POST['product_name'];
$b = $_POST['product_price'];
$c = $_POST['detail'];
$d = $_POST['pro_cate'];
$e = $_POST['discount'];


$query = "INSERT INTO add_product (product_name, product_price, detail,product_category, product_discount) VALUES ('$a', '$b', '$c', '$d', '$e')";

//die;

mysqli_query($con, $query);

header("location:add_product.php");

?>