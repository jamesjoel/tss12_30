<?php
include("connect.php");
?>
<!DOCTYPE html>

<html>
<head>
	<title>my index page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">
	<div id="in-header">
		<h2>Stepping Stone</h2>
	</div>
</div>
<div id="menu">
	<div id="in-menu">
		<ul><li><a href="index.php">HOME</a></li>
			<li><a href="contact.php">CONTACT</a></li>
			<li><a href="sign.php">SIGNIN</a></li>
			<li><a href="login.php">LOGIN</a></li>
			<li><a href="logout.php">LOGOUT</a></li>
			<li><a href="myprofile.php">MYPROFILE</a></li>
				<li><a href="editprofile.php">EDIT PRIFILE</a></li>
		</ul>
	</div>
</div>
<div id="content">
	<div id="in-content">
		<form action="login_auth.php" method="POST" >
			<table border="1" cellpadding="5" cellspacing="0" align="center">
			<tr><td>Username</td>
				<td><input type="text" name="username" id="username"></td>
			</tr>
			<tr><td>Password</td>
				<td><input type="password" name="pass" id="pass"></td>
			</tr>
			
			<tr><td></td>
				<td align="center" colspan="2"><input type="submit" value="login"></td>
			</tr>
			</table>
			<p>
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
<div id="footer">
	<div id="in-footer">
		<p>contact us:stepping_stone@gmail.com</p>
	</div>
</div>
</body>
</html>