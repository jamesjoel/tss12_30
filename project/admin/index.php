<?php
include("../connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">
		<h3>Admin Panel</h3>		
</div>
<div id="content">
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
</body>
</html>