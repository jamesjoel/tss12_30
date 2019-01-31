<?php
include("../connect.php");
// print_r($_POST);
$a = $_POST['product_name'];
$b = $_POST['product_price'];
$c = $_POST['detail'];
$d = $_POST['product_category'];
$e = $_POST['product_discount'];

$x = $_POST['pid'];

$query = "UPDATE product SET product_name = '$a', product_price = '$b', detail = '$c',product_category = '$d', product_discount = '$e' WHERE id = $x";
mysqli_query($con, $query);
header("location:view_product.php");

?>