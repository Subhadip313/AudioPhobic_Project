<style>
</style>
<?php
	require_once('connection.php');
	$sql= "SELECT * FROM comment_db ORDER BY comment_id DESC";
	$results = mysqli_query($connection, $sql);
	$output='';
	
	while($row= mysqli_fetch_assoc($results)){
		$profile_icon="user_icons/".$row["comment_icon"];
		$date = strtotime('+330 minutes',strtotime($row["time"]));
		$date_format = date("h:i a"." / "." d-M-Y ", $date);
		$output = '<div class="commentbox">
		<div class="clearfix">
		<div class="pannel_info">
		<img src="'.$profile_icon.'" alt="icon">
		<div class="fix_pannel">
		<span class="name" style="">' . $row["comment_name"].'</span>
		<span class="time" style=""> . '. $date_format.'</span><br>
		<span style="font-size:12px; color:#555;">'.$row["comment_ocup"].'</span></div>
		</div>
		
		<div class="message_comment">'.$row["comment"].'</div>
		
		</div>
		</div>';
		echo $output;
	}
	
?>