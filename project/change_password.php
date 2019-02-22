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
				<h3>Change Password</h3>
				<div id="login-box">
				<form action="update_password.php" method="post">
				<table align="center">
					
					<tr>
						<td>Current Password</td>
						<td><input name="current_pass" type="password" class="input" /></td>
					</tr>
					<tr>
						<td>New Password</td>
						<td><input name="new_pass" type="password" class="input" /></td>
					</tr>
					<tr>
						<td>Confirm New Password</td>
						<td><input name="c_new_pass" type="password" class="input" /></td>
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