<?php
require_once("config.php");
$con = mysqli_connect($host, $username,$password,$database) or die ("cannot connect to database.");
mysqli_set_charset($con, "utf8");
?>