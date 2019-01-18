<?php
include("header.php");
?> 
<!-- <!DOCTYPE html>
<html>
<head>
	<title>admin page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>	 -->
<div id="content">
	<div id="inside-content">
	<h2>ADD NEW PRODUCT</h2>
	<hr>
	<form action="save_product.php" method="post">
	<div id="login-box">
	<table align="center">
		<tr>
			<td>Product Name</td>
			<td><input type="Text" name="product_name" class="input"/></td>
		</tr>
		<tr>
			<td>Product Price</td>
			<td><input type="Text" name="product_price"  class="input"/></td>
		</tr>
		<tr>
			<td>Detail</td>
			<td><textarea cols="22" name="detail" rows="5"></textarea></td>
		</tr>
		<tr>
			<td>Product Category</td>
			<td><select class="input" name="pro_cate">
				<option>Select</option>
				<option>iphone</option>
				<option>android phone</option>
				<option>tablet</option>
				<option>pendrive</option>
				<option>cables</option>
			</select></td>
		</tr>
		<tr>
			<td>Product Discount</td>
			<td><input name="discount" type="Text"  class="input"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="Add Product" class="btn">
			</td>
		</tr>
	</table>
	</form>
	</div>
</div>
</body>
</html>


	<!-- <h3>Add New Product</h3>
	<form action="save_product.php" method="post">
	<div id="login-box">
	<table align="center">
		<tr>
			<td>Product Name</td>
			<td><input type="Text" name="product_name" class="input"/></td>
		</tr>
		<tr>
			<td>Product Price</td>
			<td><input type="Text" name="product_price"  class="input"/></td>
		</tr>
		<tr>
			<td>Detail</td>
			<td><textarea cols="22" name="detail" rows="5"></textarea></td>
		</tr>
		<tr>
			<td>Product Category</td>
			<td><select class="input" name="pro_cate">
				<option>Select</option>
				<option>iphone</option>
				<option>android phone</option>
				<option>tablet</option>
				<option>pendrive</option>
				<option>cables</option>
			</select></td>
		</tr>
		<tr>
			<td>Product Discount</td>
			<td><input name="discount" type="Text"  class="input"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="Add Product" class="btn">
			</td>
		</tr>
	</table>
	</form>
	</div>
</div>
</body>
</html>