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
		<th>Edit</th>
		<th>Delete</th>
		
		</tr>
		<?php
		$n=1;
		while($data=mysqli_fetch_assoc($result))	
		{	
		?>
		<tr>
			<td><?php echo $n ;?></td>
			<td><?php echo $data['addcategory'];?></td>
			<!-- <td><a href="edit"></a> 
			<td><a href="edit_cate.php?cid=<?php echo $data['id']; ?>" class="edit-btn">Edit</a></td>
					<td><a href="delete_cate.php?cid=<?php echo $data['id']; ?>" class="delete-btn">Delete</a></td> -->


		</tr>
		<?php
		$n++;
	}?>
	</table>



</div>

