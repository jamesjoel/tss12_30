<?php
include("connect.php");
$u = $_POST['username'];
$p = $_POST['pass'];
$query = "SELECT * FROM user WHERE username ='$u'";
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	// print_r($data);
	if($data['password']==md5($p))
	{
		echo "yes";
	}
	else
	{
		$_SESSION['msg'] = "Invalid Password";
		header("location:login.php");			
	}
}
else
{
	$_SESSION['msg'] = "Invalid Username and Password";
	header("location:login.php");	
}
?>