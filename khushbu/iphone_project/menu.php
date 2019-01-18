<?php
$page = $_SERVER['PHP_SELF'];
// print_r($_SERVER);
// echo $page;
?>
<div id="menu">
		<div id="inside-menu">
			<div id="inside-menu">
		<ul>
			
			<li><a <?php if(strstr($page,"index.php")){ echo "class='active'"; } ?> href="index.php">Home</a></li>
			<li><a <?php if(strstr($page, "about.php")){ echo "class='active'"; } ?> href="about.php">About</a></li>
			<li><a <?php if(strstr($page, "contact.php")){ echo "class='active'"; } ?> href="contact.php">Contact</a></li>
			<li><a <?php if(strstr($page, "help.php")){ echo "class='active'"; } ?> href="help.php">Help</a></li>
		</ul>
	</div>
		</div>
	</div>
