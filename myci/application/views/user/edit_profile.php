<div id="right-content">
	<h1>Profile</h1>	
	<?php
	$user=$data->row_array();
	// print_r($user);
	?>
	<form action="<?php echo site_url('user/update'); ?>" method="post">
		
	<table align="center" border="1" cellspacing="0" cellpadding="10" width="300">
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="full_name" value="<?php echo $user['full_name'];?>" /></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text"  disabled="disabled" value="<?php echo $user['username'];?>"/></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name="add"><?php echo $user['address'];?></textarea></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" name="contact" value="<?php echo $user['contact'];?>" /></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>Male <input <?php if($user['gender']=="male"){ echo "checked='checked'"; } ?> type="radio" name="gender" value="male" />Female <input <?php if($user['gender']=="female"){ echo "checked='checked'"; } ?> type="radio" name="gender" value="female" /></td>
		</tr>
		<tr>
			<td>City</td>
			<td><select name="city">
				<option>Select</option>
				<option <?php if($user['city']=='indore'){ echo "selected='selected'"; } ?>>Indore</option>
				<option <?php if($user['city']=='bhopal'){ echo "selected='selected'"; } ?>>Bhopal</option>
				<option <?php if($user['city']=='mumbai'){ echo "selected='selected'"; } ?>>Mumbai</option>
				<option <?php if($user['city']=='pune'){ echo "selected='selected'"; } ?>>Pune</option>
			</select></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="Update">
			</td>
		</tr>
	</table>
	</form>
</div>
			
		