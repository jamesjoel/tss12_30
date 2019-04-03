<?php
include("connect.php");
$u=$_POST['username'];
$p=$_POST['pass'];
// print_r($_POST);
// die;
$query="SELECT * FROM user WHERE username='$u'";
// echo $query;
// die;
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	$data=mysqli_fetch_assoc($result);
	if($data['password']==$p)
	{
		// echo "yes";
		$_SESSION['id']=$data['id'];
		$_SESSION['name']=$data['name'];
		$_SESSION['if_user_logged_in']=true;
		header("location:myprofile.php");
	}
	else
	{
		$_SESSION['msg']="invalid password";
		header("location:login.php");
	}
	// echo "yes";
}
else{
	$_SESSION['msg']="invalid user name and password";
	header("location:login.php");
}
?>