<?php  
 // print_r($_SERVER);
 // echo $_SERVER['PHP_SELF'];
$page=$_SERVER['PHP_SELF'];
 // echo $page;
// $x="electronics.php";
// if (strstr($page,$x))
// {
	// echo"hello";
// }
?>  
<div id="menu">
	<div id="inside-menu">
			<ul>
				<!-- <li><a class="active" href="electronics.php">electronics</a></li> -->
				<li><a <?php if (strstr($page,"electronics.php"))
					{echo "class='active'";}
					?>
						 href="electronics.php">electronics</a></li>
				<li><a <?php if (strstr($page,"tv&appliances.php"))
					{echo "class='active'";}
					?> href="tv&appliances.php">tv & appliances</a></li>
				<li><a <?php if (strstr($page,"men.php"))
					{echo "class='active'";}
					?> href="men.php">men</a></li>
				<li><a href="#">women</a></li>
				<li><a href="#">baby&kids</a></li>
				<li><a href="#">home&furniture</a></li>
				<li><a href="#">sports,books&more</a></li>
				<li><a href="#">offer zone</a></li>
			</ul>
	</div>
</div>