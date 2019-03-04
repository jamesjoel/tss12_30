<!DOCTYPE html>
<html>
<head>
	<title>signpu page for task</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <script type="text/javascript" src="js/jquery.js"></script> -->
	<!-- <script type="text/javascript" src="validation.js"></script> -->
</head>
<body>
<div id="in-content">
	<form action="save_sign.php" id="sign" method="POST" >
		<table align="center" border="1">
			<tr><td>fullname</td>
				<td><input type="text" id="fullname" name="fullname"></td>
			</tr>
			<tr><td class="error"></td>
				<td id="fullname_msg"></td>
			</tr>


<!-- <tr><td>profile image</td>
				<td><input type="file" id="file" name="user_image"></td>
			</tr>
			<tr><td class="error"></td>
				<td id="image_msg"></td>z	
			</tr>
 -->
			<tr><td>username</td>
				<td><input type="text" id="username" name="username"></td></tr>
				<tr><td></td>
					<td id="user_msg"></td>
				</tr>
				<tr><td>password</td>
					<td><input type="password" id="pass" name="pass"></td></tr>
					<tr><td></td>
					<td id="pass_msg"></td>
				</tr>

					<tr>
						<td>repassword</td>
						<td><input type="password" id="repass" name="repass"></td>
					</tr>
					<tr><td></td>
					<td id="repass_msg"></td>
				</tr>

					<tr><td>address</td>
						<td><textarea id="add" name="add"></textarea></td>
					</tr>
					<tr><td></td>
					<td id="add_msg"></td>
				</tr>
					<tr><td>city</td>
						<td><select name="city" id="city"><option>select</option>
						<option>delhi</option>
						<option>indore</option>
						<option>pune</option>
						<option>ujjain</option>
						<option>patna</option>	
						</select></td></tr>
						<tr><td></td>
					<td id="city_msg"></td>
				</tr>


					<tr><td>gender</td>
						<td>male<input type="radio" id="gender" value="male" name="gender">
						femal<input type="radio" id="gender" value="female" name="gender"></td>
					</tr>
					<tr><td></td>
					<td id="gender_msg"></td>
				</tr>
					<tr><td>contact</td>
						<td><input type="text" id="contact" name="contact"></td></tr>
						<tr><td></td>
					<td id="contact_msg"></td>
				</tr>
						<tr><td>pincode</td>
							<td><input type="text" id="pincode" name="pincode"></td></tr>
							<tr><td></td>
					<td id="pincode_msg"></td>
				</tr>
							<tr><td colspan="2" align="center"><input type="submit" value="submit" ></td></tr>
		</table>
	</form>
</div>
</body>
</html>