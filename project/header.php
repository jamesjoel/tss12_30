<?php
$page = $_SERVER['PHP_SELF'];
$query_cate = "SELECT * FROM category";
$result_cate = mysqli_query($con, $query_cate);


if(isset($_COOKIE['product_id']))
{	
	$x = $_COOKIE['product_id']; // 5#1#2
	$arr_cookie = explode("#", $x);
	$total = count($arr_cookie);
}
else
{
	$total = 0;
}

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
					<li><a href="my_profile.php">My Profile</a>|</li>
					<li><a href="#"><?php echo $_SESSION['name']; ?></a>|</li>
				</ul>
				<?php
				}else{
				?>

				<ul
					<li><a href="#">My Cart(<?php echo $total; ?>)</a></li>



					<li><a href="my_cart.php">My Cart(<?php echo $total; ?>)</a></li>

					<li><a href="signup.php">Signup</a>|</li>
					<li><a href="login.php">Login</a>|</li>
				</ul>
				<?php
				}
				?>
			</div>
				<div class="search-frm">
					<form action="" method="get">
						
					<input name="q" type="text" id="search-txt" placeholder="Search Product ">
					<input type="submit" id="search-btn" value="Go">
					</form>
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
				while($data_cate=mysqli_fetch_assoc($result_cate))
				{ ?>

					<li><a href="index.php?category=<?php echo $data_cate['id']; ?>"><?php echo $data_cate['name']; ?></a></li>
				<?php
				}
				?>
				
			</ul>
		</div>
		<div id="right-content">
			<div id="right-content-top">
				<img src="images/banner.jpeg" />
			</div>