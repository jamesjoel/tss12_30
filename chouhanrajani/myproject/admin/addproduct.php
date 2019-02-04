<?php
include("../connect.php");
if(!isset($_SESSION["admin_logged_in"]))
{
	header("location:index.php");
}
include("header.php");	
$query="SELECT * FROM addcategory";
$result=mysqli_query($con, $query);
?>
		<div id="sub-content">

		<h3>Product_information</h3>
		
				<form action="saveproduct.php" method="post" enctype="mulitpart/form-data">
				<table align="center">
						<tr>
							<td>product name</td>
							<td><input type="text" name="productname" class="input"></td>
						</tr>
						<tr>
							<td>product price</td>
							<td><input type="text" name="productprice" class="input"></td>
						</tr>
						<tr>
							<td>details</td>
							<td><input type="text" name="detail" class="input"></td>
						</tr>
						<tr>
							<td>product category</td>
							<td><select name="productcategory">
								<option>select</option>
								<?php
					while($data=mysqli_fetch_assoc($result))
					{?>
						<option value="<?php echo $data['id'];?>"><?php echo $data['categoryname'];?>
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
							<td>product image</td>
							<td><input type="file" name="file" class="input" 
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
				</div>






