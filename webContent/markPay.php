<?php
	include 'dbInfo.php';
	$link = mysql_connect($mysql_host, $mysql_user, $mysql_password);
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($mysql_database) or die(mysql_error());
	
	$id = $_GET['id'];
	$result = mysql_query("SELECT paid FROM users where id=". $id)
	or die(mysql_error());
	$allNames = array();
	while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
		$paid = $row[0];
		if ($paid == "0"){
			mysql_query("update users set paid='1' where id=".$id) or die(mysql_error());
		} else {
			mysql_query("update users set paid='0' where id=".$id) or die(mysql_error());
		}
	}
	
	$emailResult= mysql_query("SELECT id,firstName,lastName,email,race,paid FROM users")
	or die(mysql_error());
	$emails = array();
	while ($row = mysql_fetch_array($emailResult, MYSQL_NUM)) {
		$arr = array();
		$arr["id"] = $row[0];
		$arr["firstName"] = $row[1];
		$arr["lastName"] = $row[2];
		$arr["email"] = $row[3];
		$arr["age"] = $row[4];
		$arr["paid"] = $row[5];
		array_push($emails, $arr);
	}
	echo json_encode($emails);
	
	
	mysql_close($link);
?>