<?php
include("../connect.php");	
if(!isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}


include("header.php");			
$query = "SELECT * FROM product";
$result = mysqli_query($con, $query);
 
?>
	<div id="sub-content">
	<h3>information about list of all product</h3>
 <table align="center"  class="table"><!-- cellpadding="5px" cellspacing="5px" for table making--> 
	<tr>
		<th>S.no.</th>
		<th>Product name</th>
		<th>Product price</th>
		<th>Detail</th>
		<th>Product category</th>
		<th>discount</th>
		<th>delete</th>
		<th>Product_img</th>
	</tr>
	<?php
	$n=1;
		while($data=mysqli_fetch_assoc($result))
	{?>
		<tr>
			<td><?php echo $n; ?></td>
			<td><?php echo $data['productname'];?></td>
			<td><?php echo $data['productprice'];?></td>
			<td><?php echo $data['detail'];?></td>
			<td><?php echo $data['productcategory'];?></td>
			<td><?php echo $data['productdiscount'];?></td>
			<!-- <td><?php echo $data['product_img'];?></td> -->
			<td><a href="delete_pro.php?proid=<?php echo $data['id'] ?>">Delete</td>
				<td><img height="70" width="70" src="../upload/<?php echo $data['product_img']; ?>" /></td>
		</tr>
		<?php
		 // print_r($data);
		  // die;
			$n++;
			}
			?>

	</table>
</div>
</body>
</html>
