<!DOCTYPE html>
<html>
<head>
	<title>my page</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="header">
	<div id="in-header">
		<a href="view_blog.php"><h3 align="center">order page</h3></a>
	</div>
</div>
<div id="content">
	<div id="in-content">
		<form action="save_ord.php" method="post">
			<table align="center">
				<tr>
					<p><td>date:<input type="text" name="date"></td></p>
				</tr>
	<tr><p><td>cus_id<input type="text" name="cus_id"></td></p></tr>
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