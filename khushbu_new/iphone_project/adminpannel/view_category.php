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
			</tr>
			
			<?php
			while($data=mysqli_fetch_assoc($result))
			{ ?>
				<tr>
					<td><?php echo $data['id'];?></td>
					<td><?php echo $data['product_category'];?></td>
				</tr>
			<?php
			}
			?>
		</table>
	</div>
</div>
</body>
</html>