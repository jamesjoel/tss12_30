<?php
include("../connect.php");	
include("header.php");			
$query="SELECT * FROM product";
$result=mysqli_query($con ,$query);
// die;
?>
	<div id=sub-content>
	<h3>information about list of all product</h3>
 <table align="center"  class="table"><!-- cellpadding="5px" cellspacing="5px" for table making--> 
	<tr>
		<th>S.no.</th>
		<th>Product name</th>
		<th>Product price</th>
		<th>Product category</th>
		<th>discount</th>
	</tr>
	<?php
	while($data=mysqli_fetch_assoc($result))
	{?>
		<tr><td><?php echo $data['id']?></td>
			<td><?php echo $data['productname']?></td>
			<td><?php echo $data['productprice']?></td>
			<td><?php echo $data['productcategory']?></td>
			<td><?php echo $data['productdiscount']?></td>


		</tr>
		<?php
	}
		?>
		
	</table>
</div>
</body>
</html>
