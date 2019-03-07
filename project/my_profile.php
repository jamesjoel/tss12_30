<?php
include("connect.php");
if(! isset($_SESSION['is_user_logged_in']))
{	
	header("location:login.php");
}
include("header.php");

$result_user = mysqli_query($con, "SELECT * FROM user WHERE id =".$_SESSION['id']);
$data_user = mysqli_fetch_assoc($result_user);

// print_r($data_user);
?>
			<div id="right-content-bottom">
				<h3>My Profile</h3>
				<Br />
				<table border="1" cellspacing="0" cellpadding="10" align="center" width="400">
					<tr>
						<td>Full Name</td>
						<td><?php echo $data_user['full_name'];?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $data_user['username'];?></td>
					</tr>
					<tr>
						<td>Image</td>
						<td><img src="user_image/<?php echo $data_user['image']; ?>" height="100" width="100" /></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><?php echo $data_user['address'];?></td>
					</tr>
					<tr>
						<td>City</td>
						<td><?php echo $data_user['city'];?></td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><?php echo $data_user['contact'];?></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><?php echo $data_user['gender'];?></td>
					</tr>
					<tr>
						<td>Pincode</td>
						<td><?php echo $data_user['pincode'];?></td>
					</tr>
				</table>
				<a href="change_password.php">Change Password</a>
				<a href="edit_profile.php">Edit</a>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>