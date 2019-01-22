<?php
print_r($_POST);
$u = $_POST['username'];
$p = $_POST['password'];
echo $u;
echo $p;

include("connect.php");

$query="SELECT * FROM user WHERE username='$u'";
echo $query;
// die;
$result=mysqli_query($con,$query);
// echo mysqli_num_rows($result);die;
if(mysqli_num_rows($result)==1)
	{
	$data = mysqli_fetch_assoc($result);
}
else
{
	$_SESSION['msg'] = "Invalid Username and Password";
	header("location:login.php");	
}
?>
