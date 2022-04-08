<?php
session_start();
require_once('connection.php');

/*echo $_SESSION["User_Name"]. "<br>";
 echo  $_SESSION["User_ID"]. "<br>";
	echo	$_SESSION["User_Email"]. "<br>";*/
	 if(isset($_POST['audio_id']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){
		 $Audio_Id = $_POST["audio_id"];
		 $User_Email = $_SESSION["User_Email"];
		 $User_Name = $_SESSION["User_Name"];
		 $sql2="SELECT * FROM `user_register` WHERE User_Email = '$User_Email' AND User_Name = '$User_Name'";
		 $results = mysqli_query($connection, $sql2);
		 $row= mysqli_fetch_assoc($results);
			$User_ID = $row["User_ID"]; 
		 
		 //$User_ID = $_SESSION["User_ID"];
		 $sql = "INSERT INTO user_activity (User_ID, User_Name, User_Email, Audio_ID, time) VALUES ('$User_ID', '$User_Name', '$User_Email', '$Audio_Id', current_timestamp());";
		 if(mysqli_query($connection,$sql)){
			 echo "Query Executed Successfully";
		 }else{
			 echo "Failed to execute query!". mysqli_error($connection);
		 }
	 }
?>