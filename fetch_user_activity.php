<html>
<head>
<link rel="stylesheet" href="style_home.css">
</head>
</html>
<?php
require_once('connection.php');
	// Start the session
	session_start();
	$User_Email = $_SESSION["User_Email"];
	$User_Name = $_SESSION["User_Name"];
	$sql="SELECT DISTINCT audio_db.audio_id, audio_db.audio_name, audio_db.audio_author,audio_db.audio_loc,audio_db.audio_image 
	FROM audio_db LEFT JOIN user_activity ON 
	audio_db.audio_id = user_activity.audio_id 
	WHERE user_activity.User_Email = '$User_Email' AND user_activity.User_Name = '$User_Name' ORDER BY user_activity.activity_id DESC";
	$results = mysqli_query($connection, $sql);
	$count = 1;
	while($row= mysqli_fetch_assoc($results)){
		if( $count == 21){
			exit();
		}else{
		echo "<div class='recent_container' name='".$row['audio_id']."'>
				<div><img src='home_audio/audio_images/".$row['audio_image']."' alt='audio_image'></img></div>
				<div class='recent_text'>".$row['audio_name']."
				</div>
		</div>";
		$count= $count + 1;
	}
	}
?>
