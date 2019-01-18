<?php
include("connect.php");
// session_start();
$u=$_POST['username'];
$x=$_POST['pass'];


$query="select *from user where username='$u'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	echo"yes";
}
else
{
	echo "no";
}
?>