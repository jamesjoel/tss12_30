<?php
include("../connect.php");
// print_r($_POST);
$a=$_POST["productname"];
$query="INSERT INTO addcategory(categoryname)VALUES('$a')";
mysqli_query($con,$query);
echo $query;
header("location:addcategory.php");

?>