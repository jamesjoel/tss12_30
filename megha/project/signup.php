<?php
include("header.php");
?>
<div id="content">
	<div id="in-content">
		<div id="right-content">
			<h3>Signup</h3>
			                     <div id="login-box">
									<form action="save.php" method="post">
									<table align="center">
										<tr>
											<td>FirstName</td>
											<td><input name="firstname" type="text" class="input" /></td>
										</tr>
										<tr>
											<td>lastname</td>
											<td><input name="lastname" type="text" class="input" /></td>
										</tr>
										<tr>
											<td>Password</td>
											<td><input name="password" type="password" class="input" /></td>
										</tr>
										<tr>
											<td>Re-Password</td>
											<td><input type="password" class="input" /></td>
										</tr>
										<tr>
											<td>Gender</td>
											<td>Male<input value="male" type="radio" name="gender" />
												Female<input value="female" type="radio" name="gender"/></td>
										</tr>
										<tr>
											<td>Address</td>
											<td><textarea cols="20" rows="10" name="address"></textarea></td>
										</tr>
										<tr>
											<td>City</td>
											<td><select name="city" class="input">
												<option>Select</option>
												<option>Indore</option>
												<option>Silwani</option>
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
											<td><input type="text" class="input" name="pincode" /></td>
										</tr>

										<tr>
											<td colspan="2" align="center">
												<input name="sign" class="btn" type="submit" value="Signup">
											</td>
										</tr>
									</table>
								</form>
								</div>
		</div>
		<div id="left-content">
			<div id="left-menu">
				<h3>Products</h3>
				<ul>
					<li><a href="#">Women handbags</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Kids</a></li>
					<li><a href="#">Winter Store</a></li>
					<li><a href="#">Clothing</a></li>
					<li><a href="#">Watches</a></li>
					<li><a href="#">Footwear</a></li>
					<li><a href="#">Jewellery</a></li>
					<li><a href="#">Toys</a></li>
					<li><a href="#">Fragrances</a></li>
					<li><a href="#">Beauty Wellness</a></li>
					<li><a href="#">School Supplies</a></li>
					<li><a href="#">Eyewear</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>
			                   