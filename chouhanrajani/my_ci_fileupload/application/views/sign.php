<!DOCTYPE html>
<html>
<head>
	<title>my index page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/style.css");?>">
</head>
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
		<h4>Hello welcome in stepping stone</h4>
		<form>
			<table><tr><td>fullname</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr><td>username</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr><td>password</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr><td>repassword</td>
				<td><input type="password" name="repass"></td>
			</tr>
			<tr><td>Address</td>
				<td><textarea name="add" id="add"></textarea></td>
			</tr>
			<tr><td>city</td>
				<td><select><option>select</option>
					<option>indore</option>
					<option>bhopal</option>
					<option>ujjain</option>
					<option>dewas</option>
				</select></td>
				</tr>
				<tr><td>contact</td>
				<td><input type="text" name="contact"></td>
			</tr>
			<tr><td>pincode</td>
				<td><input type="text" name="pincode"></td>
			</tr>
			<tr><td></td>
				<td align="center" colspan="2"><input type="submit" name="submit"></td>
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