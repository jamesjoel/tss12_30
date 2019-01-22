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
								<h3>User Login</h3>
								<div id="login-box">
									<table align="center">
										<tr>
											<td>Username</td>
											<td><input type="text" class="input" placeholder="your name" /></td>
										</tr>
										<tr>
											<td>Password</td>
											<td><input type="password" class="input" placeholder="password only 5 character" /></td>
										</tr>
										<tr>
											<td colspan="2" align="center">
												<input class="btn" type="submit" value="Login">
											</td>
										</tr>
									</table>
								</div>
							</div>
				</div>
			</div>
		</div>
	</div>

		<?php
		include("footer.php");
		?>	

	
	