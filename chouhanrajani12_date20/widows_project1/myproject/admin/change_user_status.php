<?php
include("../connect.php");
$a=$_GET['uid'];
$b=$_GET['status'];
 if($b==1)
 {
 	$query="UPDATE user SET status=0 where id=$a";

 }
 if($b==0)
 {
	$query = "UPDATE user SET status = 1 WHERE id = $a";

 }
 mysqli_query($con, $query);
 header("location:view_users.php");
?>