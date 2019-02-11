<?php
include("../connect.php");
$d=$_GET['proid'];
$query="DELETE FROM product WHERE id=$d";
mysqli_query($con,$query);
header("location:viewproduct.php");
?>