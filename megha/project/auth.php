<?php
include("connect.php");
// if(!isset($_SESSION['is_admin_logged_in']))
// {
// 	header("location:index.php");
// }

$username = $_POST['username'];
$pass = $_POST['password'];

$sql_login = "select * from user where firstname = '$username'";
$result = mysqli_query($con,$sql_login);
if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	if($data['password']==md5($pass))
	{
		$_SESSION["name"]=$data['full_name'];
			$_SESSION['id']=$data['id'];
			$_SESSION['is_user_logged_in']=true;

			header("location:my_account.php");
			
		}
		else{
			$_SESSION['msg'] = "Your password is Incorrect....";
			header("location:login.php");	
		}
}
else{
	$_SESSION['msg'] = "Invalid Username and Password";
	header("location:login.php");	
}
// else
// {
// 	echo "no";
// }


?>