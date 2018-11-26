<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/Warsaw");
	$connect = mysqli_connect("localhost", "root", "", "spotify");

	if (mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}


?>