<?php
include("../connect.php");
  // print_r($_POST);
  // die;
$a=$_POST['productname'];
$b=$_POST['productprice'];
$c=$_POST['detail'];
$d=$_POST['productcategory'];
$e=$_POST['productdiscount'];
$f=$_POST['pro_image'];
 


<<<<<<< HEAD
$query= "INSERT INTO product(productname,productprice,detail,productcategory,productdiscount)VALUES('$a','$b','$c','$d','$e')";
// echo $query;
// die;
=======
$i=$_FILES['file']['name'];
$tmp=$_FILES['file']['tmp_name'];



move_uploaded_file($tmp_name, "upload/".$tmp);

$query= "INSERT INTO product(productname,productprice,detail,productcategory,productdiscount,pro_image)VALUES('$a','$b','$c','$d','$e','$f')";
 // echo $query;
 // die;
>>>>>>> 0c60702de2b17112a600c7ae4171f0b9e9769c65
mysqli_query($con,$query);
header("location:addproduct.php");

?>