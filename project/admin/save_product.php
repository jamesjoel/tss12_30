<?php
include("../connect.php");
if(!isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
$name = $_FILES['pro_image']['name'];
$tmp_name = $_FILES['pro_image']['tmp_name'];
$size = $_FILES['pro_image']['size'];

$arr = explode(".", $name);
$ext = end($arr);
$new_name = time().rand(1000, 10000).".".$ext;
$a = $_POST['product_name'];
$b = $_POST['product_price'];
$c = $_POST['detail'];
$d = $_POST['pro_cate'];
$e = $_POST['discount'];


if($ext == "png" || $ext == "gif" || $ext == "jpeg" || $ext == "jpg" || $ext == "bmp")
{
	if($size < (2*1024*1024))
	{
		move_uploaded_file($tmp_name, "../upload/".$new_name);
		$query = "INSERT INTO product (product_name, product_price, category, detail, discount, product_image) VALUES ('$a', '$b', '$d', '$c', '$e', '$new_name')";
		mysqli_query($con, $query);
		header("location:view_product.php");
		
	}
	else
	{
		$_SESSION['msg']="The File size should be less then 2 MB !";
		header("location:add_product.php");		
	}
	
}
else
{
	$_SESSION['msg']="This File Type Not Allowd !";
	header("location:add_product.php");
}




?>




