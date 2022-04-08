<?php
require_once('connection.php');
if(isset($_POST['audio_cat']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){
$Audio_Cat = $_POST["audio_cat"];
$sql="SELECT * FROM audio_db WHERE audio_cat = '$Audio_Cat'";
$results = mysqli_query($connection, $sql);
if(mysqli_num_rows($results) > 0){
while($row= mysqli_fetch_assoc($results)){
	//echo "Audio name= " .$row["audio_name"]. " Audio Author= " . $row["audio_author"] . "<br><br>";
	echo "<div class='recent_container' name='".$row['audio_id']."'>
				<div><img src='home_audio/audio_images/".$row['audio_image']."' alt='audio_image'></img></div>
				<div class='recent_text'>".$row['audio_name']."
				</div>
		</div>";
}
}
}
?>