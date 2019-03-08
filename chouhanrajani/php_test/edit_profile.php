<?php
session_start(); 
// $con=mysqli_connect("localhost","root","","task");
$con=mysqli_connect("localhost","root","password","task");
$a=$_GET['pid'];
$query="SELECT * FROM user WHERE id=".$a;
$result=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($result);
// echo $query;
// die;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>my profile page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="in-content">
	<h4><?php echo $_SESSION['name']?></h4>
	<form action="update.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="pid" value="<?php echo $a; ?>"/>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td>fullname</td>
		<td><input type="text" name="fullname" value="<?php echo $data['fullname'];?>">
		</td>
	</tr>
		<td>username</td>
		<td><input type="text" name="username"value="<?php echo $data['username'];?>" disabled="disabled"> 
		</td>
	</tr>
	<tr>
		<td>address</td>
		<td><textarea name="add"><?php echo $data['address'];?></textarea>
		</td>
	</tr>
	<tr><td>city</td>
		<td><select name="city"><option>select</option>
					<option <?php if($data['city']=='indore'){echo "selected='selected'";} ?>>indore</option>
					<option <?php if($data['city']=='ujjain'){echo "selected='selected'";} ?>>ujjain</option>
				</select>
		</td>
	</tr>
	<tr>
		<td>contact</td>
		<td><input type="text" name="contact" value="<?php echo $data['contact'];?>">
		</td>
	</tr>
	<tr><td>pincode</td>
		<td><input type="text" name="pincode" value="<?php echo $data['pincode'];?>">
		</td>
	</tr>
<tr><td>gender</td>
		<td>male<input <?php if($data['gender']=="male"){echo "checked='checked'";}?> type="radio" name="gender" value="male">female<input type="radio" name="gender"value="female" <?php if($data['gender']=="female"){echo "checked='checked'";} ?> >
		</td>
	</tr>
	<tr>
		<td>profile image</td>
		<td><img height="70" width="70" src="upload/<?php echo $data['image']; ?>" ></td>
			</tr>
	<tr><td>change image</td>
	<td><input type="file" name="file" ></td>
</tr>
	<tr><td colspan="2" align="center"><input type="submit" value="update"></tr>
	</table>
	<a href="myprofile.php">myprofile</a>
</form>
</div>
</body>
</html>