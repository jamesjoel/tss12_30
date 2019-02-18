<?php
include("header.php");
?>


<?php
include("../connect.php");

$query = "SELECT * FROM add_product";
$result = mysqli_query($con, $query);
?>	
<div id="content">
  <h3 style="color:#fff;">View product</h3>
	
	
	<div id="login-box" style="width: 700px;">
		<table border="1" cellspacing="0" cellpadding="4" align="center">
			<tr>
				<th>S.No.</th>
				<th>Product Name</th>				
				<th>Product Price</th>
				<th>Image</th>
				<th>Details</th>
				<th>Category</th>
				<th>Discount</th>
				
			</tr>
			
			<?php
			$n=1;
			while($data=mysqli_fetch_assoc($result))
			{ ?>
				<tr>
					<td><?php echo $n; ?></td>
					<td><?php echo $data['name'];?></td>
					<td><?php echo $data['price'];?></td>
					<td><img height="100" width="100" src="upload//<?php echo $data['image']; ?>" /></td>
					
					<td><?php echo $data['details'];?></td>
					<td><?php echo $data['category'] ?></td>
					<td><?php echo $data['discount'];?></td>
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