<?php
 include("header.php");


?>
				<h3 style="text-align: center;">User-login</h3>
				<form action="loginauth.php" method="POST">
				<table align="center">
						<tr>
							<td>Username</td>
							<td><input type="text" name="username" class="input" style="margin: 5px;" style="padding:5px;" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="pass" class="input" style="margin: 5px;"style="padding:5px;"  /></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input id="button" type="submit" value="Login" style="margin: 5px;"style="padding:5px;background-color: #EBE9EA"/>
							</td>
						</tr>
					</table>
					<p class="error">
						<?php
						if(isset($_SESSION['meg']))
						{
							echo $_SESSION['meg'];
							unset($_SESSION['meg']);
						}
						?>
					</p>

				</form>
</div>

		</div>
<?php
 include("footer.php");


?>