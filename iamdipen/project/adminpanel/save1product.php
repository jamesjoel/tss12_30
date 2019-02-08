<?php

// include("../connact.php");
$con=mysqli_connect("localhost","root","password","dipendra");
// print_r($_POST);
$a = $_POST['product_category'];


$query = "INSERT INTO add_category (product_category) VALUES ('$a')";

//die;

mysqli_query($con, $query);

header("location:addcategory.php");

?>