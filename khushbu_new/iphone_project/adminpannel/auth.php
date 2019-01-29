<?php
// print_r($_POST);
$u = $_POST['admin_name'];
$p = $_POST['pass'];
// echo $u;
// echo $p;

include("../connect.php");

$query="SELECT * FROM admin WHERE admin_name='$u'";
 // echo $query;
 // die;
$result=mysqli_query($con,$query);
// echo mysqli_num_rows($result);
// die;

if(mysqli_num_rows($result)==1)

	{
	$data = mysqli_fetch_assoc($result);
	// print_r($data);
	// die;

	if($data['password']==md5($p))
	
	{
		// echo "hello";
		// die;
		$_SESSION["name"]=$data['admin_name'];
		$_SESSION['id']=$data['id'];
		$_SESSION['is_user_logged_in']='successful login';

		header("location:header.php");
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
