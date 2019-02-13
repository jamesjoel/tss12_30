<?php
include("connect.php");
if(! isset($_SESSION['is_user_logged_in']))
{	
	header("location:login.php");
}
$a=$_POST['color'];
// $x=$_POST['pid'];
if($data['theme']=='#9cd25e')
{
	$query="UPDATE user SET theme='$a' WHERE id=".$_SESSION['id'];
mysqli_query($con,$query);
header("location:my_account.php");	
}





// $query="UPDATE user SET theme='$a' WHERE id='$x'";
// mysqli_query($con,$query);
// header("location:my_account.php");


?>