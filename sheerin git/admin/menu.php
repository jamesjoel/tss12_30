<?php  
 // print_r($_SERVER);
 //echo $_SERVER['PHP_SELF'];
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
				<li><a <?php if (strstr($page,"dashboard.php"))
					{echo "class='active'";}
					?>
						 href="#">dashboard</a></li>
				<li><a <?php if (strstr($page,"addproduct.php"))
					{echo "class='active'";}
					?> href="addproduct.php">addproduct</a></li>
				<li><a <?php if (strstr($page,"viewproduct.php"))
					{echo "class='active'";}
					?> href="#">viewproduct</a></li>
				<li><a href="#">addcategory</a></li>
				<li><a href="#">viewcategory</a></li>
				<li><a href="#">viewusers</a></li>
				<li><a href="#">logout</a></li>
				
			</ul>
	</div>
</div>