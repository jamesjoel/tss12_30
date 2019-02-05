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
				<li><a <?php if (strstr($page,"index.php"))
					{echo "class='active'";}
					?>
						 href="index.php">home</a></li>
				<li><a <?php if (strstr($page,"about.php"))
					{echo "class='active'";}
					?> href="about.php">about</a></li>
				<li><a <?php if (strstr($page,"contact.php"))
					{echo "class='active'";}
					?> href="contact.php">contact us</a></li>
				<li><a href="#">help</a></li>
				<li><a href="#">map</a></li>
				
			</ul>
	</div>
</div>