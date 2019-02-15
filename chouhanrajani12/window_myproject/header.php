<?php
 $page = $_SERVER['PHP_SELF'];
// echo $page;
// print_r($_SERVER);
  // include("connect.php");
$con=mysqli_connect("localhost","root","","rajni");
?>
<!DOCTYPE html>
<html>
<head>
	<title>homepage-index</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>

<div id="header">
	<div id="inside-header">
		<div id="left-header">
			<h1><span style="color:#f4d05a">ONLINE</span>STORE</h1>
			<p>the best you can find the best in the net</p>
		</div>
		<div id="right-header">
			<div id="right1-header">
				<div id="head">
					<div id="head-top">
						<p>choose your language</p>
					</div>
					<div id="head-bom">
						<img src="image/588.png" height="30" width="130"/>
					</div>
				</div>
				<div id="head1"><p style="margin: 0px; padding: 0px;">choose your currency</p>
				<select>
					<option></option><option>select</option>
					<option>&</option>
					<option>$</option>
					<option>^</option>
			</select></div>
			</div>
			<div id="right2-header">
				<ul><li><a href="#">specials</a></li>
					<li><a href="#">search</a></li>
						<li><a href="#">contact us</a></li>
						<li><a href="#">create an accounts</a></li>
			</ul>
		</div>
			<div id="right3-header">
				<img src="image/cart.png" height="60" width="50"/>
				shopping by cart<br>
				now in your cart<span style="color:#f4d05a"> 5items</span>
			</div>
		</div>
	</div>
</div>
<div id="menu">
	<div id="inside-menu">
		<div id="in-menu1">
		<input type="text"style="height:25px"
	"width:200px" style="border:1px solid #000 ">search<input type="button" value="Go"></div>
		<div id="in-menu2">
		 <ul><li><a <?php if(strstr($page,"index.php")){echo "class='active'";} ?>  href="index.php">Home</a></li> 
		    <li><a <?php if(strstr($page,"login.php")){echo "class='active'";} ?>href="login.php">login</a></li>
	        <li><a <?php if(strstr($page,"sign.php")){echo "class='active'";} ?> href="sign.php">signup</a></li>
	    	<li><a <?php if(strstr($page,"userlogout.php")){echo "class='active'";} ?> href="userlogout.php">logout</a></li>
			<li><a href="#">mycart(0)</a></li>
		</ul>
		</div>
	</div>
</div>     
<div id=content>
	<div id="inside-content">
		<div id="sub-content1">
			<div id="sub-con1">
				<div  id="top-sub-con11">
					<?php
				if(isset($_SESSION['is_user_logged_in']))
				{
					echo $_SESSION['id']; 
				}
				?>
				<style></style>

				<h4 style="border-radius-top: 20px">
				BROWSE BY CATEGORIES</h4></div>
				<div id="top-sub-con12">
				<ul>
					<li><a href="#">Desktop</a></li>
					<hr><li><a href="#">Notebooks</a></li>
					<hr><li><a href="#">Memory</a></li>
					<hr><li><a href="#">Networking</a></li>
					<hr><li><a href="#">Fashion</a></li>
					<hr><li><a href="#">Mobile</a></li>
					<hr><li><a href="#">All producte</a></li>
				</ul><hr>
				</div>
			</div>
			<div id="sub-con2">
				<div id="left1sub-con2">
					<img src="image/5.jpg" height="150" width="300" style="border-radius: 10px" />
				</div>
				<div id="left2sub-con2">
					<h4><span style="color: #abab12">SPECIAL</span>OFFER!</h4>
				</div>
			</div>
		</div>
		 <div id="sub-content2">
			<div id="in-sub-con1">
				<img src="image/253.jpg" height="200" width="610" style="border-radius: 10px" />
			</div>
			<div id="right-content">
				
					<div id="top-con22">
					<h5 style="margin-top:5px;padding-top:10px" >FEATURES PRODUCTS</h5>
				
				</div>  