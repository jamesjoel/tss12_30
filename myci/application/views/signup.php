<div id="right-content">
	<h1>Signup Page</h1>
	<?php
	// echo validation_errors();
	?>	
	<form method="post" action="">
		
	<table align="center" width="400">
		
		<tr>
			<td>Full Name</td>
			<td><input value="<?php echo  set_value("full_name"); ?>" type="text" name="full_name" /></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo form_error("full_name"); ?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input value="<?php echo  set_value("username"); ?>" type="text" name="username" /></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo form_error("username"); ?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input value="<?php echo  set_value("pass"); ?>" type="password" name="pass" /></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo form_error("pass"); ?></td>
		</tr>
		<tr>
			<td>Re-Password</td>
			<td><input value="<?php echo  set_value("re_pass"); ?>" type="password" name="re_pass" /></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo form_error("re_pass"); ?></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name="add"><?php echo  set_value("add"); ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo form_error("add"); ?></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>Male<input <?php echo set_radio("gender", "male"); ?> type="radio" name="gender" value="male" />Female<input type="radio" name="gender" value="female" <?php echo set_radio("gender", "female"); ?> /></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo form_error("gender"); ?></td>
		</tr>
		<tr>
			<td>City</td>
			<td><select name="city">
				<option value="">Select</option>
				<option <?php echo set_select("city", "indore"); ?> value="indore">Indore</option>
				<option <?php echo set_select("city", "mumbai"); ?> value="mumbai">Mumbai</option>
				<option <?php echo set_select("city", "bhopal"); ?> value="bhopal">Bhopal</option>
				<option <?php echo set_select("city", "pune"); ?> value="pune">Pune</option>
			</select></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo form_error("city"); ?></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input  value="<?php  echo set_value("contact"); ?>" type="Text" name="contact" /></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo form_error("contact"); ?></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="Signup">
			</td>
		</tr>
	</table>
	</form>
</div>