
<?php
include("header.php");
include("menu.php");
?>

<div id="content">
		<div id="inside-content">
			<div id="left-content">
			<div id="left-content-top">
				<h3>Category</h3>

			   <ul>
				<!-- <li><a href="#">CATEGORY</a></li> -->
				<li><a href="#">DEMO1</a></li>
				<li><a href="#">DEMO2</a></li>
				<li><a href="#">DEMO3</a></li>
				<li><a href="#">DEMO4</a></li>
			   </ul>
			</div>
			<div class="left-content-bottom">	
			<div class="left-content-bottom-up">
				<h4>LATEST</h4>
				<div class="product-box-left">
					<!-- <p>product</p> -->
					<div class="product-box-left-img">
						<img src="css/images (2).jpg" />
					</div>
					<div class="product-box-left-bottom1">
					    <p style="color: #FFF">product 1</p>
					    <p>$10.00</p>	
					</div>
					<div class="product-box-left-bottom2">
						<!-- <p>add cart</p> -->
						<input type="button" name="add cart" value="add cart" />
					</div>
					<br>
					<br>
					<div class="product-box-left">
					<div class="product-box-left-img">
						<img src="css/images (2).jpg" />
					</div>
					<div class="product-box-left-bottom1">
					    <p style="color: #FFF">product 2</p>
					    <p>$10.00</p>	
					</div>
					<div class="product-box-left-bottom2">
						<!-- <p>add cart</p> --><input type="button" name="add cart" value="add cart" />
					</div>
				</div>
			</div>
			</div>
			</div>
			</div>
			<div id="right-content">
				<div id="right-content-top">
					<img src="css/banner1.jfif" />
				</div>
				<br>
				<div id="right-content-bottom">
								<h3>User Registration</h3><hr>
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
			</div>
		</div>
	</div>

<?php
include("footer.php");
?>
