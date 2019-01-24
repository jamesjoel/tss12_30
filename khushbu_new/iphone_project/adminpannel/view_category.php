<?php
include("../connect.php");
if(!isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

include("header.php");

$query = "SELECT * FROM category";
$result = mysqli_query($con, $query);
?>	
<div id="content">
	<h3>View All Product</h3>
	
	<div id="login-box">
		<table class="tab" align="center">
			<tr>
				<th>S.No.</th>
				<th>Category Name</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			
			<?php
			while($data=mysqli_fetch_assoc($result))
			{ ?>
				<tr>
					<td><?php echo $data['id'];?></td>
					<td><?php echo $data['name'];?></td>
				</tr>



			<?php
			}
			?>
		</table>
	</div>
</div>
</body>
</html>