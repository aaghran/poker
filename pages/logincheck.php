<?php
session_start();

include('con.php');
$username = mysql_real_escape_string($_POST["name"]);
$password = mysql_real_escape_string($_POST["password"]);
$email = mysql_real_escape_string($_POST["email"]);


$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
echo $row;
if($row){
$_SESSION['username']=$row['username'];
$time = 0; //Time (in seconds) to wait. 
		$url = "../home.php"; //Location to send to. 
		header("Refresh: $time; url=$url");
		}
		else { 
$time = 0; //Time (in seconds) to wait. 
		$url = "../index.php?e=error"; //Location to send to. 
		header("Refresh: $time; url=$url");		
		}
?>

