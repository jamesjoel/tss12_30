<?php
include("header.php");
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
<div id="maindetail">
        <div id="detail">
    <form action="adminauth.php" method="post">
    <table id="registration-table"  align="center" cellspacing="10px" cellpadding="10px">
         <tr>   
            <td>Email id</td>
            <td><input type="email" name="email" placeholder="email id" class="input"required> </td></tr>
            <tr> <td>Password</td>
                <td><input type="password" name="pwd" placeholder="password" class="input" required> </td></tr>
      
            <tr><td colspan="2" align="center">
            <input type="submit" name="save" value="login">                 
                </td>
        </tr>
    </table>
<!-- fetch session -->
<p class="error" align="center">
<?php
if(isset($_SESSION["msg"]))
 {
 echo $_SESSION["msg"];
  unset($_SESSION["msg"]);
}
?>
</p>
</form>
        </div>
    </div>

    </body>
</html>