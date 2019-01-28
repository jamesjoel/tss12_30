<?php
include("../connect.php");
include("header.php");
$query = "SELECT * FROM add_category";
$result = mysqli_query($con, $query);
// die;
?>

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
				<?php
				while($data=mysqli_fetch_assoc($result))
				{
				?>

				<option value="<?php echo $data['id'];?>"><?php echo $data['product_category'];?></option>
				<?php
				}
				?>

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
