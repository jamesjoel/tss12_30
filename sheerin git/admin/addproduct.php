<?php
include("header.php");
include("menu.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>addproduct</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div id="maindetail" >    
        <div id="detail">
    <form method="post" action="saveproduct.php" >
    <table id="registration-table"  align="center" cellspacing="10px" cellpadding="10px">
        <tr>
            <td>Product Name</td>
            <td><input type="text" name="proname"></td></tr>
            <tr><td>product price</td>
                <td><input type="text" name="proprice" ></td>
            </tr>
            <tr><td>detail</td>
                <td><textarea rows="4" cols="25" name="detail"></textarea></td></tr>
            
            <tr> <td>category</td>
                <td><select name="category">
                    <option>select</option>
                    <option>electronics</option>
                    <option>homeappliances</option>
                    <option>mobile</option>
                    <option>menfashion</option>
                    <option>womenfashion</option>
                </select> </td>
            </tr>
            <tr> <td>discount</td>
                <td><input type="text" name="discount"> </td>
            </tr>
 
            <tr>	
                  <td colspan="2" align="center">
                 <input class="btn" type="submit" name="submit" value="add product" >  
             </td>
         </tr>
    </table>
</form>
    </div>
    </div>
    </body>
</html>