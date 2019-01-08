<?php

require_once("./connection.php");

$task = $_POST['name'];


$sql = "INSERT INTO todolist (task,status) values ('$task','pending')";

// mysqli_query function expects 2 arguments. first is the connection to your db variable and the second is your mysql query variable.

$result = mysqli_query($conn,$sql);

if ($result === TRUE) {
	echo "New task added successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// close a previously opened database connection
mysqli_close($conn);

?>