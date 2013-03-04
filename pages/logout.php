<?php
session_start(); 
session_destroy();
$time = 0; //Time (in seconds) to wait. 
$url = "../index.php"; //Location to send to. 
header("Refresh: $time; url=$url");
?>