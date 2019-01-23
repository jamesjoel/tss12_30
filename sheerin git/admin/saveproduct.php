<?php
// print_r($_POST);
// die;
$a=$_POST["proname"];
$b=$_POST["proprice"];
$c=$_POST["detail"];
$d=$_POST["category"];
$e=$_POST["discount"];


$con=mysqli_connect("localhost","root","","database");
$query="insert into addproduct
(productname,productprice,detail,category,discount)
values('$a',$b,'$c','$d',$e)";
echo $query;
$result=mysqli_query($con,$query);
echo "<br>";
echo $result;
// header("location:addproduct.php");
?>