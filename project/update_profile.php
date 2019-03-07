<?php
// print_r($_POST);
include("connect.php");


$a = $_POST['full_name'];
$id = $_SESSION['id'];

if($_FILES['image']['name']!="")
{

	$name = $_FILES['image']['name'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$size = $_FILES['image']['size'];
	$arr = explode(".", $name);
	$new_name = time().rand(1000, 10000).".".end($arr);
	move_uploaded_file($tmp_name, "user_image/".$new_name);

	$data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM user WHERE id=$id"));
	
	unlink("user_image/".$data['image']);


	$query="UPDATE user SET full_name='$a', image='$new_name' WHERE id=$id";
	// die;
}
else
{

	$query="UPDATE user SET full_name='$a' WHERE id=$id";
}

mysqli_query($con, $query);

header("location:my_profile.php");

?>