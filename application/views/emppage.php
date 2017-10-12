<!DOCTYPE html>
<html>
<head>
	<title>Employee Management System</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><!--BOOTSTRAP CSS-->
  	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> <!--BOOTSTRAP JS-->
  	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.2.1.js"></script> <!--JQUERY JS-->
  	<style type="text/css"> 
  		.navbar-default{
  			border:groove 2px black;
  			background: #565e60;
  		}
  		.heading{				

  			padding: 10px;
  			font-size: 23px;
  			font-family: cursive;
  			color:white;
        text-shadow: 10px 10px 9px black;
  			

  		}
  		.hc{
  			padding-top: 20px;
  			padding-right: 25px;
  			float: left;
  			margin-left: 400px;
  			font-size: 19px;
  			font-family: cursive;
  			color:white;
        text-shadow: 10px 5px 9px black;
  		}
  		.xc{
  			color:white;
  			font-size: 19px;
  			font-family: cursive;
        text-shadow: 15px 5px 10px black;
		}
		.xc:hover, .hc:hover ,.xc:visited,.hc:visited, .hd:visited,.hd:hover{
			color:white;
			text-decoration: none;
		}
		.bground{
  				background-color: #999999; 
  				width: 80%;
  				padding: 10px 10px 60px 10px; 
  				border-radius: 10px;
  				border:groove 2px black;
          font-family: cursive;
  		}
      .input-group{
        margin-bottom: 5px;
        border:solid 1px black; 
      }
  	</style> 
  
</head>
<body style="width: 100%;">
	
	<nav class="navbar navbar-default">			
  		<div class="container">
		    <div class="navbar-header">
		      <a class="hd" href="<?php echo base_url();?>"><div class="heading">Employee Management System (EMS)</div></a>
		    </div>
	    <ul>
	    	<li><a class="hc" href="<?php echo base_url();?>index.php/Employee_Controller/aboutus">About US</a></li>
	     	<li><a class="xc" href="<?php echo base_url();?>index.php/Employee_Controller/contactus">Contact US</a></li>
	    </ul>
  		</div>
	</nav>

  <h1>WELCOME</h1>
</body>
</html>