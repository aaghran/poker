<?php

include('con.php');
$username = mysql_real_escape_string($_POST["name"]);
$password = mysql_real_escape_string($_POST["password"]);
$email = mysql_real_escape_string($_POST["email"]);


$check_for_username = mysql_query("SELECT id FROM users WHERE username='" . $username . "'");

if(mysql_num_rows($check_for_username))
{
$user_avail=0;
}
else
{
$user_avail=1;
}
$check_for_email = mysql_query("SELECT id FROM users WHERE email='" . $email . "'");

if(mysql_num_rows($check_for_email))
{
$email_avail=0;
}
else
{
$email_avail=1;
}


if ( $user_avail==1 && $email_avail==1){
	
$sql="INSERT INTO users (username, password, email, score) VALUES ('$username', '$password', '$email', '0')";
$result=mysql_query($sql);
echo $result;
$sql1="INSERT INTO player (id, username, score) VALUES ( ( SELECT id FROM user WHERE username='$username'), '$username', '0')";
mysql_query($sql1);
	$time = 0; //Time (in seconds) to wait. 
		$url = "../index.php"; //Location to send to. 
		header("Refresh: $time; url=$url");		

}
elseif($user_avail==0) { 
	$time = 0; //Time (in seconds) to wait. 
		$url = "../index.php?e=user"; //Location to send to. 
		header("Refresh: $time; url=$url");		

	}

elseif( $email_avail==0) { 
	$time = 0; //Time (in seconds) to wait. 
		$url = "../index.php?e=email"; //Location to send to. 
		header("Refresh: $time; url=$url");		

	}
		
?>
