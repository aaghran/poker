
<!--
Project Name: PowKer

Members:
1.
2.
3.
4.
5.

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
<?php include_once("pages/nav.php"); ?>

<div class="container">
	<div class="row span12" style="margin-top:200px">
    	        <table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td><form name="form" method="post" action="pages/registercheck.php">
<table width="100%" border="0" cellspacing="4" cellpadding="0">
<tr>
<td colspan="3"><strong>Sign up</strong></td>
</tr>
<tr>
<td width="76">User Name</td>
<td width="3">:</td>
<td width="305"><input name="name" type="text" id="name" size="30" required></td>
</tr>
<tr>
<td>E-mail</td>
<td>:</td>
<td><input name="email" type="text" id="email" size="30" required></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="password" id="password" size="30" required> </td>
</tr>
<tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Register"> &nbsp;
<input type="reset" name="Reset" value="Reset"></td>
</tr>
</table>
</form></td>
</tr>
</table>  
	</div>
</div>
</body>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>
</html>
