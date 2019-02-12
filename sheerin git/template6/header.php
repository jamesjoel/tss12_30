<?php

if(isset($_COOKIE['pro_id']))
{	
$x = $_COOKIE['pro_id']; // 5#1#2
$arr_cookie = explode("#", $x);
 $total = count($arr_cookie);
// $total=$x;
// echo $x;
}
 else
{
	$total = 0;
}

?>
<div id="header">
	<div id="inside-header">
		<div id="inside-header-left">
			 <img src="../images/1.jpg"> 
			 <input type="text" placeholder="search for products brands and more"><p>search</p>
		</div>
		<div id="inside-header-right">
			<?php
		if(isset($_SESSION["user_loged_in"]))
			{
			?>
			<ul>
				<li><a href="#"><?php echo $_SESSION["name"];?></a></li>
				<li><a href="myaccount.php">myaccount</a></li>
				<li><a href="#">more</a></li>
				<li><a href="#">cart()</a></li>
				<li><a href="logout.php">logout</a></li>
			</ul>
			<?php
			}
			else
			{
			?>
			<ul>
				<li><a href="login.php">login</a></li>
				<li><a href="registration.php">createmyaccount</a></li>
				<li><a href="#">more</a></li>
				<li><a href="mycart.php">cart(<?php echo $total;?>)</a></li>
			</ul>
			<?php
			}	
			?>
		</div>
		</div>
	</div>
</div>