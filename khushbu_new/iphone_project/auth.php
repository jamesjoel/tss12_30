<?php
include("connect.php");
$u = $_POST['username'];
$p = $_POST['pass'];
$query="SELECT * FROM user WHERE username='$u'";
?>