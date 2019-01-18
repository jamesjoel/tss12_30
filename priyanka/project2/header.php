<?php
$page = $_SERVER['PHP_SELF'];
// $x = "about.php";
// if(strstr($page, $x))
// {
// 	echo "hello";
// }
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">
	<div id="inside-header">
		<div id="top-header">
			<div id="logo">
				<h2>Shoe<span>Store</span></h2>
				<p>Online Shoe Store</p>
			</div>
			<div id="top-menu">
				<ul>
					<li><a href="#">Login</a></li>
					<li><a href="signup.php">Signup</a>|</li>
					<li><a href="#">My Cart(0)</a>|</li>
				</ul>
			</div>
		</div>
		<div id="bottom-header">
			<ul>
				<li><a <?php if(strstr($page, "index.php")){ echo "class='active'"; } ?> href="index.php">Home</a></li>
				<li><a <?php if(strstr($page, "about.php")){ echo "class='active'"; } ?>  href="#">Contact</a></li>
				<li><a <?php if(strstr($page, "contact.php")){ echo "class='active'"; } ?> href="#">About</a></li>
				<li><a <?php if(strstr($page, "help.php")){ echo "class='active'"; } ?> href="#">Help</a></li>
			</ul>
		</div>
		<div id="white-header"></div>
	</div>
</div>
<div id="content">
	<div id="inside-content">
		<div id="left-content">
			<div id="left-menu">
				<h3>Category</h3>
				<ul>
					<li><a href="#">Home Appliance</a></li>
					<li><a href="#">Mobile</a></li>
					<li><a href="#">Electronics</a></li>
					<li><a href="#">Fashion</a></li>
				</ul>
			</div>
		</div>
		<div id="right-content">
			<div id="right-content-top">
				<img src="images/banner.jpeg" />
			</div>
