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
<<<<<<< HEAD
=======
$size=$_FILES['product_img']['$size'];
// $err=$_FILES['']
$arr=explode(".", $name);
$ext=$end($arr);
$x=$name."."."$ext";
>>>>>>> 0c60702de2b17112a600c7ae4171f0b9e9769c65




 $a=$_POST['category_name'];
 $b=$_POST['productprice'];
 $c=$_POST['detail'];
 $d=$_POST['productcategory'];
 $e=$_POST['productdiscount'];
 // $f=$_POST['product_img'];
  // print_r($_POST);
  // die;
<<<<<<< HEAD
move_uploaded_file($tmp_name, "../upload/".$name);
=======
move_uploaded_file($tmp_name, "../upload/".$x);
>>>>>>> 0c60702de2b17112a600c7ae4171f0b9e9769c65
$query= "INSERT INTO product(productname,productprice,detail,productcategory,productdiscount,product_img)VALUES('$a','$b','$c','$d','$e','$name')";
// echo $query;
  // print_r($_POST);
    // die;
mysqli_query($con,$query);

header("location:viewproduct.php");

?>