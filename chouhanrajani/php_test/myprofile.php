<?php
session_start(); 
// $con=mysqli_connect("localhost","root","","task");
$con=mysqli_connect("localhost","root","password","task");
$query="SELECT * FROM user WHERE id=".$_SESSION['id'];
$result=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>my profile page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<dir id="in-content">
	<h4><?php echo $_SESSION['name']?></h4>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td>fullname</td>
		<td><?php echo $data['fullname'];?>
		</td>
	</tr>
		<td>username</td>
		<td><?php echo $data['username'];?>
		</td>
	</tr>
		<td>address</td>
		<td><?php echo $data['address'];?>
		</td>
	</tr><td>city</td>
		<td><?php echo $data['city'];?>
		</td>
	</tr>
		<td>contact</td>
		<td><?php echo $data['contact'];?>
		</td>
	</tr><td>pincode</td>
		<td><?php echo $data['pincode'];?>
		</td>
	</tr>
	<tr><td>gender</td>
		<td><?php echo $data['gender'];?>
		</td>
	</tr>
	<tr><td>image</td>
		<td><img height="100" width="100" src="upload/<?php echo $data['image'];?>" /></td>
		
	</tr>
	</table>


	
	<a href="edit_profile.php?pid=<?php echo $data['id'];?>">edit profile</a>
</dir>
</body>
</html>