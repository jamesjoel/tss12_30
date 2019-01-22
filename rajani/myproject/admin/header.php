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
		<ul><li><a <?php if(strstr($page,"dashbord.php")){echo "class='active'";}?>href="#">dashboard</a></li>
			<li><a <?php if(strstr($page,"addproduct.php")){echo "class='active'";}?> href="#">addproduct</a></li>
			<li><a <?php if(strstr($page,"viewproduct.php")){echo "class='active'";}?> href="#">viewproduct</a></li>
			<li><a <?php if(strstr($page,"addcategory.php")){echo "class='active'";}?> href="#">add category</a></li>
			<li><a <?php if(strstr($page,"viewproduct.php")){echo "class='active'";}?> href="#">view category</a></li>
			<li><a <?php if(strstr($page,"viewuser.php")){echo "class='active'";}?> href="#">view user</a></li>
			<li><a <?php if(strstr($page,"logout.php")){echo "class='active'";}?> href="#">logout</a></li>
		</ul>
	</div>
</div>
