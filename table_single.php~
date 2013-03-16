<?php session_start();
include('pages/con.php');
if(isset($_SESSION['username'])) {
	$username=$_SESSION['username'];
}
else {
		$username=0;
		$time=0;
		$url = "index.php?e=login"; //Location to send to. 
		header("Refresh: $time; url=$url");
}

$img="<img src=\"img/cards/back.jpg \" style=\"height:100px; margin-top:5px; margin-left:5px\"";
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
<style type="text/css">
.player{
border: 1px solid black;
position: fixed;	
	
	}
.player1{
height: 200px;
width: 400px;
bottom: 0;
left: 400px;
padding: 20px;	
	}

.player3{
height: 150px;
width: 300px;
top: 0;
left: 450px;	
	}
	.player2{
height: 300px;
width: 150px;
left: 0;
top: 200px;	
	}
.player4 {
height: 300px;
width: 150px;
right: 0;
top: 200px;	
	}
.dealer{
height: 250px;
width: 400px;
left: 400px;
top: 180px;

position: fixed;	
	
	}
	
</style>

    
    </head>
  <body style="background-color: rgb(24, 129, 24);">
<?php include_once('shuffle.php') ?>
<div class="player player1" id="player1">
<h3 style="color: white"><?php  echo $username;?></h3>
<div class="row container	">
<div class="cards" style="position: fixed; bottom:10px; left: 450px ">
<div class="actions" >
<form action="onsubmit(bet)" >
<div class="input-prepend ">
  <span class="add-on">$</span>
  <input class="span1" id="appendedPrependedInput" type="text">
  </div>
<a href="" class="btn btn-medium btn-danger"> Bet </a>
</form>
<a href="" class="btn btn-medium btn-danger"> Call </a>
<a href="" class="btn btn-medium btn-danger"> Fold </a>
<a href="" class="btn btn-medium btn-danger"> Hold </a>
<a href="" class="btn btn-medium btn-danger"> Blind </a>
</div>

<?php 

$card1=$arr_player_1[0];
$card2=$arr_player_1[1];
echo "<br />";
$sql="SELECT * FROM cards WHERE value='$card1' ";
$result=mysql_query($sql) ;
$row1=mysql_fetch_array($result);
//echo $row1['value'];
//echo $row1['image'];
echo "<div >".$row1['image']." </div> ";?>
</div>
<div class="cards" style="position: fixed; bottom:10px; left: 550px ">
<?php
$sql="SELECT * FROM cards WHERE value='$card2' ";
$result=mysql_query($sql) ;
$row1=mysql_fetch_array($result);
//echo $row1['value'];
echo "<div >".$row1['image']." </div> ";?>

</div>
</div>
</div>

<div class="player player2" id="player2">
Player 2
<div class="row container	">
<?php  

$card1=$arr_player_2[0];
$card2=$arr_player_2[1];
echo "<br />";
$sql="SELECT * FROM cards WHERE value='$card1' ";
$result=mysql_query($sql) ;
$row1=mysql_fetch_array($result);
//echo $row1['value'];
echo "<div >".$row1['image']." </div> ";
echo "<br />";
$sql="SELECT * FROM cards WHERE value='$card2' ";
$result=mysql_query($sql) ;
$row1=mysql_fetch_array($result);
//echo $row1['value'];
echo "<div >".$row1['image']." </div> ";
?>
</div>
</div>

<div class="player player3" id="player3">
Player 3
<div class="cards" style="position: fixed; top:0px; left: 500px ">
<?php 

$card1=$arr_player_3[0];
$card2=$arr_player_3[1];
echo "<br />";
$sql="SELECT * FROM cards WHERE value='$card1' ";
$result=mysql_query($sql) ;
$row1=mysql_fetch_array($result);

//echo $row1['image'];
echo "<div >".$row1['image']." </div> ";
?>
</div>
<div class="cards" style="position: fixed; top:20px; left: 600px ">
<?php
$sql="SELECT * FROM cards WHERE value='$card2' ";
$result=mysql_query($sql) ;
$row1=mysql_fetch_array($result);

echo "<div >".$row1['image']." </div> ";
?>

</div>
</div>

<div class="player player4" id="player4">
Player 4
<?php 

$card1=$arr_player_4[0];
$card2=$arr_player_4[1];
echo "<br />";
$sql="SELECT * FROM cards WHERE value='$card1' ";
$result=mysql_query($sql) ;
$row1=mysql_fetch_array($result);

echo "<div >".$row1['image']." </div> ";
echo "<br />";
$sql="SELECT * FROM cards WHERE value='$card2' ";
$result=mysql_query($sql) ;
$row1=mysql_fetch_array($result);

echo "<div >".$row1['image']." </div> ";


 ?>
</div>

<div class="dealer  span6" id="dealer" style="display: inline">

<div class="row container	">
<?php 

//echo implode(" ", $arr_flop);
echo "<br />";
$arr3=implode("", current($arr1));
//echo $arr3;
echo "<br />";
$arr4=implode("", current($arr2));
//echo $arr4;
?>
<div class="cards" style="position: fixed; top:180px; left: 450px ">
<?php

$card1=$arr_flop[0];
$card2=$arr_flop[1];
$card3=$arr_flop[2];
$card4=$arr3;
$card5=$arr4;

$sql="SELECT * FROM cards WHERE value='$card1' ";
$result=mysql_query($sql) ;
$row1=mysql_fetch_array($result);

//echo $row1['image'];
echo "<div >".$row1['image']." </div> ";
?>
</div>
<div class="cards" style="position: fixed; top:180px; left: 550px ">
<?php
$sql="SELECT * FROM cards WHERE value='$card2' ";
$result=mysql_query($sql) ;
$row1=mysql_fetch_array($result);

echo "<div >".$row1['image']." </div> ";?>

</div>
<div class="cards" style="position: fixed; top:180px; left: 650px ">
<?php
$sql="SELECT * FROM cards WHERE value='$card3' ";
$result=mysql_query($sql) ;
$row1=mysql_fetch_array($result);

echo "<div >".$row1['image']." </div> ";?>

</div>
<div class="cards" style="position: fixed; top:300px; left: 500px ">
<?php
$sql="SELECT * FROM cards WHERE value='$card4' ";
$result=mysql_query($sql) ;
$row1=mysql_fetch_array($result);

echo "<div >".$row1['image']." </div> ";?>


</div>
<div class="cards" style="position: fixed; top:300px; left: 600px ">

<?php
$sql="SELECT * FROM cards WHERE value='$card5' ";
$result=mysql_query($sql) ;
$row1=mysql_fetch_array($result);

echo "<div >".$row1['image']." </div> ";?>

</div>
</div>
</div>
 
 </body>
 </html>