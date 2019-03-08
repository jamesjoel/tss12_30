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
		#content h1{
			margin: 0;
			padding-top: 50px;
		}
	</style>
</head>
<body>
<div id="header">
	<h2>Admin Panel</h2>
</div>
<div id="content">
	
	<form method="post" action="<?php echo site_url('admin/auth'); ?>">
		
	<table align="center" width="400">
		
		
		<tr>
			<td>Username</td>
			<td><input  type="text" name="username" /></td>
		</tr>
		
		<tr>
			<td>Password</td>
			<td><input  type="password" name="pass" /></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="Login">
			</td>
		</tr>
	</table>
	<?php
	echo $this->session->flashdata("msg");
	?>
	</form>
</div>
</body>
</html>