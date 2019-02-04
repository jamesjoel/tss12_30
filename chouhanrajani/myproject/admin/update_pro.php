<?php
include("../connect.php");
$a=$_POST['productname'];
$b=$_POST['productprice'];
$c=$_POST['detail'];
$d=$_POST['productcategory'];
$e=$_POST['productdiscount'];
$x=$_POST['pid'];
$query="UPDATE product SET productname='$a',productprice='$b',detail='$c',productcategory='$d',productdiscount='$e' WHERE id=$x";
mysqli_query($con,$query);
header("location:viewproduct.php");


?>
		

