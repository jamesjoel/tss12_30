<?php
include("../connect.php");
$a=$_GET['pid'];
echo $a;
$query="DELETE FROM product WHERE id=$a";
mysqli_query($con,$query);
header("location:viewproduct.php");
?>