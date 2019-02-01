<?php
print_r($_FILES);
die;
$a=$_FILES["upload_file"]["name"];
$b=$_FILES["upload_file"]["tmp_name"];
move_uploaded_file($b,"upload/".$a);

?>