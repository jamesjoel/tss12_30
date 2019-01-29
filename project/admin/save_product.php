<?php
include("../connect.php");
if(!isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

// print_r($_POST);
// print_r($_FILES);
// die;
$name = $_FILES['pro_image']['name'];
$tmp_name = $_FILES['pro_image']['tmp_name'];

move_uploaded_file($tmp_name, "../upload/".$name);

$a = $_POST['product_name'];
$b = $_POST['product_price'];
$c = $_POST['detail'];
$d = $_POST['pro_cate'];
$e = $_POST['discount'];

$query = "INSERT INTO product (product_name, product_price, category, detail, discount, product_image) VALUES ('$a', '$b', '$d', '$c', '$e', '$name')";

// die;

mysqli_query($con, $query);
$_SESSION['msg']="A Product Add Successfuly";

header("location:view_product.php");

?>