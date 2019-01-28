<?php
include("../template6/connection.php");
print_r($_GET);
$a = $_GET['uid'];
$s = $_GET['status'];
// echo $a;
if($s==1)
{
	$query="UPDATE user set status=0 where id=$a";
echo $query;
}
if($s==0)
{
$query="update user set status=1 where id=$a";
echo $query;
}
mysqli_query($con, $query);
 header("location:viewusers.php");
?>




