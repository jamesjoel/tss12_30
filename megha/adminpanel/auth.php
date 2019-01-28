<?php
include("../connect.php");
if(!isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

$u = $_POST['username']; // abc
$p = $_POST['pass'];


$query = "SELECT * FROM admin WHERE username ='$u'";


$result = mysqli_query($con, $query);

if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	if($data['password']==md5($p))
	{
		$_SESSION['is_admin_logged_in']=true;

		header("location:add_product.php");
	}
	else
	{
		$_SESSION['msg'] = "Invalid Password";
		header("location:index.php");			
	}
}
else
{
	$_SESSION['msg'] = "Invalid Username and Password";
	header("location:index.php");	
}
?>