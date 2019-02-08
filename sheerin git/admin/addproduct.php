<?php
include("header.php");
include("../template6/connection.php");
if(! isset($_SESSION["admin_loged_in"]))
 { //not open myaccount page when not login through login page and redirect to login.
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
    <h3 align="center">Add New Product</h3>
    
    <form method="post" action="saveproduct.php" enctype="multipart/form-data">
    <table id="registration-table"  align="center" cellspacing="10px" cellpadding="10px">
        <tr>
            <td>Product Name</td>
            <td><input type="text" name="proname"></td></tr>
            <tr>
            <td>Product Image</td>
            <td><input type="file" name="pro_image"class="input"/></td>
            </tr>
            <tr><td>product price</td>
                <td><input type="text" name="proprice" ></td>
            </tr>
            <tr><td>detail</td>
                <td><textarea rows="4" cols="25" name="detail"></textarea></td></tr>
            
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
                    ?>
        <option value=<?php echo $data['id'] ;?>><?php echo $data['categoryname'] ;?></option>
                    <?php
                    }
                    
                }
                     ?>  
                     </select></td>
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