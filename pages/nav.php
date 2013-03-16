
<!-- Navbar
    ================================================== -->
<style type="text/css">

.navmenu ul {
	list-style: none;
	}
	
	.login{
		position: fixed; top: 10px ; width:100%;  padding: 10px; 
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
		
		
		}

</style>     
    
    
 <div class="navmenu">
         <a class="logo" href="home.php"><h1 style="color:rgb(243, 204, 154)">PowKe-R</h1></a>
        <ul>
        <li  style="margin-top:20px"><a class="link" href="home.php"><img src="img/link.png" style="height: 100px"/> </a></li>
          <li  style="margin-top:20px"><a class="link" href="table.php"><img src="img/linkp.png" style="height: 100px"/> </a></li>
          <li  style="margin-top:20px"><a class="link" href="faq.php"><img src="img/linkf.png" style="height: 100px"/></a></li>
          <li  style="margin-top:20px"><a class="link" href="rules.php"><img src="img/linkr.png" style="height: 100px"/></a></li>
        </ul> 
        
     
     </div>
  </div>
  
<div class="login   ">
 
          <div class="span3  pull-right"><a href="pages/logout.php" class="btn btn-info"> Logout, <?php echo $username ?></a></div>
</div>