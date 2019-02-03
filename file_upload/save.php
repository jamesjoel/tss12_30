<?php
include("connect.php");
//print_r($_FILES);die;
$name = $_FILES['product_img']['name'];
$tmp_name = $_FILES['product_img']['tmp_name'];
$size = $_FILES['product_img']['size'];
move_uploaded_file($tmp_name, "image/".$name);
 $query = "insert into add_product (product_img) values('$name')"; 
 mysqli_query($con,$query);
header("location:index.php");
?>