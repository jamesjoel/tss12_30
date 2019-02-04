<?php
include("connect.php");
if(! isset($_SESSION['is_user_logged_in']))
{	
	header("location:login.php");
}

// print_r($_POST);
$a = $_POST['current_pass'];
$b = $_POST['new_pass'];
$c = $_POST['c_new_pass'];


$query = "SELECT * FROM user WHERE id = ".$_SESSION['id'];
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
if($data['password']== md5($a))
{
	if($b == $c)
	{
		$x = md5($b);
		// $query = "UPDATE user SET password = '$x' WHERE id=".$_SESSION['id'];
		$query = "UPDATE user SET password = '".md5($b)."' WHERE id=".$_SESSION['id'];

		mysqli_query($con, $query);
		header("location:my_profile.php");

	}
	else
	{
		$_SESSION['msg']="The New And Confirm Password not matched !";
		header("location:change_password.php");

	}
}
else
{
	$_SESSION['msg']="The Current Password is Invalid";
	header("location:change_password.php");
}


?>