<div id="right-content">
	<h1>Change Your Password</h1>	
	<form action="<?php echo site_url("user/update_pass"); ?>" method="post">
		
	<table align="center" border="1" cellspacing="0" cellpadding="10" width="300">
		<tr>
			<td>Currect Password</td>
			<td><input type="password" name="c_pass"></td>
		</tr>
		<tr>
			<td>New Password</td>
			<td><input type="password" name="n_pass"></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="cn_pass"></td>

		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="Update">
			</td>
		</tr>

	</table>
	<?php echo $this->session->flashdata("msg"); ?>
	</form>
</div>
			
		