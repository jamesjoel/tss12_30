<?php
$page = $_SERVER['PHP_SELF'];
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
		<ul>
			<li><a href="#" <?php if(strstr($page, "dash.php")){ echo "class='active'"; } ?>>Dashboard</a></li>

			<li><a href="#" <?php if(strstr($page, "add_product.php")){ echo "class='active'"; } ?>>Add Product</a></li>

			<li><a href="#" <?php if(strstr($page, "view_product.php")){ echo "class='active'"; } ?>>View Product</a></li>

			<li><a href="#" <?php if(strstr($page, "add_category.php")){ echo "class='active'"; } ?>>Add Category</a></li>

			<li><a href="#" <?php if(strstr($page, "view_category.php")){ echo "class='active'"; } ?>>View Category</a></li>

			<li><a href="#" <?php if(strstr($page, "view_users.php")){ echo "class='active'"; } ?>>View Users</a></li>
			
			<li><a href="#">Logout</a></li>
		</ul>
	</div>
