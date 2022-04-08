<?php 
 require_once('connection.php');
 global $User_Name;
  $User_Name=$User_Email=$User_Pass=$User_Pass_rep="";
 
  if(isset($_POST['register'])){
	  //if ($_SERVER["REQUEST_METHOD"] == "POST")
    $User_Name=$_POST['user_name'];
    $User_Email=$_POST['email'];
    $User_Pass=$_POST['psw'];
    $User_Pass_rep=$_POST['psw-repeat'];
	$sql="INSERT INTO user_register VALUES (NULL, '$User_Name', '$User_Email', '$User_Pass');";
    //$result = mysqli_query($connection,$sql);
    if(mysqli_query($connection,$sql)){
      echo "<script>alert('Welcome to AudioPhobic')</script>";
    header ('Location:audio_home.html');
    exit;
        
        
    }else {
      header ('Location:error.php');
	  exit;
    }
	  }
			
  
  mysqli_close($connection);
?>