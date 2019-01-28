<?php
include("../template6/connection.php");
print_r($_GET);
// die;
$a = $_GET['cid'];
$query = "DELETE FROM addcategory WHERE id = $a ";
// echo $query;
// die;

mysqli_query($con, $query);
header("location:viewcategory.php");
?>