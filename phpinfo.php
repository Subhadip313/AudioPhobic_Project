<?php
date_default_timezone_set("Asia/Kolkata");
echo "The time is " . date("h:i a");
echo "Today is " . date("h:i a"." - "."d-m-Y") . "<br>";
$new_time = date('Y-m-d h:i:s', strtotime('+1440 minutes'));
$time = "$new_time";
echo $new_time;

?>