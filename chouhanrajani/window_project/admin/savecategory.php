<?php
include("../connect.php");
// print_r($_POST);
// die;
if(!isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

$a= $_POST['category_name'];
 //  print_r($_POST);
 // die;
$query="INSERT INTO addcategory(addcategory)VALUES ('$a')";
// echo $query;
 // print_r($_POST);
 // die;
// die;
mysqli_query($con,$query);
// echo $query;
 // $_SESSION['msg']="A Product Add Successfuly";
header("location:addcategory.php");

?>
