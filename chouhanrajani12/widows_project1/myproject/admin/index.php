<?php
include("../connect.php");
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="content">
	<div id="sub-content">
					<h3>Admin-login</h3>
				<form action="adminlogin.php" method="POST">
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
								<input id="button" type="submit" class="btn" value="Login"/>
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

		</div>
<div id="footer">
	<div id="sub-footer"></div>
</div>
</body>
</html>