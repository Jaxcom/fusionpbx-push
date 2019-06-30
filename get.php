<?php
include('config.php');
if (isset($_REQUEST['cid'])) {
	$cid = $_REQUEST['cid'];
	echo "Caller ID Number: ". $_REQUEST['cid']. "<br><br>";
	//Post Data to the Database
	mysqli_query($db_connect,"INSERT INTO caller_id(caller_id,post_time) VALUES('$cid','$time')") or die(mysqli_error());
}
else {
	echo "NO Caller ID Set<br><br>";
}

echo $time;

?>
