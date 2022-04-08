<?php
require_once('connection.php');
	session_start();
	$user_name = $_SESSION["User_Name"];
	$user_email = $_SESSION["User_Email"];
	if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['token2']) ){
	if (hash_equals($_SESSION['token2'], $_POST['token2'])) {	
		$save_id = $_POST["save_id"];
		$sql= "DELETE FROM save_db WHERE save_id = '$save_id' AND user_email = '$user_email' AND user_name = '$user_name'";
		if(mysqli_query($connection,$sql)){
			echo "<span style='color:green'>Successfully Deleted.</span>";
		}else{
			echo "<span style='color:red'>There was a error, Please try again or contact the admin</span>";
		}
	}else{
			echo "<span style='color:red'>There was a error, Please try again or contact the admin</span>";
		}
	}
?>