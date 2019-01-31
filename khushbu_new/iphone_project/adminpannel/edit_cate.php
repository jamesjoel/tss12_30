 <?php
include("../connect.php");
include("header.php");

$a = $_GET['cid'];
$query_cate = "SELECT * FROM add_category WHERE id = $a";
$result_cate=mysqli_query($con, $query_cate);
$data_cate=mysqli_fetch_assoc($result_cate);
// print_r($data_cate);

?>	
<div id="inside-content">
	<h2>UPDATE CATEGORY</h2>
	<hr>
	
	<form action="update_category.php" method="post">
	<div id="login-box">
	<table align="center">
		<input type="hidden" value="<?php echo $a ?>" name="cid">
		<tr>
			<td>Category Name</td>
			<td><input value="<?php echo $data_cate['product_category']; ?>" type="Text" name="category_name" class="input"/></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="Update Category" class="btn">
			</td>
		</tr>
	</table>
	</form>
	</div>
</div>
</body>
</html>