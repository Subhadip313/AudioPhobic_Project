<?php
	require_once('connection.php');
	// Start the session
	session_start();
	$error_login = '';
	if(empty($_POST["email"])){
		$error_login = "<span style='color:red'>The email address is required</span>";
		echo $error_login;
		exit;
	}else{
		$User_Email = mysqli_real_escape_string($connection,$_POST['email']);
	}
	if(empty($_POST["psw"])){
		$error_login = "<span style='color:red'>The password is required</span>";
		echo $error_login;
		exit;
	}else{
		$User_Pass = mysqli_real_escape_string($connection,$_POST['psw']);
		
	}
	if($error_login == '' && !empty($_POST['token'])){
		if (hash_equals($_SESSION['token'], $_POST['token'])) {
		/* create a prepared statement */
		$sql = mysqli_prepare($connection,"SELECT * FROM user_register WHERE User_Email=?");
		/* bind parameters for markers */
		mysqli_stmt_bind_param($sql, "s", $User_Email);
		/* execute query */
		mysqli_stmt_execute($sql);
		/* bind result variables */
		mysqli_stmt_bind_result($sql, $User_ID,$User_Name,$User_Email,$User_Password,$User_image);
		/*Store the result*/
		 mysqli_stmt_store_result($sql);
		/* fetch values */
		if (mysqli_stmt_affected_rows($sql) == 1) {
			mysqli_stmt_fetch($sql);
			if(password_verify($User_Pass,$User_Password)){
			$error_login = "true";
			echo $error_login;	
			}else{
				$error_login =  "<span style='color:red;'>The Email or Password that you have entered is incorrect</span>";
				echo $error_login;
				exit;
			}
			
		}else{
			$error_login =  "<span style='color:red;'>The Email or Password that you have entered is incorrect</span>";
			echo $error_login;
			exit;
		}
		mysqli_stmt_close($sql);
	}
	}else{
		$error_login = "<span style='color:red;'>Invalid token</span>";
		echo $error_login;
	}
// Set session variables and get the user info
$_SESSION["email"] = $User_Email;
$_SESSION["psw"] = $User_Pass;
$sql2="SELECT * FROM user_register WHERE User_Email = '$User_Email'";
$results2 = mysqli_query($connection, $sql2);
	while($row= mysqli_fetch_assoc($results2)){
		$_SESSION["User_Name"] = $row["User_Name"];
		$_SESSION["User_ID"] = $row["User_ID"];
		$_SESSION["User_Email"] = $row["User_Email"];
		$_SESSION["User_image"] = $row["User_image"];
		//$_SESSION["User_Pass"] = $row["User_Pass"];
		
	}

mysqli_close($connection);	
?>
