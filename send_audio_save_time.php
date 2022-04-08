<?php
	require_once('connection.php');
	session_start();
	$count=0;
	$audio_id=0;
	$audio_time=0;
	$user_name = $_SESSION["User_Name"];
	$user_email = $_SESSION["User_Email"];
		if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['token2']) ){
		if (hash_equals($_SESSION['token2'], $_POST['token2'])) {		
			//$sql="SELECT count FROM save_db WHERE user_email='$user_email' AND user_name = '$user_name' ORDER BY save_id DESC LIMIT 1";
			$sql="SELECT count(*) AS total FROM save_db where user_email = '$user_email' AND user_name = '$user_name'";
			$results = mysqli_query($connection, $sql);
			if(mysqli_num_rows($results) > 0){
				$row= mysqli_fetch_assoc($results);
				$count_total=$row["total"];
			}	
	if($count_total >= 5){
		echo "<span style='color:red;'>You can not save anymore! Please Delete some previous save data to save audio time again.</span>";
		exit;
	}else{
		$sql2="SELECT count FROM save_db WHERE user_email='$user_email' AND user_name = '$user_name' ORDER BY save_id DESC LIMIT 1";
		$results2 = mysqli_query($connection, $sql2);
		if(mysqli_num_rows($results2) > 0){
				$row2= mysqli_fetch_assoc($results2);
				$count=$row2["count"];
			}	
		$audio_id = $_POST["audio_id"];
		$audio_time = $_POST["audio_time"];
		$count = $count + 1;
		$sql2="INSERT INTO save_db  VALUES (NULL, '$user_email', '$user_name', '$audio_id', '$audio_time', '$count', current_timestamp())";
		if(mysqli_query($connection,$sql2)){
			echo "<span style='color:green;'>Saved your song Successfully!</span>";
		}else{
			echo "<span style='color:red;'>Sorry we encountered some problem please try again!</span>";
		}
	}
		}
		else{
			echo "<span style='color:red;'>Sorry we encountered some problem please try again!</span>";
		}
		}
?>