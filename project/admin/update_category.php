<?php
include("../connect.php");

$category_name = $_POST['category_name'];
$cid = $_POST['cid'];
$query = "UPDATE category SET name = '$category_name' WHERE id = $cid";
mysqli_query($con,$query);

header("location:view_category.php");
?>