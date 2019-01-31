<?php
include("../connect.php");
$a = $_GET['uid'];
$s = $_GET['status'];


if($s==1)
	$query = "UPDATE user SET status = 0 WHERE id = $a";
if($s==0)
	$query = "UPDATE user SET status = 1 WHERE id = $a";

<<<<<<< HEAD





=======
>>>>>>> c38ac84a220a4610d43c7f2abc25d6ac7d07ee22
mysqli_query($con, $query);
header("location:view_users.php");
?>