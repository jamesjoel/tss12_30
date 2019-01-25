<!-- fetch value frm admin login page  -->
<?php

 print_r($_POST);

$e=$_POST["email"];
$p=$_POST["pwd"];

include("../template6/connection.php");
$query="select * from admin where email='$e'";
// echo $query;

// echo"<br>";
$result=mysqli_query($con,$query);
// die;
// the result is a non-readble object

$n=mysqli_num_rows($result);
// echo $n;

if($n>0)
{
	// echo "login";
	$data=mysqli_fetch_assoc($result);
	// print_r($data);
	// if($data["password"]==$p)
	if($data["password"]==md5($p))
	{
		 // echo"matched";
		
		$_SESSION["name"]=$data["email"];
		$_SESSION["id"]=$data["id"];
		$_SESSION["admin_loged_in"]=true;
		header("location:addproduct.php");
	}
	else
	{
	//session create
	$_SESSION["msg"]="invalid password";
	header("location:index.php");
	}
	
}

else
{
	//echo "invalid";
	//session create
	$_SESSION["msg"]="invalid user id and password";
	header("location:index.php");
}
?>
