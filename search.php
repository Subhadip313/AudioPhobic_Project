<?php
	require_once('connection.php');
	if (isset($_POST['name'])) {
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	$Name = test_input($_POST['name']);
	$Name_special = mysqli_real_escape_string($connection,$Name);
	$Query = "SELECT * FROM audio_db WHERE audio_name LIKE '%$Name_special%' OR audio_cat LIKE '%$Name_special%' LIMIT 10";
	$results = mysqli_query($connection, $Query);
	if(mysqli_num_rows($results) > 0){
		echo "<h3>Search Results:</h3>";
	while($row= mysqli_fetch_assoc($results)){
				echo "
				<div class='recent_container' name='".$row['audio_id']."'>
				<div><img src='home_audio/audio_images/".$row['audio_image']."' alt='audio_image'></img></div>
				<div class='recent_text'>".$row['audio_name']."
				</div>
		</div>";
	}
	}else{
		echo "<h3>Search Results:</h3>";
		
		echo "<span style='color:red; font-size:24px;'>This <span style='color:black; font-size:24px;'>".$Name. "</span> was not found</span>";
	}
	
	}
mysqli_close($connection);
?>