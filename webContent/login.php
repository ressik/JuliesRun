<?php 
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$check = $_GET['check'];
	if ($check == "true"){
		session_start();
		if(isset($_SESSION['loggedIn'])) {
			$arr["loggedIn"] = "true";
			echo json_encode($arr);
			return true;
		} else {
			$arr["loggedIn"] = "false";
			echo json_encode($arr);
			return false;
		}
	}
	if ($username == 'admin' && $pass == 'admin') {
		$arr = array();
		$arr["valid"] = "true";
		session_start();
		$_SESSION['loggedIn'] = "true";
		echo json_encode($arr);
	} 
	if ($username != 'admin' || $pass != 'admin') {
		$arr = array();
		$arr["valid"] = "false";
		echo json_encode($arr);
	}

?>