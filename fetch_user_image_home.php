<?php

require_once('connection.php');
if(isset($_POST['user_email'])){
	$user_email = mysqli_real_escape_string($connection,$_POST['user_email']);
$sql = mysqli_prepare($connection,"SELECT User_image FROM user_register WHERE User_Email=?");
mysqli_stmt_bind_param($sql, "s", $user_email);
mysqli_stmt_execute($sql);
mysqli_stmt_bind_result($sql,$User_image);
mysqli_stmt_store_result($sql);
if (mysqli_stmt_affected_rows($sql) == 1) {
	mysqli_stmt_fetch($sql);
	 
	echo $User_image;
}else{
	echo "user_icon1.png";
}
}

?>