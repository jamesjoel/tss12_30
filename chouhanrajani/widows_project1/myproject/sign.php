<?php
include("connect.php");
 include("header.php");


?>

<style type="text/css">
	.error_msg td{
		color: red;
		font-size: 10px;
	/*	height: 5px !important;*/
	}
</style>
					<h3 style="text-align: center;color: black">User Registration</h3>
				<div id="Registration-box" >
					<form action="save.php" id="sign" method="post">
					<table align="center">
						<tr>
							<td>Full Name</td>
							<td><input type="text" name="fullname" id="fullname" class="input" /></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="fullname_msg"></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input type="text" name="username" id="username" class="input" /></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="user_msg"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="pass" id="pass" class="input" /></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="pass_msg"></td>
						</tr>
					<tr>
							<td>Re-Password</td>
							<td><input type="password" id="repass" name="repass" class="input"  /></td>
						</tr>
					
					<tr class="error_msg">
							<td></td>
							<td id="repss_msg"></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>Male<input type="radio" value="male" id="male" name="gender" class="input"  />
								Female<input type="radio" name="gender" value="female" id="femal" class="input" /></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="gender_msg"></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><textarea id="add" name="add" cols="27" rows="5"></textarea></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="add_msg"></td>
						</tr>
						<tr>
							<td>City</td>
							<td><select name="city" id="city" class="input" >
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
							<td><input type="text" id="contact" name="contact" class="input" /></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="contact_msg"></td>
						</tr>
						<tr>
							<td>Pincode</td>
							<td><input type="text" id="pincode" name="pincode" class="input"/></td>
						</tr>
						<tr class="error_msg">
							<td></td>
							<td id="pincode_msg"></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input  type="submit" value="submit" class="input"  />
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