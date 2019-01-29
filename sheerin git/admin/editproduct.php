<?php
include("../template6/connection.php");
// print_r($_GET);
$p=$_GET['pid'];
// echo $p;
include("header.php");
include("menu.php");
$query_pro="select * from addproduct where id=$p";
// echo $query_pro;
$result_pro=mysqli_query($con,$query_pro);
$data_pro=mysqli_fetch_assoc($result_pro);
 // print_r($data_pro);
 $x=$data_pro['category'];//product table category
// die;
?>

<!DOCTYPE html>
<html>
<head>
	<title>updateproduct</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div id="maindetail" >    
        <div id="detail">
    <h3 align="center">update Product</h3>
    
    <form method="post" action="updateproduct.php" >
    <table id="registration-table"  align="center" cellspacing="10px" cellpadding="10px">
    <input type="hidden" name="pid" value="<?php echo $p;?>">
        <tr>
            <td>Product Name</td>
            <td><input type="text" name="proname" value="<?php echo $data_pro['productname'];?>"></td></tr>

            <tr><td>product price</td>
                <td><input type="text" name="proprice" value="<?php echo $data_pro['productprice'];?>"></td>
            </tr>

            <tr><td>detail</td>
                <td><textarea rows="4" cols="25" name="detail">
                <?php echo $data_pro['detail'];?>
                </textarea></td></tr>
            
            <tr> <td>category</td>
                <td><select name="category">
                    <option>select</option>

                    <?php
                $query="select * from addcategory";
                $result=mysqli_query($con,$query);
                $n=mysqli_num_rows($result);
                // echo $n;
                if($n>0)
                {

                    while($data=mysqli_fetch_assoc($result))
                    // print_r($data);
                     {
                     	if($data['id']==$x)
                     	{
                    ?>
        <option selected="selected" value="<?php echo $data['id'] ;?>"><?php echo $data['categoryname'] ;?>
        </option>
                    <?php
                    }
                    else
                    {
                    ?>
                    <option value="<?php echo $data['id'] ;?>"><?php echo $data['categoryname'] ;?>
                    </option>
                    <?php
                    }
                    }
                }
                     ?>  
                     </select></td>
            </tr>

            <tr> <td>discount</td>
                <td><input type="text" name="discount" value="<?php echo $data_pro['discount'];?>"> </td>
            </tr>
 
            <tr>	
                  <td colspan="2" align="center">
                 <input class="btn" type="submit" name="submit" value="update product" >  
             </td>
         </tr>
    </table>
</form>
    </div>
    </div>
    </body>
</html>