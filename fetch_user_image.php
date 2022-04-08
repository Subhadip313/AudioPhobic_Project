<?php
require_once('connection.php');
	// Start the session
	session_start();
	$user_name = $_SESSION["User_Name"];
	$user_email = $_SESSION["User_Email"];
	$sql = "SELECT User_image FROM `user_register` WHERE User_Email = '$user_email' AND User_Name = '$user_name'";
	$results = mysqli_query($connection, $sql);
	while($row= mysqli_fetch_assoc($results)){
		echo $row["User_image"];
	}
?>