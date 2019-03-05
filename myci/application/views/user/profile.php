<div id="right-content">
	<h1>Profile</h1>	
	<?php
	$user=$data->row_array();
	// print_r($user);
	echo $this->session->flashdata("msg");
	?>
	<table align="center" border="1" cellspacing="0" cellpadding="10" width="300">
		<tr>
			<td>Full Name</td>
			<td><?php echo $user['full_name'];?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><?php echo $user['username'];?></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><?php echo $user['address'];?></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><?php echo $user['contact'];?></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><?php echo $user['gender'];?></td>
		</tr>
		<tr>
			<td>City</td>
			<td><?php echo $user['city'];?></td>
		</tr>
	</table>
	<a href="<?php echo site_url('user/edit_profile'); ?>">Edit Profile</a>
</div>
			
		