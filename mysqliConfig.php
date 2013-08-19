<?php

	$host = "localhost";
	$username = "root";
	$password = "testDBQWERTY";
	$database = "inventory";

	$mysqli = new mysqli($host, $username, $password, $database);

	if (mysqli_connect_errno()) {
		error_log("connecting via mysqli failed %s".mysqli_connect_error());
	}

?>