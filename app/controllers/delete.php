<?php
	include 'connection.php';

	$delId = $_POST['id'];

	$sql = "DELETE FROM todolist WHERE id = $delId";
	$res = mysqli_query($conn, $sql);
	if($res === TRUE){
		echo 1;
	} else {
		echo 0;
	}