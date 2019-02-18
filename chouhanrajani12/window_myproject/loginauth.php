<?php
 include("connect.php");
$u=$_POST['username'];
$x=$_POST['pass'];
// print_r($_POST);
$query = "SELECT * FROM user WHERE username ='$u'";
$result=mysqli_query($con,$query);
 // print_r($result);
if(mysqli_num_rows($result)==1)
{
	$data=mysqli_fetch_assoc($result);
	// echo $data['password'];

	if($data['password']==$x)
	{
		if($status==1)
		{
		$_SESSION['name']=$data['fullname'];
		$_SESSION['id']=$data['id'];
		$_SESSION['is_user_logged_in']=true;

		header("location:my_accound.php");
		}	

		// echo $_SESSION['name'];
		// die;
	
 		else{

 		$link=$data['user_status_link'];
 		

 		$_SESSION['msg']="for verification please click here <a href='active_user.php?link=".$link."'>login</a>";
 		 header("location:login.php");
		}
	 }
 	else
	 {

 	$_SESSION['msg']="invailid password";
 	 header("location:login.php");
	 }
else{
	$_SESSION['msg']="invalid user name or password";
	header("location:login.php");
}	 

?>

