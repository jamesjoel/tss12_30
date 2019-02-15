<!-- <?php
include("connect.php");
include("header.php");
 
 if(!isset("is_user_logged_is"))
 {
 	// header("location:login.php");
}
else{
	
	$query="SELECT * FROM user WHERE id="."$_SESSION['id']";
	$result=mysqli_query($con,$query);
	$data=mysqli_fetch_assoc($result);
}

?> -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form action="update_user_password.php" method="post">
	<table align="center" height="200" width="300">
		<tr>
<td>CurrentPassword<input type="password" name="password"></td></tr>
<tr>
<td>NewPassword<input type="password" name="new_password"></td></tr>
<tr>
<td>ConfirmPassword<input type="password" name="cnf_password"></td></tr>
<tr><td><input type="submit" value="save"></td></tr>
<!-- <?php
if(isset($_SESSION['id']))
{
	echo$_SESSION['msg'];
	unset($_SESSION['msg']);
}
?> -->
</table>
</form>
</body>
</html>