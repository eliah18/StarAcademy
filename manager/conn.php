<?php
	$connection = new mysqli('localhost', 'root', '', 'star');

	if ($connection->connect_error) {
	    die("Connection failed: " . $connection->connect_error);
	}
	
?>