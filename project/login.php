<?php
include("header.php");
?>
			<div id="right-content-bottom">
				<h3>User Login</h3>
				<div id="login-box">
					<form action="auth.php" method="post">
					<table align="center">
						<tr>
							<td>Username</td>
							<td><input name="username" type="text" class="input" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input name="pass" type="password" class="input" /></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input class="btn" type="submit" value="Login">
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