<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$race = $_POST['race'];
	$rank = $_POST['rank'];
	$paid = "0";
	$shirtSize = $_POST['shirtSize'];

	
	include 'dbInfo.php';
	$link = mysql_connect($mysql_host, $mysql_user, $mysql_password);
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($mysql_database) or die(mysql_error());
	
	// Insert a row of information into the table "users"
	mysql_query("INSERT INTO users (firstName, lastName, email, paid, race, rank, shirtSize) VALUES('". $firstName ."', '". $lastName ."','". $email ."','". $paid ."','". $race ."','". $rank . "','". $shirtSize . "') ") 
	or die(mysql_error());
	
	$arr["name"] = $firstName;
	echo json_encode($arr);
	
	mysql_close($link);

?>
