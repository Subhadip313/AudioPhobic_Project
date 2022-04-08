<?php
require_once('connection.php');

$error = '';
$comment_name = '';
$comment_occup = '';
$comment_content = '';
$comment_icon = '';
$comment_icon_id='';
if(empty($_POST["comment_name"])){
	$error = "<span style='color:red; font-size: 16px;'>The name field is required!</span>";
}else{
	$comment_name = mysqli_real_escape_string($connection,$_POST['comment_name']); 
}
if(empty($_POST["occupation"])){
	$error = "<span style='color:red; font-size: 16px;'>The occupation field is required!</span>";
}else{
	$comment_occup = mysqli_real_escape_string($connection,$_POST['occupation']); 
}
if(empty($_POST["Comment"])){
	$error = "<span style='color:red; font-size: 16px;'>The comment field is required!</span>";
}else{
	$comment_content = mysqli_real_escape_string($connection,$_POST['Comment']); 
}
if($error == ''){
	$comment_icon_id = (rand(0,9));
	$icon = array("icon1.png", "icon2.png", "icon3.png","icon4.png","icon5.png","icon6.png","icon7.png","icon8.png","icon9.png","icon10.png");
	$comment_icon = $icon[$comment_icon_id];
	 
	$sql = "INSERT INTO comment_db (comment_id, comment_name, comment_ocup, comment, comment_icon) VALUES (NULL, '$comment_name', '$comment_occup', '$comment_content','$comment_icon');";
	if(mysqli_query($connection,$sql)){
		//query executed successfully
	 echo  "<span style='color:green; font-size:16px;'>".$comment_name. ", your comment has been added</span>";
}else{
	//query failed to execute
	 echo "<span style='color:red; font-size: 16px;'>There was an error!</span>";
}
	
}else{
	echo $error;
}
//echo json_encode($error);
?>