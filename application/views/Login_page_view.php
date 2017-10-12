<html lang="en">
<head>
	<style>
	.form1{
		width:50%;
	}
	.basground{
		 background-image:  url('<?php echo base_url();?>simg.jpg');
          width: 90%;
          margin-top: -90px;
          padding: 7px 10px 40px 10px; 
          border-top-right-radius:60px; 
          border-bottom-left-radius:60px;
          border:groove 2px white;
          font-size: 18px;
          text-shadow:5px 5px 5px black;
          color:white;
          font-family: "Times New Roman";
          padding-bottom: 80px;
	}
	</style>
</head>
<body>
	<center><div class="container"> <div class="basground">
		<form class="form1" method="post" action="<?php echo base_url();?>index.php/Main_controller/logincheck">
		  
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="email" type="text" class="form-control" name="txtuser" placeholder="Username">
		    
		  </div>
		  
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		    <input id="password" type="password" class="form-control" name="txtpwd" placeholder="Password">
		   
		  </div>
		   <?php echo '<label class="text-danger">'.validation_errors().'</label>'; ?>
		  <br><input type="submit" value="Login" name="btnlogin" class="btn btn-default" style="float:left;border-color:black">

		  <?php 
		  echo '<label class="text-danger">'.$this->session->flashdata('error').'</label>';
		  ?>

		</form>
	</div></div></center>
</body>
</html>
