<html>
	<head>
	<style>
		#labels{
			background-color:red;
			width: 400px;
			position: relative;
		}
		.bagarond{
         background-image:  url('<?php echo base_url();?>simg.jpg');
          width: 40%;
          margin-top: 1px;
          padding: 17px 10px 40px 10px; 
          border-top-right-radius:30px; 
          border-top-left-radius:30px;
          border:groove 2px black;
          font-size: 15px;
          text-shadow:5px 5px 5px black;
          color:white;
          font-family: "Times New Roman";
          padding-bottom: 80px;
      } 
	</style>
	</head>
	<body>
		<center>
	<div class="container">
	<div class="bagarond">
		<?php
		foreach ($rec as $y) {
		  ?>
			<form action="<?php echo base_url();?>index.php/Main_controller/updaterecord" method="post">
			  	 <div class="form-group row">
					 <label  class="col-sm-4 col-form-label">First Name : </label>
						 <div class="col-sm-8">
							 <input type="text" style="color: black;" name="txtname" value="<?php echo $y->First_Name;?>"><br>
						 </div>
			     </div>

			     <div class="form-group row">
					 <label  class="col-sm-4 col-form-label">Last Name : </label>
						 <div class="col-sm-8">
							 <input type="text" style="color: black;" name="txtage" value="<?php echo $y->Last_Name;?>">
						 </div>
			     </div>

					 <input type="hidden" name="txtid" value="<?php echo $y->Id;?>"><br>

			     <div class="form-group row" style="margin-top:-20px;">
					 <label  class="col-sm-4 col-form-label">Email ID : </label>
						 <div class="col-sm-8">
							 <input type="text" style="color: black;" name="txtemail" value="<?php echo $y->Email_Id;?>"><br>
						 </div>
			     </div>

			     <div class="form-group row">
					 <label  class="col-sm-4 col-form-label">Address : </label>
						 <div class="col-sm-8">
							 <input type="text"  style="color: black;" name="txtdesig" value="<?php echo $y->Address;?>"><br>
						 </div>
			     </div>

			     <div class="form-group row">
					 <label  class="col-sm-4 col-form-label">Mobile : </label>
						 <div class="col-sm-8">
							 <input type="text" style="color: black;" name="txtcity" value="<?php echo $y->Mobile;?>"><br>
						 </div>
			     </div>
			     <div class="form-group row">
					 <label  class="col-sm-4 col-form-label">Date Of Joining : </label>
						 <div class="col-sm-8">
							 <input type="date" style="color: black;" name="txtdoj" value="<?php echo $y->Date_Of_Joining;?>"><br>
						 </div>
			     </div>

			     <div class="form-group row">
					 <label  class="col-sm-4 col-form-label">Qualification : </label>
						 <div class="col-sm-8">
							 <input type="text" style="color: black;" name="txtsal" value="<?php echo $y->Qualification;?>"><br>
						 </div>
			     </div>
					 <div class="form-group row">
						<div class="col-sm-10">
							<input type="submit"  value="Update" class="btn btn-default" style="margin-left:128px;"><br>
						</div>
					</div>
			</form>

		  <?php
		}
		?>
	</div>
	</div></center>
</body>
</html>
