<?php
include("../connect.php");
 
if(!isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

$a = $_POST['category_name'];


$query = "INSERT INTO category (name) VALUES ('$a')";

// die;

mysqli_query($con, $query);
header("location:add_category.php");

?>