<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
					<table align="center" cellpadding="5" cellspacing="0" border="1">
						<tr>
							<td>product_Name</td>
							<td><input name="product_name" type="text" class="input" /></td>
						</tr>
						<tr>
							<td>product_price</td>
							<td><input name="product_price" type="text" class="input" /></td>
						</tr>
						<tr>
							<td>detail</td>
							<td><textarea name="detail" type="text" class="input" /></textarea></td>
						</tr>
						<tr>
							<td>product_category</td>
							<td><input name="product_category" type="" class="input" /></td>
						</tr>
						<tr>
							<td>browse</td>
							<td><input type="file" name="image">
						</td>
						<tr>
							<td>discount</td>
							<td><input type="text" class="input" name="product_discount" /></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input class="btn" type="submit" value="save">
							</td>
						</tr>
					</table>
				</form>
</body>
</html>
					