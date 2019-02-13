<?php
include("../connect.php");
// print_r($_GET);
$a = $_GET['pid'];
$query_pro = "SELECT * FROM product WHERE id = $a";
$result_pro = mysqli_query($con, $query_pro);
$data_pro = mysqli_fetch_assoc($result_pro);
print_r($data_pro);
 die;
include("header.php");	
$query="SELECT * FROM addcategory";
$result=mysqli_query($con, $query);
?>
		<div id="sub-content">

		<h3>Product_information</h3>
		
				<form action="update_pro.php" method="post">
		<input type="hidden" name="pid" value="<?php echo $a; ?>"/>
				<table align="center">
						<tr>
							<td>product name</td>
							<td><input type="text" name="productname" class="input" value="<?php echo $data_pro['productname']; ?>"></td>
						</tr>
						<tr>
							<td>product price</td>
							<td><input type="text" name="productprice" class="input" value="<?php echo $data_pro['productprice']; ?>"></td>
						</tr>
						<tr>
							<td>details</td>
							<td><textarea cols="22" name="detail" rows="5"><?php echo $data_pro['detail'];?></textarea></td>
						</tr>
						<tr>
							<td>product category</td>
							<td><select name="productcategory">
								<option>select</option>
								<?php
					while($data=mysqli_fetch_assoc($result))
					if($data['id']==$x)
					{ ?>

						<option selected="selected" value="<?php echo $data['id']; ?>"><?php echo $data['categoryname']; ?></option>
					<?php 
					}
					else
					{ ?>
						<option value="<?php echo $data['id']; ?>"><?php echo $data['categoryname']; ?></option>

					<?php
					}
					?>
				<?php
				}
				?>

							</select>
								 </td>
						</tr>
						<tr>
							<td>discount</td>
							<td><input type="text" name="productdiscount" class="input" value="<?php echo $data_pro['productdiscount'];?>"
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






