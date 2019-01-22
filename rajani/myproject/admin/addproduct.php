<?php
include("header.php");
?>
<div id="content">
	<div id="sub-content">

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
							<td>product catogary</td>
							<td><select name="productcategory" class="input">
								<option>select</option>
								<option>electronics</option>
								<option>home applience</option>
								<option>fashion</option>
								<option>mobile accessiries</option>
								<option>beauty product</option>
							</select>
								 </td>
						</tr>
						<tr>
							<td>discount</td>
							<td><input type="text" name="productdiscount" class="input" style="margin: 5px;"style="padding:5px;"  /></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input id="button" type="submit" value="Login" style="margin: 5px;"style="padding:5px;" style="background-color: #EBE9EA"/>
							</td>
						</tr>
					</table>
				</form>
				</div>
				</div>






