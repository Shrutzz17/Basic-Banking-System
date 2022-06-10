<?php

	$servername = "sql107.epizy.com";
	$username = "epiz_31775013";
	$password = "shrutZZ@1708";
	$dbname = "epiz_31775013_sparks_banks";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>