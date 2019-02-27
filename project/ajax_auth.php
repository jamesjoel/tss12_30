<?php
include("connect.php");

$u = $_POST['username']; 
$p = $_POST['password'];
$query = "SELECT * FROM user WHERE username ='$u'";
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	if($data['password']==md5($p))
	{
		if($data['status']==1)
		{
			$_SESSION["name"]=$data['full_name'];
			$_SESSION['id']=$data['id'];
			$_SESSION['is_user_logged_in']=true;
			echo 4;
			// header("location:my_account.php");
			
		}
		else
		{
			echo 3;
		}



	}
	else
	{
		echo 2;
	}
}
else
{
	echo 1;
}
?>