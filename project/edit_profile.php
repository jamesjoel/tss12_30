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
				<h3>Edit Profile</h3>
				<div id="login-box">
				<form action="update_profile.php" method="post" enctype="multipart/form-data">
				<table align="center">
					<tr>
						<td>Full Name</td>
						<td><input name="full_name" type="text" value="<?php echo $data_user['full_name']; ?>" class="input" /></td>
					</tr>
					
					<tr>
						<td>Current Image</td>
						<td><img src="user_image/<?php echo $data_user['image'] ?>" height="100" width="100"></td>
					</tr>
					<tr>
						<td>Change Image</td>
						<td><input type="file" name="image" /></td>
					</tr>					
					
					

						<td colspan="2" align="center">
							<input class="btn" type="submit" value="Update">
						</td>
					</tr>
				</table>
			</form>
			<?php
			if(isset($_SESSION['msg']))
			{
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>	
			</div>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>