<?php
include("connect.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");
?>
<<<<<<< HEAD
			<div id="right-content-bottom">
=======
<?php
include("menu.php");
?>
			<div style="margin: 0 auto; padding-left: 10px;" id="right-content-bottom">
>>>>>>> c38ac84a220a4610d43c7f2abc25d6ac7d07ee22
				<h3>Welcome user : <?php echo $_SESSION['name'] ?></h3>
				
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>