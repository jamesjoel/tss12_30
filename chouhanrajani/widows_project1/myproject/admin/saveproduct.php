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
$new_nam=time().rand(1000,10000);

$size=$_FILES['product_img']['size'];
// $err=$_FILES['']
$arr=explode(".", $name);
$ext=end($arr);
$x=$new_nam.".".$ext;
// print_r($arr);
// echo $ext;
// echo $tmp_name;
// echo $x;
// die;

move_uploaded_file($tmp_name, "../upload/".$x);



 $a=$_POST['category_name'];
 $b=$_POST['productprice'];
 $c=$_POST['detail'];
 $d=$_POST['productcategory'];
 $e=$_POST['productdiscount'];
 // $f=$_POST['product_img'];
  // print_r($_POST);
  // die;
// move_uploaded_file($tmp_name, "../upload/".$name);



$query= "INSERT INTO product(productname,productprice,detail,productcategory,productdiscount,product_img)VALUES('$a','$b','$c','$d','$e','$x')";
// echo $query;
  // print_r($_POST);
    // die;
mysqli_query($con,$query);

header("location:viewproduct.php");

?>