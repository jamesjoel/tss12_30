<?php 
include("connect.php");
include("header.php");
?>
<div id="content">
	<div id="in-content">
		<div id="right-content">
			<h3>login</h3>
			<div id="login-box">
				<form action="login.php" method="post">
					<table align="center">
						<tr>
							<td>Username</td>
							<td><input name="firstname" type="text" class="input" /></td>
						</tr>
							<tr>
								<td>Password</td>
								<td><input name="password" type="password" class="input" /></td>
							</tr>
						<tr>
							<td colspan="2" align="center">
								<input name="sign" class="btn" type="submit" value="login">
							</td>
						</tr>
					</table>
					<p class="error">
						<?php
						if(isset($_SESSION['msg']))
						{
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
						?>
						</p>
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