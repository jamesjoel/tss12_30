<?php
include("../connect.php");
// print_r($_POST);
$a = $_POST['category_name'];
$b = $_POST['cid'];

$query = "UPDATE add_category SET product_category = '$a' WHERE id = $b";
mysqli_query($con, $query);
header("location:view_category.php");
?>