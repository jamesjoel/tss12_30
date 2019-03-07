<?php
include("connect.php");
include("header.php");
?>
<style type="text/css">
	.error_msg td{
		color: red;
		font-size: 13px;
		height: 15px !important;
	}
</style>
			<div id="right-content-bottom">
				<h3>User Registration</h3>
				<div id="login-box">
					<form id="signup_frm" action="save.php" method="post" enctype="multipart/form-data">
					<table align="center">
						<tr>
							<td>Full Name</td>
							<td><input name="full_name" id="full_name" type="text" class="input" /></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="full_name_msg"></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input name="username" id="username" type="text" class="input" /></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="username_msg"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input name="pass" id="pass" type="password" class="input" /></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="pass_msg"></td>
						</tr>
						<tr>
							<td>Re-Password</td>
							<td><input name="re_pass" id="re_pass" type="password" class="input" /></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="re_pass_msg"></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>Male<input value="male" id="male" type="radio" name="gender" />
								Female<input value="female" id="female" type="radio" name="gender" /></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="gender_msg"></td>
						</tr>
						<tr>
							<td>Image</td>
							<td><input type="file" name="image" id="image"/></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="image_msg"></td>
						</tr>






						<tr>
							<td>Address</td>
							<td><textarea name="add" cols="27" rows="5" id="add"></textarea></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="add_msg"></td>
						</tr>
						<tr>
							<td>City</td>
							<td><select class="input" name="city" id="city">
								<option>Select</option>
								<option>Indore</option>
								<option>Bhopal</option>
								<option>Mumbai</option>
								<option>Pune</option>
								<option>Delhi</option>
							</select>
							</td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="city_msg"></td>
						</tr>
						<tr>
							<td>Contact</td>
							<td><input type="text" class="input" name="contact" id="contact" /></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="contact_msg"></td>
						</tr>
						<tr>
							<td>Pincode</td>
							<td><input type="text" class="input" name="pincode" id="pincode" /></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="pincode_msg"></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input class="btn" type="submit" value="Signup">
							</td>
						</tr>
					</table>
				</form>
				</div>

			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>