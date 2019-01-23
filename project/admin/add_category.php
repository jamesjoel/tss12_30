<?php
include("../connect.php");
include("header.php");
?>	
<div id="content">
	<h3>Add New Category</h3>
	
	<form action="save_category.php" method="post">
	<div id="login-box">
	<table align="center">
		<tr>
			<td>Category Name</td>
			<td><input type="Text" name="category_name" class="input"/></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="Add Category" class="btn">
			</td>
		</tr>
	</table>
	</form>
	</div>
</div>
</body>
</html>