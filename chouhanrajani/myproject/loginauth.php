<?php

print_r($_POST);
die;
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
	}
}
	


else
{
	$_SESSION['msg']="invailid username and password";

	$_SESSION['msg']="wrong user name and password";
	// die;
	header("location:login.php");
}
?>