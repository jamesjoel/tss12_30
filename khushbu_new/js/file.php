<?php
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="save.php" method="post" enctype="multipart/form-data">
	<div id="login-box">
	<table align="center" border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>title</td>
			<td><input type="text" name="title" /></td>
		</tr><br>
		<tr>
			<td>main Image</td>
			<td><input type="file" name="mainfile" /></td>
		</tr><br>
		 <tr>
			<td>first Image</td>
			<td><input type="file" name="pro_image" class="input"/></td>
		</tr>
		<tr>
			<td>second Image</td>
			<td><input type="file" name="pro_image" class="input"/></td>
		</tr>
		<tr>
			<td>third Image</td>
			<td><input type="file" name="pro_image" class="input"/></td>
		</tr>
		<tr>
			<td>fourth Image</td>
			<td><input type="file" name="pro_image" class="input"/></td>
		</tr>
				<tr>
			<td colspan="2" align="center">
				<input type="submit" value="Upload">
			</td>
		</tr>
	</table>
	</form>
	</div>
</div>
</body>
</html>