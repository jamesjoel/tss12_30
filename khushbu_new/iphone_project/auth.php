<?php
// print_r($_POST);
$u = $_POST['username'];
$p = $_POST['password'];
// echo $u;
// echo $p;

include("connect.php");

$query="SELECT * FROM user WHERE username='$u'";
// echo $query;
// die;
$result=mysqli_query($con,$query);
// echo mysqli_num_rows($result);die;
if(mysqli_num_rows($result)==1)

	{
	$data = mysqli_fetch_assoc($result);
	// print_r($data);
	// die;

	if($data['password']==md5($p))
	
	{
		if ($data['status']==1)
			# code...
		// echo "hello";
		// die;
		{

		   $_SESSION["name"]=$data['username'];
		   $_SESSION['id']=$data['id'];
		   $_SESSION['is_user_logged_in']='successful login';

		   header("location:my_account.php");
	    }
	    else
		{
			$link = $data['check_status_link'];

			$_SESSION['msg'] = "Now You Are Diactive, For Active please visit this link <a target='_blank' href='active_user.php?link=".$link."'>click here</a>";
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
