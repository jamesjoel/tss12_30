<?php

include("../connect.php");
$con=mysqli_connect("localhost","root","","ssproject");
// print_r($_POST);
$a = $_POST['product_name'];
$b = $_POST['product_price'];
$c = $_POST['detail'];
$d = $_POST['pro_cate'];
$e = $_POST['discount'];
// $f = $_POST['pro_image'];
  // print_r($_POST);
  // die;

$tmp=$_FILES['pro_image']['tmp_name'];
$name=$_FILES['pro_image']['name'];

$arr=explode(".",$name);
$ext=end($arr);
$x=time().rand(1000,10000).".".$ext;
move_uploaded_file($tmp, "../upload/".$x);

echo $query = "INSERT INTO add_product (product_name, product_price, detail,product_category, product_discount,pro_image) VALUES ('$a', '$b', '$c', '$d', '$e','$x')";

// die;

mysqli_query($con, $query);

header("location:add_product.php");

?>