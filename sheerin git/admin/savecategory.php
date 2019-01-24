<?php
 // print_r($_POST);
// die;
$a=$_POST["categoryname"];

include("../template6/connection.php");
$query="insert into addcategory(categoryname)values('$a')";
// echo $query;
$n=mysqli_query($con,$query);
// echo "<br>";
// echo $n;
$_SESSION['msg']="A category Added Successfully";
 header("location:addcategory.php");
?>