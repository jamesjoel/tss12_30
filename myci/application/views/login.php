<div id="right-content">
	<h1>Login Page</h1>
	


	<?php echo form_open("home/auth"); ?>
		
	<table align="center" width="400">
		
		
		<tr>
			<td>Username</td>
			<td><?php echo form_input("username");?></td>
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