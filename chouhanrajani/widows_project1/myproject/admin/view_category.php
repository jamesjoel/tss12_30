<?php
include("../connect.php");
if(!isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include("header.php");
$query="SELECT * FROM addcategory";
$result=mysqli_query($con,$query);
?>
<div id="sub-content">
	<h3> list of all product</h3>
	<table align="center" class="table">
		<tr>
		<th> S.no.</th>
		<th> Category name</th>
		<th>Delete</th>
		<th>Edit</th>
		
		</tr>
		<?php
		$n=1;
		while($data=mysqli_fetch_assoc($result))	
		{	
		?>
		<tr>
			<td><?php echo $n ;?></td>
			<td><?php echo $data['addcategory'];?></td>
			<td><a href="view_category.php?cid=<?php echo $data['id'];?>">delete</a></td>
			<!-- <td><a href="view_category.php?cid=<?php echo $data['id'];?>">edit</a></td> -->
			
		</tr>
		<?php
		$n++;
	}?>
	</table>



</div>

