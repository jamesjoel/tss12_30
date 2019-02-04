<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
					<table align="center" cellpadding="5" cellspacing="0" border="1">
						<tr>
							<td>Full Name</td>
							<td><input name="full_name" type="text" class="input" /></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input name="username" type="text" class="input" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input name="pass" type="password" class="input" /></td>
						</tr>
						<tr>
							<td>Re-Password</td>
							<td><input name="re_pass" type="password" class="input" /></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>Male<input value="male" type="radio" name="gender" />
								Female<input value="female" type="radio" name="gender" /></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><textarea name="add" cols="27" rows="5"></textarea></td>
						</tr>
						<tr>
							<td>browse</td>
							<td><input type="file" name="image">
						</td>
						<tr>
							<td>Contact</td>
							<td><input type="text" class="input" name="contact" /></td>
						</tr>
						<tr>
							<td>Pincode</td>
							<td><input type="text" class="input" name="pincode" /></td>
						</tr>

						<tr>
							<td colspan="2" align="center">
								<input class="btn" type="submit" value="save">
							</td>
						</tr>
					</table>
				</form>
</body>
</html>
					