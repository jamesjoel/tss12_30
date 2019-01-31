<?php
include("../connect.php");

$a=$_POST['username'];
$x=$_POST['pass'];
 // print_r($_POST);
 // die;
 $query= "SELECT * FROM admin where username='$a'";
 $result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
 {
	$data=mysqli_fetch_assoc($result);

 	if($data['password']==($x))
 	{
 		$_SESSION['admin_logged_in']=true;
 		header("location:addproduct.php");
 	}
 	else{
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