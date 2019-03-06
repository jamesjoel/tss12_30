<!DOCTYPE html>
<html>
<head>
	<title>my rgistration page</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>

	<div id="header">
	<div id="in-header"></div>
</div>
<div id="menu">
	<div id="in-menu">
		<ul><li><a href="index.php">Home</a></li>
			<li><a href="login.php">login</a></li>
			<li><a href="sign.php">sign</a></li>
			<li><a href="logout.php">logout</a></li>
		</ul>
	</div>
</div>
<div id="content">
	<div id="in-content">
		<form action="save_sign.php" method="post" enctype="multipart/form-data">
			<table class="table" align="center">
				
				<tr>
					<td>fullname</td>
					<td><input type="text" name="fullname"></td>
				</tr>
				<tr>
					<td>username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr><td>profile image</td>
					<td><input type="file" name="profile_file"></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td>repassword</td>
					<td><input type="password" name="repass"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><textarea name="add"></textarea></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>male<input type="radio" name="gender" value="male">female<input type="radio" name="gender" value="female"></td>
				</tr>
				<tr>
					<td>contact</td>
					<td><input type="text" name="contact"></td>
				</tr>
				<tr>
					<td>pincode</td>
					<td><input type="text" name="pincode"></td>
				</tr>
				<tr><td>city</td>
					<td><select name="city"><option>select</option>
								<option>indore</option>
								<option>bhopal</option>
								<option>ujjain</option>
					</select>
					</td>
				</tr>
				<tr><td align="center"><input value="save" type="submit"></td></tr>
			</table>

		</form>
	</div>
</div>
<div id="footer">
	<div id="in-footer"></div>
</div>
	

</body>

</html>