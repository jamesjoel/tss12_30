<?php
 $page = $_SERVER['PHP_SELF'];
// echo $page;
// print_r($_SERVER);
?>
<!DOCTYPE html>
<html>
<head>
	<title>my admin index page</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
<div id="header">
	<div id="sub-header"></div>
</div>
<div id="menu">
	<div id="sub-menu">
		<ul><li><a <?php if(strstr($page,"dashboard.php")){echo "class='active'";}?>href="#">dashboard</a></li>

			<li><a <?php if(strstr($page,"addproduct.php")){echo "class='active'";}?> href="addproduct.php">addproduct</a></li>

			<li><a <?php if(strstr($page,"viewproduct.php")){echo "class='active'";}?> href="viewproduct.php">viewproduct</a></li>

			<li><a <?php if(strstr($page,"addcategory.php")){echo "class='active'";}?> href="addcategory.php">add category</a></li>
			<li><a <?php if(strstr($page,"view_category.php")){echo "class='active'";}?> href="view_category.php">view category</a></li>
			<li><a <?php if(strstr($page,"view_user.php")){echo "class='active'";}?> href="view_user.php">view user</a></li>
			<li><a <?php if(strstr($page,"admin_logout.php")){echo "class='active'";}?> href="admin_logout.php">logout</a></li>
		</ul>
	</div>
</div>
