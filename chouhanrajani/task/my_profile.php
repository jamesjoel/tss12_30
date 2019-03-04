<?php
$con=mysqli_connect("localhost","root","password","task");
session_start();
if(!isset("is_user_logged_in"))
{
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="in-content"><h3>wel come</h3>
	<?php
	echo "hello";
	echo $_SESSION['name'];
	?>
	<table>
		<tr><td>fullname</td>
			<tr><td> <?php echo $data['fullname']?>
			 </td></tr>
		</tr>
		<tr><td>address</td>
			<tr><td> <?php echo $data['address']?>
			 </td></tr>
		</tr>
		<tr><td>contact</td>
			<tr><td> <?php echo $data['contact']?>
			 </td></tr>
		</tr>
		<tr><td>profileimage</td>
			<tr><td> <?php echo $data['profile_image']?>
			 </td></tr>
		</tr>
		<tr><td>pincode</td>
			<tr><td> <?php echo $data['pincode']?>
			 </td></tr>
		</tr>
		<tr><td>city</td>
			<tr><td> <?php echo $data['city']?>
			 </td></tr>
		</tr>
	</table>
	


</div>
</body>
</html>