<?php

include('con.php');
$username = mysql_real_escape_string($_POST[name]);
$password = mysql_real_escape_string($_POST[password]);
$email = mysql_real_escape_string($_POST[email]);


$sql="INSERT INTO users (username, password, email, score) VALUES ('$username', '$password', '$email', '0')";
mysql_query($sql);
$sql1="INSERT INTO player (id, username, score) VALUES ( ( SELECT id FROM user WHERE username='$username'), '$username', '0')";
mysql_query($sql1);
$time = 0; //Time (in seconds) to wait. 
		$url = "../index.php"; //Location to send to. 
		header("Refresh: $time; url=$url");		

?>


