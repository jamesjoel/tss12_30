<?php
include("../connect.php");
$d=$_GET['cid'];
$query="DELETE FROM addcategory WHERE id=$d";
mysqli_query($con,$query);
header("location:view_category.php");
?>