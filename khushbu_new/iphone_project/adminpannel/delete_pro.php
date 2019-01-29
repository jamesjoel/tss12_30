<?php
include("../connect.php");
// print_r($_GET);
$a = $_GET['pid'];
$query = "DELETE FROM add_product WHERE id = $a";
mysqli_query($con, $query);
header("location:view_product.php");
?>