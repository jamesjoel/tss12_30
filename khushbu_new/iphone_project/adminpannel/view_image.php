<?php
include("../connect.php");
// include("header.php");

$query = "SELECT * FROM add_product";
$result = mysqli_query($con, $query);
// die;
?>
<!-- <div id="inside-content"> -->
	<!-- <h2>view image</h2> -->
	<!-- <hr> -->
	<form action="upload.php" method="post">
	<div id="login-box">

		<table class="tab" align="center" cellpadding="5" cellspacing="0" border="1">
			<tr>
				<th>S.No.</th>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>detail</th>
				<th>category</th>
				<th>discount</th>
				<th>image name</th>
			</tr>
			
			
			
			<?php
			$n=1;
			while($data=mysqli_fetch_assoc($result))
			{ ?>
				<tr>
					<td><?php echo $n; ?></td>
					<td><?php echo $data['product_name'];?></td>
					<td><?php echo $data['product_price'];?></td>
					<td><?php echo $data['detail'];?></td>
					<td><?php echo $data['product_category'];?></td>
					<td><?php echo $data['product_discount'];?></td>
					<td><img height="100" width="50" src="../upload/<?php echo $data['image']; ?>" /></td>
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