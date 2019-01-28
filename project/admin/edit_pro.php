<?php
include("../connect.php");
// print_r($_GET);
$a = $_GET['pid'];
$query_pro = "SELECT * FROM product WHERE id = $a";
$result_pro = mysqli_query($con, $query_pro);
$data_pro = mysqli_fetch_assoc($result_pro);

// print_r($data_pro);
include("header.php");
$query = "SELECT * FROM category";
$result = mysqli_query($con, $query);


$x = $data_pro['category'];

?>	
<div id="content">
	<h3>Update Product</h3>
	
	<form action="update_product.php" method="post">
		<input type="hidden" name="pid" value="<?php echo $a; ?>"/>
	<div id="login-box">
	<table align="center">
		<tr>
			<td>Product Name</td>
			<td><input type="Text" name="product_name" class="input" value="<?php echo $data_pro['product_name']; ?>" /></td>
		</tr>
		<tr>
			<td>Product Price</td>
			<td><input type="Text" name="product_price"  class="input" value="<?php echo $data_pro['product_price'];?>" /></td>
		</tr>
		<tr>
			<td>Detail</td>
			<td><textarea cols="22" name="detail" rows="5"><?php echo $data_pro['detail'];?></textarea></td>
		</tr>
		<tr>
			<td>Product Category</td>
			<td><select class="input" name="pro_cate">
				<option>Select</option>
				<?php
				while($data=mysqli_fetch_assoc($result))
				{ 
					if($data['id']==$x)
					{ ?>

						<option selected="selected" value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
					<?php 
					}
					else
					{ ?>
						<option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>

					<?php
					}
					?>
				<?php
				}
				?>
			</select></td>
		</tr>
		<tr>
			<td>Product Discount</td>
			<td><input name="discount" type="Text"  class="input" value="<?php echo $data_pro['discount'];?>" /></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="Update Product" class="btn">
			</td>
		</tr>
	</table>
	</form>
	</div>
</div>
</body>
</html>
