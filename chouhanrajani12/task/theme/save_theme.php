<?php
include("connect.php");
// include("header.php");
$a=$_POST['color'];




mysqli_query($con,$query);
header("location:my_account.php");

?>

 