<?php
session_start();

if(isset($_SESSION['username'])) {
	$username=$_SESSION['username'];
}
else {
		$username=0;
		$time=0;
		$url = "index.php?e=login"; //Location to send to. 
		header("Refresh: $time; url=$url");
}

?>

<!--
Project Name: PowKer

Members:
1.Aaghran Ghosh 10/IT/81
2.Arka Nayak 10/IT/44
3.Sayan Banerjee 10/IT/
4.Nitish Anand 10/IT/
5.Toshika Khandelwal 10/IT/80

-->
<style type="text/css">
body{
background: url('img/back.jpg')no-repeat 0 100%  fixed;
background-color: black;
-moz-background-size: cover;

-webkit-background-size: cover;

-o-background-size: cover;

background-size: cover;
	
	}

</style>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Powker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Powker">
    <meta name="author" content="aaghran" >

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="css/bootstrap.css" rel="stylesheet">
    
    </head>
 <body>
			<?php include_once("pages/nav.php") ?>
<div  class="profile" style="position: fixed; left: 200px; top:100px; color: white; background-color: rgba(224, 157, 38, 0.6) ; padding:20px; width: 60%; height: 70%">
<div>
<?php echo "<h1>".$username."</h1>";
echo "<h2> Score : 0</h2>";
echo "<h2> Last Played : none</h2>";
echo "<h3> Total Matches Played : 0</h3>";
echo "<h3> Total Matches Won : 0</h3>";
echo "<h3> Total Matches Lost : 0</h3>";


?>
<a href="table.php" class="btn btn-large  btn-danger" style="margin-top: 50px; float: right">Enter Table</a>
</div>


</div>



</body>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>
</html>

