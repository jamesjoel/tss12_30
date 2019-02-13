<?php
 include("header.php");


?>
					<h3 style="text-align: center;color: black">User Registration</h3>
				<div id="Registration-box" >
					<form action="save.php" method="post">
					<table align="center">
						<tr>
							<td>Full Name</td>
							<td><input type="text" name="fullname" class="input" /></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input type="text" name="username" class="input" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="text" name="pass" class="input" /></td>
						</tr>
					<tr>
							<td>Re-Password</td>
							<td><input type="password" name="repass" class="input"  /></td>
						</tr>
					
						<tr>
							<td>Gender</td>
							<td>Male<input type="radio" value="male" name="gender"  class="input"  />
								Female<input type="radio" name="gender" value="female" class="input" /></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><textarea name="add" cols="27" rows="5"></textarea></td>
						</tr>
						<tr>
							<td>City</td>
							<td><select name="city" class="input" >
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
							<td><input type="text" name="contact" class="input" /></td>
						</tr>
						<tr>
							<td>Pincode</td>
							<td><input type="text" name="pincode" class="input" /></td>
						</tr>

						<tr>
							<td colspan="2" align="center">
								<input name="sub" type="submit" value="Signup" class="input" />
							</td>
						</tr>
					</table>
				</form>
				</div>


			</div>

</div>
<?php
 include("footer.php");


?>