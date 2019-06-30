<?php
include("config.php");
echo <<< css
<style>
table,th,td {
	border:1px solid black;
	padding: 5px;
	text-align: center;
}

</style>
css;
echo "<html>";
echo "<head><title>CDRs</title></head>";
echo "<body>";
echo "<center><h3>CDRs List</h3><br>";
echo "<table><th>Caller Extension</th><th>Detination Number</th><th>Domain Name</th><th>Time</th><th>Date</th>";
$fetch = mysqli_query($db_connect, "SELECT * FROM caller_id ORDER BY id DESC") or die(mysql_error($db_connect));
while ($data = mysqli_fetch_array($fetch)) {
	echo "<tr><td>". $data['caller_number']. "</td><td>". $data['destination_number'] . "</td><td>". $data['domain_name'] . "</td><td>". $data['post_time'] . "</td><td>". $data['post_date']. "</td></tr>";
}

echo "</table></center>";
echo "</body>";
echo "</html>";