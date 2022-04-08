<?php
	require_once('connection.php');
	session_start();
	$user_name = $_SESSION["User_Name"];
	$user_email = $_SESSION["User_Email"];
	$sql = "SELECT count, save_id FROM save_db WHERE user_email = '$user_email' AND user_name = '$user_name' ORDER BY save_id DESC";
	$results = mysqli_query($connection, $sql);
	if(mysqli_num_rows($results) > 0){
		while($row= mysqli_fetch_assoc($results)){
			$save_id = $row["save_id"];
			$count_no= $row["count"];
			echo "<button class='audio_name2' value='$save_id'>Save $count_no</button>";
			
		}
	}else{
		echo "<h4>Your saved audio stories Lists will appear here</h4><hr>";
	}
?>
<script>
$(".audio_name2").click(function() {
	$("#progress_percent").text("");
	$(".load_details").css('display','block');
   var save_id = $(this).attr('value'); // $(this) refers to button that was clicked
   $("button").removeClass("audio_name_active");//for removing previous active button
    $(this).addClass('audio_name_active');
   $.ajax({
      url : 'fetch_audio_save_detail.php',
      type: 'post',
      dataType: 'json',
      cache: false,
      data: {'save_id': save_id},
      success:function(data){
		var audio_id = data.audio_id;
        //var audio_name = data.audio_name;
        //var audio_author = data.audio_author;
		var audio_loc = "home_audio/" + data.audio_loc;
        var audio_img = "home_audio/audio_images/" + data.audio_image;
		var save_time_con = data.save_time_con;
		$("#save_player").attr("src",audio_loc);
        $("#audio_save_image").attr("src",audio_img);
        $("#audio_name").html("<b>Story-Name:</b> "+ data.audio_name);
        $("#audio_author").html("<b>Author:</b> "+ data.audio_author);
		$("#timestamp").html("<b>Saved:</b> " + data.date_format);
		$("#progress_time").html("<b>Progress:</b> "+ save_time_con + " <span style='font-size:20px;font-weight:bold;'>/</span> <span id='save_duration'></span>");
		$(".play_save_audio").val(data.audio_id);
		 $("#save_time").val(data.save_time);
		 $("#delete_save_time").val(data.save_id);
      }
    });
    
});
/*var save_audio = document.getElementById("save_player");
save_audio.onloadedmetadata = function(){
	
var duration = save_audio.duration;
given_seconds = duration.toFixed(0); 
 hours = Math.floor(given_seconds / 3600); 
 minutes = Math.floor((given_seconds - (hours * 3600)) / 60); 
 seconds = given_seconds - (hours * 3600) - (minutes * 60); 
  
timeString = hours.toString().padStart(2, '0') + ':' + 
			minutes.toString().padStart(2, '0') + ':' + 
            seconds.toString().padStart(2, '0'); 
  
  document.querySelector('#save_duration').textContent  = timeString; };*/
</script>