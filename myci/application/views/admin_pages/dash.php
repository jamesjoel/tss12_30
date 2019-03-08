<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: #225588;
			margin: 0;
			padding:0;
			font-family: Helvetica;
		}
		#header{
			width: 870px;
			margin: 0 auto;
			height: 80px;
			background-color: #BAC124;
		}
		#header h2{
			margin: 0;
			padding-top: 20px;
		}
		#content{
			width: 870px;
			margin: 0 auto;
			height: auto;
			min-height: 600px;
			background-color: #FFF;	
		}
		#content h2{
			margin: 0;
			padding-top: 50px;
		}
		ul{
			list-style: none;
			margin: 0;
			padding-top: 50px;
		}
		ul li{
			float: left;
		}
		ul li a{
			background-color: #114455;
			display: inline-block;
			margin: 10px;
			padding: 10px 15px;
			text-decoration: none;
			color: #FFF;
		}
	</style>
</head>
<body>
<div id="header">
	<h2>Admin Panel</h2>
</div>
<div id="content">
	
	<ul>
		<li><a href="<?php echo site_url('admin/dashboard') ?>">Dashboard</a></li>
		<li><a href="<?php echo site_url('admin/user') ?>">Users</a></li>
		<li><a href="<?php echo site_url('admin/logout') ?>">Logout</a></li>
	</ul>
	<Br />
	<h2>Welcome To Admin Panel</h2>
</div>
</body>
</html>