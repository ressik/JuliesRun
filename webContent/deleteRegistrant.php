<?php
	$userId = $_GET['id'];
	$deleted = "yup";
	include 'dbInfo.php';
	$link = mysql_connect($mysql_host, $mysql_user, $mysql_password);
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($mysql_database) or die(mysql_error());
	
	// Delete a row of information from the table "users"
	$result = mysql_query("DELETE FROM users where id='" . $userId . "'")
	or die(mysql_error());
	
	$arr["deleted"] = $deleted;
	echo json_encode($arr);
	
	mysql_close($link);

?>