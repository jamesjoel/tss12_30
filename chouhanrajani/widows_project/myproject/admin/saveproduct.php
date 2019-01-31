<?php
include("../connect.php");
if(!isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
 // print_r($_POST);
 // die;
$name=$_FILES['product_img']['name'];
$tmp_name=$_FILES['product_img']['tmp_name'];




 $a=$_POST['category_name'];
 $b=$_POST['productprice'];
 $c=$_POST['detail'];
 $d=$_POST['productcategory'];
 $e=$_POST['productdiscount'];
 // $f=$_POST['product_img'];
  // print_r($_POST);
  // die;
move_uploaded_file($tmp_name, "../upload/".$name);
$query= "INSERT INTO product(productname,productprice,detail,productcategory,productdiscount,product_img)VALUES('$a','$b','$c','$d','$e','$name')";
echo $query;
  // print_r($_POST);
    // die;
mysqli_query($con,$query);

header("location:viewproduct.php");

?>