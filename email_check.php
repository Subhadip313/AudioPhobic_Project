<?php
require_once('connection.php');

if(isset($_POST['email']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){

	$User_Email = $_POST['email'];
	
	//checking if the typed email address already exist in the database
	$sql_email = "SELECT * FROM user_register WHERE User_Email='$User_Email'";
		$results = mysqli_query($connection, $sql_email);
		
		if (mysqli_num_rows($results) > 0) {
			echo "email already exist";
			}else echo "email do not exist";
}
else{
	
	echo "0 results";
}
?>
