<?php
include("connect.php");
print_r($_SESSION);
$query="SELECT * FROM user WHERE id=".$_SESSION['id'];
$result=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($result);
if(!isset($_SESSION['if_user_logged_in'])){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>my index page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">
	<div id="in-header">
		<h2>Stepping Stone</h2>
	</div>
</div>
<div id="menu">
	<div id="in-menu">

		<ul><li><a href="index.php">HOME</a></li>
			<li><a href="contact.php">CONTACT</a></li>
			<li><a href="sign.php">SIGNIN</a></li>
			<li><a href="login.php">LOGIN</a></li>
			<li><a href="index.php">LOGOUT</a></li>
			<li><a href="myprofile.php">MYPROFILE</a></li>
				<li><a href="editprofile.php">EDIT PRIFILE</a></li>
		</ul>
	</div>
</div>
<div id="content">
	<div id="in-content">

			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<?php echo $_SESSION['name'];?>
				<tr><td>
			Fullname</td>
				<td><?php echo $data['fullname'] ;?></td>
			</tr>
			<tr><td>Username</td>
				<td><?php echo $data['username']; ?></td>
			</tr>
			<tr><td>Address</td>
				<td><?php echo $data['address']; ?></td>
			</tr>
			<tr><td>hobby</td>
				<td><?php echo $data['hobby'] ;?></td>
			</tr>
			<tr><td>city</td>
				<td><?php echo $data['city'] ;?></td>
			</tr>
			<tr><td>gender</td>
				<td><?php echo $data['gender'] ;?></td>
			</tr>
			<tr><td>Contact</td>
				<td><?php echo $data['contact'] ;?></td>
			</tr>
			<tr><td>Pincode</td>
				<td><?php echo $data['pincode'] ;?></td>
			</tr>
			<tr><td>profile image</td>
				<td><img height="100" width="100" src= "upload/<?php echo $data['image'];?>"></td>
			</tr>
			
			</table>
		</form>
	</div>
</div>
<div id="footer">
	<div id="in-footer">
		<p>contact us:stepping_stone@gmail.com</p>
	</div>
</div>
</body>
</html>