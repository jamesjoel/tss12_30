<?php
include("header.php")
?>

  <h3 style="color:#fff; ">Add Category</h3>
  <hr>
 <div id="content">
	 	
	 		<form action="saveproduct.php" method="post">
	 			<div id="login">
	 				<div id="add-box" style="padding:80px; margin:0 auto; height:100px;width:350px; background-color:#1a3b4c;">
	 		  <table align="center">
	 			<tr>
	 				<td><b>Add category</b></td>
	 				<td><input type="text" name="product_category"></td>
	 			</tr>
	 			<tr>
	 				<td colspan="2" align="center">
	 					<input type="submit" value="Add" name="">
	 				</td>

	 			</tr>
	 		</table>
	 		</div>
	 	</div>
	 </form>

<?php
include("footer.php")
?>	