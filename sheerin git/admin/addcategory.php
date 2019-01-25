<?php
include("header.php");
include("../template6/connection.php");

if(!isset($_SESSION['admin_loged_in']))
{
    header("location:index.php");
}

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
        <h3 align="center">Add New category</h3>
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

<p align="center">
    <?php
    if(isset($_SESSION['msg']))
    {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    }
    ?>
</p>
    </div>
    </div>
    </body>
</html>