<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/style.css"); ?>">
	
</head>
<body>
<div id="header">
	<div class="inner">
		<div id="logo">
			<h1>unicase</h1>
			<p>Universal Shopping Area</p>
		</div>
	</div>
</div>
<div id="menu">
	<div class="inner">
		<ul>
			<li><a href="<?php echo site_url("home/index"); ?>">Home</a></li>
			<li><a href="<?php echo site_url("home/about"); ?>">About</a></li>
			<li><a href="<?php echo site_url("home/contact"); ?>">Contact</a></li>
			<li><a href="<?php echo site_url("home/help"); ?>">Help</a></li>
			<li><a href="<?php echo site_url("home/signup") ?>">Signup</a></li>
		</ul>
	</div>
</div>
<div id="content">
	<div class="inner">
		<div id="left-content">
			<div id="left-menu">
				<h4>categories</h4>
				<ul>
					<li><a href="#">Mobile</a></li>
					<li><a href="#">Home Appliance</a></li>
					<li><a href="#">Fashion</a></li>
					<li><a href="#">Electronics</a></li>
					<li><a href="#">Kids</a></li>
					<li><a href="#">Fashion Mens</a></li>
					<li><a href="#">Fashion Womens</a></li>
				</ul>
			</div>
			<div id="left-bottom">
				<h3><?php echo $demo; ?></h3>
			</div>
		</div>
		<?php
			$this->load->view($pagename);
		?>

		</div>
	</div>
</div>
<div id="footer">
	<div class="inner"></div>
</div>
</body>
</html>