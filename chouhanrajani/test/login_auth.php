<?php 
$con=mysqli_connect("localhost","root","password","task");
// print_r($_POST);
session_start();
$a=$_POST['username'];
$b=$_POST['pass'];
// echo $a;
// die;

 
$query="SELECT * FROM user WHERE username='$a'";
$result=mysqli_query($con,$query);
// echo mysqli_num_rows($result);
if(mysqli_num_rows($result)==1)
{
   $data=mysqli_fetch_assoc($result)
	if($data['password']=$b)
	{
		$_SESSION['id']=$data['id'];
		$_SESSION['name']=$data['fullname'];
		$_SESSION['if_user_logged_in']=true;
		header("location:my_profile.php");
	}
 	else
 	{
	$_SESSION['msg']="invalid pasaword";
	header("location:login.php");
	}
	
}
else
 { echo "no";
	$_SESSION['msg']="invalid password and username";
	 	header("location:login.php");
 }

?>