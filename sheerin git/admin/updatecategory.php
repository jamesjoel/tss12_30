<?php
// print_r($_POST);
include("../template6/connection.php");
$a=$_POST['categoryname'];
$b=$_POST['cid'];

$query="update addcategory set categoryname='$a' where id=$b";
 // echo $query;
 // die;
mysqli_query($con,$query);
header("location:viewcategory.php");
?>