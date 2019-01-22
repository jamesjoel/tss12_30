<?php
include("header.php");
?>
	 <div id="signup-content">
	 	  <div id="inside-signup-content">
	 	  	<form method="post" action="save.php">
	 	  		<table align="center">
	 	  			<tr>
	 	  				<td><b>Full name</td>
	 	  				<td><input name="fullname" type="text"></td>
	 	  			</tr>
	 	  			<br>
	 	  			<tr>
	 	  				<td><b>Email</td>
	 	  				<td><input name="email" type="text"></td>
	 	  			</tr>
	 	  			<tr>
	 	  				<td><b>password</td>
	 	  				<td><input name="password" type="password"></td>
	 	  			</tr>
	 	  			<tr>
	 	  				<td><b>Re-enter password</td>
	 	  				<td><input type="password"></td>
	 	  			</tr>
	 	  			<tr>
	 	  				<td><b>Number</td>
	 	  				<td><input name="number" type="text"></td>
	 	  			</tr>
	 	  			<tr>
	 	  				<td><b>City</td>
	 	  				<td>
	 	  					<select name="city">
	 	  						 <option>select</option>
	 	  						 <option>Indore</option>
	 	  						 <option>Ujjain</option>
	 	  						 <option>Dhar</option>
	 	  						 <option>Dewas</option>
	 	  						 <option>Ratlam</option>
	 	  					</select>
	 	  				</td>
	 	  			</tr>
	 	  			<tr>
	 	  				<td><b>Pincode</td>
	 	  				<td><input name="pincode" type="text"></td>
	 	  			</tr>
	 	  			<tr>
	 	  				<td align="center" rowspan="2"><input type="submit" value="Signup"></td>
	 	  			</tr>
	 	  		</table>
	 	  	</form>
	 	  </div>
	 </div>