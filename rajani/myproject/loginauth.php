<?php
include("connect.php");
$u=$_POST['username'];
$x=$_POST['pass'];
$query = "SELECT * FROM user WHERE username ='$u'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	$data=mysqli_fetch_assoc($result);
	if($data['password']==$x)
	{
		echo"yes";
	}
	else
	{
		$_SESSION['msg']="invailid password";
		header("location:login.php");
	}
}
else
{
	$_SESSION['msg']="invailid username and password";
	header("location:login.php");
}
?>