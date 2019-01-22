<?php
include("connect.php");
// print_r($_POST);
$a = $_POST['product_name'];
$b = $_POST['product_price'];
$c = $_POST['detail'];
$d = $_POST['pro_cate'];
$e = $_POST['discount'];

echo $query = "INSERT INTO product (product_name, product_price, detail,category, discount) VALUES ('$a', '$b', '$c', '$d', '$e')";

// die;

mysqli_query($con, $query);

header("location:add_product.php");

?>