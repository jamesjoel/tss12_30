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
	<h2>All User</h2>
	<table align="center" width="700" border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>S.No.</th>
			<th>Name</th>
			<th>Username</th>
			<th>Contact</th>
			<th>Status</th>
			<th>Change</th>
		</tr>

		<?php
		$n=1;
		foreach($data->result_array() as $user)
		{ 
			if($user['status']==1)
				$x="Active";
			else
				$x="Deactive";

			?>
			<Tr>
				<td><?php echo $n; ?></td>
				<td><?php echo $user['full_name'];?></td>
				<td><?php echo $user['username'];?></td>
				<td><?php echo $user['contact'];?></td>

				<td><?php echo $x;?></td>
				<td><a href="#">Change</a></td>
			</Tr>
		<?php
		$n++;
		}
		?>

	</table>
</div>
</body>
</html>