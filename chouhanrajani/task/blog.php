<!DOCTYPE html>
<html>
<head>
	<title>my page</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="header">
	<div id="in-header">
		<a href="view_blog.php"><h3 align="center">view all blogs</h3></a>
		<a href="mycart.php"><h3 align="center">my cart(0)</h3></a>
	</div>
</div>
<div id="content">
	<div id="in-content">
		<form action="save.php" method="post">
			<table align="center">
				<tr>
					<td>Title  :<input type="text" name="title"></td>
				</tr>
	<tr> <td>Subject :<select name="subject"><option>select</option>
							<option>Science</option>
							<option>Phusics</option>
							<option>Travelling</option>
							<option>Cooking</option>
				</select></td></tr>
	<tr><td>Message :<textarea name="msg"></textarea></td></tr>
	<tr>
		<td><input type="submit" value="submit"></td></tr>



			</table>
		</form>
	</div>
</div>
<div id="footer">
	<div id="in-footer"></div>
</div>

</body>
</html>