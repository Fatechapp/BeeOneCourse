<?php
	$host = "auth-db1031.hstgr.io";
	$user = "u931896070_BeeOneCourse";
	$pass = "BeeOneCourse123.";
	$db = "u931896070_BeeOneCourse";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Database not connected" . $conn->connect_error;
	}
	?>
