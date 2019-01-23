<?php
 // print_r($_POST);
// die;
$a=$_POST["categoryname"];

$con=mysqli_connect("localhost","root","","database");
$query="insert into addcategory(categoryname)values('$a')";
// echo $query;
$n=mysqli_query($con,$query);
// echo "<br>";
// echo $n;
 header("location:addcategory.php");
?>