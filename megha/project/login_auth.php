<?php
include("connect.php");
if(!isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

$u = $_POST['username']; 
$p = $_POST['password'];

// $a= $_POST['password'];
// $x= md5($a);

$query = "SELECT * FROM user WHERE username ='$u'";

$result = mysqli_query($con, $query);

// print_r($result);
// die;

if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	if($data['pass']==md5($p))
	{
		if($data['status']==1)
		{
			$_SESSION["name"]=$data['full_name'];
			$_SESSION['id']=$data['id'];
			$_SESSION['is_user_logged_in']=true;

			header("location:my_account.php");
			
		}
		else
		{
			$_SESSION['msg'] = "You Are Diactive Now pls Contact our team....";
			header("location:login.php");	
		}

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