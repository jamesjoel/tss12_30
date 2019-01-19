<?php
include("../connect.php");
// print_r($_POST);
$a=$_POST['productname'];
$b=$_POST['productprice'];
$c=$_POST['detail'];
$d=$_POST['productcategory'];
$e=$_POST['productdiscount'];


$query= "INSERT INTO product(productname,productprice,detail,productcategory,productdiscount)VALUES('$a','$b','$c','$d','$e')";
echo $query;
mysqli_query($con,$query);
header("location:product.php")

?>