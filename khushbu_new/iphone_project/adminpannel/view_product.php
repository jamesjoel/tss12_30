<?php
include("../connect.php");
include("header.php");

$query = "SELECT * FROM add_product";
$result = mysqli_query($con, $query);
// die;
?>
<div id="inside-content">
	<h2>ADD NEW PRODUCT</h2>
	<hr>
	<div id="login-box">

		<table class="tab" align="center">
			<tr>
				<th>S.No.</th>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Category</th>
				<th>Discount</th>
				<th>image</th>
				<th>edit</th>
				<th>Delete</th>
			</tr>
			
			
			
			<?php
			$n=1;
			while($data=mysqli_fetch_assoc($result))
			{ ?>
				<tr>
					<td><?php echo $n; ?></td>
					<td><?php echo $data['product_name'];?></td>
					<td><?php echo $data['product_price'];?></td>
					<td><?php echo $data['product_category'];?></td>
					<td><?php echo $data['product_discount'];?></td>
					<td><img height="100" width="50" src="../upload/<?php echo $data['pro_image'] ?>" /></td>

					<td><a href="edit_pro.php?pid=<?php echo $data['id']; ?>" class="edit-btn">Edit</a></td>
				
					<td><a href="delete_pro.php?pid=<?php echo $data['id']; ?>" class="delete-btn">delete</a></td>
				</tr>
			<?php
			$n++;
			}
			?>
		</table>
	</div>
</div>
</body>
</html>