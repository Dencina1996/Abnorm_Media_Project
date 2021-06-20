<?php
	// SET RESPONSE TYPE
		header('Content-type: application/json');
	/* DATABASE CONFIG */
		$username = "admin";
	    $password = "P@ssw0rd";
	    $database = "main_db";
	/* DATABASE CONNECTION */
		$connection = new mysqli('localhost', $username, $password, $database);
		$query = 'SELECT DATE_FORMAT(created_at, "%d/%m/%Y %H:%i") as created_at, author, comment FROM comments ORDER BY id DESC';
	/* GET DATA */
		$data = $connection->query($query);
		$rows = [];
	    while ($row = mysqli_fetch_assoc($data)) {
	    	$rows[] = $row;
		} 
		print_r(json_encode($rows));
	/* DATABASE DISCONNECTION */
		$connection->close();
?>