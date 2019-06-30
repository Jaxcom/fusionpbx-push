<?php
//Database configuration
$hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "fpbx_push";

$db_connect = mysqli_connect($hostname, $db_username,$db_password,$db_name) or die(mysqli_error());


//Time Configuration
$time = date("H:m:i , d/m/Y", time() + 2*3600 );
?>