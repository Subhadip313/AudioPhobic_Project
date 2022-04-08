<?php
require_once('connection.php');
$sql="SELECT * FROM audio_db";
$results = mysqli_query($connection, $sql);
if(mysqli_num_rows($results) > 0){
while($row= mysqli_fetch_assoc($results)){
	//echo "Audio name= " .$row["audio_name"]. " Audio Author= " . $row["audio_author"] . "<br><br>";
	echo "<button class='audio_name' value='".$row["audio_id"]."'>".$row["audio_name"]." - ".$row["audio_author"]."</button>";
}
}

?>
<script>
$(".audio_name").click(function() {
	audio_id = $(this).attr('value'); // $(this) refers to button that was clicked
	$("#audio_id").val(audio_id);
    var audio_info = $(this).text();
    $("button").removeClass("audio_name_active");//for removing previous active button
    $(this).addClass('audio_name_active');
    $(".info").text(audio_info);// using this method is not good, using  marquee is also not good
    $.ajax({
    	url : 'fetch_audio_from_db.php',
    	type: 'post',
    	dataType: 'json',
    	cache: false,
    	data: {'audio_id': audio_id},
    	success:function(data){
    		var audio_loc = "home_audio/" + data.audio_loc;
    		var audio_img = "home_audio/audio_images/" + data.audio_image;
    		$("#aud_img").attr("src",audio_img);
			$("#player").attr("src",audio_loc);
			

    	}
    });
});
$(document).ready(function(){
$(".audio_name").click(function() {
	var audio_id = $(this).attr('value');
	$.ajax({
		url : 'recent_audio.php',
    	type: 'post',
    	//dataType: 'json',
    	cache: false,
    	data: {'audio_id': audio_id},
    	success:function(data){
    		
			$(".recent_message").html(data);
			onload_fetch();

    	}
    });
});

onload_fetch();

function onload_fetch(){
	$.get("fetch_user_activity.php", function(data){
			$(".recent").html(data);
		});
}
});
</script>