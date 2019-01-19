<?php
<<<<<<< HEAD
include("../connect.php");
=======
include("connect.php");
>>>>>>> 950c405ed542e3687fd563b0f6854eff902bb5e7
// print_r($_POST);
$a = $_POST['product_name'];
$b = $_POST['product_price'];
$c = $_POST['detail'];
$d = $_POST['pro_cate'];
$e = $_POST['discount'];

<<<<<<< HEAD
echo $query = "INSERT INTO product (product_name, product_price, category, detail, discount) VALUES ('$a', '$b', '$d', '$c', '$e')";
=======
echo $query = "INSERT INTO product (product_name, product_price, detail,category, discount) VALUES ('$a', '$b', '$c', '$d', '$e')";
>>>>>>> 950c405ed542e3687fd563b0f6854eff902bb5e7

// die;

mysqli_query($con, $query);

header("location:add_product.php");

?>