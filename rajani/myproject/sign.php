<?php
 include("header.php");


?>
					<h3 style="text-align: center"style="color: black">User Registration</h3>
				<div id="Registration-box" >
					<form action="save.php" method="post">
					<table align="center">
						<tr>
							<td>Full Name</td>
							<td><input type="text" name="fullname" style="margin: 2px" /></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input type="text" name="username" style="margin: 2px" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="text" name="pass" style="margin: 2px" /></td>
						</tr>
					<tr>
							<td>Re-Password</td>
							<td><input type="password" name="repass" style="margin: 2px"  /></td>
						</tr>
					
						<tr>
							<td>Gender</td>
							<td>Male<input type="radio" name="gender"  style="margin: 2px"  />
								Female<input type="radio" name="gender" style="margin: 2px" /></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><textarea name="add" cols="27" rows="5"></textarea></td>
						</tr>
						<tr>
							<td>City</td>
							<td><select name="city" style="margin: 2px" >
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
							<td><input type="text" name="contact" style="margin: 2px" /></td>
						</tr>
						<tr>
							<td>Pincode</td>
							<td><input type="text" name="pincode" style="margin: 2px" /></td>
						</tr>

						<tr>
							<td colspan="2" align="center">
								<input name="sub" type="submit" value="Signup" style="margin: 2px" style="background-color: #000" />
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