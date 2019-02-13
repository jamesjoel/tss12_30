<?php
include("../connect.php");

$a = $_POST['product_name'];
$b = $_POST['product_price'];
$c = $_POST['detail'];
$d = $_POST['product_category'];
$e = $_POST['product_discount'];
$f=$_FILES['image']['name'];

$tmp=$_FILES['image']['tmp_name'];
$arr=explode(".",$f);
$ext=end($arr);
$x=time().rand(1000,10000).".".$ext;
move_uploaded_file($tmp, "upload/".$x);

 $query="INSERT INTO pro_image(product_name,product_price,detail,product_category,product_discount,image)values('$a','$b','$c','$d','$e','$x')";
 mysqli_query($con,$query);

?>