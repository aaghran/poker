
<!--
Project Name: PowKer

Members:
1.
2.
3.
4.
5.

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
    
    </head>
    <body>
			<?php include_once("pages/nav.php"); ?>
<div class="container">
	<div class="row span12" style="margin-top:200px">
     <table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td><form name="form" method="post" action="pages/logincheck.php">
<table width="100%" border="0" cellspacing="4" cellpadding="0">
<tr>
<td colspan="3"><strong>Login</strong></td>
</tr>
<tr>
<td width="76">Name</td>
<td width="3">:</td>
<td width="305"><input name="name" type="text" id="name" size="30"></td>
</tr>

<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="password" id="password" size="30"></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input  class="btn" type="submit" name="Submit" value="Submit"> &nbsp;

<td>&nbsp;</td>
<td>&nbsp;</td>
<td><a href="sign.php" class="btn">Register</a></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
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
