<?php
include("header.php");
include("connect.php");				
$query="SELECT * FROM addcategory";
$result=mysqli_query($con ,$query);

?>
<table>
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
		<tr><td>productname</td>
			<td>productprice</td>
			<td>productcategory</td>
			<td>productdiscount</td>

		</tr>
		<?php}?>