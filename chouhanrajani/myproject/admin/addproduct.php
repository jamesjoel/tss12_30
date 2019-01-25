<?php
include("header.php");
?>
<div id="content">
	

<h3>Product_information</h3>
				<form action="saveproduct.php" method="post">
				<table align="center">
						<tr>
							<td>product name</td>
							<td><input type="text" name="productname" class="input"  /></td>
						</tr>
						<tr>
							<td>product price</td>
							<td><input type="text" name="productprice" class="input" 
							  /></td>
						</tr>
						<tr>
							<td>details</td>
							<td><input type="text" name="detail" class="input"/></td>
						</tr>
						<tr>
							<td>product category</td>
							<td><select name="productcategory" class="input">
								<option>select</option>
								<?php
					while($data=mysqli_fetch_assoc($result))
					{?>
						<option value="<?php echo $data['id'];?>" <?php echo $data['name'];?>>
						</option>


					<?php	
					}?>

							</select>
								 </td>
						</tr>
						<tr>
							<td>discount</td>
							<td><input type="text" name="productdiscount" class="input" 
							 /></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input id="button" type="submit" value="Login"/>
							</td>
						</tr>
					</table>
				</form>
			
				</div>






