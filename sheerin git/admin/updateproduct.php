<?php
// print_r($_POST);
include("../template6/connection.php");
$a=$_POST['proname'];
$b=$_POST['proprice'];
$c=$_POST['detail'];
$d=$_POST['category'];
$e=$_POST['discount'];

$f=$_POST['pid'];
$query="update addproduct set productname='$a',productprice='$b',detail='$c',category=$d,discount=$e where id=$f";
mysqli_query($con, $query);
header("location:viewproduct.php");

?>