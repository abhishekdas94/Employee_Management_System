<!DOCTYPE html>
<html>
<head>
	<title><?php echo $this->session->userdata('Fullname');?></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><!--BOOTSTRAP CSS-->
  	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> <!--BOOTSTRAP JS-->
  	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.2.1.js"></script> <!--JQUERY JS-->
 	<script src="<?php echo base_url();?>assets/jquery.textillate.js"></script>
 	<script src="<?php echo base_url();?>assets/jquery.lettering.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/animate.css">
	<script>
  	$(function () {
 	$('.tlt').textillate();
  	});
  </script>
  	<style type="text/css"> 
	    
	    { margin: 0; padding: 0; }

    body { 
        background-repeat:  no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        padding-top: 50px;
        padding-bottom: 100px;
        background-repeat: no-repeat;
    	background-attachment: fixed;

    }
	    .navbar{
	    	border:groove 2px black;
  			background: #333333;
  			border-top-left-radius:50px; 
       		border-bottom-right-radius:50px;
	    }
	    ul{
	    	list-style: none;
	    }
	    li{
	    	padding-top: 10px;
	    	float: left;
	    	font-family: "Times New Roman";
	   		font-size: 20px;
	   		margin-left: 15px;
	   		
		}
		.header{
			padding-top: 5px;
			float: left;
			font-family: "Times New Roman";
			font-size: 25px;
			width:35%;
		}
		.head{
			color:white;
			text-decoration: none;
			padding: 2px 5px 3px 5px;
			text-shadow:5px 5px 5px black;
		}
		.head:hover,.head:visited{
			color:white;
			text-decoration: none;
			background-color: black;
			padding: 4px 5px 4px 5px;
			border-radius: 10px;
		}
		.bground{
          background-color: #333333; 
          width: 50%;
          padding: 7px 10px 5px 10px; 
          border-top-right-radius:60px; 
       	  border-bottom-left-radius:60px;
          border:groove 2px black;
          font-size: 25px;
          text-shadow:5px 5px 5px black;
          color:white;
          font-family: "Times New Roman";
      }	
      .time{
      	color:white;
      	text-shadow: 5px 5px 10px black;
      	margin-right: 10px;
      }
      .das{
      	font-size: 15px;
      }
	</style>
</head>
<body background="<?php echo base_url();?>sky.jpg">
	
	<img src="" class="">	
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="header">
				<a class="head" href="<?php echo base_url();?>index.php/Employee_Controller/emphomepage">Employeee Management System</a>
			</div>
			<ul>
				<li class="time">
				<?php 
				$now = new DateTime();
				$now->setTimezone(new DateTimezone('Asia/Kolkata'));
				echo "  ".$now->format(DATE_COOKIE);
				?>
				</li>
				<li><a class="head" href="<?php echo base_url();?>index.php/Employee_Controller/emphomepage">Home</a></li>
				<li><a class="head" href="<?php echo base_url();?>index.php/Employee_Controller/aboutus">About Us</a></li>
				<li><a class="head" href="<?php echo base_url();?>index.php/Employee_Controller/contactus">Contact Us</a></li>
				<li><a class="head" href="<?php echo base_url();?>index.php/Employee_Controller/logout">LogOut</a></li>
				
		</div>
	</nav>
	<center><div class="bground" ><div class="tlt" data-in-effect="flip">
		Welcome <?php echo $this->session->userdata('Fullname');?></div><div class="tlt das" data-in-effect="pulse"><?php

		echo "Logged in at:".$this->session->userdata('Login');
		?> 
	</div></div></center>
	
</body>
</html>

