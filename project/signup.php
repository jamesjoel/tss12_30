<?php
include("header.php");
?>
			<div id="right-content-bottom">
				<h3>User Registration</h3>
				<div id="login-box">
					<form action="save.php" method="post">
					<table align="center">
						<tr>
							<td>Full Name</td>
							<td><input name="full_name" type="text" class="input" /></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input name="username" type="text" class="input" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input name="pass" type="password" class="input" /></td>
						</tr>
						<tr>
							<td>Re-Password</td>
							<td><input name="re_pass" type="password" class="input" /></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>Male<input value="male" type="radio" name="gender" />
								Female<input value="female" type="radio" name="gender" /></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><textarea name="add" cols="27" rows="5"></textarea></td>
						</tr>
						<tr>
							<td>City</td>
							<td><select class="input" name="city">
								<option>Select</option>
								<option>Indore</option>
								<option>Bhopal</option>
								<option>Mumbai</option>
								<option>Pune</option>
								<option>Delhi</option>
							</select>
						</td>
						<tr>
							<td>Contact</td>
							<td><input type="text" class="input" name="contact" /></td>
						</tr>
						<tr>
							<td>Pincode</td>
							<td><input type="text" class="input" name="pincode" /></td>
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