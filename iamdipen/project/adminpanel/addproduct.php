<?php
include("../connect.php");
include("header.php");
$query= "SELECT * FROM" 

?>
  <h3 style="color:#fff; ">Add product</h3>
  <hr>
	 <div id="content">
	 	
	 		<form action="saveproduct.php" method="post" enctype="multipart/form-data">
	 			<div id="login">
	 		  <table align="center">
	 			<tr>
	 				<td><b>Product Name</b></td>
	 				<td><input type="text" name="name"></td>
	 			</tr>
	 			<tr>
	 				<td><b>Product Price</b></td>
	 				<td><input type="text" name="price"></td>
	 			</tr>
	 			<tr>
	 				<td><b>Choose Files</b></td>
	 				<td><input type="file" name="pro_name"></td>
	 			</tr>
				<tr>
	 				<td><b>Details</b></td>
	 				<td><textarea name="details" cols="22" rows="5"></textarea></td>
	 			</tr>
	 			<tr>
	 				<td><b>category</b></td>
	 				<td><select name="category">
	 					<option>Select</option>
	 					<option>Electroinc</option>
	 					<option>Home Appliance</option>
	 					<option>Men Fashion</option>
	 					<option>Women fashion</option>
	 					<option>Sports</option>
	 				</select></td>
	 			</tr>
	 			<tr>
	 				<td><b>Discount</b></td>
	 				<td><input type="text" name="discount"></td>
	 			</tr>
	 			<tr>
	 				<td colspan="2" rowspan="2"><input type="submit" value="Add product"></td>
	 			</tr>
	  			
	 		  </table></div>
	 	   </form>
	 	</div>
	 

</body>
</html>
