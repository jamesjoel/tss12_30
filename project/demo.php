<?php

// print_r($_FILES);
$a = $_FILES['file']['name'];
$b = $_FILES['file']['tmp_name'];

move_uploaded_file($b, "upload/".$a);
?>