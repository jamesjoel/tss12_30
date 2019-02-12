<?php
include("connect.php");
include("header.php");
if(!isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}

?>
<div id=Registration-box>
	<a href="theme.php">you want to change your theme color</a>
	<h3>wel come <?php echo $_SESSION['name']?></h3>
	
</div>

<?php
include("footer.php");
?>



