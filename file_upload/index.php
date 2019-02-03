<!DOCTYPE html>
<html>
<head>
	<title>file upload</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="header"></div>
<div id="content">
	<div id="in-content">
	<h3>Registration</h3>
				<!-- <div id="login-box"> -->
					<form enctype="multipart/form-data" action="save.php" method="post">
					<table align="center">
						<tr>
							<th>Full Name</th>
							<th><input name="full_name" type="text" class="input" /></th>
						</tr>
						<tr>
							<th>Gender</th>
							<th>Male<input value="male" type="radio" name="gender" />
								Female<input value="female" type="radio" name="gender" /></th>
						</tr>
						<tr>
							<th>Address</th>
							<th><textarea name="add" cols="27" rows="5"></textarea></th>
						</tr>
						<tr>
							<th>City</th>
							<th><select class="input" name="city">
								<option>Select</option>
								<option>Indore</option>
								<option>Bhopal</option>
							</select>
						</th>
						<tr>
							<th>Contact</th>
							<th><input type="text" name="contact" /></th>
						</tr>
						<tr>
							<th>Pincode</th>
							<th><input type="text" name="pincode" /></th>
						</tr>

						<tr>
							<th>image</th>
							<th><input type="file" name="product_img"/></th>
						</tr>
						<tr>
							<th colspan="2" align="center">
								<input type="submit" value="Signup">
							</th>
						</tr>
					</table>
				</form>
				</div>
</div>
<div id="footer"></div>
</body>
</html>