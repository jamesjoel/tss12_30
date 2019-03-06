<?php 
session_start();
// $con=mysqli_connect("localhost","root","","task");
$con=mysqli_connect("localhost","root","password","task");

// print_r($_POST);
// die;
$a=$_POST['username'];
$b=$_POST['pass'];
$query="SELECT * FROM user WHERE username='$a'";
$result=mysqli_query($con,$query);

if(mysqli_num_rows($result)==1)
	{
		$data=mysqli_fetch_assoc($result);
	 if($data['password']==$b)
	{
	// echo "yes";
		$_SESSION['id']=$data['id'];
		$_SESSION['name']=$data['fullname'];
		$_SESSION['if_user_logged_in']=true;
		header("location:myprofile.php");
	}
	else{
		$_SESSION['msg']="invalid password";
		header("location:login.php");
	}
}
else
{
	$_SESSION['msg']="username and password wrong";
			header("location:login.php");

}

?>
