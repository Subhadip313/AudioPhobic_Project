<?php
require_once('connection.php');

if(isset($_POST['User_name']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){

	$User_Name = $_POST['User_name'];
	
	//checking if the typed email address already exist in the database
	$sql_name = "SELECT * FROM user_register WHERE User_Name='$User_Name'";
		$results = mysqli_query($connection, $sql_name);
		
		if (mysqli_num_rows($results) > 0) {
			echo "The name already taken";
			}else echo "name do not exist";
}
else{
	
	echo "0 results";
}
?>
