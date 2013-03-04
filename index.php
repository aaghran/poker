<?php
$error=$_GET['e'];

if($error=='error')
{
print '<script type="text/javascript">'; 
print 'alert("Invalid Username/Password. Please try again")'; 
print '</script>';  
}
elseif($error=='login') {
	print '<script type="text/javascript">'; 
print 'alert("Please Login to continue.")'; 
print '</script>';  
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
</style>    
    
    
 <div class="navmenu">
         <a class="logo" href="index.php"><h1 style="color:rgb(243, 204, 154)">PowKe-R</h1></a>
        <ul>
          <li  style="margin-top:20px"><a class="link" href="play.php"><img src="img/linkp.png" style="height: 100px"/> </a></li>
          <li  style="margin-top:20px"><a class="link" href="faq.php"><img src="img/linkf.png" style="height: 100px"/></a></li>
          <li  style="margin-top:20px"><a class="link" href="rules.php"><img src="img/linkr.png" style="height: 100px"/></a></li>
        </ul> 
        
     
     </div>
  </div>
  
<div class="login row  ">
 
          <div class="span8 "><table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td><form name="form" method="post" action="pages/logincheck.php">
<table width="100%" border="0" cellspacing="4" cellpadding="0">
<tr>
<td width="76" style="color: black; font-size: 20px">Name</td>
<td width="3">:</td>
<td width="305"><input name="name" type="text" id="name" size="30" required></td>



<td style="color: black;font-size: 20px">Password</td>
<td>:</td>
<td><input name="password" type="password" id="password" size="30" required></td>



<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input  class="btn btn-primary" type="submit" name="Submit" value="Login"> 
</td>

</tr>
</table>
</form></div>
</div>
<div style="margin-top:70px"></div>
<div class="row-fluid">
<div class="span7 pull-right">
<div class="register">
<table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td><form name="form" method="post" action="pages/registercheck.php">
<table width="100%" border="0" cellspacing="4" cellpadding="0">
<tr>
<td colspan="3"><strong>Sign up</strong></td>
</tr>
<tr>
<td width="106">User Name</td>
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
<td><input type="submit" class="btn btn-primary" name="submit" value="Register"> &nbsp;
<input type="reset" class="btn btn-primary" name="Reset" value="Reset"></td>
</form>
</tr>
</table>

</div>
</div>
</div>



</body>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>
</html>
