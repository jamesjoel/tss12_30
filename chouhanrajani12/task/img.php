<!DOCTYPE html>
<html>
<head>
	<title>task by sir img browser</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form action="save_img.php" method="POST" enctype="multipart/form-data">
	<h3 align="center">hello</h3>
	<table  align="center" class="tab" cellpadding="10" cellspacing="0" border="1">
		<tr>
			<td>Title</td>
			<td><input type="text" name="title"></td>
		</tr><tr>
			<td>main image</td>
			<td><input type="file" name="file_main"></td>
		</tr><tr>
			<td>First_image</td>
			<td><input type="file" name="file_fir"></td>
		</tr><tr>
			<td>Second_image</td>
			<td><input type="file" name="file_sec"></td>
		</tr><tr>
			<td>Third_image</td>
			<td><input type="file" name="file_thir"></td>
		</tr><tr>
			<td>Forth_image</td>
			<td><input type="file" name="file_fort"></td>

		</tr>
		<tr>
			<td>view image</td>
			<td><a href="view_img.php">click here</a></td>

		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="upload"></td>
		</tr>
		

	</table>
</form>
</body>
</html>