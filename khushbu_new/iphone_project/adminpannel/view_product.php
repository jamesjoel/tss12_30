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
<<<<<<< HEAD
			</tr>
			
			<?php
			while($data=mysqli_fetch_assoc($result))
			{ ?>
				<tr>
					<td><?php echo $data['id'];?></td>
=======
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			
			<?php
			$n=1;
			while($data=mysqli_fetch_assoc($result))
			{ ?>
				<tr>
					<td><?php echo $n; ?></td>
>>>>>>> c38ac84a220a4610d43c7f2abc25d6ac7d07ee22
					<td><?php echo $data['product_name'];?></td>
					<td><?php echo $data['product_price'];?></td>
					<td><?php echo $data['product_category'];?></td>
					<td><?php echo $data['product_discount'];?></td>
<<<<<<< HEAD
				</tr>
			<?php
=======
					<td><a href="edit_pro.php" class="edit-btn">Edit</a></td>
					<td><a href="delete_pro.php?pid=<?php echo $data['id']; ?>" class="delete-btn">delete</a></td>
				</tr>
			<?php
			$n++;
>>>>>>> c38ac84a220a4610d43c7f2abc25d6ac7d07ee22
			}
			?>
		</table>
	</div>
</div>
</body>
</html>