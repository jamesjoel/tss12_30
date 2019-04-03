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
		<form action="update.php" enctype="multipart/form-data" method="POST" id="sign">
			<table border="1" cellpadding="5" cellspacing="0" align="center"><tr><td>Fullname</td>
				<td><input value="<?php echo $data['fullname'];?>" type="text" name="fullname" id="fullname"></td>
			</tr>
			<tr><td>Username</td>
				<td><input type="text" disabled="disabled" value="<?php echo $data['username'];?>" name="username" id="username"></td>
			</tr>
			<tr><td>Address</td>
				<td><textarea name="add" id="add"><?php echo $data['address'];?></textarea></td>
			</tr>
			<tr><td>hobby</td>
				<td>cricket<input <?php if($data['hobby']=='cricket'){echo "checked='checked'";} ?> type="checkbox" value="cricket" name="hobby" id="hobby">
				football<input <?php if($data['hobby']=='football'){echo "checked='checked'";} ?> type="checkbox" <?php if($data['hobby']=='football'){echo "checked='checked'";} ?> name="hobby" value="football" id="hobby">
				mehandi<input <?php if($data['hobby']=='mehandi'){echo "checked='checked'";} ?> type="checkbox" name="hobby" value="mehandi" id="hobby"></td>
			</tr>
			<tr><td>city</td>
				<td><select name="city" id="city"><option>select</option>
					<option <?php if($data['city']=='indore'){echo "selected='selected'";} ?>>indore</option>
					<option <?php if($data['city']=='ratlam'){echo "selected='selected'";} ?>>ratlam</option>
					<option <?php if($data['city']=='ujjain'){echo "selected='selected'";} ?>>ujjain</option>
					<option <?php if($data['city']=='dewas'){echo "selected='selected'";} ?>>dewas</option>
					<option <?php if($data['city']=='bhopal'){echo "selected='selected'";} ?>>bhopal</option>
				</select></td>
			</tr>
			<tr><td>gender</td>
				<td>male<input <?php if($data['gender']=='male'){echo "checked='checked'";}?> type="radio" value="male" name="gender" id="male">female<input <?php if($data['gender']=='female'){echo "checked='checked'";}?>type="radio" name="gender" value="female" id="female"></td>
			</tr>
			<tr><td>Contact</td>
				<td><input type="text" value="<?php echo $data['contact'];?>" name="contact" id="fullname"></td>
			</tr>
			<tr><td>Pincode</td>
				<td><input type="text" value="<?php echo $data['pincode'];?>" name="pincode" id="Pincode"></td>
			</tr>
			<tr><td>change image</td>
				<td><input type="file" name="file" id="file"></td>
			</tr>
			<tr>
				<td><img height="100" width="100" src="upload/<?php echo $data['image'];?>"></td>
			</tr>
			<tr><td></td>
				<td align="center" colspan="2"><input type="submit" value="update"></td>
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