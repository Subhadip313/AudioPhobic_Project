<?php
require_once('connection.php');
date_default_timezone_set("Asia/Kolkata");
	// Start the session
	session_start();
$error = '';
$comment_name = '';
$Comment_email = $_SESSION["User_Email"];
$comment_occup = '';
$comment_content = '';
$comment_icon = '';
$comment_icon_id='';

if(!empty($_POST["comment_name"]) && !empty($_POST['token2']) ){
	if (hash_equals($_SESSION['token2'], $_POST['token2'])) {
	$comment_name = mysqli_real_escape_string($connection,$_POST['comment_name']); 
	$sql="SELECT * FROM comment_db WHERE comment_name = '$comment_name'";
	$results = mysqli_query($connection, $sql);
	while($row= mysqli_fetch_assoc($results)){
			$error = "<span style='color:red;'>Sorry! You have already submitted one comment.</span>";
	}
}else{
	$error ="<span style='color:red;'>There was an error!</span>";
}
}else{
	$error ="<span style='color:red;'>There was an error!</span>";
}
if($error == '' && !empty($_POST['token2']) ){
if (hash_equals($_SESSION['token2'], $_POST['token2'])) {	
	/*$comment_icon_id = (rand(0,9));
	$icon = array("icon1.png", "icon2.png", "icon3.png","icon4.png","icon5.png","icon6.png","icon7.png","icon8.png","icon9.png","icon10.png");*/
	$new_time= "";
	$sql3= "SELECT * FROM user_register WHERE User_Email='$Comment_email' AND User_Name = '$comment_name'";
	$results2 = mysqli_query($connection, $sql3);
	$row2= mysqli_fetch_assoc($results2);
	$comment_icon = $row2["User_image"];
	$Null_value = NULL;
	//$comment_occup = test_input(mysqli_real_escape_string($connection,$_POST['occupation']));
	//$comment_content = test_input(mysqli_real_escape_string($connection,$_POST['Comment']));
	$comment_occup = test_input($_POST['occupation']);
	$comment_content = test_input($_POST['Comment']);
	$sql2 = mysqli_prepare($connection,"INSERT INTO comment_db (comment_id, comment_name, comment_ocup, comment, comment_icon) VALUES (?,?,?,?,?)");
	mysqli_stmt_bind_param($sql2, "sssss",$Null_value,$comment_name,$comment_occup,$comment_content,$comment_icon);
	/*"INSERT INTO comment_db (comment_id, comment_name, comment_ocup, comment, comment_icon) VALUES (NULL, '$comment_name', '$comment_occup', '$comment_content','$comment_icon');";*/
	mysqli_stmt_execute($sql2);
	
	if(mysqli_stmt_affected_rows($sql2) == 1){
		//query executed successfully
	 echo  "<span style='color:green; font-size:16px;'>".$comment_name. ", your comment has been added</span>";
}else{
	//query failed to execute
	 echo "<span style='color:red; font-size: 16px;'>There was an error!</span>"."<br>";
	 echo("Error description: " . mysqli_error($connection));
}
mysqli_stmt_close($sql2);
}else{
	echo "<span style='color:red; font-size: 16px;'>There was an error!</span>";
}	
}else{
	echo $error;
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//echo json_encode($error);
mysqli_close($connection);
?>