<?php
	require_once('connection.php');
	// Start the session
	session_start();
	$user_name = $_SESSION["User_Name"];
	$user_email = $_SESSION["User_Email"];
		if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['token2']) ){
		if (hash_equals($_SESSION['token2'], $_POST['token2'])) {	
			$user_icon = $_POST["user_icon"];
			$sql = "UPDATE user_register SET User_image = '$user_icon' WHERE User_Name = '$user_name' AND User_Email = '$user_email'";
			
			if (mysqli_query($connection,$sql)) {
				echo "<span style='color:green;'>Successfully saved your User Avtar</span>";
			}
			else{
				echo "<span style='color:red;'>Sorry the operation failed</span>";
			}
			
			$sql2 = "UPDATE comment_db SET comment_icon = '$user_icon' WHERE comment_name = '$user_name'";
			mysqli_query($connection,$sql2); 
		}
		else{
				echo "<span style='color:red;'>Sorry the operation failed</span>";
			}
		}
?>