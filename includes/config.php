<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	$con = mysqli_connect("ec2-3-208-50-226.compute-1.amazonaws.com", "pxrbjxcvessmbp", "6c16d6f3d16cf0c3ef865880019f39755859fe0bd9bab37febffffe32a4d5866", "");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>
