<?php
require_once('connection.php');
$comment_name = '';

if(isset($_POST['comment_name'])){
	$comment_name = $_POST['comment_name'];
	$sql= "SELECT * FROM comment_db WHERE comment_name = '$comment_name'";
	$results = mysqli_query($connection, $sql);
		if (mysqli_num_rows($results) > 0) {
			echo  "<span style='color:red; font-size: 16px;'>The User Name already used!</span>";
		}
	}

?>