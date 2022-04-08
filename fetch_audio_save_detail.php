<?php
	require_once('connection.php');
	session_start();
	$user_name = $_SESSION["User_Name"];
	$user_email = $_SESSION["User_Email"];
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$save_id = $_POST["save_id"];
	$sql="SELECT save_db.save_id, save_db.save_time, save_db.timestamp, save_db.count, audio_db.audio_id, audio_db.audio_name, audio_db.audio_author, audio_db.audio_loc, audio_db.audio_image, audio_db.audio_cat FROM audio_db LEFT JOIN save_db ON audio_db.audio_id = save_db.audio_id WHERE save_db.save_id = '$save_id'";
	$results = mysqli_query($connection, $sql);
	if(mysqli_num_rows($results) > 0){
		$row= mysqli_fetch_assoc($results);
		$audio_image = $row["audio_image"];
		$audio_name = $row["audio_name"];
		$audio_author = $row["audio_author"];
		$audio_id = $row["audio_id"];
		$timestamp = strtotime($row["timestamp"]);
		$date_format = date("h:i a"." - "." d-M-Y ", $timestamp);
		$save_time = $row["save_time"];
		$save_time_con = gmdate("H:i:s", $row["save_time"]);
		$save_id = $row["save_id"];
		$audio_loc = $row["audio_loc"];
		echo json_encode(
			array("audio_image" => $audio_image,
					"audio_name" => $audio_name,
					"audio_author" => $audio_author,
					"save_id" => $save_id,
					"audio_id" => $audio_id,
					"save_time_con" => $save_time_con,"save_time" =>$save_time,
					"date_format" => $date_format, "audio_loc" => $audio_loc));
	}
	}
?>