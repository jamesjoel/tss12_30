<?php
include("../connect.php");
 if(!isset($_SESSION["admin_logged_in"]))
 {
 	header("location:index.php");
 }
$a=$_POST['username'];
$x=$_POST['pass'];
// print_r($_POST);
// die;
 $query= "SELECT * FROM admin where username='$a'";
 $result=mysqli_query($con,$query);
if(mysqli_num_row($result)==1)
 {
 	$data=(mysqli_fetch_assoch($result));

 	if($data['password']==($x))
 	{
 		$_SESSION['is_admin_logged_in']=true;
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