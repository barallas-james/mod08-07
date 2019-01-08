<?php

	include 'connection.php';

	$delId = $_POST['id'];

	$sql = "UPDATE todolist SET status = 'done' WHERE id = $delId";
	$res = mysqli_query($conn, $sql);
	if($res === TRUE){
		echo 1;
	} else {
		echo 0;
	}