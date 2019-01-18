
<?php
include("header.php");
include("menu.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
      <div id="maindetail" >    
        <div id="detail">
    <form method="post" action="save.php" >
    <table id="registration-table"  align="center" cellspacing="10px" cellpadding="10px">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" placeholder="name" required></td></tr>
            <tr><td>Gender</td>
                <td><input type="radio" name="gender" value="male" > male
                     <input type="radio" name="gender" value="female">female
                </td></tr>
            <tr><td>Address</td>
                <td><textarea rows="4" cols="25" name="address" placeholder="address" required></textarea></td></tr>
            <tr><td>mobile no</td>
                <td><input type="text" name="mno" placeholder="mobileno" required></td></tr>
            <tr><td>Email id</td>
                <td><input type="email" name="email" placeholder="email id" required> </td></tr>
            <tr> <td>Password</td>
                <td><input type="password" name="pwd" placeholder="password" required> </td></tr>
             <tr> <td>Re-Password</td>
                <td><input type="password" name="pwd" placeholder="re-password" required> </td>
            </tr>
            <tr> <td>city</td>
                <td><select name="city">
                    <option>select</option>
                    <option>indore</option>
                    <option>ujjain</option>
                    <option>bhopal</option>
                    <option>dewas</option>
                </select> </td>
            </tr>
            <tr> <td>pincode</td>
                <td><input type="text" name="pincode" placeholder="pincode" required> </td>
            </tr>
 
            <tr><td colspan="2" align="center">
                 <input type="submit" name="insert" value="register" >                 
                  <input type="reset" value="clear" >
                  <a style="color: buttontext;border-color: buttonface;font-size: 16px; text-align:center; border-width: 1px;padding: 1px 6px; border-style:outset; background-color: buttonface;"href="index.php">cancel</a>
                </td>
        </tr>
    </table>
</form>

        </div>
    </div>
        <?php
    include("footer.php");
    ?>
    </body>
</html>