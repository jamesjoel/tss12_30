<?php
include("connect.php");
$query="SELECT * FROM user WHERE id=".$_SESSION['id'];
$result=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
	<title>my index page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="validation.js"></script>
</head>
<body>
<div id="header">
	<div id="in-header">
		<h2>Stepping Stone</h2>
	</div>
</div>
<div id="menu">
	<div id="in-menu">
		<?php if(isset($_SESSION['if_user_logged_in'])){?>
			<ul>
<li><a href="sign.php">SIGNIN</a></li>
			<li><a href="login.php">LOGIN</a></li>
			<li><a href="index.php">LOGOUT</a></li>
			<li><a href="myprofile.php">MYPROFILE</a></li>
				<li><a href="editprofile.php">EDIT PRIFILE</a></li></ul>
		<?php} ?>
		<?php else{ ?><ul><li><a href="index.php">HOME</a></li>
			<li><a href="contact.php">CONTACT</a></li>
			<li><a href="sign.php">SIGNIN</a></li>
			<li><a href="login.php.php">LOGIN</a></li>
			<li><a href="index.php">LOGOUT</a></li>
			</ul><?php }?>
		
	</div>
</div>
<div id="content">
	<div id="in-content">
		<form action="save.php" enctype="multipart/form-data" method="POST" id="sign">
			<table border="1" cellpadding="5" cellspacing="0" align="center"><tr><td>Fullname</td>
				<td><input type="text" name="fullname" id="fullname"></td>
			</tr>
			<tr>
				<td></td>
				<td id="fullname_msg"></td>
			</tr>
			<tr><td>Username</td>
				<td><input type="text" name="username" id="username"></td>
			</tr>
			<tr>
				<td></td>
				<td id="username_msg"></td>
			</tr>
			<tr><td>Password</td>
				<td><input type="password" name="pass" id="pass"></td>
			</tr>
			<tr>
				<td></td>
				<td id="pass_msg"></td>
			</tr>
			<tr><td>Re-password</td>
				<td><input type="password" name="repass" id="repass"></td>
			</tr>
			<tr>
				<td></td>
				<td id="repass_msg"></td>
			</tr>
			<tr><td>Address</td>
				<td><textarea name="add" id="add"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td id="add_msg"></td>
			</tr>
			<tr><td>hobby</td>
				<td>cricket<input type="checkbox" value="cricket" name="hobby" id="hobby">
				football<input type="checkbox" name="hobby" value="football" id="hobby">
				mehandi<input type="checkbox" name="hobby" value="mehandi" id="hobby"></td>
			</tr>
			<!-- <tr>
				<td></td>
				<td id="hobby_msg"></td>
			</tr> -->
			<tr><td>city</td>
				<td><select name="city" id="city"><option>select</option>
					<option>indore</option>
					<option>ratlam</option>
					<option>ujjain</option>
					<option>dewas</option>
					<option>bhopal</option>
				</select></td>
			</tr>
			<tr>
				<td></td>
				<td id="city_msg"></td>
			</tr>
			<tr><td>gender</td>
				<td>male<input type="radio" value="male" name="gender" id="male">female<input type="radio" name="gender" value="female" id="female"></td>
			</tr>
			<tr>
				<td></td>
				<td id="gender_msg"></td>
			</tr>
			<tr><td>Contact</td>
				<td><input type="text" name="contact" id="contact"></td>
			</tr>
			<tr>
				<td></td>
				<td id="contact_msg"></td>
			</tr>
			<tr><td>Pincode</td>
				<td><input type="text" name="pincode" id="pincode"></td>
			</tr>
			<tr>
				<td></td>
				<td id="pincode_msg"></td>
			</tr>
			<tr><td>profile image</td>
				<td><input type="file" value="file" name="file" id="file"></td>
			</tr>
			<!-- <tr>
				<td></td>
				<td id="image_msg"></td>
			</tr> -->
			<tr><td></td>
				<td align="center" colspan="2"><input type="submit" value="submit"></td>
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