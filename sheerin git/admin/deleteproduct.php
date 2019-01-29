<?php
include("../template6/connection.php");
print_r($_GET);
// die;
$a = $_GET['pid'];
// echo $a;
$query = "DELETE FROM addproduct WHERE id = $a ";
// echo $query;
// die;
mysqli_query($con, $query);
header("location:viewproduct.php");
?>