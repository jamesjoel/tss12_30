<?php
$page = $_SERVER['PHP_SELF'];
// $x = "about.php";

// if(strstr($page, $x))
// {
// 	echo "hello";
// }


?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div id="header">
		<div id="inside-header">
			<div id="logo">
				<h1>TECH<h1>
			</div>
			<div id="right-header">
				<div id="right-header-top">
					<?php
					if(isset($_SESSION['is_user_logged_in']))
					{
					?>
					<ul>
						<li><a href="#">my cart()</a>|</li>
						<li><a href="logout.php">logout</a>|</li>
						<li><a href="my_account.php">my account</a>|</li>
						<li><a href="#"><?php echo $_SESSION['name'];?></a>|</li>
					</ul>
					<?php
					}
					else{
					?>
				<ul>
					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">register</a>or</li>
				</ul>
				<?php
			}
			?>
			    </div>
			    <div id="right-header-bottom"></div>
			</div>
		</div>
	</div>
