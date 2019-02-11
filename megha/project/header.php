

<!DOCTYPE html>
<html>
<head>
	<title>Project</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">
	<div id="in-header">
		<div id="top-header">
			<div id="top-menu">
				<?php
				if(isset($_SESSION['is_user_logged_in']))
				{
					?>
				<ul>
					<li><a href="#">My Cart()</a></li>
					<li><a href="logout.php">Logout</a>|</li>
					<li><a href="my_account.php">My Account</a>|</li>
					<li><a href="my_profile.php">My Profile</a>|</li>
					<li><a href="#"><?php echo $_SESSION['name']; ?></a>|</li>
				</ul>
				<?php
				}else{
				?>

				<ul>
					<li><a href="login.php">Login</a><span>|</span></li>
					<li><a href="#">My Cart(0)</a><span>|</span></li>
					<li><a href="signup.php">Register</a></li>
				</ul>
				<?php
				}?>	
			</div>
			<div id="logo">
				<h1>Fashion</h1>
			</div>
		</div>
		<div id="left-header">
			<img src="images/mega.jpg" height="200" width="450" />
		</div>
		<div id="right-header"><p><h4><i>New Year</i></h4></p>
			<div id="right1"><h1>Offers 50%</h1></div>
			<div class="box">
			<h3>19</h3></div>
			<div class="box">
			<h3>09</h3></div>
			<div class="box">
			<h3>01</h3></div>
	</div>
	<div class="box01"><h2>24/7</h2>Fashion Weeks</div>
	<div class="box01"><h2>2000+</h2>Fashion Starts</div>
	<div class="box01"><h2>2019</h2>Fashion Year</div>
	<div class="box01"><h2>january</h2>From to December</div>
</div>