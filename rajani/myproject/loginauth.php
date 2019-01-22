<?php
include("connect.php");
$u=$_POST['username'];
$x=$_POST['pass'];
$query = "SELECT * FROM user WHERE username ='$u'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	$data=mysqli_fetch_assoc($result);
<<<<<<< HEAD
	if($data['password']==$x)
	{
		echo"yes";
	}
	else
	{
		$_SESSION['msg']="invailid password";
=======
	if{
		($data['password']==$x);
		echo"yes";
	}
	else{
		$_SESSION['meg']="wrong password";
>>>>>>> e7f8a8c595bbf1b39482541aed93d7a04224a025
		header("location:login.php");
	}
}
else
{
<<<<<<< HEAD
	$_SESSION['msg']="invailid username and password";
=======
	$_SESSION['meg']="wrong user name and password";
>>>>>>> e7f8a8c595bbf1b39482541aed93d7a04224a025
	header("location:login.php");
}
?>