<?php
include("../connect.php");
// print_r($_GET);
$a = $_GET['cid'];
$query = "DELETE FROM add_category WHERE id = $a";
mysqli_query($con, $query);
header("location:view_category.php");
?>