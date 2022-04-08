<?php
require_once('connection.php');

	$audio_id=$audio_loc=$audio_image="";
if(isset($_POST['audio_id']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){
	$audio_id = mysqli_real_escape_string($connection,$_POST['audio_id']);
	$sql=mysqli_prepare($connection,"SELECT * FROM audio_db WHERE audio_id =?");
	//$results = mysqli_query($connection, $sql);
	mysqli_stmt_bind_param($sql, "s", $audio_id);
	mysqli_stmt_execute($sql);
	mysqli_stmt_bind_result($sql, $audio_id,$audio_name,$audio_author,$audio_loc,$audio_cat,$audio_image);
	 mysqli_stmt_store_result($sql);
	if(mysqli_stmt_affected_rows($sql) > 0){
		while(mysqli_stmt_fetch($sql)){
		
		$audio_loc = $audio_loc;
		$audio_image = $audio_image ;
		$audio_name =  $audio_name;
		$audio_author =  $audio_author;
		echo json_encode(
			array("audio_loc" => $audio_loc,
					"audio_image" => $audio_image,
					"audio_name" => $audio_name,
					"audio_author" =>$audio_author ));
	}
	}
	
}

?>