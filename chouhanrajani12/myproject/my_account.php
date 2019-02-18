<?php
include("connect.php");
if(!isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");
?>
<div id=right-content>
	<h3>wel come <?php echo $_SESSION['name']?></h3>
</div>
<?php
include("footer.php");
?>



