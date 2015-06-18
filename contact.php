<?php
//Set variabloes and locations for the connection.
$hostname = "localhost";
$user = "root";
$pass = "Sticker101?";
$database = "contacts";
//connection string and die if fails
mysql_connect("$hostname", "$user", "$pass") or die(mysql_error(god dammit));
mysql_select_db("$database") or die(mysql_error(got dammit));

$sql = "select * FROM contactList";

$result = mysql_query($sql);
$json = array();
if (mysql_num_rows ($result)) {
	while ($row = mysql_fetch_assoc($result)) {
		$json[] = array('fname' => $row['fname'], 'lname' => $row['lname'], 'address' => $row['address'], 'city' => $row['city'], 'zipcode' => $row['zipcode'], 'mnumber' => $row['mnumber'], 'lnumber' => $row['lnumber']);
	}
}
echo json_encode($json);
?>