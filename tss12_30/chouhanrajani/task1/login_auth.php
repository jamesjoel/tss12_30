<?php 
$con=mysqli_connect("localhost","root","password","task");
// print_r($_POST);
session_start();
// die;
$a=$_POST['username'];
$b=$_POST['pass'];
$query="SELECT * FROM user WHERE username='$a'";
$result=mysqli_query($con,$query);


if(mysqli_num_rows($result)==1)

{
	$data=mysqli_fetch_assoc($result);
	if($data['password']==$b){
		$_SESSION['id']=$data['id'];
		$_SESSION['name']=$data['fullname'];
		$_SESSION['is_user_logged_in']=true;
		header("location:my_profile.php");

	// echo "yes";
	}
	else{
		$_SESSION['msg']="invalid password";
		header("location:login.php");
	}
}
else
{
	// echo "no";
	$_SESSION['msg']="invalid  user name password";
	header("location:login.php");

}

?>
