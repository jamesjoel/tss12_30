<?php
include("connect.php");
// session_start();
$u=$_POST['username'];
$x=$_POST['pass'];


$query="select *from user where username='$u'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	$data=mysqli_fetch_assoc($result);
	if{
		($data['password']==$x);
		echo"yes";
	}
	else{
		$_SESSION['meg']="wrong password";
		header("location:login.php");
	}
}
else
{
	$_SESSION['meg']="wrong user name and password";
	header("location:login.php");
}
?>