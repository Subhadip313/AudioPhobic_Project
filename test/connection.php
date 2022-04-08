<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$dbname="project_6";

@$connection= mysqli_connect($mysql_host,$mysql_user,$mysql_password,$dbname);
if(!@$connection)
{
	die('Failed to connect with the database, please contact the admin:'. mysqli_connect_error($connection));
}
?>