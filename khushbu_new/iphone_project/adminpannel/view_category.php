<?php
include("../connect.php");
include("header.php");

$query = "SELECT * FROM add_category";
$result = mysqli_query($con, $query);
// die;
?>
<div id="inside-content">
	<h2>VIEW CATEGORY</h2>
	<hr>

	<div id="login-box">
	<table align="center">
		<table class="tab" align="center">
			<tr>
				<th>S.No.</th>
				<th>category_name</th>
<<<<<<< HEAD
			</tr>
			
			<?php
			while($data=mysqli_fetch_assoc($result))
			{ ?>
				<tr>
					<td><?php echo $data['id'];?></td>
					<td><?php echo $data['product_category'];?></td>
				</tr>
			<?php
=======
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			
			<?php
			$n=1;
			while($data=mysqli_fetch_assoc($result))
			{ ?>
				<tr>
					<td><?php echo $n;?></td>
					<td><?php echo $data['product_category'];?></td>
					<td><a href="edit_cate.php?cid=<?php echo $data['id']; ?>"class="edit-btn">Edit</a></td>
					<td><a href="delete_cate.php?cid=<?php echo $data['id']; ?>"class="delete-btn">delete</a></td>
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