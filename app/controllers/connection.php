<?php

$host = "db4free.net";
$username = "jamesbarallas";
$password = "James4523";
$dbname = "todo_123";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die("Connection Failed: " . mysqli_error($conn));
}

?>
