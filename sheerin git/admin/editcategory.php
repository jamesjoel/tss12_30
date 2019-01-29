<?php
 // print_r($_GET);
$a=$_GET['cid'];
include("header.php");
include("../template6/connection.php");
include("menu.php");
$query="select * from addcategory where id=$a";
// echo $query;

$result=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($result);
// print_r($data);
// die;
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit category</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div id="maindetail" >    
        <div id="detail">
        <h3 align="center"> update category</h3>

    <form method="post" action="updatecategory.php" >
    <table id="registration-table"  align="center" cellspacing="10px" cellpadding="10px">
    	<input type="hidden" value="<?php echo $a;?>" name="cid">

        <tr>
            <td>category name</td>
            <td><input type="text" value="<?php echo $data['categoryname'] ;?>" name="categoryname"></td>
        </tr>
            
        <tr>	
            <td colspan="2" align="center">
            <input class="btn" type="submit" name="submit" value="update category" >  
        </td>
        </tr>
    </table>
</form>
    </div>
    </div>
    </body>
</html>
?>