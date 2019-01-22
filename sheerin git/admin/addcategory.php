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
    <form method="post" action="savecategory.php" >
    <table id="registration-table"  align="center" cellspacing="10px" cellpadding="10px">
        <tr>
            <td>category name</td>
            <td><input type="text" name="categoryname"></td>
        </tr>
            
        <tr>	
            <td colspan="2" align="center">
            <input class="btn" type="submit" name="submit" value="add category" >  
        </td>
        </tr>
    </table>
</form>
    </div>
    </div>
    </body>
</html>