<?php
include("../connect.php");
if(!isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

// print_r($_POST);
// die;
$a = $_POST['product_name'];
$b = $_POST['product_price'];
$c = $_POST['detail'];
$d = $_POST['pro_cate'];
$e = $_POST['discount'];

echo $query = "INSERT INTO product (product_name, product_price, category, detail, discount) VALUES ('$a', '$b', '$d', '$c', '$e')";

// die;

mysqli_query($con, $query);
$_SESSION['msg']="A Product Add Successfuly";

header("location:add_product.php");

?>