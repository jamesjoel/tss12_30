<?php
include("../connect.php");	
include("header.php");			
$query="SELECT * FROM product";
$result = mysqli_query($con, $query);

// print_r($data);
// echo $data;
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
		<th>delete</th>
		<th>edit</th>
		<th>Product image</th>
	</tr>
	<?php
	$n=1;
		while($data=mysqli_fetch_assoc($result))
	{?>
		<tr><td><?php echo $n;?></td>
			<td><?php echo $data['productname'];?></td>
			<td><?php echo $data['productprice'];?></td>
			<td><?php echo $data['productcategory'];?></td>
			<td><?php echo $data['productdiscount'];?></td>
			<td><a href="delete_pro.php?pid=<?php echo $data['id'];?>">delete</a></td>
<<<<<<< HEAD
			<td><?php echo $data['pro_image'];?></td>


=======
>>>>>>> fa29fa7e5febd5678ae10dd2d50b72f9d352d1ca
		</tr>
		<?php
			$n++;
			}
			?>
	</table>
</div>
</body>
</html>
