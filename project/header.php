<?php
$page = $_SERVER['PHP_SELF'];
// $x = "about.php";

// if(strstr($page, $x))
// {
// 	echo "hello";
// }
$query = "SELECT * FROM category";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>My Site</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">
	<div id="inside-header">
		<div id="logo">
			<h2>My-Market<span>Supply</span></h2>
		</div>
		<div id="right-header">
			<div id="right-header-top">
				<?php
				if(isset($_SESSION['is_user_logged_in']))
				{
				?>
				<ul>
					<li><a href="#">My Cart()</a></li>
					<li><a href="logout.php">Logout</a>|</li>
					<li><a href="my_account.php">My Account</a>|</li>
					<li><a href="#"><?php echo $_SESSION['name']; ?></a>|</li>
				</ul>
				<?php
				}else{
				?>

				<ul>
					<li><a href="#">My Cart()</a></li>
					<li><a href="signup.php">Signup</a>|</li>
					<li><a href="login.php">Login</a>|</li>
				</ul>
				<?php
				}
				?>
			</div>
			<div id="right-header-bottom"></div>
		</div>
	</div>
</div>
<div id="menu">
	<div id="inside-menu">
		<ul>
			<li><a <?php if(strstr($page, "index.php")){ echo "class='active'"; } ?> href="index.php">Home</a></li>
			<li><a <?php if(strstr($page, "about.php")){ echo "class='active'"; } ?> href="about.php">About</a></li>
			<li><a <?php if(strstr($page, "contact.php")){ echo "class='active'"; } ?> href="contact.php">Contact</a></li>
			<li><a <?php if(strstr($page, "help.php")){ echo "class='active'"; } ?> href="help.php">Help</a></li>
		</ul>
	</div>
</div>
<div id="content">
	<div id="inside-content">
		<div id="left-content">
			<ul>
				<?php
				while($data=mysqli_fetch_assoc($result))
				{ ?>

					<li><a href="#"><?php echo $data['name']; ?></a></li>
				<?php
				}
				?>
				
			</ul>
		</div>
		<div id="right-content">
			<div id="right-content-top">
				<img src="images/banner.jpeg" />
			</div>