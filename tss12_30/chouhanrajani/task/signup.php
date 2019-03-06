<!DOCTYPE html>
<html>
<head>
	<title>signpu page for task</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="in-content">
	<form action="save_sign.php" enctype="multipart/form-data" method="POST">
		<table align="center" border="1">
				<tr><td>fullname</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr><td>username</td>
				<td><input type="text" name="username"></td></tr>
				<tr><td>password</td>
					<td><input type="password" name="pass"></td></tr>
					<tr>
						<td>repassword</td>
						<td><input type="password" name="repass"></td>
					</tr>
					<tr><td>address</td>
						<td><textarea name="add"></textarea></td>
					</tr>
					<tr><td>city</td>
						<td><select name="city"><option>select</option>
						<option>delhi</option>
						<option>indore</option>
						<option>pune</option>
						<option>ujjain</option>
						<option>patna</option>	
						</select></td></tr>

					<tr><td>gender</td>
						<td>male<input type="radio" value="male" name="gender">
						female<input type="radio" value="female" name="gender"></td>
					</tr>
					<tr><td>contact</td>
						<td><input type="text" name="contact"></td></tr>
						<tr><td>pincode</td>
							<td><input type="text" name="pincode"></td></tr>
							<tr><td>profile image</td>
				<td><input type="file" name="file"></td>
			</tr>
							<tr><td colspan="2" align="center"><input type="submit" value="submit" ></td></tr>
		</table>
	</form>
</div>
</body>
</html>