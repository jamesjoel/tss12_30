<?php
include("../connect.php");
include("header.php")

$query = "SELECT * FROM addcategory";
$result= mysquli_query($con, $query);
die;

?>
 <div id="content">
 	<h2>View Category</h2>
 	<hr>
 	<div id="login">
 		<table align="center">
 			<tr>
 				<th>S.No.</th>
 				<th>category_name</th>
 			</tr>
 			<?php
 			while($data=mysquli_fetch_assoc($result))

 			{?>
 				<tr>
 					<td><?php echo $data['id'];?></td>
 					<td><?php echo $data['product_category'];?></td>
 				</tr>
 			?}
 		</table>
 	</div>

 </div>
</body>
</html>