<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	 <div id="header">
	 	   <h1>Adminpanel</h1>
	 	   <div id="right-header">
	 	   	<ul>
	 	   		<li><a href="#">Home</a></li>
	 	   		<li><a href="login.php">Login</a> |</li>
	 	   		<li><a href="signup.php">Signup</a> |</li>
	 	   	</ul>
	 	   </div>
	 </div>
	
	 <div id="menu">
	 	<div id="inside-menu">
	 		<ul>
	 			<li><a href="#" <?php if(strstr($page, "dash.php")){ echo "class='active'"; }?>>Dashboard</a> |</li>
	 			<li><a href="#" <?php if(strstr($page, "addcategory.php")){ echo "class='active'"; }?>>add category</a> |</li>
	 			<li><a href="#" <?php if(strstr($page, "addproduct.php")){ echo "class='active'"; }?>>Add product</a> |</li>
	 			<li><a href="#" <?php if(strstr($page, "viewproduct.php")){ echo "class='active'"; }?>>view product</a> |</li>
	 			<li><a href="#" <?php if(strstr($page, "viewcategory.php")){ echo "class='active'"; }?>>view category</a> |</li>
	 			<li><a href="#">logout</a> |</li>
	 		</ul>
	 	</div>
	 </div>