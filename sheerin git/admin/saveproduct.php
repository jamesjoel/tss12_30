<?php
 // print_r($_POST);
 // die;
$a=$_POST["proname"];
$b=$_POST["proprice"];
$c=$_POST["detail"];
$d=$_POST["category"];
$e=$_POST["discount"];

include("../template6/connection.php");
$query="insert into addproduct
(productname,productprice,detail,category,discount)
values('$a',$b,'$c','$d',$e)";
// echo $query;
$result=mysqli_query($con,$query);
$_SESSION['msg']="A Product Add Successfully";
header("location:addproduct.php");
?>