<?php
include("header.php");
?>
	 <div id="signup-content">
	 	  <div id="inside-signup-content">
	 	  
	<form action="save.php" method="post" enctype="multipart/form-data">
		<table align="center" cellpadding="5" cellspacing="0" border="1">
			<tr>
				<td align="center" colspan="2"><h2>SIGNUP</h2></td>
			</tr>
			<tr>
				<td>Full Name</td>
				<td><input type="text" name="full_name"></td>
			</tr>
			
			<tr>
				<td>Username</td>
				<td><input type="text" name="user"></td>
			</tr>
			
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="pass"></td>
			</tr>


			<tr>
				<td>Gender</td>
				<td>M<input value="male" type="radio" name="gender">
					F<input value="female" type="radio" name="gender"></td>

			</tr>
			
			<tr>
				<td>Choose file</td>
				<td><input type="file" name="pro_name"></td>
			</tr>
			
			<tr>
				<td>Address</td>
				<td><textarea name="add"></textarea></td>
			</tr>
			<tr>
				<td>pincode</td>
				<td><input type="text" name="pincode"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="save" ></td>
			</tr>
		</table>
	</form>

</body>
</html>