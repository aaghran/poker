
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
<script type="text/javascript"> function stop(){scroll.amount='10';}</script>
	<script type="text/javascript">
	var image1=new Image()
	image1.src="img/1.png"
	var image2=new Image()
	image2.src="img/2.png"
	var image3=new Image()
	image3.src="img/3.png"
	var image4=new Image()
	image4.src="img/4.png"
	var image5=new Image()
	image5.src="img/5.png"
	var image6=new Image()
	image6.src="img/6.png"
	var image7=new Image()
	image7.src="img/7.png"
	var image8=new Image()
	image8.src="img/8.png"
	</script>
    
    </head>
 <body>
			
<!-- Navbar
    ================================================== -->
<style type="text/css">

.navmenu ul {
	list-style: none;
	}
	
	.login{
		position: fixed; top: 10px ; width:100%; left: 500px; padding: 10px; 
		}
		
		.login ul{
			list-style: none;
			display: inline-table;
			}
		.login table{
			list-style: none;
			background-color: transparent;
			margin-bottom: -10px;
			}

	.login , .register table{
		margin-left: 10px;
		}
		
		.register table{
			font-size: 30px;
			color: black;
		}
		.slideshow{
		float:right;
		margin-right:275px;
		margin-top:160px;
				
						}
</style>    
    
 <div class="slideshow" style="margin-top:50px" >
  <img src="img/1.png" name="slide" width="750" height="750" />
<script type="text/javascript">
var step=1
function slideit()
{
 document.images.slide.src=eval("image"+step+".src")
 if(step<8)
 step++
 else
 step=1
 setTimeout("slideit()",3500)
}
slideit()
</script>
</div>   
<?php include_once("pages/nav.php") ?>
  </div>
  
  


</body>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>
</html>
