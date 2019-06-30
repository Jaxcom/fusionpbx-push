<?php
//Database configuration
$hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "fpbx_push";

$db_connect = mysqli_connect($hostname, $db_username,$db_password,$db_name) or die(mysqli_error());


//Time Configuration
$post_time = date("H:i:s", time() + 2*3600 );
$post_date = date("d/m/Y", time() + 2*3600);
?>
