<html lang="en">
<head>
	<style>
	.form1{
		width:100%;
	}
	.bagaround{
         background-image:  url('<?php echo base_url();?>simg.jpg');
         width: 75%;
         color:white;
         padding: 20px;
         text-shadow: 5px 5px 10px black;
         border: solid 2px white;
         border-top-left-radius: 80px;
         border-top-right-radius: 80px;
           
      }
    
	</style>
</head>
<body><hr>
	
	<center>
		<div class="bagaround">
		<h2>Add New Admin</h2>
		<form class="form1" method="post" action="<?php echo base_url();?>index.php/Main_controller/addnewadmin">
		  
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="Full Name">Full Name:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="fname" placeholder="Enter Full Name">
		    </div>
		  </div>

		  <div class="form-group">
		    <label class="control-label col-sm-2" for="Username">Username:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="uname" placeholder="Enter Username">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="email">Email ID:</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" name="email" placeholder="Enter Email ID">
		    </div>
		  </div>

		  <div class="form-group">
		    <label class="control-label col-sm-2" for="Password">Password:</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" name="pwd" placeholder="Enter Password">
		    </div>
		  </div>
		  <?php echo '<label class="text-danger">'.validation_errors().'</label>'; ?>
		  <br>
		  <div class="form-group"> 
		  	<div class="col-sm-offset-2 col-sm-10">
		  		<input type="submit" value="Register" name="btnreg" class="btn btn-default" style="float:left;margin-top:10px;">
		  	</div>
		  </div>
		  <?php 
		  echo '<label class="text-danger">'.$this->session->flashdata('errors').'</label>';
		  ?>
		  

		</form>
		</div>
	</center>
</body>
</html>
