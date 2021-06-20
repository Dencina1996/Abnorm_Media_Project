<?php
	/* CHECK EMPTY FIELDS */
		if (!isset($_POST['data_name']) || !isset($_POST['data_comment'])) {
			die(header("HTTP/1.0 500 Not Found"));
		}
	/* DATA SUBMITTED */
		$name = $_POST['data_name'];
		$comment = $_POST['data_comment'];
	/* DATABASE CONFIG */
		$username = "admin";
	    $password = "P@ssw0rd";
	    $database = "main_db";
	/* DATABASE CONNECTION */
		$connection = new mysqli('localhost', $username, $password, $database);
		$query = "INSERT INTO comments (`author`, `comment`) VALUES ('".$name."','".$comment."')";
		$connection->query($query);
		$connection->close();
?>