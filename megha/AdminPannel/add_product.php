<?php

include("header.php");
?>	
<div id="content">
	<h3>Add New Product</h3>
<div id="login-box">
	<form action="save_product.php" method="post">
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
				<option>Electronics</option>
				<option>Home Appliance</option>
				<option>Mobile</option>
				<option>Fashion Men</option>
				<option>Fashion Women</option>
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