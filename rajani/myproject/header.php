<?php
 $page = $_SERVER['PHP_SELF'];
// echo $page;
// print_r($_SERVER);
?>
<!DOCTYPE html>
<html>
<head>
	<title>HELLO</title>
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
		<input type="text" style="height:25px"
	"width:200px" style="border:1px solid #000 ">search<input type="button" value="Go"></div>
		<div id="in-menu2">
		 <ul><li><a <?php if(strstr($page,"index.php")){echo "class='active'";} ?>  href="index.php">Home</a></li> 
		    <li><a <?php if(strstr($page,"login.php")){echo "class='active'";} ?>href="login.php">&nbsp&nbsplogin&nbsp&nbsp</a></li>
	        <li><a <?php if(strstr($page,"sign.php")){echo "class='active'";} ?> href="sign.php">&nbsp&nbspsignup&nbsp&nbsp</a></li>
	    	<li><a  href="#">&nbsp&nbspNewProduct&nbsp&nbsp</a></li>
			<li><a href="#">&nbsp&nbspmycart(0)&nbsp&nbsp</a></li>
		</ul>
		</div>
	</div>
</div>     
<div id=content>
	<div id="inside-content">
		<div id="sub-content1">
			<div id="sub-con1">
				<div id="top-sub-con11">
				<h4 style="border-radius-top: 20px">
				BROWSE BY CATEGORIES</h4></div>
				<div id="top-sub-con12">
				<ul>
					<li><a href="#">Desktop</li>
					<hr><li><a href="#">Cables</li>
					<hr><li><a href="#">Notebooks</li>
					<hr><li><a href="#">Memory</li>
					<hr><li><a href="#">Networking</li>
					<hr><li><a href="#">storage</li>
					<hr><li><a href="#">PDS's</li>
					<hr><li><a href="#">Fax-Machines</li>
					<hr><li><a href="#">Audio hi-wi</li>
					<hr><li><a href="#">Video hi-wi</li>
					<hr><li><a href="#">Hardware & software</li>
					<hr><li><a href="#">All producte</li>
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
					<h5 style="margin-top:5px" "padding-top:10px" >FEATURES PRODUCTS</h5>
				</div>