<?php
	include 'dbInfo.php';
	$link = mysql_connect($mysql_host, $mysql_user, $mysql_password);
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($mysql_database) or die(mysql_error());
	
	$result = mysql_query("SELECT id,firstName,lastName,email,paid,race,rank,shirtSize FROM users")
	or die(mysql_error());
	$allNames = array();
	while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
		$arr = array();
		$arr["id"] = $row[0];
		$arr["firstName"] = $row[1];
		$arr["lastName"] = $row[2];
		$arr["email"] = $row[3];
		$arr["paid"] = $row[4];
		$arr["race"] = $row[5];
		$arr["rank"] = $row[6];
		$arr["shirtSize"] = $row[7];
		array_push($allNames, $arr);
	}
	
	
	echo json_encode($allNames);
	
	mysql_close($link);

?>