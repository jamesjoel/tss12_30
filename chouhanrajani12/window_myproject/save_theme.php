<?php
include("connect.php");
// include("header.php");
$a=$_POST['color'];




mysqli_query($con,$query);
header("location:my_account.php");

?>

 <style type="background:#FF3756"><?php echo $_SESSION['id']?></style>
<style type="background:#5EFF4C"><?php echo $_SESSION['id']?></style>
<style type="background:#3331FF"><?php echo $_SESSION['id']?></style>
<style type="background:#F770F9"><?php echo $_SESSION['id']?></style>
<style type="background:#BAFFC9"><?php echo $_SESSION['id']?></style> 