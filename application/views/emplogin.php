<html>
<head>
	<style type="text/css">
		.baground{
         background-image:  url('<?php echo base_url();?>simg.jpg');
          width: 90%;
          margin-top: 80px;
          padding: 7px 10px 40px 10px; 
          border-top-right-radius:60px; 
          border-bottom-left-radius:60px;
          border:groove 2px black;
          font-size: 18px;
          text-shadow:5px 5px 5px black;
          color:white;
          font-family: "Times New Roman";
          padding-bottom: 80px;
      }

     
		.label{
			font-size: 20px;
			margin-left: -250px;
			margin-top: -25px;
			
		}
	.gound{
			width: 90%;
          margin-top: 80px;
          padding: 7px 10px 40px 10px; 
        
          font-size: 18px;
          text-shadow:5px 5px 5px black;
          
          font-family: "Times New Roman";
	}
	#statusinfo{
		margin-left: 150px;
		
	}
	</style>
</head>
<body style="width: 100%;">
	<center>
		<div class="container">

			<div class="baground">
				
				<div class="container-fluid" id="statusinfo">
				<?php
				if(isset($datwa))
				{
				echo "<h3 class='label label-danger'>".$datwa."</h3>";
				}
				?>
			
				</div>
				
				<h2 style="font-family: arial;margin: 0px 0px 0px 0px; text-shadow:5px 5px 10px black;" class="tlt" data-in-effect="flip">Enter Your Details To Login</h2><hr>

				<form method="post" action="<?php echo  base_url();?>index.php/Employee_Controller/login">
					
					<?php echo "<p style='font-size: 15px;'>".validation_errors()."</p>";?>
					
					<div class="input-group">
	  				  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  					  <input id="text" type="text" class="form-control" name="email" placeholder="Enter Your Email ID / Username">
					</div>
					
					<div class="input-group">
					    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					    <input id="password" type="password" class="form-control" name="password" placeholder="Enter Your Password">
					</div>
					
					<button type="submit" id="login" class="btn btn-default" style="float:left;margin-top:15px;margin-right:10px;margin-left: 20px;">Login</button>

				</form>
				
				<form action="<?php echo  base_url();?>index.php/Employee_Controller/register">		
					<button type="submit" id="register" class="btn btn-default" style="float:left;margin-top:15px;">Register</button>
				</form>
				

			</div>
		</div>
	</center>

</body>
</html>