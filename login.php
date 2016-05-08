<?php
	$response = array();

	if (isset($_GET['username']) && isset($_GET['password'])) {
		$username = "agus";
		$password = "admin";
		
		if ($username == $_GET['username'] && $password == $_GET['password']) {
		
			$response["username"] = "Mr. Agus";
			$response["success"] = 1;
			
			echo json_encode($response);
			
		} else {
			$response["success"] = 0;
			$response["message"] = "Invalid username or password, please check and try again.";
			echo json_encode($response);
		}
		
	} else {
		$response["error_msg"] = "Username and password is required!";
		echo json_encode($response);
	}
?>

