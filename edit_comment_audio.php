<?php
	require_once('connection.php');
	// Start the session
	session_start();
	if(!empty($_POST["comment_name"]) && !empty($_POST['token2']) ){
	if (hash_equals($_SESSION['token2'], $_POST['token2'])) {	
	$comment_name = $_POST['comment_name'];
	$sql="SELECT * FROM comment_db WHERE comment_name = '$comment_name'";
	$results = mysqli_query($connection, $sql);
	$User_ocup = "";
	$User_comment = "";
	$error = 0;
	if(mysqli_num_rows($results) > 0){
		while($row=mysqli_fetch_assoc($results)){
			$User_ocup = $row["comment_ocup"];
			$User_comment = $row["comment"];
			echo json_encode(
			array("User_ocup" => $User_ocup,
					"User_comment" => $User_comment));
		$sql2="DELETE from comment_db WHERE comment_name = '$comment_name'";
		mysqli_query($connection, $sql2);
		}
	}else{
		$error = 1;
		echo json_encode(
			array("error_mess" => $error));
	}
	}else{
		$error = 1;
		echo json_encode(
			array("error_mess" => $error));
	}	
	}
?>