<?php
include("header.php");
include("menu.php");
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
<div id="maindetail">
        <div id="detail">
    <form action="auth.php" method="post">
    <table id="registration-table"  align="center" cellspacing="10px" cellpadding="10px">
         <tr>   
            <td>Email id</td>
            <td><input type="email" name="email" placeholder="email id" class="input"required> </td></tr>
            <tr> <td>Password</td>
                <td><input type="password" name="pwd" placeholder="password" class="input" required> </td></tr>
      
            <tr><td colspan="2" align="center">
                 <input type="submit" name="save" value="login" >                 
                  <input type="reset" value="clear" >
                  <a style="color: buttontext;border-color: buttonface;font-size: 16px; text-align:center; border-width: 1px;padding: 1px 6px; border-style:outset; background-color: buttonface;" href="index.php">cancel</a>
                </td>
        </tr>
    </table>
<!-- fetch session -->
<p class="error">
<?php
session_start();
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

    <?php
    include("footer.php");
    ?>

    </body>
</html>