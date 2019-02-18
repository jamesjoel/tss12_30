<?php
$con=mysqli_connect("localhost","root","password","task");

$a=$_POST['title'];
// $b=$_FILES['file_main'];
// $c=$_FILES['file_fir'];
// $d=$_FILES['file_sec'];
// $e=$_FILES['file_thir'];
// $f=$_FILES['file_fort'];
// print_r($_POST);
// print_r($_FILES);

$name=$_FILES["file_main"]["name"];
$tmp_name=$_FILES["file_main"]["tmp_name"];
// print_r($tmp_name);
// echo ($name);
// die;
$new_name=time().rand(100,1000);
// print_r($new_name); 
// echo $new_name;
 // die;
$arr=explode(".",$name);
$ext=end($arr);
$new_img=$new_name.".".$ext;

// print_r($new_img);
// die;
move_uploaded_file($tmp_name, "upload/".$new_img);
// move_uploaded_file($new_img, "task/upload/");// main done

  $name1=$_FILES["file_fir"]["name"];
 $tmp_name1=$_FILES["file_fir"]["tmp_name"];
// // // print_r($tmp_name);
// // die;
  $new_name1=time().rand(100,1000);
 $arr1=explode(".", $name1);
  $ext1=end($arr1);
  $new_img1=$new_name1.".".$ext1;
  move_uploaded_file($tmp_name1,"upload/".$new_img1);//first done


  $name2=$_FILES["file_sec"]["name"];
  $tmp_name2=$_FILES["file_sec"]["tmp_name"];
  $new_name2=time().rand(100,1000);
 $arr2=explode(".", $name2);
 $ext2=end($arr2);
  $new_img2=$new_name2.".".$ext2;
  move_uploaded_file($tmp_name2,"upload/".$new_img2);


  $name3=$_FILES["file_thir"]["name"];
  $tmp_name3=$_FILES["file_thir"]["tmp_name"];
  $new_name3=time().rand(100,1000);
  $arr3=explode(".",$name3);
  $ext3=end($arr3);
 
 $new_img3=$new_name3.".".$ext3;
 move_uploaded_file($tmp_name3, "upload/".$new_img3);



  $name4=$_FILES["file_fort"]["name"];
  $tmp_name4=$_FILES["file_fort"]["tmp_name"];
  $new_name4=time().rand(100,1000);
  $arr4=explode(".",$name4);
  $ext4=end($arr4);

 $new_img4=$new_name4.".".$ext4;
  move_uploaded_file($tmp_name4, "upload/".$new_img4);


$query="INSERT INTO image(title,main_img,first_img,sec_img,thir_img,fort_img)VALUES('$a','$new_img','$new_img1','$new_img2','$new_img3','$new_img4')";
mysqli_query($con,$query);
header("location:img.php");


?>