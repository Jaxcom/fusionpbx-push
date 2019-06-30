<?php
include('config.php');
if (isset($_REQUEST['destination']) && isset($_REQUEST['caller_number']) && isset($_REQUEST['domain'])) {
	$destination = $_REQUEST['destination'];
	$caller_number = $_REQUEST['caller_number'];
	$domain = $_REQUEST['domain'];

	echo "Caller ID Number: ". $_REQUEST['caller_number']. "<br><br>";
	echo "Dialed Number: ". $_REQUEST['destination']. "<br><br>";
	echo "Domain Name: ". $_REQUEST['domain']. "<br><br>";

	//Post Data to the Database
	mysqli_query($db_connect, "INSERT INTO caller_id(caller_number, destination_number, domain_name, post_time, post_date) VALUES('$caller_number','$destination', '$domain', '$post_time','$post_date')") or die(mysqli_error($db_connect));
}
else {
	echo "NO Caller ID Set<br><br>";
}

echo $post_time ." - ". $post_date;

?>
