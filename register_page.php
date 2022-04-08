<?php 
 require_once('connection.php');
 // Start the session
	session_start();
  $User_Name=$User_Email=$User_Pass=$User_Pass_rep="";
	
  if(isset($_POST['register']) && !empty($_POST['token'])){
	  		if (hash_equals($_SESSION['token'], $_POST['token'])) {
	  //if ($_SERVER["REQUEST_METHOD"] == "POST")
    $User_Name=mysqli_real_escape_string($connection,$_POST['user_name']);
    $User_Email=mysqli_real_escape_string($connection,$_POST['email']);
    $User_Pass=mysqli_real_escape_string($connection,$_POST['psw']);
    $User_Pass_rep=mysqli_real_escape_string($connection,$_POST['psw-repeat']);
	$hashed_password = password_hash($User_Pass, PASSWORD_DEFAULT);
	// Set session variables and get the user info
	$_SESSION["User_Name"] = $User_Name;
	$_SESSION["User_Email"] = $User_Email;
	$_SESSION["User_image"] = "user_icon1.png";
	$Null_value = NULL;
	/* create a prepared statement */
	$sql=mysqli_prepare($connection,"INSERT INTO user_register VALUES (?,?,?,?,?)");
	/* bind parameters for markers */
		mysqli_stmt_bind_param($sql, "sssss",$Null_value,$User_Name,$User_Email,$hashed_password,$_SESSION["User_image"]);
		mysqli_stmt_execute($sql);
    //$result = mysqli_query($connection,$sql);
    if(mysqli_stmt_affected_rows($sql) == 1){
      echo "<script>alert('Welcome to AudioPhobic')</script>";
    header ('Location:audio_home.php');
    exit;
        
        
    }else {
		//if the query failed to execute it will redirect to the following error page
      header ('Location:error.php');
	  exit;
    }
	mysqli_stmt_close($sql);
	  }else{
		 header ('Location:error.php');
	  exit; 
	  }
  }
	echo $_SESSION["User_Email"];
  mysqli_close($connection);
?>