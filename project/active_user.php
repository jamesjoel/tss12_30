<?php
include("connect.php");
$a = $_GET['link'];
$query = "UPDATE user SET status=1 WHERE check_status_link='$a'";
mysqli_query($con, $query);
include("header.php");
?>
<div id="right-content-bottom">
				<h3>Activation</h3>
				<h5>Your Are Active Now Go TO <a href="login.php">Login</a> Page</h5>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>
