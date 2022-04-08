<?php
	require_once('connection.php');
	// Start the session
	session_start();
	if(!empty($_POST["comment_name"]) && !empty($_POST['token2']) ){
	if (hash_equals($_SESSION['token2'], $_POST['token2'])) {	
		$comment_name = $_POST['comment_name'];
		$sql2="SELECT * FROM comment_db WHERE comment_name = '$comment_name'";
		$results = mysqli_query($connection, $sql2);
	if(mysqli_num_rows($results) > 0){
		$sql="DELETE FROM comment_db WHERE comment_name = '$comment_name'";
		if(mysqli_query($connection, $sql)){
			echo "<span style='color:green;'>Your Comment has been deleted</span>";
		}else{
			echo "<span style='color:red;'>There was an error!</span>";
		}
	}
	else{
		echo "<span style='color:red;'>You did not Submitted any comment</span>";
	}
	}else{
		echo "<span style='color:red;'>There was an error</span>";
	}
	}
	mysqli_close($connection);
?>