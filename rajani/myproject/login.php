<?php
 include("header.php");
 include("connect.php");

?>				
				<h3 style="text-align: center;">User-login</h3>
				<form action="loginauth.php" method="POST">
				<table align="center">
						<tr>
							<td>Username</td>
							<td><input type="text" name="username" class="input" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="pass" class="input"   /></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input id="button" type="submit" value="Login"/>
							</td>
						</tr>

					</table>
					<p class= "error">
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
<?php
 include("footer.php");


?>