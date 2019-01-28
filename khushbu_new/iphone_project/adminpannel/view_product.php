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
	<form action="save_product.php" method="post">
	<div id="login-box">
	<table align="center">
		<table class="tab" align="center">
			<tr>
				<th>S.No.</th>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Category</th>
				<th>Discount</th>
			</tr>
			
			<?php
			while($data=mysqli_fetch_assoc($result))
			{ ?>
				<tr>
					<td><?php echo $data['id'];?></td>
					<td><?php echo $data['product_name'];?></td>
					<td><?php echo $data['product_price'];?></td>
					<td><?php echo $data['product_category'];?></td>
					<td><?php echo $data['product_discount'];?></td>
				</tr>
			<?php
			}
			?>
		</table>
	</div>
</div>
</body>
</html>