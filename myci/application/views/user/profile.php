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
		<form action="<?php echo site_url('user/image_upload') ?>" method="post" enctype="multipart/form-data">
			
		<tr>
			<td>Image</td>
			<td><img src="<?php echo base_url('user_image/'.$user['image']); ?>" height="100" width="100">
				<br />
				<input type="file" name="myfile" />
				<input type="submit" value="upload">
			</td>
		</tr>
		</form>
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
	<a href="<?php echo site_url('user/change_pass'); ?>">Change Password</a>
</div>
			
		