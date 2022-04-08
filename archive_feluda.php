<html>
<head>
<link rel="stylesheet" href="style_home.css">
</head>
</html>
<?php
	require_once('connection.php');
	// Start the session
	session_start();
	$sql="SELECT * FROM audio_db WHERE audio_cat = 'feluda'";
	$results = mysqli_query($connection, $sql);
	while($row= mysqli_fetch_assoc($results)){
			echo "<div class='recent_container' name='".$row['audio_id']."'>
				<div><img src='home_audio/audio_images/".$row['audio_image']."' alt='audio_image'></img></div>
				<div class='recent_text'>".$row['audio_name']."
				</div>
		</div>";
		
	
		}
		
	
	
?>